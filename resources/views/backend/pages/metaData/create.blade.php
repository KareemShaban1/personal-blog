<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">{{ trans('metaData_trans.Add_metaData') }}</h1>

            <div class="w-full mt-12">

                <form method="POST" action="{{ route('backend.metaData.store') }}">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="key"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('metaData_trans.Key') }}</label>
                            <input type="text" id="key" value="{{ old('key') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required name="key">
                        </div>
                        <div class="mb-1">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ trans('metaData_trans.Value') }}</label>
                            <input type="text" name="value" id="value" value="{{ old('value') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        {{--  --}}
                    </div>
                    <button
                        class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">{{ trans('metaData_trans.Add_metaData') }}</button>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
