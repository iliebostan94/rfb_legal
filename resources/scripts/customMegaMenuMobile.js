
// console.log("hello from customMegaMenu");


if (screen && screen.width < 800) {
  console.log("code for mobile");
  function mobileMenuReposition() {
    // console.log("mobileMenuReposition log here >>>> ");

    const trigger = document.querySelector(".mega-menu-toggle");
    const mobMenu = document.querySelector("#mega-menu-primary_navigation");
    const mobMenuCTASec = document.querySelector("#mobile-menu-cta-section");

    if (!trigger) return;

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
    backIconSpan.classList.add('custom-back-indicator' , 'mb-4' , 'text-base' , 'font-normal' , 'text-darkGrey' , 'leading-6');
    backIconSpan.setAttribute('data-has-click-event', 'true');

    let nameSpanFirstLevel = document.createElement('span');
    nameSpanFirstLevel.classList.add('text-brandBlue', 'font-semibold', 'text-2xl' , 'leading-8');

    let firstLevelSeparationBar = document.createElement('div');
    firstLevelSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');

    backIconSpan.addEventListener('click', function (backIconEvent) {
      backIconEvent.preventDefault();
      let firstUL = backIconSpan.parentNode.parentNode;
      firstUL.classList.remove("first-level-container-panel", "firstLevelSuperClass", "animate-fade-left", "animate-duration-500");
      document.querySelector("li.first-level-parent.mega-toggle-on").classList.remove("mega-toggle-on", "menu-set-on-top");
    });

    let nameDiv = document.createElement('div');
    nameDiv.classList.add('flex', 'flex-col', 'text-black', 'p-3', 'text-xl');

    firstLevelParents.forEach(function (firstLevelChildren) {
      let firstLevelTrigger = firstLevelChildren.querySelector("span.mega-indicator");
      firstLevelTrigger.addEventListener('click', function (event) {
        event.preventDefault();
        firstLevelChildren.classList.add("menu-set-on-top");

        let firstUL = firstLevelChildren.querySelector('.mega-sub-menu');

        if (firstUL) {

          backIconSpan.textContent = " Back";
          firstUL.classList.add("first-level-container-panel", "firstLevelSuperClass", "animate-fade-left", "animate-duration-500" , "z-91" );
          nameSpanFirstLevel.textContent    = firstLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          nameDiv.prepend(backIconSpan);
          nameDiv.append(nameSpanFirstLevel);
          nameDiv.append(firstLevelSeparationBar);
          firstUL.prepend(nameDiv);

        } else {
          console.log("touch failed");
        }
      });
    });
    // END first level items logic ------------------------
  }

  function mobileMenuChildrenSecondLevelExpansion() {
    // second level items logic ------------------------
    const secondLevelParents = document.querySelectorAll(".second-level-parent");

    let backIconSpanSecondLevel = document.createElement('span');
    backIconSpanSecondLevel.classList.add('custom-back-indicator' , 'mb-4' , 'text-base' , 'font-normal' , 'text-darkGrey' , 'leading-6');
    backIconSpanSecondLevel.setAttribute('data-has-click-event', 'true');

    let nameSpanSecondLevel = document.createElement('span');
    nameSpanSecondLevel.classList.add('text-brandBlue', 'font-semibold', 'text-2xl' , 'leading-8');

    let secondLevelSeparationBar = document.createElement('div');
    secondLevelSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');

    backIconSpanSecondLevel.addEventListener('click', function (backIconEvent) {
      backIconEvent.preventDefault();
      let secondLevelParents = backIconSpanSecondLevel.parentNode.parentNode;
      secondLevelParents.classList.remove("second-level-container-panel", "secondLevelSuperClass", "animate-fade-left", "animate-duration-500");
      document.querySelector("li.second-level-parent.mega-toggle-on").classList.remove("mega-toggle-on", "menu-set-on-top");
    });

    let nameDivSecondLevel = document.createElement('div');
    nameDivSecondLevel.classList.add( 'flex', 'flex-col', 'text-black', 'p-3', 'text-xl');
    let exploreDivSecondLevel = document.createElement('a');
    exploreDivSecondLevel.classList.add('block', 'text-darkGrey', 'font-bold', 'uppercase', 'text-sm', 'second-level-explore-title');

    secondLevelParents.forEach(function (secondLevelChildren) {
      let secondLevelTrigger = secondLevelChildren.querySelector("span.mega-indicator");
      secondLevelTrigger.addEventListener('click', function (event) {
        event.preventDefault();
        secondLevelChildren.classList.add("menu-set-on-top");

        let secondLevelUL = secondLevelChildren.querySelector('.mega-sub-menu');
        if (secondLevelUL) {
          secondLevelUL.classList.add("second-level-container-panel", "secondLevelSuperClass", "animate-fade-left", "animate-duration-500");

          exploreDivSecondLevel.href = secondLevelChildren.querySelector('a').href;
          backIconSpanSecondLevel.textContent = " Back";
          // nameDivSecondLevel.textContent = secondLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          nameSpanSecondLevel.textContent = secondLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          exploreDivSecondLevel.textContent = "EXPLORE";
          nameDivSecondLevel.prepend(backIconSpanSecondLevel);
          nameDivSecondLevel.append(nameSpanSecondLevel);
          nameDivSecondLevel.append(secondLevelSeparationBar);
          nameDivSecondLevel.append(exploreDivSecondLevel);
          secondLevelUL.prepend(nameDivSecondLevel);

        } else {
          console.log("touch failed on second level");
        }

      });

    });

    // END second level items logic ------------------------
  }

  function mobileMenuChildrenThirdLevelExpansion() {
    // third level items logic ------------------------
    const thirdLevelParents = document.querySelectorAll(".third-level-parent");

    let backIconSpanThirdLevel = document.createElement('span');
    backIconSpanThirdLevel.classList.add('custom-back-indicator' , 'mb-4' , 'text-base' , 'font-normal' , 'text-darkGrey' , 'leading-6');
    backIconSpanThirdLevel.setAttribute('data-has-click-event', 'true');

    let nameSpanThirdLevel = document.createElement('span');
    nameSpanThirdLevel.classList.add('text-brandBlue', 'font-semibold', 'text-2xl' , 'leading-8');

    let thirdLevelSeparationBar = document.createElement('div');
    thirdLevelSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');

    backIconSpanThirdLevel.addEventListener('click', function (backIconEvent) {
      backIconEvent.preventDefault();
      let thirdLevelParents = backIconSpanThirdLevel.parentNode.parentNode;
      thirdLevelParents.classList.remove("third-level-container-panel", "thirdLevelSuperClass", "animate-fade-left", "animate-duration-500");
      document.querySelector("li.third-level-parent.mega-toggle-on").classList.remove("mega-toggle-on", "menu-set-on-top");
      let parentLiRow = backIconSpanThirdLevel.closest(".mega-menu-row.menu-set-on-top");
      // console.log(parentLiRow);
      parentLiRow.classList.remove("menu-set-on-top");
    });

    let nameDivThirdLevel = document.createElement('div');
    nameDivThirdLevel.classList.add('flex', 'flex-col', 'text-black', 'p-3', 'text-xl');
    let exploreDivThirdLevel = document.createElement('a');
    exploreDivThirdLevel.classList.add('block', 'text-darkGrey', 'font-bold', 'uppercase', 'text-sm', 'third-level-explore-title');

    thirdLevelParents.forEach(function (thirdLevelChildren) {
      let thirdLevelTrigger = thirdLevelChildren.querySelector("span.mega-indicator");
      // let parentLiRow = thirdLevelChildren.parentNode.parentNode.parentNode.parentNode;
      let parentLiRow = thirdLevelChildren.closest(".mega-menu-row");
      // console.log(parentLiRow);

      thirdLevelTrigger.addEventListener('click', function (event) {
        event.preventDefault();
        parentLiRow.classList.add("menu-set-on-top");
        thirdLevelChildren.classList.add("menu-set-on-top");

        let thirdLevelUL = thirdLevelChildren.querySelector('.mega-sub-menu');
        if (thirdLevelUL) {
          thirdLevelUL.classList.add("third-level-container-panel", "thirdLevelSuperClass", "animate-fade-left", "animate-duration-500");

          exploreDivThirdLevel.href = thirdLevelChildren.querySelector('a').href;
          backIconSpanThirdLevel.textContent = " Back";
          nameSpanThirdLevel.textContent = thirdLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          // nameDivThirdLevel.textContent = thirdLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          exploreDivThirdLevel.textContent = "EXPLORE";
          nameDivThirdLevel.prepend(backIconSpanThirdLevel);
          nameDivThirdLevel.append(nameSpanThirdLevel);
          nameDivThirdLevel.append(thirdLevelSeparationBar);
          nameDivThirdLevel.append(exploreDivThirdLevel);
          thirdLevelUL.prepend(nameDivThirdLevel);

        } else {
          console.log("touch failed on third level");
        }

      });

    });

    // END third level items logic ------------------------
  }

  window.addEventListener("DOMContentLoaded", () => {

    mobileMenuReposition();
    mobileMenuChildrenLevelExpansion();
    mobileMenuChildrenSecondLevelExpansion();
    mobileMenuChildrenThirdLevelExpansion();
  });

}

