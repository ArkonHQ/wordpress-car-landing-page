import './style.css';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// ================================================================
//  UTILITY
// ================================================================
function onReady(fn) {
  if (document.readyState !== 'loading') fn();
  else document.addEventListener('DOMContentLoaded', fn);
}

onReady(() => {
  initNavbar();
  initHeroAnimations();
  initSectionAnimations();
  initImageReveal();
  initButtonAnimations();
  initImageHoverTilt();
  initSlider();
});


// ================================================================
//  1. NAVBAR 
// ================================================================
function initNavbar() {
  const nav = document.querySelector('#site-nav');
  if (!nav) return;

  // Entrance: drop in from above
  gsap.from(nav, {
    y: -80, opacity: 0, duration: 1, ease: 'expo.out', delay: 0.2,
  });

  // Scroll: transitions from solid edge-to-edge sharp to translucent floating
  ScrollTrigger.create({
    start: 'top+=80 top',
    onEnter() {
      gsap.to(nav, {
        width: '75%',
        top: '1rem',
        backgroundColor: 'rgba(255,255,255,0.70)',
        backdropFilter: 'blur(16px)',
        boxShadow: '0 4px 32px rgba(0,0,0,0.10)',
        borderRadius: '24px',
        duration: 0.45,
        ease: 'power2.out',
      });
    },
    onLeaveBack() {
      gsap.to(nav, {
        width: '100%',
        top: 0,
        backgroundColor: 'rgba(255,255,255,1)',
        backdropFilter: 'blur(0px)',
        boxShadow: 'none',
        borderRadius: '0px',
        duration: 0.45,
        ease: 'power2.out',
      });
    },
  });
}


