<?php
$pagetitle = 'Ship and Item Stats Browser';
include __DIR__.'/../inc/head.inc';
?>
  <style>
    table table td { text-transform: none; }
    #ship-buy-price::before,
    #ship-sell-price::before { content: '$'; }
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
      <div class="">


        <table cellspacing="0">
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
                        <select id="category-selector">
                          <option id="category-guns" value="Guns">Guns</option>
                          <option id="category-bombs" value="Bombs">Bombs</option>
                          <option id="category-sublightengines" value="Sublight Engines">Sublight Engines</option>
                          <option id="category-reactorplants" value="Reactor Plants">Reactor Plants</option>
                          <option id="category-armor" value="Armor">Armor</option>
                          <option id="category-sensors" value="Sensors">Sensors</option>
                          <option id="category-equipment" value="Equipment">Equipment</option>
                          <option id="category-mounts" value="Mounts">Mounts</option>
                          <option id="category-ftlengines" value="FTL Engines">FTL Engines</option>
                          <option id="category-converters" value="Converters">converters</option>
                          <option id="category-alientechnology" value="Alien Technology">Alien Technology</option>
                          <option id="category-consumables" value="Consumables">Consumables</option>
                          <option id="category-hidden" value="Hidden">Hidden</option>
                        </select>
                      </td>
                      <td>
                        <select id="item-selector">
                          <option id="item-gammaray" value="Gamma Ray">Gamma Ray</option>
                          <option id="item-gausscannon">Gausss Cannon</option>
                          <option id="item-disruptor">Disruptor</option>
                          <option id="item-peashooter">Pea Shooter</option>
                          <option id="item-shredder">Shredder</option>
                          <option id="item-beamarray">Beam Array</option>
                          <option id="item-phaser">Phaser</option>
                          <option id="item-plasmabeam">Plasma Beam</option>
                          <option id="item-arcfirearray">Arcfire Array</option>
                          <option id="item-shrapbooster">Shrap Booster</option>
                          <option id="item-neutrongun">Neutron Gun</option>
                          <option id="item-positrongun">Positron Gun</option>
                          <option id="item-massdriver">Mass Driver</option>
                          <option id="item-protonbeam">Proton Beam</option>
                          <option id="item-Sharppinger">Sharppinger</option>
                          <option id="item-gigajoulerailgun">GigajouleRailgun</option>
                          <option id="item-duallaser">Dual Laser</option>
                        </select>
                      </td>
                      <td>
                        An average yet versatile gun, for a low cost.
                      </td>
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
                      <td class="right">$1000</td>
                    </tr>
                    <tr>
                      <td>Sell Price</td>
                      <td class="right">$750</td>
                    </tr>
                    <tr>
                      <td>Exp</td>
                      <td class="right">0</td>
                    </tr>
                    <tr>
                      <td>Ships</td>
                      <td class="right">12345678</td>
                    </tr>
                    <tr>
                      <td>Max</td>
                      <td class="right">1</td>
                    </tr>
                    <tr>
                      <td>Ammo</td>
                      <td class="right">None</td>
                    </tr>
                    <tr>
                      <td>Item Types</td>
                      <td class="right">Gun</td>
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
                  <tbody id="ship-prop">
                    <tr>
                      <td>gunlevel</td>
                      <td>+2</td>
                    </tr>
                    <tr>
                      <td>bounce</td>
                      <td>+1</td>
                    </tr>
                    <tr>
                      <td>bulletenergy</td>
                      <td>=21</td>
                    </tr>
                    <tr>
                      <td>bulletdelay</td>
                      <td>=22</td>
                    </tr>
                    <tr>
                      <td>initialbounty</td>
                      <td>-1</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>var ship_json = <?= json_encode(json_decode(file_get_contents('ships.json'), true)['ships']); ?>;</script>
  <script src="browse.js"></script>
<?php include __DIR__.'/../inc/foot.inc'; ?>