<?php
function generate_category_capacities_tables() {
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
  return $tables;
}

$pagetitle = 'Ship and Item Stats Browser';
include __DIR__.'/../inc/head.inc';
?>
    <style>
      table table td { text-transform: none; }
      #ship-buy-price::before,
      #ship-sell-price::before { content: '$'; }

      #capacity-parent { overflow:auto; width:100%; /* float clear */ }
      #capacity-parent table { display: inline-block; float: left; width: 30%; margin:0 10px; }

      .wrap { white-space: normal; }
    </style>
  </head>
  <body id="browse">
<?php include __DIR__.'/../inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="ship-browser"></a>
      <h1>Ship Browser</h1>
      <p>With this utility you can view the default stats for each available ship in Hyperspace. This information is equivalent to the in-game <i>?buy ships</i> and <i>?shipinfo #</i> menus.</p>
      <div class="">
        <table cellspacing="0">
          <thead>
        		<tr>
        			<th colspan="4" class="contains-table">
                <table cellspacing="0" class="nested-table">
                  <thead>
                    <tr>
                      <th>Ship Name</th>
                      <th>Buy Price</th>
                      <th>Sell Price</th>
                      <th>Exp</th>
                      <th>Ship Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select id="ship-selector"></select>
                      </td>
                      <td id="ship-buy-price"></td>
                      <td id="ship-sell-price"></td>
                      <td id="ship-exp"></td>
                      <td id="ship-description"></td>
                    </tr>
                  </tbody>
                </table>
              </th>
        		</tr>
        	</thead>
          <tbody>
        		<tr>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Init Energy:</td>
                    <td id="ship-initialenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>Max Energry:</td>
                    <td id="ship-maximumenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>Upgrade:</td>
                    <td id="ship-upgradeenergy" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Init Recharge:</td>
                    <td id="ship-initialrecharge" class="right"></td>
                  </tr>
                  <tr>
                    <td>Max Recharge:</td>
                    <td id="ship-maximumrecharge" class="right"></td>
                  </tr>
                  <tr>
                    <td>Upgrade:</td>
                    <td id="ship-upgraderecharge" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Init Speed:</td>
                    <td id="ship-initialspeed" class="right"></td>
                  </tr>
                  <tr>
                    <td>Max Speed:</td>
                    <td id="ship-maximumspeed" class="right"></td>
                  </tr>
                  <tr>
                    <td>Upgrade:</td>
                    <td id="ship-upgradespeed" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Init Thrust:</td>
                    <td id="ship-initialthrust" class="right"></td>
                  </tr>
                  <tr>
                    <td>Max Thrust:</td>
                    <td id="ship-maximumthrust" class="right"></td>
                  </tr>
                  <tr>
                    <td>Upgrade:</td>
                    <td id="ship-upgradethrust" class="right"></td>
                  </tr>
                </table>
              </td>
        		</tr>
        		<tr>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Init Rotation:</td>
                    <td id="ship-initialrotation" class="right"></td>
                  </tr>
                  <tr>
                    <td>Max Rotation:</td>
                    <td id="ship-maximumrotation" class="right"></td>
                  </tr>
                  <tr>
                    <td>Upgrade:</td>
                    <td id="ship-upgraderotation" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Bullet Speed:</td>
                    <td id="ship-bulletspeed" class="right"></td>
                  </tr>
                  <tr>
                    <td>Bomb Speed:</td>
                    <td id="ship-bombspeed" class="right"></td>
                  </tr>
                  <tr>
                    <td>Shrapnel Rate:</td>
                    <td id="ship-shrapnelrate" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>Cloak Energy:</td>
                    <td id="ship-cloakenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>Stealth Energy:</td>
                    <td id="ship-stealthenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>AntiWarp Energy:</td>
                    <td id="ship-antiwarpenergy" class="right"></td>
                  </tr>
                </table>
              </td>
        			<td class="contains-table">
                <table class="nested-table" cellspacing="0">
                  <tr>
                    <td>XRadar Energy:</td>
                    <td id="ship-xradarenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>Afterburner Energy:</td>
                    <td id="ship-afterburnerenergy" class="right"></td>
                  </tr>
                  <tr>
                    <td>Radius:</td>
                    <td id="ship-radius" class="right"></td>
                  </tr>
                </table>
              </td>
        		</tr>
        	</tbody>
        </table>
        <br>
        <table id="ship-properties" cellspacing="0">
          <thead>
            <tr>
              <th>Property Name</th>
              <th>Property Value</th>
            </tr>
          </thead>
          <tbody id="ship-prop"></tbody>
        </table>
      </div>
      <a name="item-browser"></a>
      <h2>Item Browser</h2>
      <p>The item browser is the web equivalent of the in-game <i>?buy</i> and <i>?iteminfo</i> menus. You can use this utility to plan a ship build, or compare various items, outside of the game environment.</p>
      <div class="tut">


        <table cellspacing="0" style="width:100%;">
          <thead>
            <tr>
              <th class="contains-table" colspan="2">
                <table class="nested-table" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Item</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select id="category-selector"></select>
                      </td>
                      <td>
                        <select id="item-selector"></select>
                      </td>
                      <td id="item-long_description" class="wrap"></td>
                    </tr>
                  </tbody>
                </table>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <table class="nested-table" cellspacing="0">
                  <tbody>
                    <tr>
                      <td>Buy Price</td>
                      <td id="item-buy_price" class="right"></td>
                    </tr>
                    <tr>
                      <td>Sell Price</td>
                      <td id="item-sell_price" class="right"></td>
                    </tr>
                    <tr>
                      <td>Exp</td>
                      <td id="item-exp_required" class="right"></td>
                    </tr>
                    <tr>
                      <td>Ships</td>
                      <td id="item-ships_allowed" class="right"></td>
                    </tr>
                    <tr>
                      <td>Max</td>
                      <td id="item-max" class="right"></td>
                    </tr>
                    <tr>
                      <td>Ammo</td>
                      <td id="item-min_ammo" class="right"></td>
                    </tr>
                    <tr>
                      <td>Item Types</td>
                      <td id="item-types" class="right"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table id="item-properties" class="nested-table" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Property Name</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody id="item-prop">
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>Category Capacities</h2>
      <p>The following list details the default capacities per item type/category, per ship. Note that these numbers can be modified by purchasable items, or individual ship types; for example "Burst: 0" is increased by purchasing Burst mounts, or may be increased when equiping a Lancaster, for example, as opposed to a Warbird. Additionally, individual items may occupy more than one capacity type.</p>
      <div class="tut">
        <div id="capacity-parent">
<?php echo generate_category_capacities_tables(); ?>
        </div>
      </div>
    </div>
  </div>
  <script>
    //var ship_json = /?= json_encode(json_decode(file_get_contents('ships.json'), true)['ships']); ?/;
    var ship_json = <?= file_get_contents("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/build-api.php?q=ships'); ?>;
    //var item_json = /?= json_encode(json_decode(file_get_contents('items.json'), true)['items']); ?/;
    var item_json = <?= file_get_contents("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/build-api.php?q=items'); ?>;
  </script>
  <script src="browse.js"></script>
<?php include __DIR__.'/../inc/foot.inc'; ?>