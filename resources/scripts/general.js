


// function to make History of company draggable on desktop


function draggableHistoryWidget() {

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

  function handleDrag(e) {
    if (isDragging) {
      const deltaX = e.clientX - startX;
      timelineWrapper.scrollLeft -= deltaX;
      startX = e.clientX;
    }
  }
}
  document.addEventListener("DOMContentLoaded", function () {
    draggableHistoryWidget();
});
// -------------------------------

