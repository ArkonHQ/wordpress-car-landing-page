<section
  id="hero-section"
  class="hero relative overflow-hidden pt-32 pb-24 bg-linear-to-b from-[#444D07] to-[#FFFFFF] min-h-screen flex flex-col justify-center"
>


  <div
    id="hero-glow-top"
    class="absolute top-0 left-1/2 -translate-x-1/2 w-[1100px] h-[650px] rounded-full bg-[#8BAF2A]/22 blur-[160px] pointer-events-none -translate-y-1/3 z-0"
  ></div>
  <div
    id="hero-glow-left"
    class="absolute top-1/4 -left-52 w-[450px] h-[450px] rounded-full bg-[#4a7c59]/20 blur-[110px] pointer-events-none z-0"
  ></div>
  <div
    id="hero-glow-right"
    class="absolute top-1/4 -right-52 w-[450px] h-[450px] rounded-full bg-[#8BAF2A]/16 blur-[110px] pointer-events-none z-0"
  ></div>


  <div
    id="hero-scan-line"
    class="absolute left-0 w-full h-px pointer-events-none z-30"
    style="top: 44%; background: linear-gradient(to right, transparent 0%, rgba(255,255,255,0.9) 50%, transparent 100%);"
  ></div>


  <div
    id="hero-light-shaft"
    class="absolute top-0 left-1/2 -translate-x-1/2 w-[2px] h-full pointer-events-none z-0"
    style="background: linear-gradient(to bottom, rgba(255,255,255,0.25) 0%, rgba(255,255,255,0.0) 70%);"
  ></div>


  <div class="flex items-center justify-center flex-col relative z-10">


    <h1
      id="hero-smooth"
      class="hero-title-smooth mb-[24rem] uppercase bg-linear-to-b from-white/35 from-46% to-[#436C4C] bg-clip-text text-transparent text-[260px] font-semibold tracking-widest select-none"
    >
      SMOOTH
    </h1>


    <div id="hero-car-outer" class="absolute z-20">
      <div id="hero-car-inner">
        <img
          id="hero-car"
          src="<?php echo get_template_directory_uri();?>/assets/car.png"
          alt="Electric Vehicle"
          class="object-center relative z-10 select-none"
          draggable="false"
        >
      </div>

      <div
        id="hero-car-glow"
        class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-[78%] h-[55px] rounded-full pointer-events-none"
        style="background: radial-gradient(ellipse, rgba(67,108,76,0.7) 0%, transparent 70%); filter: blur(30px);"
      ></div>
      <div
        id="hero-car-glow2"
        class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-[55%] h-[38px] rounded-full pointer-events-none"
        style="background: radial-gradient(ellipse, rgba(160,192,80,0.45) 0%, transparent 70%); filter: blur(20px);"
      ></div>
    </div>


    <h1
      id="hero-ev"
      class="hero-title-scroll uppercase text-[260px] absolute font-semibold tracking-widest text-white/20 [-webkit-text-stroke:2px_rgba(255,255,255,0.5)] [text-shadow:0_4px_40px_rgba(255,255,255,0.2)] z-30 select-none"
    >EV CARS</h1>

  </div>


  <div class="w-[70%] mx-auto mt-14">
    <div id="hero-divider" class="border-t border-white/80"></div>
  </div>


  <div class="flex flex-row items-center justify-between gap-8 mx-auto mt-12">

    <div class="hero-stat flex flex-row items-center gap-4">
      <h3 class="text-[100px] font-bold text-black leading-none">12M</h3>
      <p class="text-[20px] font-semibold text-[#999999]">Battery Cost <br> Reduction</p>
    </div>

    <div class="hero-stat flex flex-row items-center gap-4">
      <h3 class="text-[100px] font-bold text-black leading-none">91%</h3>
      <p class="text-[20px] font-semibold text-[#999999]">More Efficient</p>
    </div>

    <div class="hero-stat flex flex-row items-center gap-4">
      <h3 class="text-[100px] font-bold text-black leading-none">1.9M</h3>
      <p class="text-[20px] font-semibold text-[#999999]">Charging <br> Infrastructure <br> Expansion</p>
    </div>

  </div>

</section>