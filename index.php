<!-- HS website provided to the good people of SS by nn & sigma13. -->
<?php
$pagetitle = 'The one and only.';
include 'inc/head.inc';
?>
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
      $("#about-links").animate({height: '23pt'}, 500);
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
      $("#ref-links").animate({height: '23pt'}, 500);
      $("#ref-link").unbind('mouseenter mouseleave')
      ref_opened = true;
    }
  }

  var tools_open_toggle = function() {
    if (tools_opened) {
      $("#tool-links").animate({height: '0px'}, 500);
      tools_opened = false;
    } else {
      $("#tool-links").animate({height: '23pt'}, 500);
      $("#tool-link").unbind('mouseenter mouseleave')
      tools_opened = true;
    }
  }

  var history_open_toggle = function() {
    if (history_opened) {
      $("#history-links").animate({height: '0px'}, 500);
      history_opened = false;
    } else {
      $("#history-links").animate({height: '23pt'}, 500);
      $("#history-link").unbind('mouseenter mouseleave')
      history_opened = true;
    }
  }

  var dev_open_toggle = function() {
    if (dev_opened) {
      $("#dev-links").animate({height: '0px'}, 500);
      dev_opened = false;
    } else {
      $("#dev-links").animate({height: '23pt'}, 500);
      $("#dev-link").unbind('mouseenter mouseleave')
      dev_opened = true;
    }
  }

  $(document).ready(function() {
    $("#tool-link").click(function() {
      tools_open_toggle();
      if (about_opened)
        about_open_toggle();
      if (dev_opened)
        dev_open_toggle();
      if (history_opened)
        history_open_toggle();
      if (ref_opened)
        ref_open_toggle();});

    $("#dev-link").click(function() {
      dev_open_toggle();
      if (about_opened)
        about_open_toggle();
      if (tools_opened)
        tools_open_toggle();
      if (history_opened)
        history_open_toggle();
      if (ref_opened)
        ref_open_toggle();});

    $("#ref-link").click(function() {
      ref_open_toggle();
      if (about_opened)
        about_open_toggle();
      if (dev_opened)
        dev_open_toggle();
      if (history_opened)
        history_open_toggle();
      if (tools_opened)
        tools_open_toggle();});

    $("#history-link").click(function() {
      history_open_toggle();
      if (about_opened)
        about_open_toggle();
      if (dev_opened)
        dev_open_toggle();
      if (ref_opened)
        ref_open_toggle();
      if (tools_opened)
        tools_open_toggle();});

    $("#about-link").click(function() {
      about_open_toggle();
      if (tools_opened)
        tools_open_toggle();
      if (dev_opened)
        dev_open_toggle();
      if (history_opened)
        history_open_toggle();
      if (ref_opened)
        ref_open_toggle();});
  });
  </script>
</head>
<body id="index">
  <div id="getBug">
    <a id="getContinuumNow" href="http://getcontinuum.com/">Get Continuum Now!</a>
    <a id="needHelp" href='intro.html#gameplay.html'>Need help getting started? Click here.</a><!-- "http://rshl.org/ci/index.php?c=articleview&amp;A=1001" -->
  </div>
  <div class="center-h center-v" id="center-container">
    <img id="hs-logo" src="hs_logo.png" title="The one and only." />
<?php include "inc/menuitems.inc"; ?>
  </div>
</body>
</html>