// ================================================================
//  2. HERO
// ================================================================
function initHeroAnimations() {
  const heroSection = document.querySelector('#hero-section');
  if (!heroSection) return;

  const elSmooth = document.querySelector('#hero-smooth');
  const elCarOuter = document.querySelector('#hero-car-outer');
  const elCarInner = document.querySelector('#hero-car-inner');
  const elCarGlow = document.querySelector('#hero-car-glow');
  const elCarGlow2 = document.querySelector('#hero-car-glow2');
  const elEv = document.querySelector('#hero-ev');
  const elDivider = document.querySelector('#hero-divider');
  const elStats = document.querySelectorAll('.hero-stat');
  const elGlowTop = document.querySelector('#hero-glow-top');
  const elGlowLeft = document.querySelector('#hero-glow-left');
  const elGlowRight = document.querySelector('#hero-glow-right');
  const elScanLine = document.querySelector('#hero-scan-line');
  const elLightShaft = document.querySelector('#hero-light-shaft');

  // Read computed letter-spacing BEFORE gsap touches anything
  const EV_SPACING_FINAL = window.getComputedStyle(elEv).letterSpacing;
  const EV_Y_RESTING = 152; // px — Tailwind translate-y-38 (38 × 4px)

  // Initial hidden states
  gsap.set(elSmooth, { opacity: 0, y: -180, scale: 0.78, filter: 'blur(28px)' });
  gsap.set(elCarOuter, { opacity: 0, y: 300, scale: 0.65, filter: 'blur(14px)', transformOrigin: 'center bottom' });
  gsap.set(elCarGlow, { opacity: 0, scaleX: 0.15, transformOrigin: 'center center' });
  gsap.set(elCarGlow2, { opacity: 0, scaleX: 0.10, transformOrigin: 'center center' });
  gsap.set(elEv, { opacity: 0, y: EV_Y_RESTING + 100, letterSpacing: '90px', filter: 'blur(14px)' });
  gsap.set(elDivider, { scaleX: 0, transformOrigin: 'center center' });
  gsap.set(elStats, { opacity: 0, y: 80, filter: 'blur(5px)' });
  gsap.set([elGlowTop, elGlowLeft, elGlowRight], { opacity: 0, scale: 0.7 });
  gsap.set(elScanLine, { opacity: 0, scaleX: 0, transformOrigin: 'left center' });
  gsap.set(elLightShaft, { opacity: 0 });

  // Master load timeline
  const tl = gsap.timeline({ delay: 0.25 });

  tl
    .to([elGlowLeft, elGlowRight], { opacity: 1, scale: 1, duration: 2.2, ease: 'power2.out', stagger: 0.3 }, 0)
    .to(elGlowTop, { opacity: 1, scale: 1, duration: 2.8, ease: 'power2.out' }, 0.1)
    .to(elLightShaft, { opacity: 1, duration: 1.5, ease: 'power2.out' }, 0.1)
    // scan line sweeps: cinematic "world loading" feel
    .to(elScanLine, { opacity: 1, scaleX: 1, duration: 0.55, ease: 'power3.inOut' }, 0.15)
    .to(elScanLine, { opacity: 0, duration: 0.45, ease: 'power2.out' }, 0.75)
    // SMOOTH crashes from the top
    .to(elSmooth, { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 1.45, ease: 'expo.out' }, 0.2)
    // Car rises — the hero moment
    .to(elCarOuter, { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 1.9, ease: 'power4.out' }, 0.55)
    // car shadow blooms as it lands
    .to(elCarGlow, { opacity: 1, scaleX: 1, duration: 1.1, ease: 'power2.out' }, 1.6)
    .to(elCarGlow2, { opacity: 1, scaleX: 1, duration: 0.9, ease: 'power2.out' }, 1.75)
    // EV CARS rises + letter-spacing condenses
    .to(elEv, {
      opacity: 1, y: EV_Y_RESTING, letterSpacing: EV_SPACING_FINAL,
      filter: 'blur(0px)', duration: 1.5, ease: 'expo.out',
    }, 1.05)
    // divider draws from center
    .to(elDivider, { scaleX: 1, duration: 1.1, ease: 'power3.inOut' }, 2.0)
    // stats cascade up with spring
    .to(elStats, { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.9, ease: 'back.out(1.7)', stagger: 0.18 }, 2.2);

  // Continuous ambience
  gsap.to(elCarInner, { y: -22, duration: 3.6, ease: 'sine.inOut', repeat: -1, yoyo: true, delay: 2.7 });
  gsap.to([elCarGlow, elCarGlow2], { scaleX: 1.45, opacity: 0.5, duration: 2.8, ease: 'sine.inOut', repeat: -1, yoyo: true, delay: 2.6, stagger: 0.35 });
  gsap.to(elGlowTop, { scale: 1.18, opacity: 0.9, duration: 5.5, ease: 'sine.inOut', repeat: -1, yoyo: true, delay: 1.5 });
  gsap.to(elGlowLeft, { x: 30, scale: 1.08, duration: 7, ease: 'sine.inOut', repeat: -1, yoyo: true, delay: 1 });
  gsap.to(elGlowRight, { x: -30, scale: 1.08, duration: 7, ease: 'sine.inOut', repeat: -1, yoyo: true, delay: 1.5 });

  // Scroll parallax
  tl.call(() => {
    const base = { trigger: heroSection, start: 'top top', scrub: 1.3 };

    gsap.to(elCarOuter, { y: -200, scale: 1.07, ease: 'none', scrollTrigger: { ...base, end: 'bottom top' } });
    gsap.to(elSmooth, { y: -110, opacity: 0, scale: 1.1, filter: 'blur(10px)', ease: 'none', scrollTrigger: { ...base, end: '60% top', scrub: 1 } });
    gsap.fromTo(elEv,
      { y: EV_Y_RESTING, opacity: 1, filter: 'blur(0px)' },
      { y: EV_Y_RESTING + 150, opacity: 0, filter: 'blur(10px)', ease: 'none', scrollTrigger: { ...base, end: '50% top', scrub: 1 } }
    );
    gsap.to([elGlowTop, elGlowLeft, elGlowRight], { opacity: 0, ease: 'none', scrollTrigger: { ...base, end: '45% top', scrub: 0.9 } });
    gsap.to(elLightShaft, { opacity: 0, ease: 'none', scrollTrigger: { ...base, end: '35% top', scrub: 0.8 } });
    gsap.to(elStats, { opacity: 0, y: 40, stagger: 0.05, ease: 'none', scrollTrigger: { ...base, start: '20% top', end: '60% top', scrub: 0.9 } });
    gsap.to(elDivider, { scaleX: 0, opacity: 0, ease: 'none', scrollTrigger: { ...base, start: '18% top', end: '48% top', scrub: 0.8 } });
    gsap.to([elCarGlow, elCarGlow2], { opacity: 0, scaleX: 0.3, ease: 'none', scrollTrigger: { ...base, end: '40% top', scrub: 1 } });
  });
}


