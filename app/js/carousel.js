let carousel = new Siema({
  selector: '.siema',
  duration: 200,
  easing: 'ease-out',
  perPage: 1,
  startIndex: 0,
  draggable: true,
  multipleDrag: true,
  threshold: 20,
  loop: false,
  rtl: false,
  onInit: () => {
    carouselNavigation();
  },
  onChange: () => {},
});

function carouselNavigation() {
  let controls = document.getElementsByClassName('controls')[0];
  let buttons = controls.children;
  
  for ( let button of buttons ) {
    button.addEventListener('click', function() {
      let target = button.getAttribute('href');
      
      if ( target === '#next') {
        carousel.next();
      }
      if ( target === '#prev') {
        carousel.prev();
      }
    });
  }
}