<?php
$pagetitle = 'Search';
include __DIR__.'/inc/head.inc';
?>
    <script src="/tsearch/tsearch_content.js"></script><!-- content -->
    <!-- <link href="/tsearch/tsearch.css" rel="stylesheet"> -->
    <script src="/tsearch/tsearch_set.js"></script><!-- options -->
    <script src="/tsearch/tsearch.min.js"></script><!-- plugin -->
  </head>
  <body id="search">
<?php include __DIR__.'/inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="search"></a>
      <h1>Hyperspace Search</h1>
      <p></p>
      <div class="tut">
        <form id="search" action="search.php">
          <input name="q" type="search" id="tipue_search_input" placeholder="Search Hyperspace" required>
        </form>
        <p>Modifiers: find these words or, "look for this exact phrase", 'or find this phrase', -exclude -these -words</p>
        <!-- <div id="tipue_search_content"></div> -->
        <div id="tipue_search_content"><div class="tipue_search_spinner"><div class="tipue_search_rect1"></div><div class="tipue_search_rect2"></div><div class="rect3"></div></div></div>
      </div>
    </div>
  </div>
  <script>
    //site index for LIVE mode
    var tipuesearch_pages = ["/intro.php", "/news.php", "/glossary.php", "/reference.php", "/build.php"];

    $(document).ready(function() {
      //STATIC mode (fastest)
      //$('#tipue_search_input').tipuesearch();
      //LIVE mode (indexing)
      $('#tipue_search_input').tipuesearch({
        'mode': 'live'
      });
    });
  </script>
<?php include __DIR__.'/inc/foot.inc'; ?>