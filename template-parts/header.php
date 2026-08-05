<!-- navbar -->

<nav class="navbar w-[75%] mx-auto py-3 px-6 rounded-[24px] bg-white/60 backdrop-blur-lg fixed top-4 left-0 right-0 z-50">
    <div class="container">
        <div class="nav-links flex items-center justify-between">
          <div class="logo">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Logo.svg" alt=""></a>
          </div>
          <div class="nav-links">
            <ul class="flex flex-row gap-6 font-medium">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Gear Shop</a></li>
            </ul>
          </div>
          <div>
            <a href="#" class="primary-btn rounded-full bg-[#E9FF61] text-black font-medium px-6 py-4 flex items-center justify-center gap-2">
                Order Now
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right.svg" alt="arrow" width="12" hieght="12">
            </a>
          </div>
        </div>
    </div>
</nav>