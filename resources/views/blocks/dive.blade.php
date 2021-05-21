<div class="{{ $block->classes }}">
  <div class="container px-6 mx-auto lg:px-8">
    <div class="flex flex-col space-y-6 sm:flex-row sm:space-y-0 sm:space-x-6 sm:py-6 lg:justify-between xl:pb-12">
      <div class="sm:w-1/2">
        <div class="mb-2 text-lg font-bold font-rec text-c-red-100 lg:text-xl xl:text-2xl">{!! $pretitle !!}</div>
        <div class="mb-4 text-4xl font-bold leading-none font-rec text-c-blue-100 lg:text-5xl xl:text-6xl xl:mb-8">{!! $title !!}</div>
        <p class="text-c-blue-100 sm:text-sm xl:text-base xl:max-w-lg">{!! $content !!}</p>
      </div>
      <div class="sm:w-1/2 lg:max-w-sm xl:max-w-none">
        <div>
          <iframe class="w-full min-h-[485px] -mt-1" src="{!! $iframe !!}" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
