<?php
$pagetitle = 'Common Terminology and Ship Status Glossary';
include __DIR__.'/../inc/head.inc';
?>
</head>
<body id="glossary">
<?php include __DIR__.'/../inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="common-terms"></a>
      <h1>Common Terminology</h1>
      <p>The following are terms which may be read in conversation, or may appear in news.txt.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Term</th>
              <th>Meaning and Usage</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ad, AD</td>
              <td>May refer to:
                <ul>
                  <li>Anti-Death - Often during flag games, Lancaster ship pilots (or those with Evoker) will announce "ad" upon a death, informing their teammates who may be waiting to <i class="nowrap">/?attach</i> that they have to wait until they've respawned.</li>
                  <li>Advance - Also during flag games, teammates may announce "ad" to encourage the team to advance toward the enemy or flag room. This variation is more often than not used in a sentence, as opposed to alone, such as, "smalls ad."</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>at, AT</td>
              <td>May refer to:
                <ul>
                  <li>Alien Technology - A category of purchasable ship modification items.</li>
                  <li>Attach - Although rare, some players will use the abbreviated word to ask other teammates to attach to their ship.<br>See also: anchor</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>anchor</td>
              <td>Refers to the ship on the flagging team to which the team attaches aftear death to warp back to the flagging base, or to the action of attaching to the anchor ship.<br>Syn: lanc, evoker</td>
            </tr>
            <tr>
              <td>buff</td>
              <td>To increase the capability or performance of something.<br>Ant: nerf</td>
            </tr>
            <tr>
              <td>center, c, sector0</td>
              <td>The area at the center of the zone map. Center does not have a flagging base, but initially all flags are placed here. This area is generally used for standard dogfighting.</td>
            </tr>
            <tr>
              <td>drop</td>
              <td>When a ship is carrying flags, the flags will "drop" when the flag timer expires. The location they are dropped determines ownership of the flags. Flags dropped in a <i>flag room</i> are claimed by the team. Flags dropped outside of a flag room are <i>neuted</i>, or not owned by anyone. Typically, drop refers to the former.<br>Ant: neut</td>
            </tr>
            <tr>
              <td>evo, evoker</td>
              <td>Evoker is the item that can be added to certain ships which allows other ships to attach with no energy penalty. Teammates may announce "evo" when they want to you attach to them.</td>
            </tr>
            <tr>
              <td><span class="nowrap">flag room</span>, fr</td>
              <td>The area most central to a base, where flags can be <i>dropped</i> to retain team ownership.</td>
            </tr>
            <tr>
              <td>jp, jackpot</td>
              <td>The reward purse for the next completed flag game. The jackpot can be seen (if it is not disabled) by typing <i>?jackpot</i>, however the actual jackpot amount to be rewarded at the end of a flag game is affected by a mathematical formula, and will be different than the number displayed.</td>
            </tr>
            <tr>
              <td>lanc, lancaster</td>
              <td>Litterally used to refer to the Lancaster ship type, however because of the <i>?lancs</i> command, sometimes is used as a blanket term to describe any ship with Evoker capability that can be attached to.<br>Syn: anchor, evoker</td>
            </tr>
            <tr>
              <td>nerf</td>
              <td>To decrease the capability or performance of something.<br>Ant: buff</td>
            </tr>
            <tr>
              <td>neut, neutral</td>
              <td>May refer to:
                <ul>
                  <li>A flag that has been dropped outside of a <i>flag room</i>, or an unclaimed flag.</li>
                  <li>The act of <i>dropping</i> a flag in a way that ensures it is not claimed by the team, such as changing ships or team-killing.<br>Ant: drop</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>op</td>
              <td>An abbreviation for 'over powered.' Generally used referring to one or more items in an itemset that are throught to have been made too strong, in comparisson to other items.</td>
            </tr>
            <tr>
              <td>pd, PD</td>
              <td>An abbreviation for Point Defense, the item that adds an automated turret to a ship.</td>
            </tr>
            <tr>
              <td>sig, signature</td>
              <td>Some of the ship items which can be purchased are considered 'signature items.' These items are part of a group of specialized items, of which each ship can only (typically) carry one at a time. In the <i>?buy</i> menus, these items' descriptions begin with <b>[S]</b>.</td>
            </tr>
            <tr>
              <td>smalls</td>
              <td>The smaller sized ships, ie the Warbird and Javelin. Often these ships are used for <i>rushing</i>, and a teammate will announce "ad smalls," to encourage pilots in small ships to advance. Smalls can attach to larger ships.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <a name="ship-properties"></a>
      <h1>Ship Properties Reference</h1>
      <p>This is a list of the adjustable ship properties which can be found, for instance, when typing <i class="nowrap">?iteminfo</i> or <i class="nowrap">?shipstatus -v</i>.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
                <th>Attribute</th>
                <th>Definition</th>
                <th>Benefit if:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>adcooldown</td>
                <td>The time required for Anti-Death to 'recharge.'</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>addelay</td>
                <td>The amount of time before Anti-Death can be used.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>afterburner</td>
                <td>The amount of energy required to use Afterburners.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>antienergy</td>
                <td>The amount of energy required to activate (and use) Antiwarp.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>antiwarp</td>
                <td>Whether Warp Disruptor (Antiwarp) is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>attachmask</td>
                <td>Modifies which ship types you can attach to.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>blink</td>
                <td>Whether Dilithium Matrix is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>blinkaweffect</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>blinkdelay</td>
                <td>The amount of time before Dilithium Matrix can be used.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>blinkdistance</td>
                <td>The distance of the Dilithium Matrix jump.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>blinkmin</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>blinkradius</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>bombdamage</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bombdelay</td>
                <td>The time between bombs, or the time that must elapse after firing a bomb, before another weapon can be used.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bombdelaypct</td>
                <td>Modifies your ship's &lt;bombdelay&gt; by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bombenergy</td>
                <td>The cost (in energy) to fire one bomb. Multiply by &lt;bomblevel&gt; to get actual cost.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>bombenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bomblevel</td>
                <td>The [tiered] level of damage caused by bombs and mines.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>bounce</td>
                <td>Whether bullets bounce off walls.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>brick</td>
                <td>The number of Brick your ship has at spawn.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>brickmax</td>
                <td>The maximum number of Brick your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>brickmode</td>
                <td>The type (shape) of Brick you carry. 1 = Wall, 2 = Long Wall, 4 = Box.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>brickspan</td>
                <td>The size (number of tiles) of the Brick you carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>bulletdamage</td>
                <td>Affects the amount of damage you recieve from bullets of any &lt;gunlevel&gt;.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bulletdamageup</td>
                <td>Affects the amount of damage you recieve from bullets with &lt;gunlevel&gt; 2 and above. [totaldamage = bulletdamage + (bulletdamageup x (gunlevel - 1))]</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bulletdelay</td>
                <td>The time between bullets, or the time that must elapse after firing a bullet, before another weapon can be used.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bulletdelaypct</td>
                <td>Modifies your ship's &lt;bulletdelay&gt; by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>bulletenergy</td>
                <td>The cost (in energy) to fire one bullet. Multiply by &lt;gunlevel&gt; to get actual cost.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>bulletenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>burst</td>
                <td>The number of Burst your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>burstdamage</td>
                <td>The damage you receive from a single burst bullet.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>burstmax</td>
                <td>The maximum number of Burst your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>cloak</td>
                <td>Whether Cloak is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>cloakenergy</td>
                <td>The amount of energy required to activate Cloak.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>decoy</td>
                <td>The number of Decoy your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>decoymax</td>
                <td>The maximum number of Decoy your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>dontbrick</td>
                <td>Used for Energy Infusion, and Revival Module (to prevent actual bricks being placed).</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>ebombdamage</td>
                <td>Modifies the amount of damage caused by E-Bombs, expressed as a percentage ('-210' is -21% of damage).</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>ebombtime</td>
                <td>Modifies the amount of time your ship is affected by E-Bombs.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>energy</td>
                <td>The total amount of energy your ship has.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>energyscrambling</td>
                <td>The ability to hide your energy level to ships with Energy Scanner.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>energyviewing</td>
                <td>Whether you can view other ship's energy levels (with Energy Scanner, or Oracle System).</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>enterdelay</td>
                <td>How long you must wait before your ship spawns.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>exp_multiplier</td>
                <td>Multiplies your EXP (experience) when you receive a reward.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>explodepixels</td>
                <td>The 'splash' radius of your ship's bombs. The farther away from the explosion, the less damage.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>extrabombcount</td>
                <td>The additional number of bombs released for each bomb fired.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>extrabombdelay</td>
                <td>The amount of time between release of extra bombs.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>field</td>
                <td>The type of Field carried. 2 = EMP Field, 1 = Lightning Field, 16 = Coffin Field, 4 = Searing Heat, 8 = Chaos Field</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>fielddelay</td>
                <td>The time required between activating Fields.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>fieldlauncher</td>
                <td>Whether your ship has the ability to activate Fields.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>gravspeed</td>
                <td>How much your ship's speed is affected by black holes.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>gunlevel</td>
                <td>The [tiered] level of damage caused by bullets.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>hsd_multiplier</td>
                <td>Multiplies your HSD (money) when you receive a reward.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>id</td>
                <td>Whether ID Drive is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>idarea</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>idblast</td>
                <td>The strength of the explosion that will result from engine failure.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>idcool</td>
                <td>How long you must wait in between uses of ID Drive.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>idimage</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>idmaxtofail</td>
                <td>The maximum level of energy that would allow your ID Drive to have engine failure. Using ID with an energy level higher than this amount results in a 0% chance of failure.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>idonlytk</td>
                <td>Whether your ID Transport engine failure affects only your team, or others.</td>
                <td>Non-one</td>
            </tr>
            <tr>
                <td>idwarmup</td>
                <td>The length of time you must wait before using ID Drive.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>inactshrapdamage</td>
                <td>Damage incurred by shrapnel that did not originate from a bomb blast.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>initialbounty</td>
                <td>Modifies the bounty your ship has when it spawns.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>jittertime</td>
                <td>The amount your screen shakes when impacted by certain bombs.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>mapzoom</td>
                <td>The amount of map that can be seen on radar.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>maxmines</td>
                <td>The maximum number of mines which can be laid at any time.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>maxspeed</td>
                <td>Your ship's maximum speed (Afterburners).</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>maxthrust</td>
                <td>Your ship's maximum thrust (Afterburners).</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>minedelay</td>
                <td>The length of waiting time required in between laying successive mines.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>minedelaypct</td>
                <td>Modifies your ship's &lt;minedelay&gt; by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>mineenergy</td>
                <td>The amount of energy consumed to lay a L1 mine. Multiply by your ship's bomblevel to calculate actual amount.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>mineenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>mineenergyup</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>multidelay</td>
                <td>The length of time between multi-fire bullet shots.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>multidelaypct</td>
                <td>Modifies your ship's &lt;multidelay&gt; by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>multienergy</td>
                <td>The amount of energy consumed when firing a single multifire bullet shot.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>multienergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>multifire</td>
                <td>Whether or not the gun has multi-fire capability</td>
                <td>1</td>
            </tr>
            <tr>
              <td>nofastshoot</td>
              <td>Determines whether you can shoot while using afterburners.</td>
              <td>Non-one</td>
            </tr>
            <tr>
                <td>portal</td>
                <td>The number of Portal your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>portalmax</td>
                <td>The maximum number of Portal your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>prox</td>
                <td>Whether proximity is enabled for your ships bombs. Proximity radius increases with &lt;bomblevel&gt;.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>recharge</td>
                <td>Your ship's speed of energy recharge.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>repel</td>
                <td>The number of Repel your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>repelmax</td>
                <td>The maximum number of Repel your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>rocket</td>
                <td>The number of Rocket your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>rocketmax</td>
                <td>The maximum number of Rocket your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>rocketspeed</td>
                <td>Modifies your ship's speed when using Rocket.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>rocketthrust</td>
                <td>Modifies the thrust when your ship is using Rocket.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>rotation</td>
                <td>How fast your ship can rotate.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>seebomblevel</td>
                <td>Whether you can see incoming bombs on radar.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>seemines</td>
                <td>Whether you can see mines on radar.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>shraplevel</td>
                <td>The [tiered] level of damage caused by shrapnel.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>shrapnel</td>
                <td>The amount of shrapnel generated by a bomb or mine explosion.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>shraprate</td>
                <td>The amount of bomb shrapnel (generally set per ship type).</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>speed</td>
                <td>Your ship's flying speed.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>stealth</td>
                <td>Whether Stealth is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>stealthenergy</td>
                <td>The amount of energy required to actiave Stealth.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>summon</td>
                <td>Whether Evoker/Summoner is enabled on your ship (other ships can 'attach' to you without losing energy).</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>summonmask</td>
                <td>Determines the type of Evoker/Summoner behavior for your ship. 51 = Evoker, 191 = Summoner, 242 = Both</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>thor</td>
                <td>The number of Thor's Hammer your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>thormax</td>
                <td>The maximum number of Thor's Hammer your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>thrust</td>
                <td>Your ship's ability to quickly change direction of travel.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretalt</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>turretdelay</td>
                <td>The &lt;bulletdelay&gt; of your automated turrent's gun.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretenergy</td>
                <td>The total energy of your automated turret.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretlevel</td>
                <td>The &lt;gunlevel&gt; of your automated turret's gun.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretlimit</td>
                <td>The maximum number of ships which can stay attached to your ship as turrets.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretmaxrange</td>
                <td>The maximum distance to an enemy that your automated turret will fire.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretminrange</td>
                <td>The minimum distance to an enemy that your turret will fire.</td>
                <td>Neutral</td>
            </tr>
            <tr>
                <td>turretrecharge</td>
                <td>Your automated turret's speed of energy recharge.</td>
                <td>Higher</td>
            </tr>
            <tr>
                <td>turretship</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>turretspeed</td>
                <td>The speed decrease incurred when a turret attaches. This value is multiplied by the number of attached ships.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>turretthrust</td>
                <td>The thrust decrease incurred when a turret attaches. This value is multiplied by the number of attached ships.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>turretweapon</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>xradar</td>
                <td>Whether X-Radar is enabled on your ship.</td>
                <td>1</td>
            </tr>
            <tr>
                <td>xradarenergy</td>
                <td>The amount of energy required to activate X-Radar.</td>
                <td>Lower</td>
            </tr>
            <tr>
                <td>xradarrange</td>
                <td></td>
                <td>Higher</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include __DIR__.'/../inc/foot.inc'; ?>