<div id="jobs" class="{{ $block->classes }} border-t border-dashed border-c-blue-100">
  <script>
    var titles = <?php echo json_encode($titles); ?>
  </script>
  <div>
    <div class="container py-12 mx-auto lg:flex lg:py-0 lg:pr-8">
      <div class="lg:w-2/3 lg:py-12 lg:pr-16">
        <div class="px-6 lg:px-8">
          <h3 class="text-3xl font-rec text-c-blue-100 sm:text-5xl xl:text-6xl">Beer is...</h3>
          <div id="beeris" class="text-3xl font-rec text-c-red-100 sm:text-5xl xl:text-6xl"></div>
        </div>
        <div class="swiper-container study-swiper">
          <div class="swiper-wrapper">
            @foreach($items as $item)
              <div class="swiper-slide job-{!! $loop->index !!} overflow-hidden">
                <div class="">
                  <div class="p-6 pb-12 overflow-hidden lg:p-8 lg:pb-10 lg:pt-4">
                    <img class="border-[10px] border-white shadow-frame h-56 w-full object-cover object-center sm:h-96 job-img lg:h-80 xl:h-[22rem]" src="{!! $item['image']['url'] !!}" alt="">
                  </div>
                  <div class="p-6 pt-0 prose-sm lg:p-8 lg:pt-0 max-w-none">
                    {!! $item['content'] !!}
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="flex items-center justify-center space-x-4 md:space-x-6"> 
            <button class="p-2 rounded-full bg-c-blue-100 study-swiper-prev">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-c-tan-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
              </svg>
            </button>
            <div class="swiper-pagination"></div>
            <button class="p-2 rounded-full bg-c-blue-100 study-swiper-next">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-c-tan-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/3">
        <div class="grid h-full grid-rows-5 border-l border-r border-dashed grid-rows-max bg-[#F3F0EB] border-c-blue-100 study-btn-container">
          @foreach($items as $item)
            <button class="border-b border-dashed border-c-blue-100 text-c-blue-100 study-btn focus:outline-none @if($loop->first){{ 'active' }}@endif" data-index="{!! $loop->index !!}">
              <div class="flex items-center px-10">
                <img class="object-cover object-center w-20 h-20 mr-4 border-2 rounded-full border-c-blue-100" src="{!! $item['image']['url'] !!}" alt="">
                <div class="text-left font-rec lg:text-xl">{!! $item['title'] !!}</div>
              </div>
            </button>
          @endforeach
        </div>
      </div>
    </div>  
  </div>
</div>
