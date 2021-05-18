<footer class="relative footer-container bg-c-red-100">
  <div class="absolute inset-0 z-0">
    <img class="object-cover object-center w-full h-full" src="@asset('images/red_crump.jpg')" alt="">
  </div>
  <div id="report" class="container relative z-20 px-6 mx-auto text-white lg:px-8">
    <a class="flex flex-col items-center py-12 space-y-6 sm:pb-16 lg:py-16 lg:pb-24 lg:space-y-8" href="{!! $report['url'] !!}" target="_blank">
      @svg('images.dl-icon', 'h-12 w-auto lg:h-16 animate-bounce')
      <div class="text-2xl font-rec">{!! $report_pre !!}</div>
      @svg($report_img, 'w-full h-auto fill-current report-text sm:max-w-xl sm:mx-auto lg:max-w-2xl xl:max-w-3xl')
    </a>
  </div>
  <div id="about" class="relative z-20 border-t border-white">
    <div class="container px-6 mx-auto lg:px-8">
      <div class="grid grid-cols-1 gap-12 py-12 sm:grid-cols-2 lg:grid-cols-3 lg:py-0">
        @foreach($foot_comp as $item)
          <div class="flex flex-col items-center space-y-4 sm:flex-row sm:space-y-0 sm:items-start sm:space-x-8 lg:py-12 xl:space-x-12">
            <img src="{!! $item['logo']['url'] !!}" alt="" class="w-auto h-24 sm:h-16 xl:h-24">
            <div class="prose-sm text-white max-w-none sm:text-xs">
              {!! $item['info'] !!}
            </div>
          </div>
        @endforeach
        <div class="pt-8 prose-sm text-white border-t border-white max-w-none footer-about sm:text-xs sm:leading-5 sm:col-span-2 sm:pt-12 lg:col-span-1 lg:border-t-0 lg:border-l lg:pl-12 lg:pb-12">
          {!! $foot_about !!}
        </div>  
      </div>
    </div>  
  </div>
</footer>