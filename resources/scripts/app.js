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
<<<<<<< HEAD
=======
// new Glide('#animation-team-carousel' , { type:'slider', perView:6, breakpoints:{ 700: {perView:1}, 1200: {perView: 3}, 1400: {perView:6}}, startAt:0, gap:50, }).mount({ Controls, Breakpoints });
// new Glide('#insights-carousel' , { type:'slider', perView:5, breakpoints:{ 700: {perView:1}, 1200: {perView: 3}, 1400: {perView:5}}, startAt:0, gap:50, }).mount({ Controls, Breakpoints });
// new Glide('#testimonials-sidebar' , { type:'slider', perView:1, startAt:0, gap:0, }).mount({ Controls, Breakpoints });

>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

function animationTeamCarousel() {
  if (!document.querySelector("#animation-team-carousel")) return;

  document.querySelectorAll('#animation-team-carousel').forEach((element) => {
    let animationTeamCarousel = new Glide("#animation-team-carousel", {
<<<<<<< HEAD
      type:'carousel',
      perView: 4,
      breakpoints: {
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
        1600: {perView: 4},
      },
      startAt: 0,
=======
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
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      gap: 50,
    });
    animationTeamCarousel.mount();
  })
}
<<<<<<< HEAD

function tierKeyPeopleCarousel() {
  if (!document.querySelector("#tier-template-key-people-carousel")) return;

  document.querySelectorAll('#tier-template-key-people-carousel').forEach((element) => {
    let tierKeyPeopleCarousel = new Glide("#tier-template-key-people-carousel", {
      type:'carousel',
      perView: 4,
      breakpoints: {
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
        1600: {perView: 4},
      },
      startAt: 0,
      gap: 50,
    });
    tierKeyPeopleCarousel.mount();
  })
}

function insightsCarousel() {
  if (!document.querySelector("#insights-carousel")) return;

  document.querySelectorAll('#insights-carousel').forEach((element) => {
    let insightsCarousel = new Glide("#insights-carousel", {
      type:'carousel',
      perView: 3,
      breakpoints:{
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
      },
      // peek: {
      //   before: 150,
      //   after: 150,
      // },
      startAt: 0,
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

function peopleIndividualTestimonialsSlider() {

  if (!document.querySelector("#people_individual_testimonials_carousel")) return;

  document.querySelectorAll('#people_individual_testimonials_carousel').forEach((element) => {
    let peopleIndividualTestimonialsSlider = new Glide("#people_individual_testimonials_carousel", {
      // autoplay: 2000,
      type: "slider",
      perView: 1,
      startAt: 0,
      gap: 0,
    });
    peopleIndividualTestimonialsSlider.mount();
  })
}

function peopleIndividualRelatedInsightsCustom() {

  if (!document.querySelector("#custom_related_insights")) return;

  document.querySelectorAll('#custom_related_insights').forEach((element) => {
    let peopleIndividualRelatedInsightsCustom = new Glide("#custom_related_insights", {
      type:'slider',
      perView: 3,
      breakpoints:{
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
      },
      // peek: {
      //   before: 150,
      //   after: 150,
      // },
      startAt: 0,
      gap: 50,
    });
    peopleIndividualRelatedInsightsCustom.mount();
  })
}


function peopleIndividualRelatedInsightsDefault() {

  if (!document.querySelector("#default_related_insights")) return;

  document.querySelectorAll('#default_related_insights').forEach((element) => {
    let peopleIndividualRelatedInsightsDefault = new Glide("#default_related_insights", {
      type:'slider',
      perView: 3,
      breakpoints:{
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
      },
      // peek: {
      //   before: 150,
      //   after: 150,
      // },
      startAt: 0,
      gap: 50,
    });
    peopleIndividualRelatedInsightsDefault.mount();
  })
}

function customTierRelatedInsightsFunction() {
  if (!document.querySelector("#custom_tier_related_insights")) return;

  document.querySelectorAll('#custom_tier_related_insights').forEach((element) => {
    let customTierRelatedInsightsFunction = new Glide("#custom_tier_related_insights", {
      type:'slider',
      perView: 3,
      breakpoints:{
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
      },
      // peek: {
      //   before: 150,
      //   after: 150,
      // },
      startAt: 0,
      gap: 50,
    });
    customTierRelatedInsightsFunction.mount();
  })
}

function defaultTierRelatedInsightFunction() {
  if (!document.querySelector("#default_tier_related_insight")) return;

  document.querySelectorAll('#default_tier_related_insight').forEach((element) => {
    let defaultTierRelatedInsightFunction = new Glide("#default_tier_related_insight", {
      type:'slider',
      perView: 3,
      breakpoints:{
        700: {perView: 1 , gap: 0 , focusAt: 'center'},
        1200: {perView: 2},
        1400: {perView: 3},
      },
      // peek: {
      //   before: 150,
      //   after: 150,
      // },
      startAt: 0,
      gap: 50,
    });
    defaultTierRelatedInsightFunction.mount();
  })
}


window.addEventListener("DOMContentLoaded", () => {
  // console.log("testing func");
=======
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
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

  animationTeamCarousel();
  insightsCarousel();
  testimonialsSlider();
<<<<<<< HEAD
  tierKeyPeopleCarousel();
  peopleIndividualTestimonialsSlider();
  peopleIndividualRelatedInsightsCustom();
  peopleIndividualRelatedInsightsDefault();
  customTierRelatedInsightsFunction();
  defaultTierRelatedInsightFunction();
=======
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

});
