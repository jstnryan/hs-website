<?php
$pagetitle = 'Ship Builder';
include __DIR__.'/inc/head.inc';
?>
    <script src="build.js"></script>
    <style>
      #builder-parent { overflow:auto; width:100%; /* float clear */ }
      #builder-shortener { display: none; }
      #builder select { display: block; width: 90%; }
      #builder-parent div#builder { width: 24%; float: left; }
      #builder-parent ul#active-items { width: 36%; float: left; }
      #builder-parent div#ship-builder { width: 36%; float: left;}
      /* #builder-parent { max-height: 700px; overflow: auto; } */

      #active-items { font-size: 9pt; margin: 0; padding: 0 20px 0 10px; }
      #active-items li:hover { cursor: pointer; }
      #active-items li:hover:after { content: ' [x]'; }

      #ship-builder { max-height: 700px; overflow: auto; }

      #builder-parent .error { color: red; }

      #capacity-parent { overflow:auto; width:100%; /* float clear */ }
      #capacity-parent table { display: inline-block; float: left; width: 30%; margin:0 10px; }
    </style>
  </head>
  <body id="build">
<?php include __DIR__.'/inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="build"></a>
      <h1>Ship Builder</h1>
      <p>The Ship Builder tool can be used to more efficiently plan your next ship build. Items are automatically updated, and have the latest attributes. The numbers output in the table do not take into account ship types, nor defaults.</p>
      <div class="">
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