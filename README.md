
<div align="center">
  <h1>
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Travel%20and%20places/High%20Voltage.png" alt="High Voltage" width="35" />
    EV Landing Page
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Travel%20and%20places/High%20Voltage.png" alt="High Voltage" width="35" />
  </h1>

  <p><strong>A premium, high‑impact landing page theme for electric vehicle brands — built for WordPress with cutting‑edge animations.</strong></p>

  <p>
    <img src="https://img.shields.io/badge/CMS-WordPress-21759B?style=flat-square&logo=wordpress&logoColor=white" />
    <img src="https://img.shields.io/badge/Bundler-Vite-646CFF?style=flat-square&logo=vite&logoColor=white" />
    <img src="https://img.shields.io/badge/Animation-GSAP-88CE02?style=flat-square&logo=greensock&logoColor=white" />
    <img src="https://img.shields.io/badge/CSS-Tailwind_Utilities-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white" />
    <img src="https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=flat-square&logo=javascript&logoColor=black" />
    <img src="https://img.shields.io/badge/License-GPL_v2-blue?style=flat-square" />
  </p>
</div>

---

## 🔌 Overview

**EV Landing Page** is a **WordPress theme** designed to showcase electric vehicles with a jaw‑dropping, animated front‑end.  
It’s built for speed, interaction, and a futuristic feel — everything a modern EV brand needs to stand out.

From the moment the page loads, visitors experience:

- A dynamic, glass‑morphism navigation bar that responds to scroll
- A layered hero section with glowing effects and a subtle “scan‑line” animation
- Smooth entrance animations for every section
- Interactive buttons with magnetic hover and ripple feedback
- 3D image tilt effects
- A responsive auto‑advancing slider
- Parallax depth that brings the page to life

All animations are powered by **GSAP + ScrollTrigger**, bundled with **Vite** for lightning‑fast development, and styled with clean CSS (including Tailwind utilities for consistency).

---

## 🎥 Live Preview

*[Insert a GIF or screenshot of the landing page in action]*

---

## ⚡ Features

| Category | Details |
|----------|---------|
| **Dynamic Navbar** | Shrinks and becomes translucent on scroll — smooth entrance animation. |
| **Hero Section** | Multi‑layered car illustration, glowing accents, scan‑line animation. |
| **Section Entrances** | Staggered fade‑in, slide‑up, and blur transitions for headings, text, cards, and forms. |
| **Image Reveal** | Smooth clipping and blur‑to‑focus effect as you scroll. |
| **Interactive Buttons** | Magnetic hover, ripple click feedback, and a shimmer CTA. |
| **Image Hover Tilt** | 3D tilt with brightness boost on hover. |
| **Responsive Slider** | Auto‑advancing showcase with dot navigation. |
| **Scroll Parallax** | Subtle depth movement for hero elements. |
| **Performance** | GPU‑accelerated animations, Vite‑optimised assets, minimal footprint. |

---

## 🛠️ Tech Stack

- **WordPress** — the backbone, fully theme‑ready  
- **Vite** — dev server with HMR & production bundling  
- **GSAP + ScrollTrigger** — fluid, high‑performance animations  
- **Vanilla CSS** — custom design tokens + optional Tailwind utilities  
- **PHP** — template parts (`header.php`, `footer.php`, `page-landing.php`, etc.)

---

## 📁 Project Structure

```
ev-landing-page/
├── assets/                # Static images & icons
├── dist/                  # Production built files (Vite output)
├── src/
│   ├── main.js            # All GSAP animation logic
│   └── style.css          # Theme stylesheet
├── template-parts/        # Reusable PHP partials
│   └── ...
├── footer.php
├── functions.php
├── page-landing.php       # Landing page template
├── index.php
├── vite.config.js
├── package.json
└── tailwind.config.js     # Optional Tailwind utilities
```

---

## 🚀 Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) (v16+)
- [WordPress](https://wordpress.org/) installed locally or on a server

### 1. Clone & Install

```bash
git clone <your-repo-url>
cd ev-landing-page
npm install
```

### 2. Development Mode

```bash
npm run dev
```

Vite will watch your `src/` files and rebuild on save.  
Open your WordPress site — changes are visible immediately.

### 3. Production Build

```bash
npm run build
```

Optimised assets are output to `dist/`.  
The theme’s `functions.php` automatically enqueues them.

### 4. Activate in WordPress

1. Copy the entire `ev-landing-page` folder into your WordPress `wp-content/themes/` directory.  
2. Go to **Appearance → Themes** and activate **EV Landing Page**.  
3. Create a new page and select the **Landing Page** template from the Page Attributes meta box.  
4. Publish — and your animated EV showcase is live.

---

## 🎨 Customisation

The theme is designed to be easily tailored to your brand.

- **Colors & Typography** – edit `style.css` or tweak the Tailwind config.  
- **Animation Timings** – adjust GSAP parameters in `src/main.js` (search for `duration`, `stagger`, etc.).  
- **Slider Images** – replace the `<div class="slider-inner">` content in `page-landing.php` or its included partials.  
- **Content Sections** – modify the PHP files inside `template-parts/` to change text, layout, or add new sections.  

---

## 🧠 Design Philosophy

- **Premium Feel** – Glass‑morphism, gradient accents, and subtle micro‑interactions convey a high‑end EV aesthetic.  
- **Performance‑First** – Vite ensures only necessary code is loaded; GSAP animations run on the GPU for buttery‑smooth 60fps.  
- **Responsive by Default** – Every animation adapts to viewport size, and layouts collapse gracefully on mobile devices.  

---

## 📸 Showcase

*![Hero Section](assets/screenshot-1.png)*  
*![Slider & Hover Effects](assets/screenshot-2.png)*  

*(Add real screenshots or a GIF of the page for maximum impact.)*

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you’d like to change.

---

## 📜 License

This project is licensed under the **GPL v2** (or later) — compatible with WordPress.  
See the [LICENSE](LICENSE) file for details.

---

<div align="center">
  <p>Built with passion by <strong>ArkonHQ</strong></p>
  <p>
    <a href="mailto:arkonhq.dev@gmail.com">
      <img src="https://img.shields.io/badge/Contact-Email-D14836?style=for-the-badge&logo=gmail&logoColor=white" />
    </a>
  </p>
  <p>
    <sub>⚡ Electrify your online presence.</sub>
  </p>
</div>
```
