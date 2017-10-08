document.addEventListener("DOMContentLoaded", function(event) {
  console.log('DOMContentLoaded!')


  // find all smooth scroll links
  var $smoothLinks = $('[data-smooth-scroll]').find('li a');

  // initiate smoothScroll
  smoothScroll($smoothLinks);
});

function initCarousel(element, options) {
  element.owlCarousel(options);
}

function smoothScroll(elements) {
  // loop through elements to smooth scroll
  $.each(elements, function(key, value) {
    // set the href
    var href = '';
    href = $(this).attr('href');

    // highjack click event and smooth scroll
    $(this).on('click', function(e) {
      e.preventDefault();
      document.querySelector(href).scrollIntoView({ 
        behavior: 'smooth' 
      });
    });
  });
}
