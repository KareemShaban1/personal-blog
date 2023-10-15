<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black">{{ trans('page_trans.Pages') }}</h1>

            <div class="w-full mt-5">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Pages Records
                </p> --}}
                <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded mb-2"
                    onclick="location.href='{{ route('backend.page.create') }}';">{{ trans('page_trans.Add_Page') }}</button>
                <div class="bg-white p-5 overflow-auto">
                    <table id="table_id" class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('page_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('page_trans.Name') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('page_trans.Added_By') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('page_trans.Manage') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $page->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $page->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $page->user->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">

                                        <button
                                            class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                            type="button"
                                            onclick="location.href='{{ route('backend.page.edit', $page->id) }}';">{{ trans('page_trans.Edit') }}</button>
                                        <form type="submit" method="POST" style="display: inline"
                                            action="{{ route('backend.page.destroy', $page->id) }}"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                type="submit">{{ trans('page_trans.Delete') }}</button>
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
