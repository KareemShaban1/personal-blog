   <!-- Top Bar Nav -->
   <nav class="w-full py-4 bg-black shadow">
       <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

           <nav>
               <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                   @foreach ($pages_nav as $page)
                       <li><a class="hover:text-gray-200 hover:underline px-4"
                               href="{{ route('page.show', $page->slug) }}">{{ $page->name }}</a></li>
                   @endforeach
               </ul>
           </nav>

           <div class="flex items-center text-lg no-underline text-white pr-6">
               <a class="" href="{{ $setting->url_fb ?? ' ' }}">
                   <i class="fab fa-facebook"></i>
               </a>
               <a class="pl-6" href="{{ $setting->url_insta ?? ' ' }}">
                   <i class="fab fa-instagram"></i>
               </a>
               <a class="pl-6" href="{{ $setting->url_twitter ?? ' ' }}">
                   <i class="fab fa-twitter"></i>
               </a>
               <a class="pl-6" href="{{ $setting->url_linkedin ?? ' ' }}">
                   <i class="fab fa-linkedin"></i>
               </a>
           </div>
       </div>

   </nav>
