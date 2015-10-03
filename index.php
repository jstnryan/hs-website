<!-- HS website provided to the good people of SS by nn & sigma13. -->
<?php
$pagetitle = 'The one and only.';
//include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc';
include __DIR__.'/inc/head.inc';
?>
    <style>
      #getContinuumNow {
        position: absolute;
        display: block;
        top: 0;
        right: 5%;
        padding: 0 10px 0 48px;
        background: rgba(0,0,0,0.15);
        //border-radius: 0 0 3px 3px;
        border: 1px solid rgba(255,255,255,0.5);
        border-top: none;
        font-size: 1.25em;
        color: #fff;
        line-height:34px;
        text-decoration: none;
        transition: color 200ms ease-out;
      }
      #getContinuumNow:hover { color: #84b3eb; }
      #getContinuumNow:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 10px;
        height: 40px;
        width:29px;
        background:url("SSLogoSmall.png");
        background-repeat: no-repeat;
        transition: none;
      }
      #getContinuumNow:hover:before {
        transform: rotateY(360deg);
        transition: transform 600ms ease-out;
      }
      #getContinuumNow:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.6);
        transition: none;
      }
      #getContinuumNow:hover:after {
        width: 100%;
        background-color: rgba(255,255,255,0);
        transition: all 300ms ease-out;
      }
      #needHelp {
        position: absolute;
        display: block;
        top: 40px;
        right: 5%;
        padding: 0 5px 0 6px;
        background: rgba(0,0,0,0.15);
        border-radius: 0 0 4px 4px;
        border: 1px solid rgba(255,255,255,0.5);
        font-size: 0.887em;
        color: #fff;
        line-height:19px;
        text-decoration: none;
        transition: color 200ms ease-out;
      }
      #needHelp:hover { color: #84b3eb; }

      .sub-links { transition: height .5s; }
    </style>
    <script>
      var last_opened = '';

      function navtoggle(which) {
        if (last_opened == which) {
          //would normally close here, but instead 2x click = go to link
          window.location.href = document.getElementById(which.substr(0, which.length - 1)).href;
        } else {
          //open this, close others
          var sublinks = document.getElementById('center-container').getElementsByClassName('sub-links');
          for (var i = 0; i < sublinks.length; ++i) {
            if (sublinks[i].id != which) {
              sublinks[i].style.height = '0';
            } else {
              sublinks[i].style.height = '28px';
            }
          }
        }
        last_opened = which;
      }

      function navclick(e) {
        navtoggle(e.srcElement.id + 's');

        var evt = e ? e:window.event;
        if (evt.preventDefault) evt.preventDefault();
        evt.returnValue = false;
        return false;
      }

      window.addEventListener('load', function() {
        var navlinks = document.getElementById('center-container').getElementsByClassName('nav-category');
        for (var i = 0; i < navlinks.length; ++i) {
          navlinks[i].addEventListener('click', navclick);
        }
      });
    </script>
  </head>
  <body id="index">
    <div id="getBug">
      <a id="getContinuumNow" href="http://getcontinuum.com/">Get Continuum Now!</a>
      <a id="needHelp" href='/intro.php#gameplay'>Need help getting started? Click here.</a><!-- "http://rshl.org/ci/index.php?c=articleview&amp;A=1001" -->
    </div>
    <div class="center-h center-v" id="center-container">
      <img id="hs-logo" src="hs_logo.png" title="The one and only." />
<?php include __DIR__.'/inc/menuitems.inc'; ?>
    </div>
    <script src="/hs.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-8872962-7', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>