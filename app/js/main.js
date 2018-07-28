document.addEventListener("DOMContentLoaded", function(event) {
  //console.log('DOMContentLoaded!');
});

dropDownMenu();
mobileNav();

function dropDownMenu() {
  let targets = document.getElementsByClassName('has-dropdown');
  
  for (let target of targets) {
    target.addEventListener('click', function( e ) {
      e.preventDefault();
      let dropDown = target.nextElementSibling;
      dropDown.classList.toggle('open');
    });
  }
  
  // trigger the closeDropDownMenu function
  closeDropDownMenu();
}

function closeDropDownMenu() {
  let targets = document.getElementsByClassName('dropdown');
  
  document.addEventListener('click', function( e ) {
    let el = e.target || e.srcElement;
    let hasDropDown = el.classList.contains('has-dropdown');
    let isLink = el.getAttribute('href');
  
    // look for and close any dropdown menu
    for ( let target of targets ) {
      // did the click happen in the dropdown menu
      if ( !hasDropDown ) {
        // did the target have an href
        if ( !isLink ) {
          target.classList.remove('open');
        }
      }
    }
  });
}

function mobileNav() {
  let navButton = document.getElementById('main-nav');
  
  navButton.addEventListener('click', function() {
    let id = navButton.id;
    let menu = document.querySelectorAll( '[data-target]' );
    
    for ( let item of menu ) {
      item.classList.toggle('open');
    }
  });
}