<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait UploadImageTrait
{
    public function ProcessImage(
        Request $request, $file_name, $folder_name,$width=null,$height=null ,$currentImage = null)
        {
            if ($request->hasFile($file_name)) {
                $request->validate([
                    $file_name => 'required|image|mimes:jpg,jpeg,png,gif,svg',
                ]);

                $image = $request->file($file_name);
                $newImageName = time() . '.' . $image->getClientOriginalExtension();

                $thumbnailPath = 'thumbnail/' . $folder_name;
                $uploadPath = 'uploads/' . $folder_name;

                // Store the image in the storage directory
                $imgFile = Image::make($image->getRealPath());
                if($width != null & $height != null){
                    $imgFile->resize($width, $height, function ($constraint) {
                        // $constraint->aspectRatio();
                    });
                }else {
                    $imgFile->resize(1000, 500, function ($constraint) {
                        // $constraint->aspectRatio();
                    });
                }
               

                // Store the thumbnail image in storage
                Storage::put('uploads/'.$thumbnailPath . '/' . $newImageName, $imgFile->encode());

                // Store the original image in storage
                Storage::put('uploads/'.$uploadPath . '/' . $newImageName, file_get_contents($image));

                // If updating, delete the old image
                if ($currentImage) {
                    $this->deleteImage($currentImage, $folder_name);
                }

                return $newImageName;
            }

            return $currentImage;
    }

    public function deleteImage($imagePath, $folder_name)
        {
            // Delete the image file from the storage directory
            $thumbnailPath = 'uploads/thumbnail/' . $folder_name . '/' . $imagePath;
            $uploadPath = 'uploads/uploads/' . $folder_name . '/' . $imagePath;

            // Delete the thumbnail image
            if (Storage::exists($thumbnailPath)) {
                Storage::delete($thumbnailPath);
            }

            // Delete the original image
            if (Storage::exists($uploadPath)) {
                Storage::delete($uploadPath);
            }
    }
}