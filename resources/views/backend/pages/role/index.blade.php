<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black">{{ trans('roles_trans.Roles') }}</h1>

            <div class="w-full mt-5">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> {{ trans('roles_trans.Roles_Record') }}
                </p> --}}
                <div class="bg-white p-5 overflow-auto">
                    <table id="table_id" class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('roles_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold  text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('roles_trans.Name') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $role->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $role->name }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
        </main>
    </div>
</x-admin-layout>
