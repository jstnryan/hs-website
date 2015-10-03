/*
function animate(elem,style,unit,from,to,time) {
    if( !elem) return;
    var start = new Date().getTime(),
        timer = setInterval(function() {
            var step = Math.min(1,(new Date().getTime()-start)/time);
            elem.style[style] = (from+step*(to-from))+unit;
            if( step == 1) clearInterval(timer);
        },25);
    elem.style[style] = from+unit;
}
animate(document.getElementById('ref-links'), 'height', 'px', 0, 28, 500);
*/

//vanilla replacements for jQuery equiv.
function toggleClass(el, className) {
  if (el.classList) {
    el.classList.toggle(className);
  } else {
    var classes = el.className.split(' ');
    var existingIndex = classes.indexOf(className);

    if (existingIndex >= 0)
      classes.splice(existingIndex, 1);
    else
      classes.push(className);

    el.className = classes.join(' ');
  }
}
function hasClass(el, className) {
  if (el.classList)
    return el.classList.contains(className);
  else
    return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
}

function togglemenu() {
  event.preventDefault();
  var slideout = document.getElementById('slideout');
  var slideoutWidth = slideout.offsetWidth;

  //toggleClass(slideout, 'open'); //left
  if (hasClass(slideout, 'open')) {
    //slideout.style.left = '0'; //left
    slideout.style.right = -slideoutWidth + 'px'; //right
  } else {
    //slideout.style.left = -slideoutWidth; //left
    slideout.style.right = '0' //right
  }
  toggleClass(slideout, 'open'); //right
}

// window.addEventListener('load', function() {});
onload = function(e) {
  var toggles = document.getElementsByClassName('slideout-toggle');
  for (var i = 0; i < toggles.length; ++i) {
    toggles[i].addEventListener('click', togglemenu);
  }
}