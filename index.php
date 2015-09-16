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
  </style>
  <script>
  var about_opened = false;
  var ref_opened = false;
  var tools_opened = false;
  var dev_opened = false;
  var history_opened = false;

  var about_open_toggle = function() {
    if (about_opened) {
      $("#about-links").animate({height: '0px'}, 500);
      //$("#about-link").hover(function(evt) {
      //  $("#about-link").css("text-decoration", evt.type == "mouseenter" ? "underline" : "none");
      //});
      about_opened = false;
    } else {
      $("#about-links").animate({height: '28px'}, 500);
      //$("#about-link").css("text-decoration", "underline");
      $("#about-link").unbind('mouseenter mouseleave')
      about_opened = true;
    }
  }

  var ref_open_toggle = function() {
    if (ref_opened) {
      $("#ref-links").animate({height: '0px'}, 500);
      ref_opened = false;
    } else {
      $("#ref-links").animate({height: '28px'}, 500);
      $("#ref-link").unbind('mouseenter mouseleave')
      ref_opened = true;
    }
  }

  var tools_open_toggle = function() {
    if (tools_opened) {
      $("#tool-links").animate({height: '0px'}, 500);
      tools_opened = false;
    } else {
      $("#tool-links").animate({height: '28px'}, 500);
      $("#tool-link").unbind('mouseenter mouseleave')
      tools_opened = true;
    }
  }

  var history_open_toggle = function() {
    if (history_opened) {
      $("#history-links").animate({height: '0px'}, 500);
      history_opened = false;
    } else {
      $("#history-links").animate({height: '28px'}, 500);
      $("#history-link").unbind('mouseenter mouseleave')
      history_opened = true;
    }
  }

  var dev_open_toggle = function() {
    if (dev_opened) {
      $("#dev-links").animate({height: '0px'}, 500);
      dev_opened = false;
    } else {
      $("#dev-links").animate({height: '28px'}, 500);
      $("#dev-link").unbind('mouseenter mouseleave')
      dev_opened = true;
    }
  }

  $(document).ready(function() {
    $("#tool-link").click(function() {
      if (!tools_opened) {
        event.preventDefault();
        //event.stopPropagation();
        tools_open_toggle();
        if (about_opened)
          about_open_toggle();
        if (dev_opened)
          dev_open_toggle();
        if (history_opened)
          history_open_toggle();
        if (ref_opened)
          ref_open_toggle();
      }
    });

    $("#dev-link").click(function() {
      if (!dev_opened) {
        event.preventDefault();
        //event.stopPropagation();
        dev_open_toggle();
        if (about_opened)
          about_open_toggle();
        if (tools_opened)
          tools_open_toggle();
        if (history_opened)
          history_open_toggle();
        if (ref_opened)
          ref_open_toggle();
      }
    });

    $("#ref-link").click(function() {
      if (!ref_opened) {
        event.preventDefault();
        //event.stopPropagation();
        ref_open_toggle();
        if (about_opened)
          about_open_toggle();
        if (dev_opened)
          dev_open_toggle();
        if (history_opened)
          history_open_toggle();
        if (tools_opened)
          tools_open_toggle();
      }
    });

    $("#history-link").click(function() {
      if (!history_opened) {
        event.preventDefault();
        //event.stopPropagation();
        history_open_toggle();
        if (about_opened)
          about_open_toggle();
        if (dev_opened)
          dev_open_toggle();
        if (ref_opened)
          ref_open_toggle();
        if (tools_opened)
          tools_open_toggle();
      }
    });

    $("#about-link").click(function() {
      if (!about_opened) {
        event.preventDefault();
        //event.stopPropagation();
        about_open_toggle();
        if (tools_opened)
          tools_open_toggle();
        if (dev_opened)
          dev_open_toggle();
        if (history_opened)
          history_open_toggle();
        if (ref_opened)
          ref_open_toggle();
      }
    });
  });
  </script>
</head>
<body id="index">
  <div id="getBug">
    <a id="getContinuumNow" href="http://getcontinuum.com/">Get Continuum Now!</a>
    <a id="needHelp" href='intro.php#gameplay'>Need help getting started? Click here.</a><!-- "http://rshl.org/ci/index.php?c=articleview&amp;A=1001" -->
  </div>
  <div class="center-h center-v" id="center-container">
    <img id="hs-logo" src="hs_logo.png" title="The one and only." />
<?php include __DIR__.'/inc/menuitems.inc'; ?>
  </div>
</body>
</html>