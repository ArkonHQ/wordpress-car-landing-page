<section id="features-section" class="relative bg-white pb-16 pt-24">
  <div class="mx-auto flex max-w-6xl flex-col px-6">
    <div class="section-badge section-title border border-[#e1ecf5] bg-[#EDF2F6] px-3 py-2 text-sm font-medium uppercase tracking-[0.25em] text-[#4b5563] mx-auto">
      Versatile Power
    </div>
    <h2 class="section-heading mt-6 text-3xl font-semibold tracking-tight text-black sm:text-4xl lg:text-5xl text-center">
      Future-Ready Comfort
    </h2>


    <div id="image-slider" class="w-full">
      <div class="slider-track mt-12 overflow-hidden rounded-2xl">
        <div class="slider-inner flex" style="transform: translateX(0%);">
          <div class="slide-group grid w-full shrink-0 grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/front-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Front view of the EV">
            </div>
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/back-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Back view of the EV">
            </div>
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/beside-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Side view of the EV">
            </div>
          </div>
          <div class="slide-group grid w-full shrink-0 grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/beside-view2.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="">
            </div>
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/back-view1.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="">
            </div>
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/out-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Outdoor view of the EV">
            </div>
          </div>
          <div class="slide-group grid w-full shrink-0 grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div class="col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/upper-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Upper view of the EV">
            </div>
            <div class="sm:col-span-2 lg:col-span-2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/from-left-view.png" class="reveal-img h-64 w-full rounded-xl object-cover" alt="Left side view of the EV">
            </div>
          </div>
        </div>
      </div>

      <div class="mt-8 flex justify-center gap-3">
        <button type="button" id="dot-0" class="dot h-3 w-3 rounded-full bg-black transition-all duration-300 cursor-pointer hover:scale-125" data-index="0"></button>
        <button type="button" id="dot-1" class="dot h-3 w-3 rounded-full bg-gray-400 transition-all duration-300 cursor-pointer hover:scale-125" data-index="1"></button>
        <button type="button" id="dot-2" class="dot h-3 w-3 rounded-full bg-gray-400 transition-all duration-300 cursor-pointer hover:scale-125" data-index="2"></button>
      </div>
  </div>
</section>