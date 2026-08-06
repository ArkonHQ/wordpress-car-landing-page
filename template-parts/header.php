<!-- navbar -->

<nav id="site-nav" class="navbar w-full mx-auto py-3 px-6 rounded-none bg-white fixed top-0 left-0 right-0 z-50">
    <div class="container">
        <div class="nav-links flex items-center justify-between">
          <div class="logo">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Logo.svg" alt=""></a>
          </div>
          <div class="nav-links">
            <ul class="flex flex-row gap-6 font-medium">
                <li><a href="#" class="nav-link relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-current after:transition-all after:duration-300 hover:after:w-full">Home</a></li>
                <li><a href="#" class="nav-link relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-current after:transition-all after:duration-300 hover:after:w-full">Products</a></li>
                <li><a href="#" class="nav-link relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-current after:transition-all after:duration-300 hover:after:w-full">Features</a></li>
                <li><a href="#" class="nav-link relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-current after:transition-all after:duration-300 hover:after:w-full">Gear Shop</a></li>
            </ul>
          </div>
          <div>
            <a href="#" id="nav-cta" class="primary-btn rounded-full bg-[#E9FF61] text-black font-medium px-6 py-4 flex items-center justify-center gap-2 overflow-hidden relative">
                <span class="btn-ripple absolute inset-0 rounded-full pointer-events-none"></span>
                Order Now
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right.svg" alt="arrow" width="12" height="12">
            </a>
          </div>
        </div>
    </div>
</nav>