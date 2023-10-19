  <!-- Sidebar Section -->
  @if (!request()->routeIs('page.show'))
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

          <div class="w-full bg-white shadow flex flex-col my-4 p-6">
              <p class="text-xl font-semibold pb-5">👋 About Me</p>
              <p class="pb-2">{{ $setting->about }}</p>
              {{-- <a href="#"
          class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
          Get to know us
      </a> --}}
          </div>

          <div class="w-full bg-white shadow flex flex-col my-4 p-6">
              <p class="text-xl font-semibold pb-5">Tags</p>
              <div class="flex flex-wrap">

                  @foreach ($tags as $tag)
                      <a href="{{ route('tag.show', $tag->name) }}"
                          class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-blue-700 bg-blue-100 border border-blue-300 ">
                          <div class="p-1.5 text-xs font-normal leading-none max-w-full flex-initial">
                              {{ $tag->name }}</div>
                      </a>
                  @endforeach

              </div>
          </div>

          {{-- <div class="w-full bg-white shadow flex flex-col my-4 p-6">
      <p class="text-xl font-semibold pb-5">Top 5 Writers</p>
      <div class="content flex justify-between py-2 w-full">
          <div class="px-2 justify-between">
              Name

          </div>
          <div class="justify-between">
              Posts Count
          </div>
      </div>
      @forelse ($top_users as $top)
          <div class="my-1.5 py-3	px-4 flex justify-center rounded-lg shadow-lg bg-white w-full ">
              @if ($top->avatar == null)
              <img src="{{ asset('import/assets/profile-pic-dummy.png') }}" class="w-10 h-10 rounded-full">
              @else
              <img class="w-10 h-10 rounded-full" src="{{ asset("storage/$top->avatar") }}" alt="">
              @endif
              <div class="content flex justify-between py-2 w-full">
                  <div class="px-2 justify-between">
                      {{ $top->name }}
                  </div>
                  <div class="justify-between">
                      {{ $top->posts_count }}
                  </div>
              </div>
          </div>
          @empty
              No Members !
      @endforelse
  </div> --}}

      </aside>
  @endif
