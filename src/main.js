import './style.css';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);













const slider = document.querySelector('#image-slider')
if (slider) {
  const track = slider.querySelector('.slider-inner')
  const dots = slider.querySelectorAll('.dot')

  let current = 0

  function goTo (index) {
    current = index
    gsap.to(track, {
      xPercent: -index * 100,
      duration: 0.6,
      ease: 'power3.inOut'
    })

    dots.forEach((dot, i) => {
      dot.classList.toggle('bg-black', i === index)
      dot.classList.toggle('bg-gray-400', i !== index)
      dot.classList.toggle('bg-black/50', i === index)
    })
  }

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      goTo(parseInt(dot.dataset.index, 10))
    })
  })

  goTo(0)
}
