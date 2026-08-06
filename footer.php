<footer class="relative w-full bg-black py-16 sm:py-24 overflow-hidden">
  
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/Footer.png" alt="Footer Background" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  <!-- Content Container -->
  <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
    
    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 sm:p-12 lg:p-16 shadow-2xl">
      
      <div class="flex flex-col lg:flex-row justify-between gap-12 lg:gap-8">
        
       
        <div class="lg:w-1/4 shrink-0 flex items-start">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Logo.svg" alt="EV Voledge" class="w-40 sm:w-48 h-auto object-contain" />
        </div>

        <div class="lg:w-3/4 grid grid-cols-2 sm:grid-cols-4 gap-8">
    
          <div class="flex flex-col gap-4 sm:gap-6">
            <h4 class="text-white font-semibold text-base sm:text-lg">Company</h4>
            <ul class="flex flex-col gap-3 sm:gap-4">
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Features</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Pricing</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">About Us</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Contact</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Pricing</a></li>
            </ul>
          </div>

          <div class="flex flex-col gap-4 sm:gap-6">
            <h4 class="text-white font-semibold text-base sm:text-lg">Resource</h4>
            <ul class="flex flex-col gap-3 sm:gap-4">
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Blog</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Customer Stories</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Information</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Legal</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Payments</a></li>
            </ul>
          </div>

      
          <div class="flex flex-col gap-4 sm:gap-6">
            <h4 class="text-white font-semibold text-base sm:text-lg">Career</h4>
            <ul class="flex flex-col gap-3 sm:gap-4">
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Jobs</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Hiring</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">News</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Tips & Tricks</a></li>
            </ul>
          </div>

          <div class="flex flex-col gap-4 sm:gap-6">
            <h4 class="text-white font-semibold text-base sm:text-lg">Help</h4>
            <ul class="flex flex-col gap-3 sm:gap-4">
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">FAQs</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Help Center</a></li>
              <li><a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Support</a></li>
            </ul>
          </div>

        </div>
      </div>

   
      <div class="w-full h-px bg-white/20 my-8 sm:my-12"></div>


      <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-sm sm:text-base text-gray-300">
        <p>&copy; 2026</p>
        <div class="flex items-center gap-6 sm:gap-8">
          <a href="#" class="hover:text-white transition-colors">Term of Service</a>
          <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
        </div>
      </div>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
