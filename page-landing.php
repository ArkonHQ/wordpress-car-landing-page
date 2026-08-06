<?php 
/*
  Template Name: Car Landing Page
*/
?>
<!-- header -->
<?php get_header(); ?>

<!-- hero section -->
<?php get_template_part('template-parts/hero'); ?>

<!-- products section -->
<?php get_template_part('template-parts/products'); ?>

<!-- story section  -->
 <?php get_template_part('template-parts/story'); ?>


<!-- reviews section -->
<section class="reviews">
  <div class="container">
    <div class="section-header">
      <h2>What Our Riders Say</h2>
      <p>Join thousands of happy customers.</p>
    </div>

    <div class="review-cards">
      <div class="review-card">
        <div class="rating">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
        </div>
        <p class="review-text">"Best purchase I've made this year! The battery life is incredible."</p>
        <div class="reviewer">
          <img src="./assets/user1.jpg" alt="Sarah K.">
          <div>
            <h4>Sarah K.</h4>
            <span>Urban Commuter</span>
          </div>
        </div>
      </div>

      <div class="review-card">
        <div class="rating">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
        </div>
        <p class="review-text">"Fast, reliable, and looks amazing. Gets me to work in half the time."</p>
        <div class="reviewer">
          <img src="./assets/user2.jpg" alt="Michael B.">
          <div>
            <h4>Michael B.</h4>
            <span>Tech Enthusiast</span>
          </div>
        </div>
      </div>

      <div class="review-card">
        <div class="rating">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
          <img src="./assets/icons/star.svg" alt="Star">
        </div>
        <p class="review-text">"The build quality is top-notch. Worth every penny."</p>
        <div class="reviewer">
          <img src="./assets/user3.jpg" alt="Emily R.">
          <div>
            <h4>Emily R.</h4>
            <span>Fitness Lover</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- faq section -->
<section class="faq">
  <div class="container">
    <div class="section-header">
      <h2>Frequently Asked Questions</h2>
      <p>Everything you need to know about our bikes.</p>
    </div>

    <div class="faq-list">
      <div class="faq-item">
        <button class="faq-question">
          <span>How far can I travel on a single charge?</span>
          <img src="./assets/icons/plus.svg" alt="">
        </button>
        <div class="faq-answer">
          <p>Our Urban Commuter model can travel up to 100 miles on a single charge, depending on terrain and riding conditions.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>Do I need a license to ride this bike?</span>
          <img src="./assets/icons/plus.svg" alt="">
        </button>
        <div class="faq-answer">
          <p>No license required in most regions. Check your local regulations for specific requirements.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">
          <span>How long does it take to charge the battery?</span>
          <img src="./assets/icons/plus.svg" alt="">
        </button>
        <div class="faq-answer">
          <p>A full charge takes approximately 3 hours using the included fast charger.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>