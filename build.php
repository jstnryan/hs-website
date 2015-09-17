<?php
$pagetitle = 'Ship Builder';
include __DIR__.'/inc/head.inc';
?>
    <script src="build.js"></script>
    <style>
      #builder-parent { overflow:auto; width:100%; /* float clear */ }
      #category-container select { display: block; width: 90%; }
      #category-container { width: 24%; float: left; }
      #ship-builder { width: 76%; float: left;}
      #active-items { width: 46%; float: left; }
      #property-table { width: 46%; float: right; }

      #active-items { font-size: 9pt; margin: 0; padding: 0 20px 0 10px; }
      #active-items li:hover { cursor: pointer; }
      #active-items li:hover:after { content: ' [x]'; }

      #ship-builder { max-height: 700px; overflow: auto; }

      #builder-parent .error { color: red; }

      #capacity-parent { overflow:auto; width:100%; /* float clear */ }
      #capacity-parent table { display: inline-block; float: left; width: 30%; margin:0 10px; }

      #build-top { overflow:auto; width:100%; /* float clear */ }
      #ship-container { float: left; }
      #load-button-container { float: right; }
      #shortener { display: none; }

      #shipitems-loader-container {
        display: none;
        position: absolute;
        width: 600px;
        margin: auto;
        padding: 0 20px 20px;;
        background-color: #3b3b3b;
        border: 1px black solid;
      }
      #shipitems-text {
        display: block;
        width: 595px;
        height: 300px;
      }
    </style>
  </head>
  <body id="build">
<?php include __DIR__.'/inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="build"></a>
      <h1>Ship Builder</h1>
      <p>The Ship Builder tool can be used to more efficiently plan your next ship build. Items are automatically updated, and have the latest attributes. The values in the result table are not actual totals, and do not take into account ship defaults; they are merely the amount modified by items.</p>
      <div class="">
        <div id="builder-parent">
          <div id="build-top">
            <div id="ship-container"></div>
            <div id="load-button-container">
              <button id="load-button">?shipitems</button>
            </div>
          </div>
          <div id="category-container"></div>
          <div id="shipitems-loader-container">
            <p>Paste full ?shipitems text here.</p>
            <textarea id="shipitems-text"></textarea>
            <button id="shipitems-load">Load</button>
            <button id="shipitems-cancel">Cancel</button>
          </div>
        </div>
      </div>
      <h2>Category Capacities</h2>
      <p>The following list details the default capacities per item type/category, per ship. Note that these numbers can be modified by purchasable items, or individual ship types; for example "Burst: 0" is increased by purchasing Burst mounts, or may be increased when equiping a Lancaster, for example, as opposed to a Warbird. Additionally, individual items may occupy more than one capacity type.</p>
      <div class="tut">
        <div id="capacity-parent">
<?php
  $types = json_decode(file_get_contents('https://raw.githubusercontent.com/Ceiu/hyperspace-items/master/items.json'), true)['types'];
  $count = sizeof($types);
  $ceil = ceil($count / 3);
  $tables = '';
  for ($i = 0; $i < 3; $i++) {
    $tables .= <<<'EOF'

          <table cellspacing="0">
            <thead>
              <tr>
                <th>Type</th>
                <th>Capacity</th>
              </tr>
            </thead>
            <tbody>
EOF;
    for ($j = 0; $j < $ceil; $j++) {
      if ($count > 0) {
        $key = key($types);
        if ($key == '???') {
          $key_lc = 'hidden';
        } else {
          $key_lc = strtolower($key);
        }
        $item = array_shift($types); $count--;
        $tables .= <<<EOF

                <tr>
                  <td id="type-$key_lc">$key</td>
                  <td>$item</td>
                </tr>
EOF;
      } //if $count > 0
    } //for $j
    $tables .= <<<'EOF'

            </tbody>
          </table>
EOF;
  } //for $i
  echo $tables;
?>
        </div>
      </div>
    </div>
  </div>
<?php include __DIR__.'/inc/foot.inc'; ?>