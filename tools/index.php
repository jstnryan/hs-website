<?php
$pagetitle = 'Player Tools';
include __DIR__.'/../inc/head.inc';
?>
</head>
<body id="articles">
<?php include __DIR__.'/../inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="tools"></a>
      <h1>Player Tools</h1>
      <p>Stuff to make you harder, faster, stronger.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Utility</th>
              <th>Description [and Use]</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="/tools/browse.php#ship-browser">Ship Browser</a></td>
              <td>Display and compare the various characteristics of the different ship types. This is the web equivalent of the in-game <i>?shipinfo &lt;#&gt;</i> menu.</td>
            </tr>
            <tr>
              <td><a href="/tools/browse.php#item-browser">Item Browser</a></td>
              <td>Item Browser allows you to read through the description and specifications of the many purchasable items available in Hyperspace. This is the web equivalent of the in-game <i>?iteminfo &lt;item&gt;</i> menu.</td>
            </tr>
            <tr>
              <td><a href="/tools/build.php">Ship Builder</a></td>
              <td>The Ship Builder allows you to make 'virtual' builds consisting of the various available items, outside of the game, so that you can compare different characteristics, without spending your hard-earned Hyperspace Bucks.</td>
            </tr>
            <tr>
              <td><!--<a href="/tools/calc.php#bullet-calc">-->Bullet Calculator<!--</a>--></td>
              <td>The gun characteristic calculator, extracted from the elusive HsGuns.xlsx spreadsheet.</td>
            </tr>
            <tr>
              <td><!--<a href="/tools/calc.php#bomb-calc">-->Bomb Calculator<!--</a>--></td>
              <td>The bomb characteristic calculator, extracted from the elusive HsGuns.xlsx spreadsheet.</td>
            </tr>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php include __DIR__.'/../inc/foot.inc'; ?>