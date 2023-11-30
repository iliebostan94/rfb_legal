import { domReady } from "@roots/sage/client";
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

window.addEventListener("DOMContentLoaded", () => {

  // testItFirst();

});
