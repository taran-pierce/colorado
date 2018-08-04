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
    carouselView();
    lightBox();
  },
  onChange: () => {},
});

function carouselNavigation() {
  let controls = document.getElementsByClassName('controls')[0];
  let buttons = controls.children;
  
  for ( let button of buttons ) {
    button.addEventListener('click', function( e ) {
      e.preventDefault();
      
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

function carouselView() {
  let toggle = document.getElementsByClassName('view-toggle')[0];
  let container = document.getElementsByClassName('carousel')[0];
  
  toggle.addEventListener('click', function( e ) {
    e.preventDefault();
    
    container.classList.toggle('thumb-view');
  });
}

function lightBox() {
  let targets = document.getElementsByClassName('thumb');
  
  for ( let target of targets ) {
    
    target.addEventListener('click', function( e ) {
      e.preventDefault();
      
      let el = target.children[0];
      let href = el.getAttribute('href');
      let id = href.split('-')[2];
      let image = document.createElement('img');
      
      // TODO needs to be dynamic of course
      image.src = '/images/parks/lumpy-ridge-trailhead/large/' + id + '.jpg';
      
      image.classList.add('img-responsive');
      
      createLightBox( id, image );
    });
  }
}

function createLightBox( id, image ) {
  // create reference object to be passed around
  let refs = {};
  
  // make light-box div
  let contentContainer = document.createElement('div');
  contentContainer.classList.add('light-box');
  
  // make content div for light-box
  let content = document.createElement('div');
  content.classList.add('content');
  
  // append the image to content and add to container
  content.appendChild( image );
  contentContainer.appendChild( content );
  
  // create nav for light-box
  let lightBoxNav = document.createElement('div');
  let navToggle = document.createElement('a');
  navToggle.innerHTML = "X";
  lightBoxNav.classList.add('light-box-nav');
  
  // add nav toggle to nav
  lightBoxNav.appendChild( navToggle );
  
  // add nav to light-box
  contentContainer.appendChild( lightBoxNav );
  
  // add to reference object
  refs = {
    'light-box': contentContainer,
    'nav' : lightBoxNav
  };
  
  // bind click event for closing light-box
  navToggle.addEventListener('click', function ( e ) {
    e.preventDefault();
    closeLightBox( refs );
  });
  
  // add light-box to DOM
  document.body.appendChild( contentContainer );
  
  // make backDrop for light-box
  createBackDrop( refs );
  
  let viewportHeight = document.documentElement.clientHeight;
  let imageHeight = contentContainer.getElementsByTagName('img')[0];

  // let the image be added to the DOM then calculate sizes
  setTimeout(function() {
    // how tall is the image
    imageHeight = imageHeight.offsetHeight;
    
    // find difference of viewport and image
    let difference = viewportHeight - imageHeight;
    
    // will be used to set CSS: needs to be in pixels
    difference = difference + 'px';
    
    // store in reference object
    refs['difference'] = difference;
    
    // set the height of the nav
    setLightBoxNavHeight( lightBoxNav, difference);
  }, 100);
  
  // watch for swipe events to make it easier to close the light-box
  lightBoxSwipe( contentContainer, refs );
  
  // add class to html so we can control some css
  document.documentElement.classList.add('light-box-open');
}

function closeLightBox( refs ) {
  let lightBox = refs['light-box'];
  let backDrop = refs['backDrop'];
  
  lightBox.remove();
  backDrop.remove();
  
  document.documentElement.classList.remove('light-box-open');
};

function setLightBoxNavHeight(nav, difference) {
  nav.style.height = difference;
}

function createBackDrop( refs ) {
  let backDrop = document.createElement('div');
  
  backDrop.classList.add('light-box-backdrop');
  
  refs['backDrop'] = backDrop;

  document.body.appendChild( backDrop );
  
  document.onkeydown = function( e ) {
    e = e || window.event;
    if ( e.keyCode == 27 ) {
      closeLightBox( refs );
    }
  };
}

function bindbackDropClose( backDrop ) {
  let lightBox = document.getElementsByClassName('light-box')[0];
  
  document.onkeydown = function( e ) {
    e = e || window.event;
    if ( e.keyCode == 27 ) {
      backDrop.remove();
      lightBox.remove();
      document.documentElement.classList.remove('light-box-open');
    }
  };
}

function lightBoxSwipe( contentContainer, refs ) {
  let touchstartX = 0;
  let touchstartY = 0;
  let touchendX = 0;
  let touchendY = 0;

  const gestureZone = contentContainer;
  
  gestureZone.addEventListener('touchstart', function(event) {
    touchstartX = event.changedTouches[0].screenX;
    touchstartY = event.changedTouches[0].screenY;
  }, false);
  
  gestureZone.addEventListener('touchend', function(event) {
    touchendX = event.changedTouches[0].screenX;
    touchendY = event.changedTouches[0].screenY;
    handleGesture();
  }, false);
  
  function handleGesture() {
    let backDrop = document.getElementsByClassName('light-box-backdrop')[0];
  
    if (touchendX < touchstartX) {
      //console.log('Swiped left');
      //contentContainer.remove();
      //backDrop.remove();
      //document.documentElement.classList.remove('light-box-open');
      closeLightBox( refs );
    }
    
    if (touchendX > touchstartX) {
      //console.log('Swiped right');
    }
    
    if (touchendY < touchstartY) {
      //console.log('Swiped up');
    }
    
    if (touchendY > touchstartY) {
      //console.log('Swiped down');
    }
    
    if (touchendY === touchstartY) {
      //console.log('Tap');
    }
  }
}

var resizeTimer;

window.addEventListener('resize', function(){
  
  clearTimeout( resizeTimer );
  
  resizeTimer = setTimeout(function() {
  
    console.log('oh hai resize stopped');
  }, 150);
}, true);