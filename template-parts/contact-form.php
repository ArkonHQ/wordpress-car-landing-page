<!-- Contact Form Section -->
<section id="contact-section" class="relative bg-white py-24">
  <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
    <div class="order-2 lg:order-1 lg:pr-8">
      <div class="section-badge mb-6 inline-block border border-[#e1ecf5] bg-[#EDF2F6] px-3 py-2 text-sm font-medium uppercase tracking-[0.25em] text-[#4b5563] text-center">
        Contact Us
      </div>

      <h2 class="section-heading text-3xl font-bold text-black sm:text-4xl">
        Reserve Your EV Today!
      </h2>

      <form id="contact-form" class="mt-8 rounded-[2rem] border border-[#e5e7eb] bg-white p-8 shadow-sm">
        <div class="grid gap-5 md:grid-cols-2">
          <div class="form-field">
            <label for="first-name" class="mb-2 block text-sm font-medium text-[#374151]">First Name</label>
            <input id="first-name" type="text" class="w-full rounded-2xl border border-[#d1d5db] bg-[#f9fafb] px-4 py-3 text-sm text-black outline-none transition focus:border-[#4b5563] focus:bg-white" placeholder="First name" />
          </div>
          <div class="form-field">
            <label for="last-name" class="mb-2 block text-sm font-medium text-[#374151]">Last Name</label>
            <input id="last-name" type="text" class="w-full rounded-2xl border border-[#d1d5db] bg-[#f9fafb] px-4 py-3 text-sm text-black outline-none transition focus:border-[#4b5563] focus:bg-white" placeholder="Last name" />
          </div>
        </div>

        <div class="form-field mt-5">
          <label for="email" class="mb-2 block text-sm font-medium text-[#374151]">Email</label>
          <input id="email" type="email" class="w-full rounded-2xl border border-[#d1d5db] bg-[#f9fafb] px-4 py-3 text-sm text-black outline-none transition focus:border-[#4b5563] focus:bg-white" placeholder="you@example.com" />
        </div>

        <div class="form-field mt-5">
          <label for="message" class="mb-2 block text-sm font-medium text-[#374151]">Message</label>
          <textarea id="message" rows="5" class="w-full rounded-2xl border border-[#d1d5db] bg-[#f9fafb] px-4 py-3 text-sm text-black outline-none transition focus:border-[#4b5563] focus:bg-white" placeholder="Tell us more..."></textarea>
        </div>

        <button id="contact-submit" type="submit" class="animated-btn mt-8 inline-flex items-center justify-center rounded-full bg-black px-6 py-3 text-sm font-semibold text-[#E9FF61] overflow-hidden relative">
          <span class="btn-ripple absolute inset-0 rounded-full pointer-events-none"></span>
          Send Message
        </button>
      </form>
    </div>

    <div class="order-1 flex items-center justify-end lg:order-2">
      <img id="contact-car-img" src="<?php echo get_template_directory_uri(); ?>/assets/car-front-view.png" alt="EV car" class="reveal-img w-full max-w-[760px] object-cover" />
    </div>
  </div>
</section>
