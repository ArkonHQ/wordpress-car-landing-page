<footer class="relative overflow-hidden bg-black text-white" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Footer.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
  <div class="absolute inset-0 bg-black/30"></div>

  <div class="relative mx-auto flex w-full items-center" style="max-width: 1440px; min-height: clamp(420px, 50vw, 650px);">
    <div class="relative mx-auto flex w-full max-w-6xl flex-col gap-6 px-6 py-16 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 class="text-2xl font-semibold">EV Landing Page</h3>
        <p class="mt-2 max-w-md text-sm text-white/80">A modern electric vehicle experience with smart charging, clean design, and future-ready comfort.</p>
      </div>

      <div class="flex flex-col gap-2 text-sm text-white/80 sm:flex-row sm:gap-6">
        <a href="#" class="transition hover:text-white">Home</a>
        <a href="#" class="transition hover:text-white">Products</a>
        <a href="#" class="transition hover:text-white">Contact</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
