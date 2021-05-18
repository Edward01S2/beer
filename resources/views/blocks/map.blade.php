<div id="map" class="{{ $block->classes }}">
  <div class="container px-6 mx-auto lg:px-8">
    <div class="py-12 lg:py-16">
      <div class="flex items-center justify-center mb-2 space-x-4 font-bold font-rec text-c-red-100 lg:text-lg xl:text-xl xl:mb-4">
        <div>{!! $pretitle[0] !!}</div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
        </svg>
        <div>{!! $pretitle[1] !!}</div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
        </svg>
        <div>{!! $pretitle[2] !!}</div>
      </div>
      <div class="text-center text-c-blue-100">
        <h2 class="mb-4 text-3xl font-bold font-rec lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
        <p class="text-sm lg:max-w-2xl lg:mx-auto xl:text-base xl:max-w-4xl">{!! $content !!}</p>
      </div>
      <div class="mt-4 lg:mt-6">
        <?php echo do_shortcode('[mapsvg id="33"]') ?>
      </div>
    </div>
  </div>
</div>
