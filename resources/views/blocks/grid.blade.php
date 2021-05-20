<div id="key" class="{{ $block->classes }} bg-c-blue-100">
  <div class="container mx-auto">
    @if ($items)
      <div class="grid grid-rows-8 sm:grid-cols-2 grid-container lg:grid-cols-4">
        @foreach($items as $item)
          {{-- @if($item['link']) --}}
          <a id="grid-{!! $loop->index !!}" class="border-[#F8F3ED] border-b border-dashed job-box border-opacity-30 p-6 box lg:p-8 group hover:bg-c-red-100 transition duration-300" href="{!! $item['link'] !!}" @if($item['index']) data-index={!! $item['index'] !!} @endif>
            <div class="w-16 h-16 mb-8 md:w-20 md:h-20 md:mb-12 icon-container">
              <div class="relative w-full pb-[100%]">
                @if($item['icon'])
                  <div id="lottie-{!! $loop->index !!}" class="absolute inset-0 object-cover object-center w-full h-full"></div>
                  <script>
                    var anim<?php echo $loop->index ?> = '<?php echo $item['icon']['url'] ?>';
                  </script>
                @endif
              </div>
            </div>
            <div class="">
              <div class="mb-1 text-lg leading-tight font-rec text-c-tan-100 md:text-xl md:leading-tight">{!! $item['title'] !!}</div>
              <div class="text-3xl font-bold font-gt text-c-tan-200 md:text-4xl lg:text-3xl xl:text-4xl">{!! $item['stat'] !!}</div>
            </div>
          </a>
          {{-- @else
            <div id="grid-{!! $loop->index !!}" class="border-[#F8F3ED] border-b border-dashed box border-opacity-30 p-6 box lg:p-8 group transition duration-300">
              <div class="w-16 h-16 mb-8 md:w-20 md:h-20 md:mb-12 icon-container">
                <div class="relative w-full pb-[100%]">
                  @if($item['icon'])
                    <div id="lottie-{!! $loop->index !!}" class="absolute inset-0 object-cover object-center w-full h-full"></div>
                    <script>
                      var anim<?php echo $loop->index ?> = '<?php echo $item['icon']['url'] ?>';
                    </script>
                    @endif
                </div>
              </div>
              <div class="">
                <div class="mb-1 text-lg leading-tight font-rec text-c-tan-100 md:text-xl md:leading-tight">{!! $item['title'] !!}</div>
                <div class="text-3xl font-bold font-gt text-c-tan-200 md:text-4xl lg:text-3xl xl:text-4xl">{!! $item['stat'] !!}</div>
              </div>
            </div>
          @endif --}}
        @endforeach
      </div>
    @endif
  </div>
</div>
