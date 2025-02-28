<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">{{ trans('post_trans.Add_Post') }}</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3 ml-3"></i> {{ trans('post_trans.Post_Details') }}
                </p>
                <form method="POST" action="{{ route('backend.post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('post_trans.Title') }}</label>
                            <input type="text" id="title" value="{{ old('title') }}" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Title of the post" required>
                        </div>
                        <div class="mb-1">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('post_trans.Slug') }}</label>
                            <input type="text" id="slug" value="{{ old('slug') }}" name="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla" required>
                        </div>
                        <div class="mb-1">
                            <label for="cat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('post_trans.Category') }}
                            </label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="cat_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('post_trans.Published') }}</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="status">
                                <option value="1" selected>{{ trans('post_trans.Yes') }}</option>
                                <option value="0">{{ trans('post_trans.No') }}</option>
                            </select>
                        </div>
                        {{--  --}}
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600"
                                for="message">{{ trans('post_trans.Tags') }}</label>
                            <select name="tags[]" multiple id="tag_multiple"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600"
                                for="message">{{ trans('post_trans.Image') }}</label>
                            <input type="file" id="myimage" name="image">

                        </div>
                    </div>


                    <div class="mb-2">
                        <label class="block text-sm text-gray-600"
                            for="message">{{ trans('post_trans.Message') }}</label>
                        <textarea id="summernote"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="content">{{ old('content') }}</textarea>
                    </div>
                    {{-- <div class="mb-2">
                        <label class="block text-sm text-gray-600"
                            for="message">{{ trans('post_trans.Message') }}</label>
                        <textarea
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="message" name="content">{{ old('content') }}</textarea>
                    </div> --}}
                    <button type="submit"
                        class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">{{ trans('post_trans.Add_Post') }}</button>
                </form>
            </div>
        </main>
    </div>

</x-admin-layout>
