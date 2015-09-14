<?php
$pagetitle = 'Search';
include __DIR__.'/inc/head.inc';
?>
    <style>
      #search-modifiers { font-size: 8pt; margin: 0 0 20px 0; }

      #tipue_search_results_count { text-transform: uppercase; font-size: 9pt; }
      .tipue_search_content_title { font-size:12pt; margin-top: 20px; }
      .tipue_search_content_url { font-size: 8pt; }
      .tipue_search_content_text { font-size: 8pt; }
      #tipue_search_warning { text-transform: uppercase; }
    </style>
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
        <p id="search-modifiers">Modifiers: find these words, "look for this exact phrase", 'find this phrase', -excluded -word</p>
        <!-- <div id="tipue_search_content"></div> -->
        <div id="tipue_search_content"><div class="tipue_search_spinner"><div class="tipue_search_rect1"></div><div class="tipue_search_rect2"></div><div class="rect3"></div></div></div>
      </div>
    </div>
  </div>
  <script>
    //site index for LIVE mode
    //var tipuesearch_pages = ["/intro.php", "/news.php", "/glossary.php", "/reference.php", "/build.php"];

    $(document).ready(function() {
      //STATIC mode (fastest)
      $('#tipue_search_input').tipuesearch();
      //LIVE mode (indexing)
      //$('#tipue_search_input').tipuesearch({
      //  'mode': 'live'
      //});
    });
  </script>
<?php include __DIR__.'/inc/foot.inc'; ?>