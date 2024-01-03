import { domReady } from "@roots/sage/client";
import Glide from '@glidejs/glide';
// import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm';
import { Carousel } from 'flowbite';
import "./customMegaMenuMobile.js";
import "./customMegaMenuDesktop.js";
import "./general.js";


/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);


function testItFirst() {
  console.log("testing func");
}

// Glide
// new Glide('#animation-team-carousel' , { type:'slider', perView:6, breakpoints:{ 700: {perView:1}, 1200: {perView: 3}, 1400: {perView:6}}, startAt:0, gap:50, }).mount({ Controls, Breakpoints });
// new Glide('#insights-carousel' , { type:'slider', perView:5, breakpoints:{ 700: {perView:1}, 1200: {perView: 3}, 1400: {perView:5}}, startAt:0, gap:50, }).mount({ Controls, Breakpoints });
// new Glide('#testimonials-sidebar' , { type:'slider', perView:1, startAt:0, gap:0, }).mount({ Controls, Breakpoints });


function animationTeamCarousel() {
  if (!document.querySelector("#animation-team-carousel")) return;

  document.querySelectorAll('#animation-team-carousel').forEach((element) => {
    let animationTeamCarousel = new Glide("#animation-team-carousel", {
      type:'slider',
      perView: 4,
      breakpoints:{
        700: {perView: 1},
        1200: {perView: 3},
        1400: {perView: 4}},
      peek: {
        before: 150,
        after: 150,
      },
      startAt: 2,
      gap: 50,
    });
    animationTeamCarousel.mount();
  })
}
function insightsCarousel() {
  if (!document.querySelector("#insights-carousel")) return;

  document.querySelectorAll('#insights-carousel').forEach((element) => {
    let insightsCarousel = new Glide("#insights-carousel", {
      type:'slider',
      perView: 3,
      breakpoints:{
        700: {perView: 1},
        1200: {perView: 3},
        1400: {perView: 3}},
      peek: {
        before: 150,
        after: 150,
      },
      startAt: 2,
      gap: 50,
    });
    insightsCarousel.mount();
  })
}
function testimonialsSlider() {
  if (!document.querySelector("#testimonials-sidebar")) return;

  document.querySelectorAll('#testimonials-sidebar').forEach((element) => {
    let testimonialsSidebar = new Glide("#testimonials-sidebar", {
      autoplay: 2000,
      type: "slider",
      perView: 1,
      startAt: 0,
      gap: 0,
    });
    testimonialsSidebar.mount();
  })
}
window.addEventListener("DOMContentLoaded", () => {
  console.log("testing func");

  animationTeamCarousel();
  insightsCarousel();
  testimonialsSlider();

});
