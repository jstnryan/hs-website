<?php
$pagetitle = "A Newbie's Guide to Hyperspace (Legacy)";
include __DIR__.'/../inc/head.inc';
?>
</head>
<body id="articles">
<?php include __DIR__.'/../inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="article2"></a>
      <h2>A Newbie's Guide to Hyperspace</h2>
      <p>Author: Boldot<br>Revised by: Aceflyer</p>
      <div class="tut">
        <p><b>Welcome to Hyperspace,</b> one of, if not THE greatest zone in Continuum!</p>
        <p>This guide is mostly intended to answer the question, "How do I play this zone?" as well as the many many subsequent questions following that.</p>
        <p>Before you start playing, you should know a few things about how Hyperspace works.</p>
        <p><b>Money and Experience:</b><br>This zone uses money and experience (abbreviated as 'exp' in the zone) as a means to customize your ship(s). In the buy menu (type ?buy to view) you can see just how many things you can customize for each ship. You start out with $5000 and 0 exp. Money is earned by killing other ships, winning flagging games, and, occasionally, winning in an event. The amount of money you earn for each kill is based on your bounty, the bounty of the player you killed, and the difference in exp between you and that of the player you killed. What you need to remember is that the higher your bounty, and the higher the bounty of the players you kill, the more money you get. Exp is earned in the same ways money is, but how much exp you receive for each kill is based solely upon the difference in exp between you and that of the player you killed. The maximum amount of exp you can get from a single kill is 6, and the minimum is 0. However, there is no maximum amount of money that can be earned from a single kill.</p>
        <p><b>Purchasing:</b><br>Now that you know how the money system works, you can go buy something!<br>There are five different stores in Hyperspace, four of which are in the center area, and where you will buy the majority of the items you will need for your ships. Ships themselves are bought while in spectator mode.</p>
        <ul>
          <li>D1's Hardware Store (I14; lower left corner of center) sells Sensors, Utilities, Bricks, and Converters</li>
          <li>Mook's Guns (M7; upper right corner of center) sells Guns and Bombs</li>
          <li>Muskrat's Misc Junk (I7; upper left corner of center) sells Reactor Plants and Armor</li>
          <li>Scrap & Salvage (K4; center upper side of Sector 8) sells Alien Technology</li>
          <li>The Cat's Engine Cache (G11; center left side of center) sells Sublight Drives and FTL Engines</li>
        </ul>
        <p>When you want to buy something in a certain category, you need to head to one of the above stores. (A few items that don't have an assigned item type are exceptions: they can be bought from anywhere in the zone.) Type ?money to view how much money and exp you have. Type ?buy to view the main buy menu. It will show you all of the categories of items available. To look at the items in a particular category, type ?buy [category] (e.g., ?buy guns or ?buy bombs). Type ?buy [item name] to actually buy a particular item. If you aren't in the correct store, you will be told which store to go to to buy that item. If you don't have enough money and/or exp to buy the item in question, you will be told how much more money and/or exp you need before you can buy the item. If you are already in the correct store and you have enough money and exp to buy the item in question, the item will be added to your ship, and the buy price of that item will be deducted from your total money (nothing will be deducted from your total exp). To see more information on a particular item, type ?iteminfo [item name] and you will find out all you could want to know about the item in question (e.g., energy use, gun/bomb level, bounce, shrap, ... etc.)</p>
        <p>There are some restrictions on buying things. You can have a maximum of one item from each category (e.g., up to one Gun, up to one Bomb, etc.) on your ship, except that you can have:</p>
        <ul>
          <li>Up to one Alien Technology and one Field Ammo (namely, Lightning Ammo, Needler Ammo, and Searing Heat).</li>
          <ul>
            <li>Note that a Field Launcher (an Alien Technology item which will take up that one Alien Technology spot) is required in order to use Field Ammo.</li>
            <li>This means that if you have some other Alien Technology item (besides Field Launcher) on a given ship, you'll still be able to have one Field Ammo on that ship, but you won't be able to use the Field.</li>
          </ul>
          <li>Up to one Brick, unless you choose Basic Brick, in which case you can have up to two Basic Bricks.</li>
          <ul>
            <li>Note that you can only have up to two Basic Bricks; you cannot have one Basic Brick and one other Brick item (e.g., a Wide Brick, or Energy Infusion) on any given ship.</ul>
          </ul>
          <li>Up to one FTL Engine and up to six TW Tokens.</li>
          <li>Up to three Utilities and up to two Sensors.</li>
          <ul>
            <li>Note that either of the above can be changed if you buy a Converter: Extra Utility makes it so you can have up to five Utilities and up to one Sensor, and Sensor Pod makes it so you can have up to two Utilities and up to four Sensors.</li>
            <li>You can, of course, only carry up to one Converter at a time, so you cannot simultaneously have Extra Utility and Sensor Pod on a given ship.</li>
          </ul>
        </ul>
        <p>In the Alien Technology category are some very special items: Fields and Antideath. Fields are friendly areas of space that shoot bullets at every single enemy player that enters that section of space. Fields require a special Alien Technology item, Field Launcher, to use (except for one type of Field, but that's covered soon.) You can buy certain types of Field Ammo to use with Field Launcher, each with a different bullet strength, duration, and size (generally, the larger a Field is, the longer it lasts, and the weaker the bullets it fires are.) To place a Field (when you have a Field Launcher as well as a Field Ammo), type ?field and the Field will appear, centered around your ship.<br>Antideath is a very unique item that will, up to once per sixty seconds, make you respawn right where you died (instead of in the center safe).</p>
        <p>All the items in the Brick category are one-time use only, except for two special permanent items. The one-time use Bricks are 'standard' Continuum Bricks and are pretty self-explanatory. The two special permanent items are a bit more interesting:</p>
        <ul>
          <li>Brick Attack is a permanent item that gives you one Field per life. The Field you get with Brick Attack is much smaller and lasts much shorter than any of the Fields categorized under Field Ammo (which you need to have a Field Launcher to use), but unlike with the other Fields, Brick Attack is permanent (i.e. one per life), not one-time use only. Also, you do not need to have a Field Launcher to use Brick Attack, and you can have a Field Launcher, a Field Ammo, and Brick Attack simultaneously.</li>
          <li>Energy Infusion is a permanent item that instantly gives you full energy when used.</li>
        </ul>
        <p><b>Gameplay:</b><br>Killing people in the center is fairly self-explanatory, but to maximize the money you get per kill, there are a few things you can do:</p>
        <ul>
          <li>Try not to die. This may seem to be a simple concept, but the money you get per kill increases with every single kill you make without dying.</li>
          <li>Try to stick close to other ships in your freq. This helps quite a bit with the "not-dying" concept, and also helps you earn more money even if you don't make a single kill. You get money from each of your freqmates' kills (up to half of the money they get if you are occupying the exact same space), so the more they kill, the more you earn as well.</li>
          <li>Don't start thinking you can just hide in a safe, pop out to get a kill, avoid dying by hiding more, and get a really nice bounty built up over time. While staying in a safe, if your bounty is higher than 10 (the default 'starting bounty'), it will slowly decrease (also, the greater your bounty the faster it will drop) back down to 10.</li>
        </ul>
        <p>Flagging usually involves one of the many bases scattered in sectors around the arena map. There are seven actual bases (in Sectors 1-7), which are basically glorified mazes designed for ship combat inside of them. Looking at the minimap, it looks impossible to get to anywhere outside the center area, but this is not so (this will be covered soon). There is one free publicly available way of getting to any section of the map. These are the hypertunnels, and they are quite a bit of fun.</p>
        <p>There are two kinds of frequencies (freqs) in this zone, public and private. Both have a maximum joinable size of 8 players. To get on a private frequency, type ?changeteam [freq name]:[password]. If you are the owner of a private freq, you may PM (private message) a player you don't want on your freq with ?freqkick and they will be removed from your freq.</p>
        <p>Lancasters are the only attachable ship in Hyperspace. This makes them very important for freqs trying to flag, as they act as an attaching point for all other ships. A common item that players try to get on their Lancasters is Summoner (an FTL Engine). It allows a player using a Lancaster to PM any person on their freq with ?summon to get them attached to their Lancaster instantly with their current energy intact (e.g., if they had full energy prior to being 'summoned', they retain full energy after getting attached to the Lancaster). What many Lancaster-using players do is type ?away ?summon which will automatically PM ?summon to anyone who PMs the Lancaster-using player. This allows freqmates to simply PM the Lancaster-using player they wish to attach to, and bam, there they are without any loss of energy from the attaching process.</p>
        <p><b>Faster Than Light (FTL) Travel:</b><br>There are two access points, called jump gates, that lead to the hypertunnels, in the center area (located in the upper left corner and the lower right corner). To use these jump gates, simply fly over them while they are inactive, and you will start the activation process. It will show some activity, then the center will show red, which means it is now active and warping to the other terminal. Each jump gate has a single partner that it leads to, so every time you go in a certain jump gate, you will exit in the same place every time. On the other side of the jump gate, you will see that it is blue in the center, which means that it received activation from the opposite side, and people can warp from there to your side. Once inside the hypertunnels you can travel around the border of the entire map. As you fly around (go ahead, enjoy the insane speeds, it really is quite fun!) you will see jump gates dispersed around the hypertunnels. Each of these jump gates leads to a certain section, usually the closest sector to that gate. There are other, faster ways to get to other sectors, but each of these costs money, and are usually quite expensive.</p>
        <p>One thing that is fairly inexpensive is Transwarp (TW) - or rather, TW Tokens are inexpensive; TW Passes cost $1000000. Each TW Token costs $500 and is usable only once. One TW Token is used when you enter the Transwarp Hub and another is used when you leave the Transwarp Hub; hence, you will need two TW Tokens for a single Transwarp journey. You can enter the Transwarp Hub by typing ?tw, and once in it you can exit into any section of the map. Very quick and efficient! (Note: You can also access the Transwarp Hub without using ?tw, by simply flying into it from the 'outside' in Sector 8. In this case, a Transwarp journey would only cost you $500 (since you wouldn't use a Token in entering the Hub, since you effectively never enter the Hub for your journey. The usefulness of this 'cheaper' way of using Transwarp is limited, however, since to use it in this way you'd have to fly to Sector 8 first - typically, it would take around the same time to fly to your destination sector directly, and would be cheaper too since you wouldn't have to pay $500 to use Transwarp.)</p>
        <p>The other two methods of FTL travel are Jump Engines and ID Drives. Now, these are very fast and efficient, but they both have a chance of failing (depending on percentage of full energy of your ship when activating them - see the FTL Engine Failure page for more details on this), and destroying you (and nearby freqmates - although <u>not nearby enemies</u>) completely.</p>
        <p>ID Drives are, along with Transwarp, possibly one of the fastest ways to get from sector to sector. In an open space simply type ?id [sector number] (for [sector number], use 1 through 8, respectively, for each of the sectors besides the center area, and use c for the center area), and it will warp you to the ID tunnel, and once you reach the end of that, there you are!</p>
        <p>Jump engines simply take you to and from the hypertunnels very quickly. In an open space simply type ?jump and a jump portal will open up. If you enter this portal you will be warped to the other side. Unlike with ID Drives and Transwarp (which are both 'solo-use', i.e., they only affect you), other players (both your freqmates as well as enemies) as well as yourself can transit any portals opened by your Jump Engines.</p>
        <p><b>Ships:</b><br>Now, you're probably thinking about the future, and what you should get. That is entirely up to you, and your playing style. But as far as ships go, here's an idea of what each ship is generally designed to do in this zone. The picture shows the size of each ship, and what comes with its purchase.</p>
        <ul>
          <li>Warbird: Small light gun fighter. Has really low energy, but a high recharge. Generally used by newer players as it is available from the start, and starts with one of its most-used Guns, the Pulse Laser. Made for high speeds and quick dodges. Mostly used in the center area as it doesn't have much energy to last in a base.</li>
          <li>Javelin: Small light bomber. Has slightly more energy than a Warbird, and somewhat less recharge. Harder to use than most ships because it requires greater dodging skills and aim to be highly successful. Made for dodging enemy fire while tossing bombs at them. Mostly used in the center area as it doesn't have much energy to last in a base.</li>
          <li>Spider: Heavy gunner. This big guy doesn't need to rely on quick dodges and fancy flying to kill. It has a good amount of energy, quite high recharge, and very high muzzle velocity. Made to shoot Guns, and lots of them. A good mix of use in bases and in the center area as it can last a long time in the center area, and pump out a lot of rounds into a base.</li>
          <li>Leviathan: Tank. This large ship has the highest energy possible, not the greatest of recharge, and possibly the fastest bombs around. This behemoth can't move very fast, but it doesn't need to. It is the only ship that has access to the powerful L3 bombs. It is used quite heavily in bases as it can take quite a bit of punishment before finally dying. Sometimes used in the center area, but doesn't deal well with large groups of enemies as it moves so incredibly slowly.</li>
          <li>Terrier: Versatility fighter. This medium-sized ship has midrange stats all the way around. Second highest energy, good recharge, good speed, good thrust, good gun speed, and decent bomb speed. The moniker "jack of all trades" is quite fitting for this ship. Has some of the greatest access to various items, so this ship is very customizable. Used everywhere due to its versatility.</li>
          <li>Weasel: Ship with EMP. This medium-sized ship has decent energy, good recharge, and decent speed/thrust. This ship is made for using its EMP bombs, and occasionally its decent velocity guns. Not the most nimble, but can hold its own. Is the only ship with EMP, and has triple bouncing bombs. Mostly used in bases so it can take advantage of its triple-bouncing EMP bombs.</li>
          <li>Lancaster: ZEE MOTHERSHIP! This giant of a ship is the only attachable ship available. It has the second highest energy and a good recharge. This ship is meant for basing, as that is almost entirely where you will see it. It is designed to be in a base, where other ships might attach to defend/attack. Not usually used in the center area, except for turreting, due to its very large size and poor maneuverability. Primarily uses burst in base as it has the highest burst shrap count of all ships, and secondly uses bombs for bomblines.</li>
          <li>Shark: That little annoying ship you can't hit. The smallest of all ships in the zone, this little guy is much like the Terrier in terms of its versatility, but not for the same reasons. Has an incredibly slow muzzle velocity, slow bomb speed, but has very high speeds itself. Gaining more use in bases, its small size prevents it from taking as much damage, its high speed lets it get through enemy lines, and its rapid item usage helps take care of the rest.</li>
        </ul>
        <p>For more detailed information on good systems for each ship as well as the exact stats for each ship, see the <a href="article8.php">Ship Guide</a>.</p>
        <p><b>Enjoy playing in Hyperspace,</b> and don't forget to pay tribute by way of sacrifice to the Hyperspace God, energy vortex!</p>
      </div>
    </div>
  </div>
<?php include __DIR__.'/../inc/foot.inc'; ?>