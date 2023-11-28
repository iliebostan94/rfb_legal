
if (screen && screen.width > 800) {
  console.log("code for desktop");

  function mobileMenuChildrenThirdLevelExpansion() {
    // third level items logic ------------------------
    // all consts
    const thirdLevelParents         = document.querySelectorAll(".third-level-parent");
    const personalItemColumn        = document.querySelector(".personal-law-column");
    const personalItemColumnClone   = personalItemColumn.cloneNode(false);

    const businessItemColumn        = document.querySelector(".business-law-column");
    const businessItemColumnClone   = businessItemColumn.cloneNode(false);



    // create column (Personal & Business) top EXPLORE Nav bar
    let nameDivThirdLevelPersonal = document.createElement('div');
    nameDivThirdLevelPersonal.classList.add('text-black', 'p-4', 'text-xl');
    let exploreDivThirdLevelPersonal = document.createElement('a');
    exploreDivThirdLevelPersonal.classList.add('block', 'text-black', 'pt-2', 'text-sm', 'third-level-explore-title');

    let nameDivThirdLevelBusiness = document.createElement('div');
    nameDivThirdLevelBusiness.classList.add('text-black', 'p-4', 'text-xl');
    let exploreDivThirdLevelBusiness = document.createElement('a');
    exploreDivThirdLevelBusiness.classList.add('block', 'text-black', 'pt-2', 'text-sm', 'third-level-explore-title');

    nameDivThirdLevelPersonal.textContent = document.querySelector('#mega-menu-item-150 a').textContent;
    exploreDivThirdLevelPersonal.textContent = "EXPLORE";
    exploreDivThirdLevelPersonal.href = document.querySelector('#mega-menu-item-150 a').href;
    nameDivThirdLevelPersonal.append(exploreDivThirdLevelPersonal);
    personalItemColumn.prepend(nameDivThirdLevelPersonal);

    nameDivThirdLevelBusiness.textContent = document.querySelector('#mega-menu-item-151 a').textContent;
    exploreDivThirdLevelBusiness.textContent = "EXPLORE";
    exploreDivThirdLevelBusiness.href = document.querySelector('#mega-menu-item-151 a').href;
    nameDivThirdLevelBusiness.append(exploreDivThirdLevelBusiness);
    businessItemColumn.prepend(nameDivThirdLevelBusiness);


    // create third item navigation column
    personalItemColumnClone.classList.remove("mega-menu-columns-3-of-12");
    personalItemColumnClone.classList.add("column-clone-extended" , "mega-menu-columns-6-of-12");
    personalItemColumn.parentNode.append(personalItemColumnClone);

    businessItemColumnClone.classList.remove("mega-menu-columns-3-of-12");
    businessItemColumnClone.classList.add("column-clone-extended" , "mega-menu-columns-6-of-12");
    businessItemColumn.parentNode.append(businessItemColumnClone);



    let backIconSpanThirdLevel = document.createElement('span');
    backIconSpanThirdLevel.classList.add('custom-back-indicator');
    backIconSpanThirdLevel.setAttribute('data-has-click-event', 'true');

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
    nameDivThirdLevel.classList.add('text-black', 'p-4', 'text-xl');
    let exploreDivThirdLevel = document.createElement('a');
    exploreDivThirdLevel.classList.add('block', 'text-black', 'pt-2', 'text-sm', 'third-level-explore-title');

    thirdLevelParents.forEach(function (thirdLevelChildren) {
      let thirdLevelTrigger = thirdLevelChildren.querySelector("span.mega-indicator");
      // let parentLiRow = thirdLevelChildren.parentNode.parentNode.parentNode.parentNode;
      let parentLiRow = thirdLevelChildren.closest(".mega-menu-row");

      thirdLevelTrigger.addEventListener('click', function (event) {
        event.preventDefault();
        parentLiRow.classList.add("menu-set-on-top");
        thirdLevelChildren.classList.add("menu-set-on-top");

        let thirdLevelUL = thirdLevelChildren.querySelector('.mega-sub-menu');
        if (thirdLevelUL) {
          thirdLevelUL.classList.add("third-level-container-panel", "thirdLevelSuperClass", "animate-fade-left", "animate-duration-500");

          exploreDivThirdLevel.href = thirdLevelChildren.querySelector('a').href;
          nameDivThirdLevel.textContent = thirdLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag
          exploreDivThirdLevel.textContent = "EXPLORE";
          nameDivThirdLevel.prepend(backIconSpanThirdLevel);
          nameDivThirdLevel.append(exploreDivThirdLevel);
          thirdLevelUL.prepend(nameDivThirdLevel);

          if (thirdLevelUL.parentNode.parentNode.parentNode.classList.contains('personal-law-column')) {
                console.log("test 11111");
                let thirdLevelULContent = thirdLevelUL.innerHTML;
                personalItemColumnClone.innerHTML = thirdLevelULContent;
                thirdLevelUL.classList.add("hidden");

          } else if (thirdLevelUL.parentNode.parentNode.parentNode.classList.contains('business-law-column')) {
                console.log("test 22222");
                let thirdLevelULContent = thirdLevelUL.innerHTML;
                businessItemColumnClone.innerHTML = thirdLevelULContent;
                thirdLevelUL.classList.add("hidden");

          } else {
                console.log("cloning third level failed");
          }

        } else {
          console.log("touch failed on third level");
        }

      });

    });

    // END third level items logic ------------------------
  }

  window.addEventListener("DOMContentLoaded", () => {

    mobileMenuChildrenThirdLevelExpansion();

  });

}
