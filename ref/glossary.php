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
            <tr id="ref-term-ad">
              <td>ad</td>
              <td>May refer to:
                <ul>
                  <li>Anti-Death - Often during flag games, Lancaster ship pilots (or those with <i>Evoker</i>) will announce "ad" upon a death, informing their teammates who may be waiting to <code class="nowrap">/?attach</code> that they have to wait until they've respawned.</li>
                  <li>Advance - Also during flag games, teammates may announce "ad" to encourage the team to advance toward the enemy or flag room. This variation is more often than not used in a sentence, as opposed to alone, such as, "<a href="#ref-term-small">smalls</a> ad."</li>
                </ul>
              </td>
            </tr>
            <tr id="ref-term-at">
              <td>at</td>
              <td>May refer to:
                <ul>
                  <li>Alien Technology - A category of purchasable ship modification items.</li>
                  <li>Attach - Although rare, some players will use the abbreviated word to ask other teammates to attach to their ship.<br>See also: <a href="#ref-term-anchor">anchor</a></li>
                </ul>
              </td>
            </tr>
            <tr id="ref-term-anchor">
              <td>anchor</td>
              <td>Refers to the ship on the flagging team to which the team attaches aftear death to warp back to the flagging base, or to the action of attaching to the anchor ship.<br>Syn: <a href="#ref-term-lancaster">lanc</a>, <a href="#ref-term-evoker">evoker</a></td>
            </tr>
            <tr id="ref-term-big">
              <td>big[s]</td>
              <td>The large sized ships, ie the Spider and Leviathan. This may also include the Lancaster, although it is bigger than the other two. These ships can be equiped with <i>Evoker</i> (and <i>Summoner</i> in the case of the Leviathan), so that other ships can attach with no energy penalty, to become an <a href="#ref-term-anchor">anchor</a>.</td>
            </tr>
            <tr id="ref-term-buff">
              <td>buff</td>
              <td>To increase the capability or performance of something; to 'buffer.'<br>Ant: <a href="#ref-term-nerf">nerf</a></td>
            </tr>
            <tr id="ref-term-center">
              <td>center, c, sector0</td>
              <td>The area at the center of the zone map. Center does not have a flagging base, but initially all flags are placed here. This area is generally used for standard dogfighting.</td>
            </tr>
            <tr id="ref-term-drop">
              <td>drop</td>
              <td>When a ship is carrying flags, the flags will "drop" when the flag timer expires. The location they are dropped determines ownership of the flags. Flags dropped in a <a href="#ref-term-flagroom">flag room</a> are claimed by the team. Flags dropped outside of a flag room are <a href="#ref-term-neutral">neuted</a>, or not owned by anyone. Typically, drop refers to the former.<br>Ant: <a href-"#ref-term-neutral">neut</a></td>
            </tr>
            <tr id="ref-term-evoker">
              <td>evo, evoker</td>
              <td>Evoker is the item that can be added to certain ships which allows other ships to attach with no energy penalty. Teammates may announce "evo" when they want to you attach to them.</td>
            </tr>
            <tr id="ref-term-farm">
              <td>farm, farming</td>
              <td>Utilizing bots for unapproved gain, such as <a href="#ref-term-grind">grinding</a> them for easy money, or transfering money from a bot account to the account of a real player. <i>Note: Farming is against zone rules.</i></td>
            </tr>
            <tr id="ref-term-flagroom">
              <td><span class="nowrap">flag room</span>, fr</td>
              <td>The area most central to a base, where flags can be <a href="#ref-term-drop">dropped</a> to retain team ownership.</td>
            </tr>
            <tr id="ref-term-grind">
              <td>grind</td>
              <td>May refer to:
                <ul>
                  <li>The process of killing enemy ships repeatedly to earn money and exp.</li>
                  <li>Repeatedly killing bots, usually with ignoble tactics, to more easily amass money and exp. See also: <a href="#ref-term-farm">Farming</a>. <i>Note: Grinding bots is against zone rules.</i></li>
                </ul>
              </td>
            </tr>
            <tr id="ref-term-jackpot">
              <td>jp, jackpot</td>
              <td>The reward purse for the next completed flag game. The jackpot can be seen (if it is not disabled) by typing <code>?jackpot</code>, however the actual jackpot amount to be rewarded at the end of a flag game is affected by a mathematical formula, and will be different than the number displayed.</td>
            </tr>
            <tr id="ref-term-lancaster">
              <td>lanc, lancaster</td>
              <td>Litterally used to refer to the Lancaster ship type, however because of the <code>?lancs</code> command, sometimes is used as a blanket term to describe any ship with Evoker capability that can be attached to.<br>Syn: <a href="#ref-term-anchor">anchor</a>, <a href="#ref-term-evoker">evoker</a></td>
            </tr>
            <tr id="ref-term-leak">
              <td>leak[ing]</td>
              <td>May refer to:
                <ul>
                  <li>When an enemy ship gets past the opposition's line of defense inside of a base.</li>
                  <li>A ship built for the purpose of doing the aforementioned.</li>
                </li>
              </td>
            </tr>
            <tr id="ref-term-medium">
              <td>med[s], medium[s]</td>
              <td>The medium sized ships, ie the Terrier and Weasel. These ships can only attach to larger ships.</td>
            </tr>
            <tr id="ref-term-nerf">
              <td>nerf</td>
              <td>To decrease the capability or performance of something.<br>Ant: <a href="#ref-term-buff">buff</a></td>
            </tr>
            <tr id="ref-term-neutral">
              <td>neut, neutral</td>
              <td>May refer to:
                <ul>
                  <li>A flag that has been dropped outside of a <a href="#ref-term-flagroom">flag room</a>, or an unclaimed flag.</li>
                  <li>The act of <a href="#ref-term-drop">dropping</a> a flag in a way that ensures it is not claimed by the team, such as changing ships or team-killing.<br>Ant: <a href="#ref-term-drop">drop</a></li>
                </ul>
              </td>
            </tr>
            <tr id="ref-term-op">
              <td>op</td>
              <td>An abbreviation for 'over powered.' Generally used referring to one or more items in an itemset that are throught to have been made too strong, in comparisson to other items.</td>
            </tr>
            <tr id="ref-term-pd">
              <td>pd</td>
              <td>An abbreviation for <i>Point Defense</i>, the item that adds an automated turret to a ship.</td>
            </tr>
            <tr id="ref-term-rush">
              <td>rush[ing]</td>
              <td>May refer to:
                <ul>
                  <li>The act of agressively attacking the enemy inside a base.</li>
                  <li>A ship built for the purpose of doing the aforementioned.</li>
                </ul>
              </td>
            </tr>
            <tr id="ref-term-signature">
              <td>sig, signature</td>
              <td>Some of the ship items which can be purchased are considered 'signature items.' These items are part of a group of specialized items, of which each ship can only (typically) carry one at a time. In the <code>?buy</code> menus, these items' descriptions begin with <b>[S]</b>.</td>
            </tr>
            <tr id="ref-term-small">
              <td>small[s]</td>
              <td>The smaller sized ships, ie the Warbird, Javelin, and Shark. Often these ships are used for <a href="#ref-term-rush">rushing</a> or <a href="#ref-term-leak">leaking</a>, and a teammate will announce "ad smalls," to encourage pilots in small ships to advance. Smalls can attach to larger ships.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <a name="ship-properties"></a>
      <h1>Ship Properties Reference</h1>
      <p>This is a list of the adjustable ship properties which can be found, for instance, when typing <code class="nowrap">?iteminfo</code> or <code class="nowrap">?shipstatus -v</code>.</p>
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
            <tr id="ref-gloss-adcooldown">
                <td>adcooldown</td>
                <td>The time required for <i>Anti-Death</i> to 'recharge.'</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-addelay">
                <td>addelay</td>
                <td>The amount of time before <i>Anti-Death</i> can be used.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-afterburner">
                <td>afterburner</td>
                <td>The amount of energy required to use Afterburners.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-antienergy">
                <td>antienergy</td>
                <td>The amount of energy required to activate (and use) Antiwarp.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-antiwarp">
                <td>antiwarp</td>
                <td>Whether <i>Warp Disruptor</i> (Antiwarp) is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr id="ref-gloss-attachmask">
                <td>attachmask</td>
                <td>Modifies which ship types you can attach to.</td>
                <td>Neutral</td>
            </tr>
            <tr id="ref-gloss-blink">
                <td>blink</td>
                <td>Whether <i>Dilithium Matrix</i> is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr id="ref-gloss-blinkaweffect">
                <td>blinkaweffect</td>
                <td></td>
                <td></td>
            </tr>
            <tr id="ref-gloss-blinkdelay">
                <td>blinkdelay</td>
                <td>The amount of time before <i>Dilithium Matrix</i> can be used.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-blinkdistance">
                <td>blinkdistance</td>
                <td>The distance of the <i>Dilithium Matrix</i> jump.</td>
                <td>Neutral</td>
            </tr>
            <tr id="ref-gloss-blinkmin">
                <td>blinkmin</td>
                <td></td>
                <td></td>
            </tr>
            <tr id="ref-gloss-blinkradius">
                <td id="ref-gloss-blinkradius">blinkradius</td>
                <td></td>
                <td></td>
            </tr>
            <tr id="ref-gloss-bombdamage">
                <td>bombdamage</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-bombdelay">
                <td>bombdelay</td>
                <td>The time between bombs, or the time that must elapse after firing a bomb, before another weapon can be used.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-bombdelaypct">
                <td>bombdelaypct</td>
                <td>Modifies your ship's <a href="#ref-gloss-bombdelay">bombdelay</a> by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr id="ref-gloss-bombenergy">
                <td>bombenergy</td>
                <td>The cost (in energy) to fire one bomb. Multiply by <a href="#ref-gloss-bomblevel">bomblevel</a> to get actual cost.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-bombenergypct">
                <td>bombenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-bomblevel">
                <td>bomblevel</td>
                <td>The [tiered] level of damage caused by bombs and mines.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-bounce">
                <td>bounce</td>
                <td>Whether bullets bounce off walls.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-brick">
                <td>brick</td>
                <td>The number of Brick your ship has at spawn.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-brickmax">
                <td>brickmax</td>
                <td>The maximum number of Brick your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-brickmode">
                <td>brickmode</td>
                <td>The type (shape) of Brick you carry. 1 = Wall, 2 = Long Wall, 4 = Box.</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-brickspan">
                <td>brickspan</td>
                <td>The size (number of tiles) of the Brick you carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-bulletdamage">
                <td>bulletdamage</td>
                <td>Affects the amount of damage you recieve from bullets of any <a href="#ref-gloss-gunlevel">gunlevel</a>.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-bulletdamageup">
                <td>bulletdamageup</td>
                <td>Affects the amount of damage you recieve from bullets with <a href="#ref-gloss-gunlevel">gunlevel</a> 2 and above. [totaldamage = <a href="#ref-gloss-bulletdamage">bulletdamage</a> + (<a href="#ref-gloss-bulletdamageup">bulletdamageup</a> x (<a href="#ref-gloss-gunlevel">gunlevel</a> - 1))]</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-bulletdelay">
                <td>bulletdelay</td>
                <td>The time between bullets, or the time that must elapse after firing a bullet, before another weapon can be used.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-bulletdelaypct">
                <td>bulletdelaypct</td>
                <td>Modifies your ship's <a href="#ref-gloss-bulletdelay">bulletdelay</a> by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-bulletenergy">
                <td>bulletenergy</td>
                <td>The cost (in energy) to fire one bullet. Multiply by <a href="#ref-gloss-gunlevel">gunlevel</a> to calculate actual cost.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-bulletenergypct">
                <td>bulletenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-burst">
                <td>burst</td>
                <td>The number of Burst your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-burstdamage">
                <td>burstdamage</td>
                <td>The damage you receive from a single burst bullet.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-burstmax">
                <td>burstmax</td>
                <td>The maximum number of Burst your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-cloak">
                <td>cloak</td>
                <td>Whether Cloak is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-cloakenergy">
                <td>cloakenergy</td>
                <td>The amount of energy required to activate Cloak.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-decoy">
                <td>decoy</td>
                <td>The number of Decoy your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-decoymax">
                <td>decoymax</td>
                <td>The maximum number of Decoy your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-dontbrick">
                <td>dontbrick</td>
                <td>Used for <i>Energy Infusion</a>, and <i>Revival Module</a> (to prevent actual bricks being placed).</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-ebombdamage">
                <td>ebombdamage</td>
                <td>Modifies the amount of damage caused by EMP Bombs, expressed as a percentage ('-210' is -21% of damage).</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-ebombtime">
                <td>ebombtime</td>
                <td>Modifies the amount of time your ship is affected by EMP Bombs.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-energy">
                <td>energy</td>
                <td>The total amount of energy your ship has.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-energyscrambling">
                <td>energyscrambling</td>
                <td>The ability to hide your energy level to ships with <i>Energy Scanner</i>.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-energyviewing">
                <td>energyviewing</td>
                <td>Whether you can view other ship's energy levels (with <i>Energy Scanner</i>, or <i>Oracle System</i>).</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-enterdelay">
                <td>enterdelay</td>
                <td>How long you must wait before your ship spawns after each death.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-exp_multiplier">
                <td>exp_multiplier</td>
                <td>Multiplies your EXP (experience) when you receive a reward.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-explodepixels">
                <td>explodepixels</td>
                <td>The 'splash' radius of your ship's bombs. The farther away from the explosion, the less damage.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-extrabombcount">
                <td>extrabombcount</td>
                <td>The additional number of bombs released for each bomb fired.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-extrabombdelay">
                <td>extrabombdelay</td>
                <td>The amount of time between release of extra bombs.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-field">
                <td>field</td>
                <td>The type of <i>Field</i> carried. 2 = <i>EMP Field</i>, 1 = <i>Lightning Field</i>, 16 = <i>Coffin Field</i>, 4 = <i>Searing Heat</i>, 8 = <i>Chaos Field</i></td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-fielddelay">
                <td>fielddelay</td>
                <td>The time required between activating <i>Fields</i>.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-fieldlauncher">
                <td>fieldlauncher</td>
                <td>Whether your ship has the ability to activate <i>Fields</i>.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-gravspeed">
                <td>gravspeed</td>
                <td>How much your ship's speed is affected by black holes.</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-gunlevel">
                <td>gunlevel</td>
                <td>The [tiered] level of damage caused by bullets.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-hsd_multiplier">
                <td>hsd_multiplier</td>
                <td>Multiplies the HSD (money) when you receive a reward.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-id">
                <td>id</td>
                <td>Whether <i>ID Drive</i> is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-idarea">
                <td>idarea</td>
                <td><!-- The amount of space (distance to nearest wall) that must exist around your ship before activating <i>ID Drive</i>. --></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-idblast">
                <td>idblast</td>
                <td>The strength of the explosion that will result from engine failure.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-idcool">
                <td>idcool</td>
                <td>How long you must wait in between uses of <i>ID Drive</i>.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-idimage">
                <td>idimage</td>
                <td></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-idmaxtofail">
                <td>idmaxtofail</td>
                <td>The maximum level of energy that would allow your <i>ID Drive</i> to have engine failure. Using <i>ID</i> with an energy level higher than this amount results in a 0% chance of failure.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-idonlytk">
                <td>idonlytk</td>
                <td>Whether your <i>ID Drive</i> engine failure affects only your team, or others.</td>
                <td>Non-one</td>
            </tr>
            <tr  id="ref-gloss-idwarmup">
                <td>idwarmup</td>
                <td>The length of time you must wait before using <i>ID Drive</i>.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-inactshrapdamage">
                <td>inactshrapdamage</td>
                <td>Damage incurred by shrapnel that did not originate from a bomb blast.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-initialbounty">
                <td>initialbounty</td>
                <td>Modifies the bounty your ship has when it spawns.</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-jittertime">
                <td>jittertime</td>
                <td>The amount your screen shakes when impacted by certain bombs.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-mapzoom">
                <td>mapzoom</td>
                <td>The amount of map that can be seen on radar.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-maxmines">
                <td>maxmines</td>
                <td>The maximum number of mines which can be laid at any time.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-maxspeed">
                <td>maxspeed</td>
                <td>Your ship's maximum speed (Afterburners).</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-maxthrust">
                <td>maxthrust</td>
                <td>Your ship's maximum thrust (Afterburners).</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-minedelay">
                <td>minedelay</td>
                <td>The length of waiting time required in between laying successive mines.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-minedelaypct">
                <td>minedelaypct</td>
                <td>Modifies your ship's <a href="#ref-gloss-minedelay">minedelay</a> by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-mineenergy">
                <td>mineenergy</td>
                <td>The amount of energy consumed to lay a L1 mine. Multiply by your ship's <a href="#ref-gloss-bomblevel">bomblevel</a> to calculate actual amount.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-mineenergypct">
                <td>mineenergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-mineenergyup">
                <td>mineenergyup</td>
                <td></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-multidelay">
                <td>multidelay</td>
                <td>The length of time between multi-fire bullet shots.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-multidelaypct">
                <td>multidelaypct</td>
                <td>Modifies your ship's <a href="#ref-gloss-multidelay">multidelay</a> by a percentage.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-multienergy">
                <td>multienergy</td>
                <td>The amount of energy consumed when firing a single multifire bullet shot.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-multienergypct">
                <td>multienergypct</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-multifire">
                <td>multifire</td>
                <td>Whether or not the gun has multi-fire capability</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-nofastshoot">
              <td>nofastshoot</td>
              <td>Determines whether you can shoot while using Afterburners.</td>
              <td>Non-one</td>
            </tr>
            <tr  id="ref-gloss-portal">
                <td>portal</td>
                <td>The number of Portal your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-portalmax">
                <td>portalmax</td>
                <td>The maximum number of Portal your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-prox">
                <td>prox</td>
                <td>Whether proximity is enabled for your ships bombs. Proximity radius increases with <a href="#ref-gloss-bomblevel">bomblevel</a>.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-recharge">
                <td>recharge</td>
                <td>Your ship's speed of energy recharge.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-repel">
                <td>repel</td>
                <td>The number of Repel your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-repelmax">
                <td>repelmax</td>
                <td>The maximum number of Repel your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-revival_cooldown">
                <td>revival_cooldown</td>
                <td></td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-revival_chance">
                <td>revival_chance</td>
                <td>The percent chance that <i>Revival Module</i> will revive your ship upon death.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-revival_module_enabled">
                <td>revival_module_enabled</td>
                <td>Whether <i>Revival Module</i> is enabled for this ship.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-revival_warmup">
                <td>revival_warmup</td>
                <td>How much time must pass (after spawning) before <i>Revival Module</i> can be activated.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-rocket">
                <td>rocket</td>
                <td>The number of Rocket your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-rocketmax">
                <td>rocketmax</td>
                <td>The maximum number of Rocket your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-rocketspeed">
                <td>rocketspeed</td>
                <td>Modifies your ship's speed when using Rocket.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-rocketthrust">
                <td>rocketthrust</td>
                <td>Modifies the thrust when your ship is using Rocket.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-rotation">
                <td>rotation</td>
                <td>How fast your ship can rotate.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-seebomblevel">
                <td>seebomblevel</td>
                <td>Whether you can see incoming bombs on radar.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-seemines">
                <td>seemines</td>
                <td>Whether you can see mines on radar.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-shraplevel">
                <td>shraplevel</td>
                <td>The [tiered] level of damage caused by shrapnel.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-shrapnel">
                <td>shrapnel</td>
                <td>The amount of shrapnel generated by a bomb or mine explosion.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-shraprate">
                <td>shraprate</td>
                <td>The amount of bomb shrapnel (generally set per ship type).</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-speed">
                <td>speed</td>
                <td>Your ship's flying speed.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-stealth">
                <td>stealth</td>
                <td>Whether Stealth is enabled for your ship.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-stealthenergy">
                <td>stealthenergy</td>
                <td>The amount of energy required to actiave Stealth.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-summon">
                <td>summon</td>
                <td>Whether <i>Evoker</i>/<i>Summoner</i> is enabled on your ship (other ships can 'attach' to you without losing energy).</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-summonmask">
                <td>summonmask</td>
                <td>Determines the type of <i>Evoker</i>/<i>Summoner</i>  behavior for your ship. 51 = <i>Evoker</i>, 191 = <i>Summoner</i>, 242 = Both</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-thor">
                <td>thor</td>
                <td>The number of Thor's Hammer your ship has at spawning.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-thormax">
                <td>thormax</td>
                <td>The maximum number of Thor's Hammer your ship can carry.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-thrust">
                <td>thrust</td>
                <td>Your ship's ability to quickly change direction of travel.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretalt">
                <td>turretalt</td>
                <td></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-turretdelay">
                <td>turretdelay</td>
                <td>The <a href="#ref-gloss-bulletdelay">bulletdelay</a> of your automated turrent's gun.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretenergy">
                <td>turretenergy</td>
                <td>The total energy of your automated turret.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretlevel">
                <td>turretlevel</td>
                <td>The <a href="#ref-gloss-gunlevel">gunlevel</a> of your automated turret's gun.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretlimit">
                <td>turretlimit</td>
                <td>The maximum number of ships which can stay attached to your ship as turrets.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretmaxrange">
                <td>turretmaxrange</td>
                <td>The maximum distance to an enemy that your automated turret will fire.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretminrange">
                <td>turretminrange</td>
                <td>The minimum distance to an enemy that your turret will fire.</td>
                <td>Neutral</td>
            </tr>
            <tr  id="ref-gloss-turretrecharge">
                <td>turretrecharge</td>
                <td>Your automated turret's speed of energy recharge.</td>
                <td>Higher</td>
            </tr>
            <tr  id="ref-gloss-turretship">
                <td>turretship</td>
                <td></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-turretspeed">
                <td>turretspeed</td>
                <td>The speed decrease incurred when a turret attaches. This value is multiplied by the number of attached ships.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-turretthrust">
                <td>turretthrust</td>
                <td>The thrust decrease incurred when a turret attaches. This value is multiplied by the number of attached ships.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-turretweapon">
                <td>turretweapon</td>
                <td></td>
                <td></td>
            </tr>
            <tr  id="ref-gloss-xradar">
                <td>xradar</td>
                <td>Whether X-Radar is enabled on your ship.</td>
                <td>1</td>
            </tr>
            <tr  id="ref-gloss-xradarenergy">
                <td>xradarenergy</td>
                <td>The amount of energy required to activate X-Radar.</td>
                <td>Lower</td>
            </tr>
            <tr  id="ref-gloss-xradarrange">
                <td>xradarrange</td>
                <td>The maximum distance between your and an enemy's ship, where the X-Radar's effect is active.</td>
                <td>Higher</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include __DIR__.'/../inc/foot.inc'; ?>