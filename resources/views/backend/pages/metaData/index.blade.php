<x-admin-layout>


    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black">{{ trans('metaData_trans.metaData') }}</h1>

            <div class="w-full mt-5">
                {{-- <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-list ml-3 mr-3"></i> {{ trans('metaData_trans.metaData') }}
                            </p> --}}
                <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded mb-2"
                    onclick="location.href='{{ route('backend.metaData.create') }}';">{{ trans('metaData_trans.Add_metaData') }}</button>
                <div class="bg-white p-5">
                    <table id="table_id" class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('metaData_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('metaData_trans.Key') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('metaData_trans.Value') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('metaData_trans.Manage') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($metaData as $data)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $data->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $data->key }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ Str::limit($data->value, 105) }}
                                    </td>
                                    <td class="py-4 px-6 border-b border-grey-light">

                                        <button
                                            class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                            type="button"
                                            onclick="location.href='{{ route('backend.metaData.edit', $data->id) }}';">
                                            {{ trans('metaData_trans.Edit') }}
                                        </button>
                                        {{-- <form type="submit" method="POST" style="display: inline"
                                            action="{{ route('backend.metaData.destroy', $metaData->id) }}"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                type="submit">{{ trans('metaData_trans.Delete') }}</button> --}}
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
