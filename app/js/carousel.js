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
    
    target.addEventListener('click', function() {
      let el = target.children[0];
      
      console.log('el ', el);
      let href = el.getAttribute('href');
  
      let id = href.split('-')[2];
  
      console.log('id ' + id);
      
      createLightBox( id );
      createBackDrop();
    });
  }
}

function createLightBox( id ) {
  //console.log('oh hai createLightBox ' + id);
  
  let contentContainer = document.createElement('div');
  contentContainer.classList.add('light-box');
  
  let content = document.createElement('div');
  content.classList.add('content');
  
  let contentText = document.createElement('p');
  contentText.innerHTML = 'Just some test content';
  
  content.appendChild( contentText );
  contentContainer.appendChild( content );
  
  let lightBoxNav = document.createElement('div');
  lightBoxNav.classList.add('light-box-nav');
  let navToggle = document.createElement('a');
  navToggle.innerHTML = "X";
  
  navToggle.addEventListener('click', function ( e ) {
    e.preventDefault();
    
    let lightBox = document.getElementsByClassName('light-box')[0];
    lightBox.remove();
    
    let backDrop = document.getElementsByClassName('light-box-backdrop')[0];
    backDrop.remove();
    
    document.documentElement.classList.remove('light-box-open');
  });
  
  lightBoxNav.appendChild( navToggle );
  
  contentContainer.appendChild( lightBoxNav );
  
  document.body.appendChild( contentContainer );
  
  document.documentElement.classList.add('light-box-open');
}

function createBackDrop() {
  let backDrop = document.createElement('div');
  
  backDrop.classList.add('light-box-backdrop');

  document.body.appendChild( backDrop );
  
  closeBackDrop( backDrop );
}

function closeBackDrop( backDrop ) {
  let lightBox = document.getElementsByClassName('light-box')[0];
  
  backDrop.addEventListener('click', function() {
    this.remove();
    lightBox.remove();
    document.documentElement.classList.remove('light-box-open');
  });
  
  document.onkeydown = function( e ) {
    e = e || window.event;
    if ( e.keyCode == 27 ) {
      backDrop.remove();
      lightBox.remove();
      document.documentElement.classList.remove('light-box-open');
    }
  };
}