<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">{{ trans('category_trans.Categories') }}</h1>

            <div class="w-full mt-12">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list ml-3 mr-3"></i> {{ trans('category_trans.Categories') }}
                </p> --}}
                <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded mb-2"
                    onclick="location.href='{{ route('backend.category.create') }}';">{{ trans('category_trans.Add_Category') }}</button>
                <div class="bg-white overflow-auto">
                    <table class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('category_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('category_trans.Name') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('category_trans.Added_By') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('category_trans.Manage') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $category->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $category->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $category->user->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">

                                        <button
                                            class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                            type="button"
                                            onclick="location.href='{{ route('backend.category.edit', $category->id) }}';">
                                            {{ trans('category_trans.Edit') }}
                                        </button>
                                        <form type="submit" method="POST" style="display: inline"
                                            action="{{ route('backend.category.destroy', $category->id) }}"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                type="submit">{{ trans('category_trans.Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
        </main>
    </div>
</x-admin-layout>
