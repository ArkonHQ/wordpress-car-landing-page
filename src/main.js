import './style.css';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  // Simple reveal
  gsap.utils.toArray('.gs-reveal').forEach((elem) => {
    gsap.fromTo(elem,
      { autoAlpha: 0, y: 50 },
      {
        duration: 1,
        autoAlpha: 1,
        y: 0,
        ease: "power3.out",
        scrollTrigger: { trigger: elem, start: "top 80%", toggleActions: "play none none reverse" }
      }
    );
  });

  // Hero Animations
  gsap.fromTo('.gs-hero-container', { autoAlpha: 0, scale: 0.95 }, { duration: 1.5, autoAlpha: 1, scale: 1, ease: "expo.out" });
  gsap.fromTo('.gs-hero-text', { autoAlpha: 0, y: 30 }, { duration: 1, autoAlpha: 1, y: 0, delay: 0.3, ease: "power4.out" });
  gsap.fromTo('.gs-hero-element', { autoAlpha: 0, y: 20 }, { duration: 0.8, autoAlpha: 1, y: 0, stagger: 0.1, delay: 0.5, ease: "power3.out" });

  // Bento Box stagger reveal
  gsap.fromTo('.gs-bento-item',
    { autoAlpha: 0, y: 40 },
    {
      duration: 1, autoAlpha: 1, y: 0, stagger: 0.15, ease: "back.out(1.2)",
      scrollTrigger: { trigger: '.gs-bento-item', start: "top 85%" }
    }
  );

  // Pricing cards reveal
  gsap.fromTo('.gs-pricing-card',
    { autoAlpha: 0, y: 40 },
    {
      duration: 0.8, autoAlpha: 1, y: 0, stagger: 0.2, ease: "power3.out",
      scrollTrigger: { trigger: '.gs-pricing-card', start: "top 85%" }
    }
  );
});
