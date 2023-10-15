<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">{{ trans('settings_trans.Site_Settings') }}</h1>

            <div class="w-full mt-12">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> {{ trans('settings_trans.Site Settings') }}
                </p> --}}

                @if ($setting->updated_at != null)
                    <div class="w-full bg-white text-left p-4 mb-2">{{ trans('settings_trans.Last_Edit') }}
                        {{ $setting->updated_at }}</div>
                @endif

                <form method="POST" action="{{ route('backend.setting.update', $setting->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="site_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Site_Name') }}</label>
                            <input type="text" name="site_name" id="site_name" value="{{ $setting->site_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Site_Description') }}</label>
                            <input type="text" name="description" id="description"
                                value="{{ $setting->description }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="about"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.About') }}</label>
                            <input type="text" id="summernote" name="about" value="{{ $setting->about }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="copy_right"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Copy_Right') }}</label>
                            <input type="text" name="copy_rights" id="copy_right"
                                value="{{ $setting->copy_rights }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="url_insta"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Instagram_Url') }}</label>
                            <input type="text" name="url_insta" id="url_insta" value="{{ $setting->url_insta }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-1">
                            <label for="url_twitter"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Twitter_Url') }}</label>
                            <input type="text" name="url_twitter" id="url_twitter"
                                value="{{ $setting->url_twitter }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-1">
                            <label for="url_linkedin"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.LinkedIn_Url') }}</label>
                            <input type="text" name="url_linkedin" id="url_linkedin"
                                value="{{ $setting->url_linkedin }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-1">
                            <label for="url_fb"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('settings_trans.Facebook_Url') }}</label>
                            <input type="text" name="url_fb" id="url_fb" value="{{ $setting->url_fb }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        {{--  --}}
                    </div>
                    <button
                        class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded">{{ trans('settings_trans.Update_Settings') }}</button>
                </form>
            </div>
        </main>
    </div>

    @push('scripts')
    @endpush

</x-admin-layout>
