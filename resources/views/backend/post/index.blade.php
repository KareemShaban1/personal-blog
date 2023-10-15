<x-admin-layout>

    @push('styles')
    @endpush

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black"> {{ trans('post_trans.Posts') }} </h1>

            <div class="w-full mt-5">
                {{-- <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Posts Records
                </p> --}}
                @can('create', 'App\Models\Post')
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded mb-2"
                        onclick="location.href='{{ route('backend.post.create') }}';">
                        {{ trans('post_trans.Add_Post') }}
                    </button>
                @endcan
                <div class="bg-white p-5">

                    <table id="table_id" class="w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Id') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Title') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Category') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Post_Views') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Tags') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Added_By') }}</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    {{ trans('post_trans.Manage') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                @php
                                    $post_view = views($post)
                                        ->unique()
                                        ->count();
                                @endphp
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post->title }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post->category->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post_view }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <div class="flex flex-wrap">
                                            @forelse ($post->tags as $tag)
                                                <a href="{{ route('tag.show', $tag->name) }}"
                                                    class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-blue-700 bg-blue-100 border border-blue-300 ">
                                                    <div
                                                        class="text-xs font-normal leading-none max-w-full flex-initial">
                                                        {{ $tag->name }}</div>
                                                </a>
                                            @empty
                                                {{ trans('post_trans.No_Tags') }}
                                            @endforelse
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post->user->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        @can('update', $post)
                                            <button
                                                class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                                                type="button"
                                                onclick="location.href='{{ route('backend.post.edit', $post->id) }}';">{{ trans('post_trans.Edit') }}</button>
                                        @endcan
                                        @can('delete', $post)
                                            <form type="submit" method="POST" style="display: inline"
                                                action="{{ route('backend.post.destroy', $post->id) }}"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"
                                                    type="submit">{{ trans('post_trans.Delete') }}</button>
                                            </form>
                                        @endcan


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
                {{-- {!! $posts->links() !!} --}}

        </main>
    </div>

    @push('scripts')
    @endpush
</x-admin-layout>