// ================================================================
//  3. SECTION ENTRANCE ANIMATIONS
// ================================================================
function initSectionAnimations() {

  // Section badges
  document.querySelectorAll('.section-badge').forEach(el => {
    gsap.from(el, {
      opacity: 0, y: 30, scale: 0.88,
      duration: 0.7, ease: 'back.out(1.8)',
      scrollTrigger: { trigger: el, start: 'top 88%', toggleActions: 'play none none none' },
    });
  });

  // Section headings
  document.querySelectorAll('.section-heading').forEach(el => {
    gsap.from(el, {
      opacity: 0, y: 50, filter: 'blur(6px)',
      duration: 0.85, ease: 'expo.out',
      scrollTrigger: { trigger: el, start: 'top 86%', toggleActions: 'play none none none' },
    });
  });

  // Section body text
  document.querySelectorAll('.section-text').forEach(el => {
    gsap.from(el, {
      opacity: 0, y: 30,
      duration: 0.8, ease: 'power3.out',
      scrollTrigger: { trigger: el, start: 'top 87%', toggleActions: 'play none none none' },
    });
  });

  // Bento grid cards
  const bentoCards = document.querySelectorAll('.bento-card');
  if (bentoCards.length) {
    gsap.from(bentoCards, {
      opacity: 0, y: 60, scale: 0.94,
      duration: 0.75, ease: 'back.out(1.5)', stagger: 0.1,
      scrollTrigger: {
        trigger: '#mobility-section',
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
    });
  }

  // Product cards
  const productCards = document.querySelectorAll('.product-card');
  if (productCards.length) {
    gsap.from(productCards, {
      opacity: 0, y: 80, filter: 'blur(4px)',
      duration: 0.8, ease: 'power3.out', stagger: 0.18,
      scrollTrigger: {
        trigger: '#products-section',
        start: 'top 78%',
        toggleActions: 'play none none none',
      },
    });
  }

  // Story image wrappers
  const storyWraps = document.querySelectorAll('.story-img-wrap');
  storyWraps.forEach((el, i) => {
    gsap.from(el, {
      opacity: 0,
      x: i === 0 ? -60 : 60,
      duration: 0.9, ease: 'expo.out',
      scrollTrigger: { trigger: el, start: 'top 84%', toggleActions: 'play none none none' },
    });
  });

  // Contact form fields
  const formFields = document.querySelectorAll('.form-field');
  if (formFields.length) {
    gsap.from(formFields, {
      opacity: 0, y: 30, filter: 'blur(3px)',
      duration: 0.55, ease: 'power2.out', stagger: 0.1,
      scrollTrigger: {
        trigger: '#contact-form',
        start: 'top 82%',
        toggleActions: 'play none none none',
      },
    });
  }

  // Contact car image
  const contactCar = document.querySelector('#contact-car-img');
  if (contactCar) {
    gsap.from(contactCar, {
      opacity: 0, x: 80, scale: 0.92,
      duration: 1.1, ease: 'expo.out',
      scrollTrigger: {
        trigger: contactCar,
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
    });
  }
}


// ================================================================
//  4. IMAGE REVEAL
// ================================================================
function initImageReveal() {
  document.querySelectorAll('.reveal-img').forEach(img => {
    // Wrap in a clip container if not already
    const parent = img.parentElement;
    const needsWrapper = !parent.classList.contains('img-clip-wrap');

    let clipEl = img;

    if (needsWrapper && getComputedStyle(parent).overflow !== 'hidden') {
      // Only wrap if safe — for absolutely positioned parents skip
      const pos = getComputedStyle(parent).position;
      if (pos !== 'absolute' && pos !== 'fixed') {
        const wrap = document.createElement('div');
        wrap.className = 'img-clip-wrap';
        wrap.style.cssText = 'overflow:hidden; display:inline-block; width:100%;';
        parent.insertBefore(wrap, img);
        wrap.appendChild(img);
        clipEl = wrap;
      }
    }

    gsap.fromTo(img,
      { scale: 1.15, filter: 'blur(8px)', opacity: 0 },
      {
        scale: 1, filter: 'blur(0px)', opacity: 1,
        duration: 1.1, ease: 'power3.out',
        scrollTrigger: {
          trigger: img,
          start: 'top 85%',
          toggleActions: 'play none none none',
        },
      }
    );
  });
}


// ================================================================
//  5. BUTTON ANIMATIONS
// ================================================================
function initButtonAnimations() {
  // All primary-btn and animated-btn elements
  const btns = document.querySelectorAll('.primary-btn, .animated-btn, [type="submit"]');

  btns.forEach(btn => {
    // Magnetic hover
    btn.addEventListener('mousemove', e => {
      const rect = btn.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = (e.clientX - cx) * 0.28;
      const dy = (e.clientY - cy) * 0.28;
      gsap.to(btn, { x: dx, y: dy, scale: 1.06, duration: 0.35, ease: 'power2.out' });
    });

    btn.addEventListener('mouseleave', () => {
      gsap.to(btn, { x: 0, y: 0, scale: 1, duration: 0.5, ease: 'elastic.out(1, 0.5)' });
    });

    // Ripple on click
    btn.addEventListener('click', e => {
      const rect = btn.getBoundingClientRect();
      const ripple = btn.querySelector('.btn-ripple');
      if (!ripple) return;

      const ox = e.clientX - rect.left;
      const oy = e.clientY - rect.top;

      gsap.set(ripple, {
        x: ox, y: oy,
        width: 0, height: 0,
        xPercent: -50, yPercent: -50,
        opacity: 0.45,
        background: 'rgba(255,255,255,0.55)',
        borderRadius: '50%',
        position: 'absolute',
        pointerEvents: 'none',
      });

      gsap.to(ripple, {
        width: Math.max(rect.width, rect.height) * 2.5,
        height: Math.max(rect.width, rect.height) * 2.5,
        opacity: 0,
        duration: 0.65,
        ease: 'power2.out',
      });
    });

    // Press feedback
    btn.addEventListener('mousedown', () => {
      gsap.to(btn, { scale: 0.96, duration: 0.12, ease: 'power2.in' });
    });
    btn.addEventListener('mouseup', () => {
      gsap.to(btn, { scale: 1.06, duration: 0.2, ease: 'elastic.out(1.2, 0.5)' });
    });
  });

  // Nav CTA extra shimmer effect
  const navCta = document.querySelector('#nav-cta');
  if (navCta) {
    const shimmer = document.createElement('div');
    shimmer.style.cssText = `
      position: absolute; top: 0; left: -100%; width: 60%; height: 100%;
      background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
      pointer-events: none; transform: skewX(-20deg);
    `;
    navCta.style.position = 'relative';
    navCta.style.overflow = 'hidden';
    navCta.appendChild(shimmer);

    navCta.addEventListener('mouseenter', () => {
      gsap.fromTo(shimmer, { left: '-100%' }, { left: '150%', duration: 0.55, ease: 'power2.inOut' });
    });
  }
}


// ================================================================
//  6. IMAGE HOVER TILT
// ================================================================
function initImageHoverTilt() {
  const tiltImgs = document.querySelectorAll(
    '.story-img-wrap img, .product-card img, #contact-car-img'
  );

  tiltImgs.forEach(img => {
    img.addEventListener('mousemove', e => {
      const rect = img.getBoundingClientRect();
      const nx = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 → 0.5
      const ny = (e.clientY - rect.top) / rect.height - 0.5;
      gsap.to(img, {
        rotateY: nx * 10,
        rotateX: -ny * 8,
        scale: 1.04,
        filter: 'brightness(1.08)',
        duration: 0.4,
        ease: 'power2.out',
        transformPerspective: 800,
        transformOrigin: 'center center',
      });
    });

    img.addEventListener('mouseleave', () => {
      gsap.to(img, {
        rotateY: 0, rotateX: 0, scale: 1, filter: 'brightness(1)',
        duration: 0.6, ease: 'elastic.out(1, 0.6)',
      });
    });
  });
}


// ================================================================
//  7. IMAGE SLIDER
// ================================================================
function initSlider() {
  const slider = document.querySelector('#image-slider');
  if (!slider) return;

  const track = slider.querySelector('.slider-inner');
  const dots = slider.querySelectorAll('.dot');
  let current = 0;
  let autoTimer = null;

  function goTo(index, dir = 1) {
    current = index;

    gsap.to(track, {
      xPercent: -index * 100,
      duration: 0.7,
      ease: 'power3.inOut',
    });

    dots.forEach((dot, i) => {
      gsap.to(dot, {
        width: i === index ? '2.5rem' : '0.75rem',
        backgroundColor: i === index ? '#000' : '#9ca3af',
        duration: 0.35,
        ease: 'power2.out',
      });
    });
  }

  dots.forEach(dot => {
    dot.addEventListener('click', () => goTo(parseInt(dot.dataset.index, 10)));
  });

  // Auto-advance every 5 s
  function startAuto() {
    autoTimer = setInterval(() => goTo((current + 1) % dots.length), 5000);
  }
  function stopAuto() { clearInterval(autoTimer); }

  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', startAuto);

  goTo(0);
  startAuto();
}
