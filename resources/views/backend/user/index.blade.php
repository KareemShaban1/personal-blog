<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black">{{ trans('user_trans.Users') }}</h1>

            <div class="w-full mt-5">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Users Records
                </p> --}}
                <div class="bg-white p-5 overflow-auto">
                    <table id="table_id" class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('user_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('user_trans.Name') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('user_trans.Role_Name') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('user_trans.Manage') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $user->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $user->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $user->role->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">

                                        <button
                                            class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                            type="button"
                                            onclick="location.href='{{ route('backend.user.edit', $user->id) }}';">{{ trans('user_trans.Assign_Role') }}</button>
                                        <form type="submit" method="POST" style="display: inline"
                                            action="{{ route('backend.user.destroy', $user->id) }}"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                type="submit">{{ trans('user_trans.Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {!! $users->links() !!}
        </main>
    </div>
</x-admin-layout>
