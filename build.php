<?php
$pagetitle = 'Ship Builder';
include __DIR__.'/inc/head.inc';
?>
    <script src="build.js"></script>
    <style>
    /*
      ul { display: inline-block; }
    */
      li:hover { cursor: pointer; }
      li:hover:after { content: ' [x]'; }
    /*
      p { line-height: 0.1em; }
      table { border-collapse: collapse; border: 1pt solid black; }
      tr:nth-child(odd) { background-color: #cccccc; }
      tr:nth-child(even) { background-color: #dddddd; }
    */
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
          <div id="builder"></div>
        </div>
      </div>
    </div>
  </div>
<?php include __DIR__.'/inc/foot.inc'; ?>