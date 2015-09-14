<?php
$pagetitle = 'Ship Builder';
include __DIR__.'/inc/head.inc';
?>
    <script src="build.js"></script>
    <style>
      #builder-shortener { display: none; }

      #builder select { display: block; width: 90%; }
      #builder-parent > div,
      #builder-parent > ul { width: 30%; float: left; }
      #builder-parent { max-height: 700px; overflow: auto; }
    /*
      ul { display: inline-block; }
    */
      #active-items li:hover { cursor: pointer; }
      #active-items li:hover:after { content: ' [x]'; }
    /*
      p { line-height: 0.1em; }
      table { border-collapse: collapse; border: 1pt solid black; }
      tr:nth-child(odd) { background-color: #cccccc; }
      tr:nth-child(even) { background-color: #dddddd; }
      .property { width: 200px; }
      #category-container .category { width: 125px; }
    */
      .error { color: red; }
    </style>
  </head>
  <body id="build">
<?php include __DIR__.'/inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="build"></a>
      <h1>Ship Builder</h1>
      <p>The Ship Builder tool can be used to more efficiently plan your next ship build. Items are automatically updated, and have the latest attributes. The numbers output in the table do not take into account ship types, nor defaults.</p>
      <div class="tut">
        <div id="builder-parent">
          <div id="builder">
            <div id="category-container"></div>
          </div>
          <div id="builder-shortener">
            <button id="shorten" type="button">Shorten Link</button>
            <div id="shorten-display"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include __DIR__.'/inc/foot.inc'; ?>