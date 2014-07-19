$(function(){ 
  $('.nav__right').bind('click', function(){
    console.log('right');
    var next = $('.interaction-gallery .active').next();
    $('.interaction-gallery .active').removeClass('active');

    if (next.is('img') ) {
      next.addClass('active');
    } else {
      var first = $('.interaction-gallery').find('img:first');
      first.addClass('active');
    }
  });

  // $('.nav__left').bind('click', function(){
  //   var next = $('.interaction-gallery .active').prev();
  //   $('.interaction-gallery .active').removeClass('active');

  //   if (next.is('img') ) {
  //     next.addClass('active');
  //   } else {
  //     var last = $('.interaction-gallery').find('img:last');
  //     last.addClass('active');
  //   }
  // });
});