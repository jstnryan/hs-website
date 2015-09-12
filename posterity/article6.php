<?php
$pagetitle = 'Iteminfo and Shipstatus (Legacy)';
include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc';
?>
</head>
<body id="articles">
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="article6"></a>
      <h2>Iteminfo and Shipstatus</h2>
      <p>Author: BlueWyvern<br>Updated and revised by: Aceflyer</p>
      <div class="tut">
        <ul>
          <li><b>adcooldown</b>: Time it takes before you can be resurrected by Antideath after you (re)spawn at center or after you have died and been resurrected Antideath.</li>
          <li><b>addelay</b>: Time (in reference to the time it takes for you to normally respawn after you die) that it takes for Antideath to activate.</li>
          <li><b>afterburners</b>: Energy consumed when afterburners are used continuously for around 10 seconds.</li>
          <li><b>antiwarp</b>: A value of 1 indicates you will receive antiwarp on spawn.</li>
          <li><b>bombdelay</b>: Time it takes before you can fire a bomb again after you have fired a bomb.</li>
          <li><b>bombenergy</b>: Base energy consumed when a bomb is fired from your ship. Multiply this number by the bomblevel to get the actual energy drained by firing a single bomb.</li>
          <li><b>bombenergyup</b>: Bomb energy consumption increase as bomblevel increases.</li>
          <li><b>bomblevel</b>: 1 means red bombs, 2 means yellow bombs, and 3 means blue bombs.</li>
          <li><b>bombdamage</b>: Maximum damage received from all bomb types. <u>(WARNING: Misleading! Inactshrapdamage is unaffected by this.)</u></li>
          <li><b>bounce</b>: A value of 1 indicates your guns can bounce off walls.</li>
          <li><b>bulletdelay</b>: Time it takes before you can shoot a bullet again after you have shot a bullet.</li>
          <li><b>bulletenergy</b>: Base energy consumed when a bullet is fired from your ship. Multiply this number by the gunlevel to get the actual energy drained by shooting a single bullet.</li>
          <li><b>bulletdamage</b>: How much damage you will receive from level 1 bullets.</li>
          <li><b>bulletdamageup</b>: How much additional damage you receive per gunlevel above level 1.</li>
          <li><b>burst</b>: Number of burst prizes granted.</li>
          <li><b>burstdamage</b>: Maximum damage received from a single burst bullet.</li>
          <li><b>brick</b>: Number of brick prizes granted.</li>
          <li><b>brickspan</b>: How long or short a brick is.</li>
          <li><b>brickmode</b>: Number indicating the type of brick you have. (1 = improved VIE style, 2 = drop in a line ahead of player, 3 = drop laterally across player, 4 = drop 4 bricks simultaneously to create a box/cage.)</li>
          <li><b>cloak</b>: A value of 1 indicates you will receive cloak on spawn.</li>
          <li><b>decoy</b>: Number of decoy prizes granted.</li>
          <li><b>dontbrick</b>: A value of 1 indicates pressing the brick key will not result in a brick being placed.</li>
          <li><b>ebombdamage</b>: How much damage an EMP bomb will do.</li>
          <li><b>ebombtime</b>: How long you will be EMP'd after you are hit by an EMP bomb.</li>
          <li><b>energyviewing</b>: A value of 1 indicates enemy ships' energy levels are visible on your screen.</li>
          <li><b>failpercent</b>: Chance in percent that a command will result in self-destruction.</li>
          <li><b>field</b>: Number indicating the type of field you have. (1 = Searing Heat, 2 = Lightning Ammo, 4 = Needler Ammo.)</li>
          <li><b>fieldlauncher</b>: A value of 1 indicates your ship is ?field capable.</li>
          <li><b>gunlevel</b>: 1 means yellow guns and 2 means blue guns.</li>
          <li><b>gravspeed</b>: Indicates the modifier of how your ship is affected by gravity (from wormholes). Negative values makes you faster.</li>
          <li><b>id</b>: A value of 1 indicates your ship is ?id capable.</li>
          <li><b>idblast</b>: Indicates the strength of the engine failure blast that will result from ID Drives failure.</li>
          <li><b>idcool</b>: Time it takes before you can ?id again after you have used ?id.</li>
          <li><b>idmaxtofail</b>: Indicates the minimum percentage of full energy of your ship needed when engaging ID Drives to have a 0% chance of ID Drives failure.</li>
          <li><b>idonlytk</b>: A value of 1 indicates that any engine failure blast resulting from ID Drives failure will only kill your freqmates.</li>
          <li><b>inactshrapdamage</b>: Damage you will receive from shrapnel NOT released when a bomb explodes.</li>
          <li><b>initialbounty</b>: Bounty modifier so that you always spawn at 10 bounty.</li>
          <li><b>jump</b>: A value of 1 indicates your ship is ?jump capable.</li>
          <li><b>jumpblast</b>: Indicates the strength of the engine failure blast that will result from Jump Engines failure.</li>
          <li><b>jumpcool</b>: Time it takes before you can ?jump again after you have used ?jump.</li>
          <li><b>jumpmaxtofail</b>: Indicates the minimum percentage of full energy of your ship needed when engaging Jump Engines to have a 0% chance of Jump Engines failure.</li>
          <li><b>jumponlytk</b>: A value of 1 indicates that any engine failure blast resulting from Jump Engines failure will only kill your freqmates.</li>
          <li><b>mapzoom</b>: Amount the radar is zoomed.</li>
          <li><b>maxmines</b>: Maximum number of mines you can have laid at any time.</li>
          <li><b>maxspeed</b>: Increases the maximum speed you can accelerate up to.</li>
          <li><b>maxthrust</b>: Increases the maximum acceleration your ship can achieve.</li>
          <li><b>minedelay</b>: Time it takes before you can lay a mine again after you have laid a mine.</li>
          <li><b>mineenergy</b>: Base energy consumed when a mine is laid by your ship. Multiply this number by the bomblevel to get the actual energy drained by laying a single mine.</li>
          <li><b>mineenergyup</b>: Mine energy consumption increase as bomblevel increases.</li>
          <li><b>multifire</b>: A value of 1 indicates you will receive multifire on spawn.</li>
          <li><b>multidelay</b>: Time it takes before you can shoot a multifire bullet again after you have shot a multifire bullet.</li>
          <li><b>multienergy</b>: Energy consumed when a multifire bullet is fired from your ship.</li>
          <li><b>nofastshoot</b>: A value of 1 indicates you will not be able to use afterburners and shoot at the same time.</li>
          <li><b>portal</b>: Number of portal prizes granted.</li>
          <li><b>prox</b>: A value of 1 indicates your bombs will explode in proximity of an enemy ship.</li>
          <li><b>recharge</b>: Number of recharge prizes granted.</li>
          <li><b>repel</b>: Number of repeller prizes granted.</li>
          <li><b>rocket</b>: Number of rocket prizes granted.</li>
          <li><b>rocketspeed</b>: Maximum speed of a rocket.</li>
          <li><b>rocketthrust</b>: Maximum thrust of a rocket.</li>
          <li><b>rockettime</b>: How long each of your rockets will last.</li>
          <li><b>rotation</b>: Number of rotation prizes granted.</li>
          <li><b>seebomblevel</b>: A value of 1 indicates bombs are visible on your radar.</li>
          <li><b>seemines</b>: A value of 1 indicates mines are visible on your radar.</li>
          <li><b>shrapdamage</b>: Maximum damage received from active shrap. (The shrap that comes out of an exploded bomb.)</li>
          <li><b>shrapnel</b>: Number of shrapnel prizes granted. (The actual amount of shrapnel varies with each ship.)</li>
          <li><b>speed</b>: Number of speed prizes granted.</li>
          <li><b>stealth</b>: A value of 1 indicates you will receive stealth on spawn.</li>
          <li><b>summon</b>: A value of 1 indicates your ship is ?summon capable.</li>
          <li><b>thrust</b>: Number of thrust prizes granted.</li>
          <li><b>transwarp</b>: A value of 2 or above indicates your ship is ?tw capable.</li>
          <li><b>turretspeed</b>: Multiply this value by the # of attached ships to get the speed decrease modifier of the turret base. *The initial value is higher than 1</li>
          <li><b>turretthrust</b>: Multiply this value by the # of attached ships to get the thrust decrease modifier of the turret base. *The initial value is higher than 1</li>
          <li><b>xradar</b>: A value of one indicates you will receive xradar on spawn.</li>
        </ul>
        <p><u>Additional notes regarding maxspeed and maxthrust:</u></p>
        <ul>
          <li>maxspeed and maxthrust will increase the maximum values of your ship's speed and thrust, respectively (i.e., they increase the scales of speed and thrust, respectively). This means that, for example, 1% thrust with maxthrust 0 does <u>not</u> equal 1% thrust with maxthrust 5!</li>
          <li>However, speed and thrust upgrades remain static. For example, with a given thrust upgrade, a player with maxthrust 0 will get something like a 5% increase to thrust, whereas a player with maxthrust 5 will get something like a 2% increase to thrust; i.e., they get the <u>same</u> amount of thrust upgrade.</li>
        </ul>
      </div>
    </div>
  </div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/foot.inc'; ?>