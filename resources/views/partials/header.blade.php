<header class="relative z-40">
  <nav x-data="{ open: false }" class="z-40 w-full bg-center bg-cover nav-container">
    <div class="relative pb-4 md:pb-0">

      <div class="hidden py-4 border-b border-c-red-100 md:block">
        <div class="container px-6 mx-auto lg:px-8 md:flex md:justify-end md:items-center md:space-x-6 lg:space-x-8">
          <div>
            <div class="flex items-center justify-center space-x-4 a2a_kit a2a_kit_size_32 text-c-red-100">
              <p class="text-sm font-bold">Share</p>
              <a class="a2a_button_facebook hover:text-c-blue-100">
                @svg($social[0]['icon'], 'w-5 h-5 fill-current')
              </a>
              <a class="a2a_button_twitter hover:text-c-blue-100">
                @svg($social[1]['icon'], 'w-5 h-5 fill-current')
              </a>
            </div>
          </div>
          <a class="font-bold tracking-wider text-c-red-100 font-rec hover:text-c-blue-100" href="{!! $twit['url'] !!}">{!! $twit['title'] !!}</a>
          <a class="inline-flex items-center py-1.5 pl-2 pr-3 text-xs border font-medium rounded-md text-c-red-100 border-c-red-100 hover:bg-c-red-100 hover:text-white xl:text-sm" href="{!! $report['url'] !!}">
            <img class="w-6 h-6 mr-3" src="{!! $report_icon['url'] !!}" alt="">
            <span>Download the Report</span>
          </a>
        </div>
      </div>

      <div class="container relative px-6 mx-auto lg:px-8">
        <div class="z-40 py-4 pt-16 md:pb-0 md:pt-10 lg:pt-14">
          <div class="flex justify-center">
            <div class="relative">
              <div class="absolute top-0 left-0 -mt-12 -ml-14 sm:-mt-16 sm:-ml-16 md:mt-[-5.35rem] md:ml-[-5.25rem] lg:mt-[-5.75rem] lg:ml-[-5.5rem] xl:mt-[-6rem] xl:ml-[-6.5rem]">
                @svg($header_icon, 'h-20 w-20 sm:h-24 sm:w-24 md:h-32 md:w-32 lg:h-36 lg:w-36 xl:h-40 xl:w-40 statue')
              </div>
              <div class="uppercase header-text font-rec">{!! $header_text !!}</div>
            </div>
          </div>
        </div>
      </div>


        

          {{-- <div class="hidden md:block">
            <a href="{!! $report['url'] !!}" class="inline-flex items-center h-12 px-6 text-sm font-bold text-center uppercase text-c-black-100 bg-c-tan-200 xl:px-8 hover:shadow-md" target="_blank">Download Report</a>
          </div> --}}

        
        <div class="container relative px-6 mx-auto lg:px-8">
          <div class="flex items-center justify-between mt-4 md:hidden">
            <div>
              <a class="inline-flex items-center py-2 pl-3 pr-4 text-sm border rounded-md text-c-red-100 border-c-red-100 hover:bg-c-red-100 hover:text-white" href="{!! $report['url'] !!}">
                <img class="w-6 h-6 mr-3" src="{!! $report_icon['url'] !!}" alt="">
                <span>Download Report</span>
              </a>
            </div>
            <div class="relative menu-btn">
              <button @click="open = !open" class="inline-flex items-center justify-center p-2 px-3 mr-auto text-sm transition duration-150 ease-in-out border rounded-md text-c-blue-100 border-c-blue-100 focus:outline-none hover:text-white hover:bg-c-blue-100" aria-label="Main menu" aria-expanded="false">
                <!-- Icon when menu is closed. -->
                <span class="mr-1">Menu</span>
                <svg :class="{'hidden': open, 'block': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <!-- Icon when menu is open. -->
                <svg :class="{'block': open, 'hidden': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="relative hidden px-2 mt-6 md:block md:border-t md:border-b md:border-c-red-100 lg:mt-10">
          <div class="lg:container lg:mx-auto lg:px-8">
            <div class="border-r md:grid md:grid-cols-5 border-c-red-100">
              @foreach ($navi as $item)
                <div class="text-center border-l border-c-red-100">
                  <a class="block text-center py-3 text-xs font-medium uppercase nav-link text-c-red-100 transition duration-300 ease-in-out hover:bg-c-red-100 hover:text-white focus:outline-none lg:text-sm xl:text-sm {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{{ $item->target }}">
                    {{ $item->label }}  
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
          

       
      
    </div>

    {{-- Mobile Menu --}}

    <div :class="{'block': open, 'hidden': !open }" class="relative bg-transparent border-t border-c-red-100 md:right-0 z-60 md:absolute md:w-full md:bg-transparent md:px-0 md:shadow-none" x-cloak>
      <div @click.away="open = false" class="md:px-6 md:container md:mx-auto md:relative border-c-red-100">
        <div class="md:bg-white md:absolute md:top-0 md:right-0 md:shadow md:px-10 md:py-6 md:pb-10 md:mr-6">
          <div>
            @foreach ($navi as $item)
              <div class="px-6 border-b md:pb-2 border-c-red-100">
                <a @click="open = false" class="block py-3 nav-link md:pb-1 text-center uppercase font-bold tracking-wider text-c-red-100 border-c-red-100 border-l border-r transition duration-300 ease-in-out hover:bg-c-red-100 hover:text-white focus:outline-none md:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}" target="{{ $item->target }}">
                  {{ $item->label }}  
                </a>
              </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>

   

  </nav>
</header>

{{-- @dump($countries) --}}

{{-- @dump($navi) --}}