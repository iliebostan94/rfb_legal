// Testimonials carousel on Homepage
const carouselElement = document.getElementById('carousel-example');
// const carouselElementTeam = document.getElementById('animation-team-carousel');


const items = [
  {
    position: 0,
    el: document.getElementById('carousel-item-1'),
  },
  {
    position: 1,
    el: document.getElementById('carousel-item-2'),
  },
  {
    position: 2,
    el: document.getElementById('carousel-item-3'),
  },
  {
    position: 3,
    el: document.getElementById('carousel-item-4'),
  },
];

// options with default values
const options = {
  defaultPosition: 1,
  interval: 3000,

  indicators: {
    activeClasses: 'bg-white dark:bg-gray-800',
    inactiveClasses:
      'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
    items: [
      {
        position: 0,
        el: document.getElementById('carousel-indicator-1'),
      },
      {
        position: 1,
        el: document.getElementById('carousel-indicator-2'),
      },
      {
        position: 2,
        el: document.getElementById('carousel-indicator-3'),
      },
      {
        position: 3,
        el: document.getElementById('carousel-indicator-4'),
      },
    ],
  },

};

// instance options object
const instanceOptions = {
  id: 'carousel-example',
  override: true
};
// -------------------------------

