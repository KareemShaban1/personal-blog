<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">{{ trans('page_trans.Edit_Page') }}</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3 ml-3"></i> {{ trans('page_trans.Page_Details') }}
                </p>
                <form method="POST" action="{{ route('backend.page.update', $page->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('page_trans.Name') }}</label>
                            <input type="text" id="name" value="{{ $page->name }}" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Page name" required>
                        </div>
                        <div class="mb-1">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('page_trans.Slug') }}</label>
                            <input type="text" id="slug" value="{{ $page->slug }}" name="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla-bla-bla" required>
                        </div>
                        <div class="mb-1">
                            <label for="nav"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('page_trans.Show_In_Navbar') }}</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="navbar">
                                <option value="0" {{ $page->navbar == false ? 'selected' : '' }}>
                                    {{ trans('page_trans.No') }}</option>
                                <option value="1" {{ $page->navbar == true ? 'selected' : '' }}>
                                    {{ trans('page_trans.Yes') }}</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="footer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('page_trans.Show_In_Footer') }}</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="footer">
                                <option value="0" {{ $page->navbar == false ? 'selected' : '' }}>
                                    {{ trans('page_trans.No') }}</option>
                                <option value="1" {{ $page->footer == true ? 'selected' : '' }}>
                                    {{ trans('page_trans.Yes') }}</option>
                            </select>
                        </div>
                        {{--  --}}
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm text-gray-600"
                            for="message">{{ trans('page_trans.Message') }}</label>
                        <textarea name="content" id="summernote"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>{{ $page->content }}</textarea>
                    </div>
                    <button type="submit"
                        class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded">{{ trans('page_trans.Update_Page') }}</button>
                </form>
            </div>
        </main>
    </div>

</x-admin-layout>
