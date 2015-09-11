$('.slideout-toggle').on('click', function(event)
{
     event.preventDefault();
     var slideout = $('.slideout');
     var slideoutWidth = $('.slideout').width();

     //slideout.toggleClass('open'); //left

     if (slideout.hasClass('open'))
     {
          //slideout.animate({left: '0'}, 250); //left
          slideout.animate({right: -slideoutWidth}, 250); //right
     }
     else
     {
          //slideout.animate({left: -slideoutWidth}, 250); //left
          slideout.animate({right: '0'}, 250); //right
     }

     slideout.toggleClass('open'); //right
});