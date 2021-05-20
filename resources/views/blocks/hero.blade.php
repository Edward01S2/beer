<div class="{{ $block->classes }} bg-c-red-100" x-data="{open: {!! $open !!}}"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-50"
    x-transition:enter-end="opacity-100 transform"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 transform"
    x-transition:leave-end="opacity-50 transform"
  >
  <div class="bg-c-red-100" x-show="!open" x-cloak
  >
    <div class="container px-6 mx-auto lg:px-8">
      <div class="flex items-center justify-between py-4 xl:py-5">
        <div class="text-lg leading-tight text-white font-rec xl:text-xl">{!! $title !!}</div>
        <button class="inline-flex items-center text-sm text-white hover:text-c-blue-100 xl:text-base focus:outline-none" @click="open = true">
          <span class="hidden mr-2 lg:block">Open</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 lg:w-6 lg:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="overflow-hidden bg-c-red-100" x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="transform opacity-50 -translate-y-full"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform"
    x-transition:leave-end="opacity-50 transform -translate-y-full"
  >
    <div class="container relative flex flex-col mx-auto sm:flex-row sm:py-8 md:py-12 md:items-center">
      <div class="relative z-30 sm:w-1/3 md:w-1/2">
        <div class="pb-8 pr-8 md:pb-12 md:pr-12 xl:pr-20 xl:pb-14">
          <div class="relative">
            <img id="hero-img" src="{!! $image['url'] !!}" alt="" class="relative z-20 object-cover object-center w-full h-auto xl:max-h-[34rem]">
            <div class="absolute inset-0 z-10 mt-6 ml-6 -mb-6 -mr-8 bg-cover sm:-mr-6 sm:-mb-3 md:-mb-8 md:-mr-8 md:mt-8 md:ml-8 lg:-mr-10 lg:-mb-10 xl:mr-[-3.6rem] xl:-mb-12">
              <svg class="absolute inset-0 w-full h-full" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                <defs>
                  <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="3" height="3" class="text-[#ECE2E2]" fill="currentColor" />
                  </pattern>
                </defs>
                <rect width="1004" height="984" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="sm:w-2/3 md:w-1/2">
        <div class="container px-6 py-8 mx-auto text-white lg:px-8 sm:py-0 xl:max-w-screen-sm xl:mr-auto xl:ml-0 2xl:max-w-2xl/2">
          <h2 class="mb-4 text-3xl font-rec sm:text-2xl md:text-3xl lg:text-4xl md:w-3/4 lg:w-2/3 xl:text-5xl">{!! $title !!}</h2>
          <p class="sm:text-sm xl:text-base">{!! $content !!}</p>
        </div>
      </div>
      <button class="absolute top-0 right-0 z-40 inline-flex items-center mt-10 -mr-6 text-sm text-white transform rotate-90 lg:mr-4 lg:mt-12 hover:text-c-blue-100 focus:outline-none" @click="open = false">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Close</span>
      </button>
    </div>
  </div>
</div>
