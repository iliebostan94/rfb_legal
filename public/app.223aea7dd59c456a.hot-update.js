"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdate_roots_bud_sage"]("app",{

/***/ "./scripts/customMegaMenuDesktop.js":
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

eval("var _home_ilie_Local_Sites_rfblegal_smartdata_app_public_wp_content_themes_rfb_legal_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache;\n__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _home_ilie_Local_Sites_rfblegal_smartdata_app_public_wp_content_themes_rfb_legal_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(\"../node_modules/react-refresh/runtime.js\");\n/* provided dependency */ var __react_refresh_utils__ = __webpack_require__(\"../node_modules/@pmmmwh/react-refresh-webpack-plugin/lib/runtime/RefreshUtils.js\");\n\n__webpack_require__.$Refresh$.runtime = /*#__PURE__*/ (_home_ilie_Local_Sites_rfblegal_smartdata_app_public_wp_content_themes_rfb_legal_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache || (_home_ilie_Local_Sites_rfblegal_smartdata_app_public_wp_content_themes_rfb_legal_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0___namespace_cache = __webpack_require__.t(_home_ilie_Local_Sites_rfblegal_smartdata_app_public_wp_content_themes_rfb_legal_node_modules_react_refresh_runtime_js__WEBPACK_IMPORTED_MODULE_0__, 2)));\n\nif (screen && screen.width > 800) {\n    // console.log(\"code for desktop\");\n    function mobileMenuChildrenThirdLevelExpansion() {\n        // third level items logic ------------------------\n        // all consts\n        const thirdLevelParents = document.querySelectorAll(\".third-level-parent\");\n        const personalItemColumn = document.querySelector(\".personal-law-column\");\n        const personalItemColumnClone = personalItemColumn.cloneNode(false);\n        const businessItemColumn = document.querySelector(\".business-law-column\");\n        const businessItemColumnClone = businessItemColumn.cloneNode(false);\n        // create column (Personal & Business) top EXPLORE Nav bar\n        let nameDivThirdLevelPersonal = document.createElement('div');\n        nameDivThirdLevelPersonal.classList.add('text-brandBlue', 'p-4', 'text-2xl', 'font-bold', 'capitalize');\n        let nameDivThirdLevelPersonalSeparationBar = document.createElement('div');\n        nameDivThirdLevelPersonalSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');\n        let exploreDivThirdLevelPersonal = document.createElement('a');\n        exploreDivThirdLevelPersonal.classList.add('block', 'text-darkGrey', 'text-sm', 'font-bold', 'uppercase', 'third-level-explore-title');\n        let nameDivThirdLevelBusiness = document.createElement('div');\n        nameDivThirdLevelBusiness.classList.add('text-brandBlue', 'p-4', 'text-2xl', 'font-bold', 'capitalize');\n        let nameDivThirdLevelBusinessSeparationBar = document.createElement('div');\n        nameDivThirdLevelBusinessSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');\n        let exploreDivThirdLevelBusiness = document.createElement('a');\n        exploreDivThirdLevelBusiness.classList.add('block', 'text-darkGrey', 'text-sm', 'font-bold', 'uppercase', 'third-level-explore-title');\n        nameDivThirdLevelPersonal.textContent = document.querySelector('#mega-menu-item-150 a').textContent;\n        exploreDivThirdLevelPersonal.textContent = \"EXPLORE\";\n        exploreDivThirdLevelPersonal.href = document.querySelector('#mega-menu-item-150 a').href;\n        nameDivThirdLevelPersonal.append(exploreDivThirdLevelPersonal);\n        exploreDivThirdLevelPersonal.prepend(nameDivThirdLevelPersonalSeparationBar);\n        personalItemColumn.prepend(nameDivThirdLevelPersonal);\n        nameDivThirdLevelBusiness.textContent = document.querySelector('#mega-menu-item-151 a').textContent;\n        exploreDivThirdLevelBusiness.textContent = \"EXPLORE\";\n        exploreDivThirdLevelBusiness.href = document.querySelector('#mega-menu-item-151 a').href;\n        nameDivThirdLevelBusiness.append(exploreDivThirdLevelBusiness);\n        exploreDivThirdLevelBusiness.prepend(nameDivThirdLevelBusinessSeparationBar);\n        businessItemColumn.prepend(nameDivThirdLevelBusiness);\n        // create third item navigation column\n        personalItemColumnClone.classList.remove(\"mega-menu-columns-3-of-12\");\n        personalItemColumnClone.classList.add(\"column-clone-extended\", \"mega-menu-columns-6-of-12\");\n        personalItemColumn.parentNode.append(personalItemColumnClone);\n        businessItemColumnClone.classList.remove(\"mega-menu-columns-3-of-12\");\n        businessItemColumnClone.classList.add(\"column-clone-extended\", \"mega-menu-columns-6-of-12\");\n        businessItemColumn.parentNode.append(businessItemColumnClone);\n        let nameDivThirdLevel = document.createElement('div');\n        nameDivThirdLevel.classList.add('text-black', 'p-4', 'text-xl', 'm-3', 'bg-white', 'rounded-lg', 'mt-2.5', 'mb-0', 'mx-8');\n        let nameDivThirdLevelSeparationBar = document.createElement('div');\n        nameDivThirdLevelSeparationBar.classList.add('w-20', 'bg-accentGold', 'h-1', 'rounded-full', 'my-4');\n        let exploreDivThirdLevel = document.createElement('a');\n        exploreDivThirdLevel.prepend(nameDivThirdLevelSeparationBar);\n        exploreDivThirdLevel.classList.add('block', 'text-black', 'text-sm', 'third-level-explore-title');\n        thirdLevelParents.forEach(function(thirdLevelChildren) {\n            let thirdLevelTrigger = thirdLevelChildren.querySelector(\"span.mega-indicator\");\n            // let parentLiRow = thirdLevelChildren.parentNode.parentNode.parentNode.parentNode;\n            let parentLiRow = thirdLevelChildren.closest(\".mega-menu-row\");\n            thirdLevelTrigger.addEventListener('click', function(event) {\n                event.preventDefault();\n                parentLiRow.classList.add(\"menu-set-on-top\");\n                thirdLevelChildren.classList.add(\"menu-set-on-top\");\n                thirdLevelChildren.classList.contains(\"mega-toggle-on\") ? personalItemColumnClone.classList.toggle(\"\") : personalItemColumnClone.classList.toggle(\"animation-toggled\");\n                thirdLevelChildren.classList.contains(\"mega-toggle-on\") ? businessItemColumnClone.classList.toggle(\"\") : businessItemColumnClone.classList.toggle(\"animation-toggled\");\n                let thirdLevelUL = thirdLevelChildren.querySelector('.mega-sub-menu');\n                if (thirdLevelUL) {\n                    thirdLevelUL.classList.add(\"third-level-container-panel\", \"thirdLevelSuperClass\");\n                    exploreDivThirdLevel.href = thirdLevelChildren.querySelector('a').href;\n                    nameDivThirdLevel.textContent = thirdLevelChildren.querySelector('a').textContent; // Get the text content of the <a> tag\n                    exploreDivThirdLevel.textContent = \"EXPLORE\";\n                    nameDivThirdLevel.append(exploreDivThirdLevel);\n                    thirdLevelUL.prepend(nameDivThirdLevel);\n                    if (thirdLevelUL.parentNode.parentNode.parentNode.classList.contains('personal-law-column')) {\n                        let thirdLevelULContent = thirdLevelUL.innerHTML;\n                        personalItemColumnClone.innerHTML = thirdLevelULContent;\n                        // personalItemColumnClone.classList.add(\"animate-fade-right\", \"animate-duration-1000\");\n                        thirdLevelUL.classList.add(\"hidden-forced\");\n                    } else if (thirdLevelUL.parentNode.parentNode.parentNode.classList.contains('business-law-column')) {\n                        let thirdLevelULContent = thirdLevelUL.innerHTML;\n                        businessItemColumnClone.innerHTML = thirdLevelULContent;\n                        // businessItemColumnClone.classList.add(\"animate-fade-right\", \"animate-duration-1000\");\n                        thirdLevelUL.classList.add(\"hidden-forced\");\n                    } else {\n                        console.log(\"cloning third level failed\");\n                    }\n                } else {\n                    console.log(\"touch failed on third level\");\n                }\n            });\n        });\n    // END third level items logic ------------------------\n    }\n    window.addEventListener(\"DOMContentLoaded\", ()=>{\n        mobileMenuChildrenThirdLevelExpansion();\n    });\n}\n\n\nvar $ReactRefreshModuleId$ = __webpack_require__.$Refresh$.moduleId;\nvar $ReactRefreshCurrentExports$ = __react_refresh_utils__.getModuleExports(\n\t$ReactRefreshModuleId$\n);\n\nfunction $ReactRefreshModuleRuntime$(exports) {\n\tif (true) {\n\t\tvar errorOverlay;\n\t\tif (true) {\n\t\t\terrorOverlay = false;\n\t\t}\n\t\tvar testMode;\n\t\tif (typeof __react_refresh_test__ !== 'undefined') {\n\t\t\ttestMode = __react_refresh_test__;\n\t\t}\n\t\treturn __react_refresh_utils__.executeRuntime(\n\t\t\texports,\n\t\t\t$ReactRefreshModuleId$,\n\t\t\t__webpack_module__.hot,\n\t\t\terrorOverlay,\n\t\t\ttestMode\n\t\t);\n\t}\n}\n\nif (typeof Promise !== 'undefined' && $ReactRefreshCurrentExports$ instanceof Promise) {\n\t$ReactRefreshCurrentExports$.then($ReactRefreshModuleRuntime$);\n} else {\n\t$ReactRefreshModuleRuntime$($ReactRefreshCurrentExports$);\n}\n\n//# sourceURL=webpack://@roots/bud/sage/./scripts/customMegaMenuDesktop.js?");

/***/ })

});