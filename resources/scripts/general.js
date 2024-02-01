import { Modal } from 'flowbite';

// function to make History of company draggable on desktop
function draggableHistoryWidget() {
  if (!document.querySelector(".timeline-wrapper")) return;

  const timelineWrapper = document.querySelector(".timeline-wrapper");
  let isDragging = false;
  let startX;

  timelineWrapper.addEventListener("mousedown", (e) => {
    isDragging = true;
    startX = e.clientX;
    timelineWrapper.classList.add("grabbing");

    document.addEventListener("mousemove", handleDrag);
    document.addEventListener("mouseup", () => {
      isDragging = false;
      timelineWrapper.classList.remove("grabbing");
      document.removeEventListener("mousemove", handleDrag);
    });
  });

<<<<<<< HEAD
  function handleDrag(e) {
    if (isDragging) {
      const deltaX = e.clientX - startX;
      timelineWrapper.scrollLeft -= deltaX;
      startX = e.clientX;
    }
  }
}
=======
function draggableHistoryWidget() {
  if (!document.querySelector(".timeline-wrapper")) return;
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

function draggableHistoryWidgetAboutUs() {
  if (!document.querySelector(".about-us-timeline-wrapper")) return;

  const timelineWrapper = document.querySelector(".about-us-timeline-wrapper");
  let isDragging = false;
  let startX;

  timelineWrapper.addEventListener("mousedown", (e) => {
    isDragging = true;
    startX = e.clientX;
    timelineWrapper.classList.add("grabbing");

    document.addEventListener("mousemove", handleDrag);
    document.addEventListener("mouseup", () => {
      isDragging = false;
      timelineWrapper.classList.remove("grabbing");
      document.removeEventListener("mousemove", handleDrag);
    });
  });

  function handleDrag(e) {
    if (isDragging) {
      const deltaX = e.clientX - startX;
      timelineWrapper.scrollLeft -= deltaX;
      startX = e.clientX;
    }
  }
}
// -------------------------------

  const $searchBtnModalEl = document.getElementById('navSearchModal');

  const searchBtnModalElOptions = {
    placement: 'bottom-right',
    backdrop: 'dynamic',
    backdropClasses:
      'custom_search_modal bg-sky-900/60 dark:bg-gray-900/80 fixed inset-0 z-[11] animate-fade-down animate-once animate-ease-linear animate-normal',
    closable: true,
    onHide: () => {
      console.log('modal is hidden');
    },
    onShow: () => {
      console.log('modal is shown');
    },
    onToggle: () => {
      console.log('modal has been toggled');
    },
  };

  const searchBtnModalElInstanceOptions = {
    id: 'navSearchModal',
    override: true
  };

const searchBtnModal = new Modal($searchBtnModalEl, searchBtnModalElOptions, searchBtnModalElInstanceOptions);
const navMenuSearchBtn = document.getElementById('popupModalSearch');
navMenuSearchBtn.addEventListener('click', () => {
  searchBtnModal.toggle();
});


document.addEventListener("DOMContentLoaded", function () {
  draggableHistoryWidget();
  draggableHistoryWidgetAboutUs();
});
// -------------------------------
