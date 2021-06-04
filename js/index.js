// Start jQuery
$(function(){
	'use strict'
	// Typewriter
  var theText = $('.typer').data('text'),
    theTextLength = theText.length,
    n = 0,
    theTyper = setInterval(function(){
      $('.typer').each(function(){
        $(this).text($(this).text() + theText[n]);
      });
      n += 1;
      if(n >= theTextLength){
        clearInterval(theTyper);
      }
    }, 100);
  // smoth scroll
  $('.navbar-nav .nav-item .nav-link, .landing .call').on('click', function(){
    $('html,body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  });
  // hide aletrs in contact form
  $('.alert').each(function(){
      $(this).delay(5000).fadeOut();
  });
}); // end main function
// Start of Tawk.to Script
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/601fdb41c31c9117cb76a698/1etu70ujq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
// End of Tawk.to Script