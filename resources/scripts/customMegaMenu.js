
// console.log("hello from customMegaMenu");


function mobileMenuReposition() {
  // console.log("mobileMenuReposition log here >>>> ");

  const trigger = document.querySelector(".mega-menu-toggle");
  const mobMenu = document.querySelector("#mega-menu-primary_navigation");
  const mobMenuCTASec = document.querySelector("#mobile-menu-cta-section");

  if(!trigger) return;

  trigger.addEventListener("click", () => {
    // set the menu drawer under navbar
    mobMenu.classList.add("position-under-navbar");

    // add CTA section in mobile drawer here >>>
    mobMenu.appendChild(mobMenuCTASec);
    mobMenuCTASec.classList.remove("hidden");
  });
}

function mobileMenuChildrenLevelExpansion() {

  // first level items logic ------------------------
  const firstLevelParents = document.querySelectorAll(".first-level-parent");

  let backIconSpan = document.createElement('span');
  backIconSpan.classList.add('custom-back-indicator');
  backIconSpan.setAttribute('data-has-click-event', 'true');

  backIconSpan.addEventListener('click', function (backIconEvent) {
    backIconEvent.preventDefault();
    let firstUL = backIconSpan.parentNode.parentNode;
    firstUL.classList.remove("first-level-container-panel", "firstLevelSuperClass" , "animate-fade-left" , "animate-duration-500");
    document.querySelector("li.first-level-parent.mega-toggle-on").classList.remove("mega-toggle-on" , "menu-set-on-top");
  });

  let nameDiv = document.createElement('div');
  nameDiv.classList.add('text-black', 'p-2', 'text-xl');

  firstLevelParents.forEach(function (firstLevelChildren) {
    let firstLevelTrigger = firstLevelChildren.querySelector("span.mega-indicator");
    firstLevelTrigger.addEventListener('click', function (event) {
      event.preventDefault();
      firstLevelChildren.classList.add("menu-set-on-top");

      let firstUL = firstLevelChildren.querySelector('.mega-sub-menu');

      if (firstUL) {
        firstUL.classList.add("first-level-container-panel" , "firstLevelSuperClass" , "animate-fade-left" , "animate-duration-500");

        nameDiv.textContent = firstLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag

        nameDiv.prepend(backIconSpan);
        firstUL.prepend(nameDiv);

      } else {
        console.log("touch failed");
      }
    });
  });
}

function mobileMenuChildrenSecondLevelExpansion() {
  // second level items logic ------------------------
  const secondLevelParents = document.querySelectorAll(".second-level-parent");

  let backIconSpanSecondLevel = document.createElement('span');
  backIconSpanSecondLevel.classList.add('custom-back-indicator');
  backIconSpanSecondLevel.setAttribute('data-has-click-event', 'true');

  backIconSpanSecondLevel.addEventListener('click', function (backIconEvent) {
    backIconEvent.preventDefault();
    let secondLevelParents = backIconSpanSecondLevel.parentNode.parentNode;
    secondLevelParents.classList.remove("second-level-container-panel", "secondLevelSuperClass", "animate-fade-left" ,  "animate-duration-500" );
    document.querySelector("li.second-level-parent.mega-toggle-on").classList.remove("mega-toggle-on" , "menu-set-on-top");
  });

  let nameDivSecondLevel = document.createElement('div');
  nameDivSecondLevel.classList.add('text-black', 'p-2', 'text-xl');
  let exploreDivSecondLevel = document.createElement('div');
  exploreDivSecondLevel.classList.add('text-black', 'p-2', 'text-sm' , 'ml-8' , 'second-level-explore-title');

  secondLevelParents.forEach(function (secondLevelChildren) {
    let secondLevelTrigger = secondLevelChildren.querySelector("span.mega-indicator");
    secondLevelTrigger.addEventListener('click', function (event) {
      event.preventDefault();
      secondLevelChildren.classList.add("menu-set-on-top");

      let secondLevelUL = secondLevelChildren.querySelector('.mega-sub-menu');
      if (secondLevelUL) {
        secondLevelUL.classList.add("second-level-container-panel", "secondLevelSuperClass" , "animate-fade-left" , "animate-duration-500" );

        nameDivSecondLevel.textContent = secondLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
        exploreDivSecondLevel.textContent = "EXPLORE";
        nameDivSecondLevel.prepend(backIconSpanSecondLevel);
        nameDivSecondLevel.append(exploreDivSecondLevel);
        secondLevelUL.prepend(nameDivSecondLevel);

      } else {
        console.log("touch failed on second level");
      }

    });

  });

  // END second level items logic ------------------------
}

window.addEventListener("DOMContentLoaded", () => {

  mobileMenuReposition();
  mobileMenuChildrenLevelExpansion();
  mobileMenuChildrenSecondLevelExpansion();

});
