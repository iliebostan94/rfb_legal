import { domReady } from "@roots/sage/client";
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm';
import "./customMegaMenuMobile.js";
import "./customMegaMenuDesktop.js";
import "./general.js";
import "./allCarousels.js"


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

window.addEventListener("DOMContentLoaded", () => {
  // Glide
  new Glide('#animation-team-carousel' , { type:'slider', startAt:0, perView:4, gap:50, }).mount({ Controls, Breakpoints })

  // testItFirst();

});
