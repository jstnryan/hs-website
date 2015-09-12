<?php
$pagetitle = 'Legacy Informative Articles';
include 'inc/head.inc';
?>
</head>
<body id="articles">
<?php include 'inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="staff"></a>
      <h1>Articles</h1>
      <p>The following list of articles was preserved from the original Hyperspace website, which ceased to be live some time in 2013 (regular updates stopped around 2009). This information may still be helpful to players of the current Hyperspace zone, however, because of the zone's constantly evolving nature, this information may be outdated. In the case of inaccurate information, these articles are preserved here for strategic nostalgia purposes.</p>
      <p>In many instances one or more resources, such as images, included with the original articles has been lost, and can not be included in these reproductions. In the case of images which were included on the article page (as an image), a note has been added to the article. In the case where an image was accessible through a link, these links have been omitted to avoid confusion.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Article</th>
              <th>Author(s)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#article2">A Newbie's Guide to Hyperspace</a></td>
              <td>Boldot, Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article4">Cobalt Warhead Guide</a></td>
              <td>Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article3">Antideath Guide</a></td>
              <td>Sharpflame, Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article5">FTL Engine Failure</a></td>
              <td>Dr Brain</td>
            </tr>
            <tr>
              <td><a href="#article6">Iteminfo and Shipstatus</a></td>
              <td>BlueWyvern, Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article7">One Time Use</a></td>
              <td>Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article8">Ship Guide and Quick Reference</a></td>
              <td>Aceflyer, Aquarius, nebulou</td>
            </tr>
            <tr>
              <td><a href="#article9">Special Events</a></td>
              <td>Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article10">Utilities</a></td>
              <td>Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article11">General Tips</a></td>
              <td>Aceflyer</td>
            </tr>
            <tr>
              <td><a href="#article12">Zone Rules</a></td>
              <td></td>
            </tr>
            <tr>
              <td><a href="#article13">Chatnut</a></td>
              <td>Dr Brain</td>
            </tr>
            <tr>
              <td><a href="#article14">All About Armor</a></td>
              <td>Aceflyer, Bomook, Dr Brain</td>
            </tr>
          </tr>
        </table>
      </div>
      <hr>
      <a name="article3"></a>
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
        <p>For more detailed information on good systems for each ship as well as the exact stats for each ship, see the <a href="#article8">Ship Guide</a>.</p>
        <p><b>Enjoy playing in Hyperspace,</b> and don't forget to pay tribute by way of sacrifice to the Hyperspace God, energy vortex!</p>
      </div>
      <hr>
      <a name="article4"></a>
      <h2>Cobalt Warhead Guide</h2>
      <p>Author: Aceflyer</p>
      <div class="tut">
        <p><i>One time use only. Use with caution.<br>Creates an earth-shattering kaboom when you die. Can be used to eliminate an entire base.</i></p>
        <p>-from <i>?iteminfo cobalt warhead</i> Cobalt Warhead. This mysterious, ominously described item is the single most powerful weapon in Hyperspace. You may have heard it mentioned whenever prospects looked bleak for your freq: "COBALT!" "USE COBALT!" Indeed, the fame of this item - so secret and l33t that it isn't publicly listed in any buy menu - has grown so much that the Cobalt Warhead has attained almost mythic proportions as a purportedly unstoppable "auto-win" device for any situation.</p>
        <p>This short page on the Cobalt Warhead aims to defuse some of these myths and exaggerations, as well as provide tips and strategies on when and how to best use this item in game.</p>
        <p>The first thing to emphasize is that the Cobalt Warhead item costs $50000 and is one-time use only. If you buy Cobalt Warhead in a given ship, the Warhead will be automatically released upon your very next death after buying the Warhead, immediately after which the item will be removed from your ship. Note that you <b>cannot</b> manually release the Warhead before you die, <b>nor</b> can you save the Warhead for future use by preventing the Warhead from launching when you die. Also, the Cobalt Warhead item is classified as Alien Technology (even though it isn't listed under the Alien Technology buy menu), so if a given ship of yours is already equipped with, say, Field Launcher, you won't be able to get Cobalt Warhead on that ship.</p>
        <p>Now, the Warhead is *powerful*, and it <b>can</b> "eliminate an entire base" <b>if used properly</b>, but it isn't simply a massive omnidirectional bomb that explodes when you die (while carrying it) and destroys all enemy ships within a certain radius of where your ship exploded. Rather, the Warhead comes out of the nose of your ship (where bombs normally come out) and flies away from your position in the direction your ship's nose was pointing when your ship blew up. It will then proceed to destroy any enemy ships it encounters along its path. Hence, when carrying a Cobalt Warhead, <b>it is important to aim your ship's nose in the direction of your targeted enemy ships when you get killed</b>. If your ship's nose is aimed away from your targeted enemy ships, the Warhead will fail to destroy your targets and you will have irrevocably wasted $50000 without getting any results.</p>
        <p>The second thing to note is that the faster you were flying 'forward' when your ship blows up, the faster the Warhead's speed will be when it launches from your ship's nose. The faster the Warhead's speed is, the more distance it will cover before it fizzles out, and hence the more enemy ships it will destroy before it fizzles out. Also, the faster the Warhead's speed is, the less likely enemy ships will be able to get out of the way in time. Hence, in addition to the guideline already set forth, <b>it is important to fly as fast as possible in the direction of your targets</b>.</p>
        <p>Finally (as if the above weren't enough to worry about!), it turns out that the Warhead can actually be stopped/jammed/intercepted by an enemy ship if that ship is sufficiently close to the Warhead's launching point (i.e., your ship's nose). So if there is an enemy ship right in front of you when you die, the Warhead will fly out, and it will be intercepted by that enemy ship. That ship will be destroyed by the Warhead, but the Warhead will then immediately fizzle out - without continuing its path of destruction! Hence, <b>it is important to try to position yourself so that there are no enemy ships right in front of your ship's nose when you die</b>.</p>
        <p>Note that Cobalt Warheads are not stopped by walls (except that they are blocked (as in absorbed) by special 'thor-proof' 'double' walls - these walls partially enclose the flagrooms of the bases in Sectors 2, 3, 5, and 6, and make up the lower and right boundaries of the minibase in the center area), so you should not be concerned about normal walls when strategizing the use of your Warhead.</p>
        <p>From the above guidelines, one can make some inferences about when the use of a Cobalt Warhead might be logical. Since the Warhead costs $50000 a pop, it is generally not worth it to use it in the center area. In fact, generally, no matter how many enemy ships a single Warhead takes out, you'll never recover the $50000 you spent on the Warhead, so this item is not useful in terms of helping you make money. So typically the Cobalt Warhead is used (mostly for the sake of pride; maybe to give your freq a chance) when you are on a basing team and you and your freqmates are bogged down, with the enemy team closely clustered together in a very solid defensive position, reinforcing each other to the point that thors aren't effective enough and no one can get close enough to field them. In this situation, a Cobalt Warhead, used in accordance with the three guidelines set forth above, can be used to eliminate the entire enemy team (or very nearly the entire enemy team).</p>
        <p>Of course, situations are seldom this 'ideal', and a Cobalt Warhead may still be very effective even if, say, the enemy team isn't that closely clustered together. However, remember that if the enemy team is pretty loosely situated, a single Warhead may take out a few enemy ships, but will definitely not be able to eliminate the entire base. Take care not to get in a situation where you are at risk of dying while being violently jostled around in the base; if the jostling results in your ship's nose happening to be pointing not at the enemy team when you die, your Warhead will be effectively wasted. Try to get as close as possible to the enemy team and make sure you are flying forward into enemy fire (remember, the Warhead is only released when you die) as fast as possible (so the enemy team can't get out of the way in time) with, of course, your ship's nose pointing straight toward the enemy team. And finally, be very careful not to die before reaching the location where you want to launch the Warhead. If you inadvertantly get killed in center, for example, before ever reaching the base where the action's going on, your Warhead will launch in center and you will have wasted $50000 for nothing (or nearly nothing).</p>
        <p>Good luck with the Cobalt Warhead!</p>
      </div>
      <hr>
      <a name="article3"></a>
      <h2>Antideath Guide</h2>
      <p>Author: Sharpflame<br>Revised by: Aceflyer</p>
      <div class="tut">
        <p><i>Brings a ship back to life where it died once every sixty seconds.<br>This item stays on the ship permanently.</i></p>
        <p>-from <i>?iteminfo antideath (revised for accuracy)</i> Antideath. This unique, powerful-sounding item has become almost a must-have for basing Lancasters and Sharks in Hyperspace. You may have heard it mentioned repeatedly in various situations: "AD!" "Watch out! AD!" Indeed, the fame of this item - a "classified top secret" Alien Technology item - has grown so much that it has gone from being a special, rarely used 'l33t' item to being an almost everyday item.</p>
        <p>This short page on Antideath aims to cut through the hype and provide some tips and strategies on how to beat Antideath-equipped players in game.</p>
        <p>First, some strategies for beating players with Antideath:</p>
        <ul>
          <li>Move back if you know the player in question has Antideath. If you don't, they will respawn behind you (if their rubble flew that way, which is often the case), and will consequently be able to attack you from behind upon being resurrected.</li>
          <li>Lay a Brick Attack field in front of the Antideath-using player's explosion (in the direction their rubble flew), so that they get resurrected in your Brick Attack field and die before they can do anything after being resurrected.</li>
          <li>Don't stop shooting at the general area you think they will respawn in.</li>
          <li>Remember, players cannot have both Antideath and Field Launcher on a single ship, so Antideath-using ships won't be launching Fields, and Field-launching ships won't have Antideath.</li>
          <li>Antideath-using players are invisible for a few seconds after being resurrected. Hence, you may see bullets coming out of seemingly empty space.</li>
          <li>Observe the above to learn when to burst to stop Antideath-using players upon their resurrection.</li>
        </ul>
        <p>Now, some advice on how to be able to afford Antideath for yourself:</p>
        <p>If you flag a lot, you should be able to make <u>at least</u> $10000-$30000 per day. Typically, players can make $10000-$15000 per flag game without even bountying. So make sure to participate in zone events and flag games. Also, remember that the higher your bounty, the more money you get per kill, so die less than you kill if you can. Save (hoard) this money, don't buy anything (fields included!) unless you absolutely need to, and you will have your $250000 (the buy price of Antideath) in a couple of days. Keep in mind that the Antideath item is classified as Alien Technology, so if a given ship of yours is already equipped with, say, Field Launcher or Turret Base, you won't be able to get Antideath on that ship.</p>
        <p>Good luck with Antideath!</p>
      </div>
      <hr>
      <a name="article5"></a>
      <h2>FTL Engine Failure</h2>
      <p>Author: Dr Brain</p>
      <div class="tut">
        <p><i>The charts below show the chance of engine failure of ID Drives and Jump Engines as a function of percentage of full energy of a ship when using ?id or ?jump in said ship.<br>For more general information about FTL Engines, please refer to A Newbie's Guide to Hyperspace.</i></p>
        <p><i>Note that there is no chance of engine failure for Summoner or Transwarp (TW).</i></p>
        <p>- image lost to the ether -</p>
        <p>- image lost to the ether -</p>
      </div>
      <hr>
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
      <hr>
      <a name="article7"></a>
      <h2>One Time Use</h2>
      <p>Author: Aceflyer</p>
      <div class="tut">
        <p>Normally, once you ?buy an item in SSCE Hyperspace, that item will remain on your ship (or, to be more clear, the ship you were in when you bought the item) 'forever', or at least until you ?sell the item or ?sell your entire ship. 'Forever' meaning that no matter how many times you die, you'll be automatically prized each of the items you own when you respawn (or are resurrected by Antideath). However, there are some items that are only 'one time use', meaning that they will only stay on your ship (through deaths and respawns and resurrections) until you actually use them; once you use them, they're automatically removed from your ship, and you must ?buy the item again in order to use it again.</p>
        <p>Well, in this zone, your money isn't unlimited, so many people are understandably wary about 'wasting' money purchasing 'one time use' items. So, to help answer those common questions of, "Is so-and-so 'one time use' or 'forever'?" here's a comprehensive list of any and all 'one time use' items currently available for sale in the zone.</p>
        <ul>
          <li>Alien Technology</li>
          <ul>
            <li>Lightning Ammo</li>
            <li>Needler Ammo</li>
            <li>Searing Heat</li>
            <li>Cobalt Warhead</li>
          </ul>
          <li>Brick</li>
          <ul>
            <li>Wide Brick</li>
            <li>Sparse Brick</li>
            <li>Basic Brick</li>
            <li>Cage</li>
            <li>Poacher Box</li>
          </ul>
          <li>FTL Engine</li>
          <ul>
            <li>TW Token</li>
          </ul>
        </ul>
      </div>
      <hr>
      <a name="article8"></a>
      <h2>Ship Guide and Quick Reference</h2>
      <p>Authors: Aceflyer, Aquarius, and nebulou</p>
      <div class="tut">
        <p><i>First, the flowchart below will help you decide which ship(s) you'd like to buy and fly.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a list of popular systems used on each ship. Try various combinations of these systems and use the combination that best suits you and your playing style!</i></p>
        <div class="overflow">
          <table cellspacing="0" class="nowrap">
            <thead>
              <tr>
                <th>Ship Name (#)</th>
                <th>Alien Technology</th>
                <th>Armor</th>
                <th>Bomb</th>
                <th>Brick</th>
                <th>Converter</th>
                <th>FTL Engine</th>
                <th>Gun</th>
                <th>Reactor</th>
                <th>Sensor</th>
                <th>Sublight Drive</th>
                <th>Utility</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Warbird (1)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Ultra Rocket<br>
                  Supercomputer<br>
                  Cobalt Warhead</td>
                <td>Maneuvering Fins<br>
                  Radiating Coils<br>
                  Slipstream</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  String of Pearls</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Brick Attack</td>
                <td>Sensor Pod<br>
                  Extra Utility</tc>
                <td>ID Drives<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Shredder</td>
                <td>Compression Core</td>
                <td>Enhanced Sensors<br>
                  Combat Sensors<br>
                  Extended Sensors<br>
                  Energy Scanner</td>
                <td>Retro Rockets<br>
                  IceFire<br>
                  Semiwarp Burners</td>
                <td>Tunnel Runner<br>
                  Siege Pack<br>
                  Extra Speed<br>
                  Extra Thrust</td>
              </tr>
              <tr>
                <td>Javelin (2)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Ultra Rocket<br>
                  Supercomputer<br>
                  Cobalt Warhead</td>
                <td>Maneuvering Fins<br>
                  Radiating Coils<br>
                  Slipstream</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  Salvo<br>
                  String of Pearls</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion<br>
                  Brick Attack</td>
                <td>Sensor Pod<br>
                  Extra Utility</td>
                <td>ID Drives<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Flechette Gun<br>
                  Shrap Booster</td>
                <td>Compression Core</td>
                <td>Enhanced Sensors<br>
                  Combat Sensors<br>
                  Extended Sensors<br>
                  Energy Scanner</td>
                <td>Retro Rockets<br>
                  IceFire<br>
                  Semiwarp Burners</td>
                <td>Tunnel Runner<br>
                  Siege Pack<br>
                  Extra Speed<br>
                  Extra Thrust</td>
              </tr>
              <tr>
                <td>Spider (3)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Antideath<br>
                  Temporal Core<br>
                  Adamantine Shell</td>
                <td>Solid Nutronium<br>
                  Radiating Coils</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  Salvo<br>
                  MOAB<br>
                  TacNuke</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion</td>
                <td>Extra Utility</td>
                <td>ID Drives<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Beam Array<br>
                  Shredder<br>
                  Disruptor</td>
                <td>ESPER System<br>
                  Mezon Capacitor<br>
                  ZPM</td>
                <td>Enhanced Sensors<br>
                  Energy Scanner</td>
                <td>Nuclear Booster</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Active Camo<br>
                  Extra Rotation</td>
              </tr>
              <tr>
                <td>Leviathan (4)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Antideath<br>
                  Ultra Rocket<br>
                  Temporal Core<br>
                  Adamantine Shell</td>
                <td>Solid Nutronium<br>
                  Radiating Coils</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  Salvo<br>
                  MOAB<br>
                  TacNuke</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion</td>
                <td>Extra Utility</td>
                <td>ID Drives<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Phaser<br>
                  Shrap Booster<br>
                  Point Defense</td>
                <td>Mezon Capacitor<br>
                  ZPM</td>
                <td>Enhanced Sensors</td>
                <td>Overthruster<br>
                  Nuclear Booster</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Active Camo<br>
                  Siege Pack<br>
                  Extra Rotation</td>
              </tr>
              <tr>
                <td>Terrier (5)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Antideath<br>
                  Ultra Rocket<br>
                  Adamantine Shell</td>
                <td>Solid Nutronium<br>
                  Nanodyne Hull<br>
                  Radiating Coils<br>
                  Faraday Shield</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  String of Pearls</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion<br>
                  Brick Attack</td>
                <td>Extra Utility</td>
                <td>Jump Engines<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Flechette Gun<br>
                  Shredder<br>
                  Phaser</td>
                <td>Compression Core<br>
                  Quantum Reactor</td>
                <td>Enhanced Sensors<br>
                  Energy Scanner</td>
                <td>Nuclear Booster<br>
                  H2 Ramscoop</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Gataway Pack<br>
                  Tunnel Runner<br>
                  Siege Pack</td>
              </tr>
              <tr>
                <td>Weasel (6)</td>
                <td>Field Launcher<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Antideath<br>
                  Ultra Rocket<br>
                  Adamantine Shell</td>
                <td>Solid Nutronium<br>
                  Nanodyne Hull<br>
                  VERTEX Armor<br>
                  Radiating Coils<br>
                  Faraday Shield</td>
                <td>Stingray Torpedo<br>
                  Cyclone<br>
                  EMP Shockwave<br>
                  Antimatter Mines</td>
                <td>Wide Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion<br>
                  Brick Attack</td>
                <td>Extra Utility</td>
                <td>Jump Engines<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Flechette Gun<br>
                  Beam Array<br>
                  Phaser<br>
                  Point Defense</td>
                <td>ESPER System</td>
                <td>Enhanced Sensors<br>
                  Energy Scanner</td>
                <td>H2 Ramscoop</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Gataway Pack<br>
                  Tunnel Runner<br>
                  Siege Pack</td>
              </tr>
              <tr>
                <td>Lancaster (7)</td>
                <td>Antideath<br>
                  Temporal Core<br>
                  Adamantine Shell<br>
                  Turret Base</td>
                <td>Nanodyne Hull<br>
                  Radiating Coils</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  Antimatter Mines</td>
                <td>Energy Infusion</td>
                <td>Extra Utility</td>
                <td>Summoner</td>
                <td>Shrap Booster<br>
                  Point Defense</td>
                <td>Mezon Capacitor<br>
                  ZPM</td>
                <td>Enhanced Sensors</td>
                <td>Nuclear Booster<br>
                  H2 Ramscoop</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Gataway Pack<br>
                  Active Camo<br>
                  Tunnel Runner<br>
                  Siege Pack</td>
              </tr>
              <tr>
                <td>Shark (8)</td>
                <td>Field Launcer<br>
                  Lightning Ammo<br>
                  Needler Ammo<br>
                  Searing Heat<br>
                  Antideath<br>
                  Ultra Rocket</td>
                <td>Radiating Coils</td>
                <td>Falcon Missile<br>
                  HE Missile<br>
                  Salvo<br>
                  String of Pearls</td>
                <td>Wide Brick<br>
                  Sparse Brick<br>
                  Cage<br>
                  Poacher Box<br>
                  Energy Infusion<br>
                  Brick Attack</td>
                <td>Extra Utility</td>
                <td>ID Drives<br>
                  TW Pass</td>
                <td>Pulse Laser<br>
                  Shredder<br>
                  Phaser</td>
                <td>ESPER System</td>
                <td>Enhanced Sensors</td>
                <td>Retro Rockets<br>
                  IceFire</td>
                <td>Close Combat<br>
                  Gravity Trap<br>
                  Gataway Pack<br>
                  Tunnel Runner<br>
                  Siege Pack</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p><i>The table below gives a complete list of the cost and certain popular attributes of each bomb. The information was compiled using the ?iteminfo command.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a complete list of the cost and certain popular attributes of each gun. The information was compiled using the ?iteminfo command.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a complete list of the technical specifications of each gun.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a complete list of the cost and certain popular attributes of each reactor. The information was compiled using the ?iteminfo command.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a complete list of the cost and certain popular attributes of each sublight drive. The information was compiled using the ?iteminfo command.</i></p>
        <p>- image lost to the ether -</p>
        <p><i>The table below gives a complete list of the stats and settings of each ship. The information was compiled using the ?shipinfo command.</i></p>
        <p>- image lost to the ether -</p>
      </div>
      <hr>
      <a name="article9"></a>
      <h2>Special Events</h2>
      <p>Author: Aceflyer</p>
      <div class="tut">
        <p>Basing. Bountying. Centering. Flagging. In addition to these fun activities in the zone, in order to better serve you, the Hyperspace staff bring you.... <b>Special Events</b>!</p>
        <p>Special Events are typically hosted by online staff when they feel that hosting such an event is appropriate. Special Events are generally prized, with the winners being rewarded with Hyperspace money ($100 - $10000) or a <a href="#article7">'one time use' item</a>, depending on the event. Here is a brief guide to the types of events currently being hosted by Hyperspace staff.</p>
        <p>- image lost to the ether ("SSCE Hyperspace Special Events") -</p>
        <p><b>AutoTurret Survival</b>: A classic game of survival. Unkillable autoturrets (a bit like the Point Defense turrets, but more Uber!) and participating players are placed in a small confined box. The autoturrets then automatically spam bombs at any nearby ships. The last surviving player in the box gets rewarded with Hyperspace money.</p>
        <p><i>hosted by: Sharpflame</i></p>
        <p><b>Baserace</b>: This is a variant of the Racing event where participants race through the corridors of many connected bases in the specially designed Baserace arena. The fastest players to reach the Finish box get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>Bombline</b>: The fun Super Bombline event involves one or more players being selected to bomb, and the other players being placed in identical Warbirds without any weapons or powerups. The bombers are placed in Leviathans and, depending on the map being used for a particular Bombline event, either fire bombs or Thors at the other players. The last surviving Warbird player gets rewarded with Hyperspace money. If there is no single surviving Warbird player, the bombers get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hi-5, Masaru, Sharpflame</i></p>
        <p><b>Bombsquare</b>: New event taking place in the Bombsquare arena coming soon!</p>
        <p><b>Elim</b>: The classic Continuum Elimination event, but with a Hyperspace flair! Players get to choose their ship and buy systems of their choice to equip their ships. Then it's an all-out free-for-all where everyone is on their own. Players are eliminated when they have died five times. The players with the most kills, and the last surviving players, get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>FastFingers</b>: The FastFingers event involves a staff member arena messaging a string of characters. The first player to <u>correctly</u> reproduce the string of characters in public chat gets rewarded with Hyperspace money.</p>
        <p><i>hosted by: Aceflyer, Sass, Sharpflame</i></p>
        <p><b>General Trivia</b>: This simple but enjoyable event involves a staff member asking general trivia questions via arena messages. For each question, the first player to reply with the correct answer gets rewarded with Hyperspace money or a 'one time use' item.</p>
        <p><i>hosted by: Aceflyer, Sass, Sharpflame, Swift Warrior</i></p>
        <p><b>Hunt That Turret</b>: Sometimes a really Uber, "mega-Turret" may arise, and players on that Turret may acquire high bounties. In these times, a staff member may announce a Hunt That Turret event where players who succeed in killing the Turret driver, or high-bounty players on the Turret, get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>Hyperball</b>: Two teams of participants compete to score goals with a ball in a specially designed circular base in the Hyperball arena. The winning team gets rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hi-5, Sharpflame</i></p>
        <p><b>Name That Player</b>: This is a variant of the General Trivia event where characteristic words or phrases are given by a staff member via arena messages. For each word or phrase, the first player to correctly name the player described by the word or phrase given gets rewarded with Hyperspace money.</p>
        <p><i>hosted by: Aceflyer, Sass, Sharpflame</i></p>
        <p><b>Paint</b>: For those with an artistic flair, Hyperspace Paint combines Continuum with art. In the specially designed Paint arena, ships are set so they have effectively 'infinite recharge', and can lay a huge amount of mines. A typical Paint event begins with one player being selected to be the 'artist', who then flies his/her ship around a rectangular box in the Paint arena, laying mines to draw an image. Each mine shows up on the radar screen of any players present, and the challenge is then presented for observing players to successfully guess what image the 'artist' drew. The first observing player to successfully guess the image gets rewarded with Hyperspace money, and also gets to be the next 'artist' to draw, at which point the previous process repeats until the event ends.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>Pub Day (Night)</b>: When the number of players in the zone grows large, and everyone is on either freq 0 or freq 1 (both of which are pub freqs), a staff member may decide to host Pub Day (or Pub Night, depending on the time of day - or night!). A typical Pub Day (Night) event involves the jackpot being boosted periodically to stimulate intense basing and flagging. Freqs may also be prized various powerups such as Super or Shields at various times if deemed appropriate. Pub Day jackpots often break the one million money mark.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>QuickReply Mathematics</b>: The QuickReply Mathematics event involves a staff member arena messaging a simple mathematical problem (such as 8 + 7 = ?). The first player to reply in public chat with the correct answer gets rewarded with Hyperspace money.</p>
        <p><i>hosted by: Aceflyer, Sharpflame</i></p>
        <p><b>Rabbit</b>: Also known as Bounty Rabbit. A typical Rabbit event begins with one player being selected to be the 'rabbit'. That player is prized with a high bounty and some powerups (such as Super and Shields), and then flies around killing other players (and making alot of money per kill due to the prized bounty). Other players in the zone try to kill the 'rabbit'. The first player to kill the 'rabbit' gets to be the next 'rabbit', at which point the previous process repeats until the event ends.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>Racing</b>: The classic Continuum Racing event, but with a Hyperspace flair! In the specially designed Racing arena, all participants have the exact same ship (a Warbird) and do not have any weapons or powerups, save for one Rocket. Before each Racing event, participating players type ?race to be automatically taken out of spec and placed in a Warbird in the starting safe area, locked in by a forcefield. When the event is about to start, a countdown will be announced via arena messages. When "GO" is announced via an arena message, the forcefield vanishes and the race begins! Players race one lap around a closed, roughly rectangular race track, sections of which are curved around wormholes like the wormholes in the hypertunnels. The fastest players to complete one lap around the racing track get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Hyperspace staff</i></p>
        <p><b>Tetris</b>: A variety of competitive inter-player special events are hosted in the specially designed Tetris arena. Event winners get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Masaru, Sharpflame</i></p>
        <p><b>Xmasmaze</b>: A holiday-themed event where participants work their way through an Xmas tree-shaped maze. The fastest players to complete the maze get rewarded with Hyperspace money.</p>
        <p><i>hosted by: Sharpflame</i></p>
      </div>
      <hr>
      <a name="article10"></a>
      <h2>Utilities</h2>
      <p>Author: Aceflyer</p>
      <div class="tut">
        <p>Bursts. Repels. Decoys. Thor's Hammers. Rockets. Portals. These items and more are available for purchase as Utilities in the zone. You can have up to 3 Utilities on any given ship, and up to 5 Utilities on any given ship if you buy Extra Utility (a Converter), which takes up your Converter slot as well as one of your two Sensor slots. Remember that if you have two of one kind of Utility, they still count as two Utilities. Hence, two Close Combats will count as two Utilities, two Getaway Packs will count as two Utilities, and so forth. Finally, rest assured... all Utilities are 'forever' items, meaning all of your Utility items will be restocked each time you respawn or are resurrected by Antideath.</p>
        <ul>
          <li>Close Combat ($7500) - <i>available on all ships</i></li>
          <ul>
            <li>Burst (+1)</li>
            <li>Repel (+2)</li>
          </ul>
          <li>Gravity Trap ($10000) - <i>available on all ships</i></li>
          <ul>
            <li>Antiwarp</li>
          </ul>
          <li>Getaway Pack ($10000) - <i>available on ships 1, 2, 5, 6, 7, and 8</i></li>
          <ul>
            <li>Decoy (+1)</li>
            <li>Rocket (+1)</li>
            <li>Portal (+1)</li>
          </ul>
          <li>Active Camo ($15000) - <i>available on ships 3, 4, 5, 6, and 7</i></li>
          <ul>
            <li>Cloak</li>
            <li>Stealth</li>
          </ul>
          <li>Tunnel Runner ($15000) - <i>available on ships 1, 2, 5, 6, 7, and 8</i></li>
          <ul>
            <li>Rocket (+2)</li>
            <li>Portal (+1)</li>
            <li>Increases your hypertunnel and ID tunnel speed.</li>
          </ul>
          <li>Siege Pack ($24000) - <i>available on all ships</i></li>
          <ul>
            <li>Burst (+1)</li>
            <li>Thor's Hammer (+2)</li>
          </ul>
          <li>Extra Speed ($10000) - <i>available on all ships</i></li>
          <ul>
            <li>Increases your speed by 2.</li>
            <li>Increases your maximum speed by 2.</li>
            <li><span style="color: #ff0000">Reduces your thrust by 2.</span></li>
          </ul>
          <li>Extra Thrust ($10000) - <i>available on all ships</i></li>
          <ul>
            <li>Increases your thrust by 2.</li>
            <li>Increases your maximum thrust by 2.</li>
            <li><span style="color: #ff0000">Reduces your speed by 1.</span></li>
          </ul>
          <li>Extra Rotation ($10000) - <i>available on all ships</i></li>
          <ul>
            <li>Increases your rotation by 2.</li>
          </ul>
          <li>Supercomputer ($10000000) - <i>available on all ships</i></li>
          <ul>
            <li>Antiwarp</li>
            <li>Cloak</li>
            <li>Bomb Viewing on Radar</li>
            <li>Energy Viewing</li>
            <li>Mine Viewing on Radar</li>
            <li>Stealth</li>
            <li>X-Radar</li>
          </ul>
          <li>Turret Base ($100000) - <i>available on ship 7</i></li>
          <ul>
            <li><span style="color: #ff0000">Increases burst damage to 3000.</span></li>
            <li>Rocket (+10)</li>
            <li>Increases your speed by 5.</li>
            <li>Increases your thrust by 5.</li>
            <li>Increases your rotation by 3.</li>
            <li>Increases your turret thrust to 1.</li>
            <li>Increases your turret speed to 1.</li>
          </ul>
        </ul>
      </div>
      <hr>
      <a name="article11"></a>
      <h2>General Tips</h2>
      <p>Author: Aceflyer</p>
      <div class="tut">
        <ul>
          <li>You can cloak and/or stealth Warbirds and Javelins even though you cannot buy Active Camo on either ship. The way you do it is by buying a Supercomputer.</li>
          <li>You can have a Spider or a Leviathan with rockets even though you cannot buy Getaway Packs or Tunnel Runner on either ship. The way you do it is by buying an Ultra Rocket.</li>
          <li>Extra Utility uses up a Converter spot and a Sensor spot, but in return gives you two extra Utility spots (giving you a total of 5 Utility spots).</li>
          <li>Likewise, Sensor Pod uses up a Converter spot and a Utility spot, but in return gives you two extra Sensor spots (giving you a total of 4 Sensor spots).</li>
          <li>If you stay in too long, warp out, warp in (via ?summon'ing or by F7-attaching), or otherwise 'misbehave' in the ID tunnel, your ship will be destroyed by engine failure.</li>
          <li>Gravity Trap does not block ?tw.</li>
          <li>You cannot ?tw from the hypertunnels.</li>
          <li>You cannot ?jump, ?tw, or ?id from inside the bases in Sectors 1 - 7.</li>
          <li>You can ?tw or ?jump while carrying flags.</li>
          <li>You can ?tw near walls and even in safes.</li>
          <li>If you're in a Lancaster, using ?tw or ?id will kill any turrets that happen to be attached to you.</li>
          <li>Each (additional) turret (yes, Point Defense counts as a turret) you get on your Lancaster decreases your speed (unless you have Turret Base, which cancels this effect out).</li>
          <li>Each time you use ?tw, your bounty will be reset (to 10).</li>
          <li>Cobalt Warheads and Thors can go through any normal walls; however, they are blocked (as in absorbed) by special 'thor-proof' 'double' walls. These walls partially enclose the flagrooms of the bases in Sectors 2, 3, 5, and 6, and make up the lower and right boundaries of the minibase in the center area.</li>
          <li>Using repellers while in an enemy field will not protect you from the bullets shot at you by said enemy field.</li>
          <li>According to ?iteminfo Close Combat, two Close Combats will give you 4 repels per life; however, the maximum number of repels any ship (except Lancaster) can have per life is 3, so that's how many repels you'll have per life if you get two Close Combats on any given ship (except for Lancaster, in which case you'll have 4 repels per life).</li>
          <li>Turret Base gives you an awesome centering Lancaster, but beware of bursts: Turret Base increases burst damage to your ship, to the point that if you take even one burst, you'll be dead or very nearly dead. Even if you were at full energy.</li>
          <li>According to ?iteminfo Turret Base, Turret Base will give you 10 rockets per life; however, the maximum number of rockets a Lancaster can have per life is 7, so that's how many rockets you'll have per life if you get Turret Base on a Lancaster.</li>
          <li>You can ?sell Point Defense for what it costs to ?buy Point Defense, so you can effectively try it out risk-free.</li>
          <li>Any kills Point Defense makes count as its kills, not as your kills.</li>
          <li>The Point Defense turret cannot be killed, which is why it is programmed so it cannot accumulate bounty.</li>
          <li>Even though the Point Defense turret uses L4 guns, your bombs (if they have shrapnel) will only have L1 shrapnel.</li>
          <li>You cannot ?id or be ?summon'ed while carrying flags.</li>
          <li>Slipstream increases your speed and maneuverability; however, it increases bullet and bomb damage to your ship.</li>
          <li>VERTEX Armor is powerful armor; however, it increases the length of time your energy is frozen after you are EMP'd - hence, you actually become more sensitive/vulnerable to EMP bombs.</li>
          <li>Disruptor and Shredder do almost exactly the same amount of damage per second (to the target) and drain almost exactly the same amount of energy per second (from the user).</li>
          <li>However, since more people have "low energy gun armor" than "high energy gun armor," and since Disruptor also gives your bombs L3 shrapnel (whereas Shredder only gives your bombs L1 shrapnel), Disruptor is still a better gun than Shredder.</li>
          <li>Plasma Cannon is, basically, an enhanced Shrap Booster. So there's no reason to get Shrap Booster on any ship you can get Plasma Cannon on.</li>
          <li>The Sector 4-Sector 8 'transwarp' link allows flag-carrying ships to transit safely.</li>
          <li>Flags dropped or neuted in the hypertunnels are randomly relocated throughout the center area. Hence, you cannot win a flag game by dropping flags in the hypertunnels.</li>
        </ul>
      </div>
      <hr>
      <a name="article12"></a>
      <h2>Zone Rules</h2>
      <div class="tut">
        <p><b><i>Common sense applies to behavior that is not explicitly covered in the rules below. Punishment for each rule violation is at the discretion of the online Moderators.</i></b></p>
        <ul>
          <li>No cussing and/or swearing. Use language appropriate for younger players.</li>
          <li>No "trade killing" or offering of free kills.</li>
          <li>No spamming.</li>
          <li>No using VIE/unauthorized Chatnet clients and/or bots.</li>
          <li>No advertising of other Continuum zones.</li>
          <li>No intentional team killing.</li>
          <li>No exploiting server lag.</li>
          <li>No exploiting server glitches and/or client glitches.</li>
          <li>No using third-party cheat programs and/or utilities.</li>
        </ul>
      </div>
      <hr>
      <a name="article13"></a>
      <h2>Chatnut</h2>
      <p>Author: Dr Brain</p>
      <div class="tut">
        <p><i>If you want to download Chatnut to your computer, click <a href="posterity/SignedChatnut.jar">here</a>.</i></p>
        <applet code="chatnut.gui.ChatnutApplet" archive="/web/20130101010822oe_/http://sshyperspace.net/SignedChatnut.jar" width="600" height="400"> You need Java!</applet>
      </div>
      <hr>
      <a name="article14"></a>
      <h2>All About Armor</h2>
      <p>Authors: Aceflyer, Bomook, Dr Brain</p>
      <div class="tut">
        <p>A quick perusal of the ?buy armor menu shows one a staggering array of different Armors available for purchase and use. How can one select an optimal Armor for a particular ship setup without wasting tons of Hyperspace money buying and trying them all out, or investing a significant amount of time and brainpower trying to understand the ?iteminfo entries of each Armor? Easy! Just read this All About Armor guide, and you'll be able to choose your best Armor in a whiz! Oh, and by the way, rest assured... all Armors are 'forever' items, meaning they'll stay on your ship 'forever' (i.e. until you sell it). Finally, keep in mind... not all Armors actually 'protect' you... there are Armors that just make you faster and more maneuverable, and some Armors even increase the amount of damage you take from certain weapons. So read carefully! And have fun!</p>
        <p>For more information about what parameters like "bullet damage" (bulletdamage), "bullet damage upgrade" (bulletdamageup), and "inactive shrap damage" (inactshrapdamage) mean, please refer to Information: Iteminfo and Shipstatus.</p>
        <ul>
          <li>Maneuvering Fins ($7500) - <em>available on ships 1, 2, 5, 6, 7, and 8</em>
            <ul>
              <li>Increases your speed by 1.</li>
              <li>Increases your thrust by 1.</li>
              <li>Increases your rotation by 1.</li>
            </ul>
          </li>
          <li>Ablative Armor ($8000) - <em>available on all ships</em></li>
            <ul>
              <li>Reduces bullet damage to 110 (from 130).</li>
            </ul>
          <li>Exoskeleton ($11500) - <em>available on all ships</em></li>
            <ul>
              <li>Reduces bullet damage to 87 (from 130).</li>
              <li><span style="color: #ff0000">Increases bullet damage upgrade to 100 (from 64).</span></li>
            </ul>
          <li>Aphasic Plating ($12000) - <em>available on all ships</em>
            <ul>
              <li><span style="color: #ff0000">Increases bullet damage to 140 (from 130).</span></li>
              <li>Reduces bullet damage upgrade to 34 (from 64).</li>
            </ul>
          </li>
          <li>Shock Matrix ($10000) - <em>available on all ships</em>
            <ul>
              <li>Reduces bomb damage to 650.</li>
            </ul>
          </li>
          <li>Solid Nutronium ($50000) - <em>available on ships 3, 4, 5, and 6</em>
            <ul>
              <li>Reduces your speed by 1.</li>
              <li>Reduces your thrust by 1.</li>
              <li>Reduces your rotation by 1.</li>
              <li>Reduces bomb damage to 650.</li>
              <li>Reduces bullet damage to 110 (from 130).</li>
            </ul>
          </li>
          <li>Nanodyne Hull ($25000) - <em>available on ships 5, 6, and 7</em>
            <ul>
              <li>Reduces bullet damage to 100 (from 130).</li>
              <li>Reduces bullet damage upgrade to 50 (from 64).</li>
              <li><span style="color: #ff0000">Increases bomb damage to 900.</span></li>
              <li>Reduces shrap damage to 50% of bullet damage.</li>
              <li>Increases burst damage to 375.</li>
            </ul>
          </li>
          <li>VERTEX Armor ($55000) - <em>available on ship 6</em>
            <ul>
              <li>Reduces bullet damage to 55 (from 130).</li>
              <li><span style="color: #ff0000">Increases bullet damage upgrade to 120 (from 64).</span></li>
              <li><span style="color: #ff0000">Increases EMP shutdown time to 9 seconds.</span></li>
            </ul>
          </li>
          <li>Radiating Coils ($7500) - <em>available on all ships</em>
            <ul>
              <li>Reduces inactive shrap damage to 1.</li>
              <li>Reduces shrap damage to 25% of bullet damage.</li>
              <li>Reduces burst damage to 100.</li>
            </ul>
          </li>
          <li>Faraday Shield ($6000) - <em>available on all ships</em>
            <ul>
              <li>Reduces EMP shutdown time to 0.01 seconds.</li>
              <li><span style="color: #ff0000">Increases EMP bomb damage to 60% of bomb damage.</span></li>
            </ul>
          </li>
          <li>Slipstream ($50000) - <em>available on all ships</em>
            <ul>
              <li>Increases your speed by 3.</li>
              <li>Increases your thrust by 3.</li>
              <li>Increases your rotation by 1.</li>
              <li><span style="color: #ff0000">Increases bullet damage to 150 (from 130).</span></li>
              <li><span style="color: #ff0000">Increases bomb damage to 1000.</span></li>
              <li>Increases your maximum speed by 1.</li>
              <li>Increases your maximum thrust by 1.</li>
            </ul>
          </li>
          <li>Adamantine Shell ($10000000) - <em>available on all ships</em>
            <ul>
              <li>Reduces bullet damage to 50 (from 130).</li>
              <li><span style="color: #ff0000">Increases bullet damage upgrade to 100 (from 64).</span></li>
              <li>Reduces bomb damage to 550.</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
<?php include 'inc/foot.inc'; ?>