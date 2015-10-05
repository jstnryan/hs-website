<?php
$pagetitle = 'New Player Introduction, Tutorial, and Common Commands';
include __DIR__.'/inc/head.inc';
?>
</head>
<body id="intro">
<?php include __DIR__.'/inc/menu.inc'; ?>
  <div class="center-h container" id="container">
  <!--
    <div class="vertical-nav-links">
      <div>
        <a id="about-link" href="#">INTRODUCTION</a>
        <ul class="sub-links" id="about-links">
          <li><a href="#">about</a></li>
          <li><a href="#">history</a></li>
          <li><a href="#">gameplay</a></li>
        </ul>
      </div>
    </div>
  -->
    <div id="main-content">
      <a name="about"></a>
      <h1>What is Hyperspace?</h1>
      <p>Hyperspace is a progression zone with purchaseable ships and items. Kill enemies and participate in flag games and other events to earn money and experience. Use your cash to build a ship fitted to your playstyle.</p>
      <a name="history"></a>
      <h1>History</h1>
      <p>Hyperspace was discovered one random day, long, long ago, by the great Dr. Brain, while out flying his Warbird. As he traveled upon the nondescript abyss of Subspace he stumbled over a sign. It read, "rip hs." I would say that 'the rest is history,' but as you surely know, history is cyclical.</p>
      <a name="gameplay"></a>
      <h1>Getting Started</h1>
      <p>For those less inclined to absorb information by reading, here's a video quick-start, courtesy of the legendary Mistarbob.</p>
      <div class="tut">
        <h2>Hyperspace Beginner's Tutorial Part 1<br>- Getting Started and Buying Items</h2>
        <iframe id="tut-vid" width="640" height="360" src="https://www.youtube.com/embed/qn0Xr01L8S4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <p>Rather, if you're not into sitting around and waiting for someone to bring the information you need to you, here's a pictographic quick-start, assembled by the great Noldec.</p>
      <div class="tut">
        <h2>Welcome to Hyperspace!</h2>
        <img class="tut-img" src="tut/welcome_to_hyperspace.png">
        <p>The goal of this zone is to kill people to gain money and experience, this will allow you to upgrade your ship! If you have questions don't be afraid to ask people in public chat or using <code>?help &lt;message&gt;</code></p>
        <h2>Buying a Ship</h2>
        <img class="tut-img" src="tut/buying_a_ship.png">
        <p>Buy a ship by typing <code>?buy warbird</code> or <code>?buy javelin</code></p>
        <h2>Entering a Ship</h2>
        <img class="tut-img" src="tut/entering_a_ship.png">
        <p>Enter the ship you bought by pressing <code>ESC + 1</code> (if you bought a warbird) or <code>ESC + 2</code> (if you bought a javelin). After you've entered your ship you can fly around with the arrow keys, shoot guns with <code>CTRL</code> and shoot bombs with <code>TAB</code>.</p>
        <h2>Default Key Bindings</h2>
        <img class="tut-img" src="tut/default_key_bindings.png">
        <p>You can edit these in the main Continuum menu (by leaving a zone with <code>ESC + Q</code>). <i>Profile > Select your profile > Key Defs... > Making a new one or editing the default one</i></p>
        <h2>In-Game Tutorial</h2>
        <img class="tut-img" src="tut/tutorial.png">
        <p>If you press F1 in game a tutorial will be shown in the top right corner of your screen. Keep pressing F1 to read the next pages.</p>
        <h2>Buying Items</h2>
        <img class="tut-img" src="tut/buying.png">
        <p>Typing <code>?buy</code> will list all available categories. Typing <code>?buy &lt;category name&gt;</code> will list all the items from a category. Green items are purchasable, red ones are not (yet). Gather more experience and/or money to be able to buy them.</p>
        <h2>Inspecting Items</h2>
        <img class="tut-img" src="tut/buying_2.png">
        <p>Type <code>?buy &lt;item name&gt;</code> to purchase the item.<br>Type <code>?iteminfo &lt;item name&gt;</code> to see the stats of an item.<br>Don't forget to regulary check if you're able to buy new items, so you're able to upgrade your ship and kill some noobs!</p>
        <h2>Flag Games</h2>
        <img class="tut-img" src="tut/flag_games.png">
        <p>The blue/white-ish things are called flags. Collecting (by flying over them, you can carry 4 max) and drop them in a "flag room"(by letting the timer run out) will win you the flag game and reward your team with money and experience.<br>Type <code>?flag</code> to join a flagging freq(uency). Type <code>?lancs</code> to find out who your team's anchor is. You're able to attach (teleport to him) by private messaging him <code>?attach</code>. This is the fastest way to return to your team after you've been killed.</p>
        <h2>Sectors</h2>
        <img class="tut-img" src="tut/sectors.png">
        <p>This is the sector map, blue sectors have flags in them.</p>
        <h2>Timer</h2>
        <img class="tut-img" src="tut/timer.png">
        <p>This is your flag time, if it runs out you will either drop your flags (yellow) or make them neutral (to neut) again, depending on your position. If you kill an enemy with flags you will get them.</p>
        <h2>Bases</h2>
        <img class="tut-img" src="tut/bases.png">
        <p>Hyperspace is divided into several sectors. Center where you spawn and can fight people in a FFA style fight. Bases (the mazes) where flag games will happen. Drop your flags in the flag room (FR), wich is the last part of the base. And the hypertunnels wich connect all the sectors.</p>
        <h2>Flag Room</h2>
        <img class="tut-img" src="tut/flag_room.png">
        <p>Dropped flags will be yellow. You're only able to drop your flags in the flag room of a base. Dropping somewhere else will neut the flags.</p>
        <h2>Chatting</h2>
        <img class="tut-img" src="tut/chatting.png">
        <p>Public messages, visible for everyone in the arena.<br>Team messages, visible for your team.<br>Chat messages, visible for people on the chat.<br>Private messages, only visible for the other person.</p>
        <h2>Teams (Freqs)</h2>
        <img class="tut-img" src="tut/teams_freqs.png">
        <p>Spectator team. <code>ESC + S</code> to join<br>Other teams (00-89). <code>=28</code> to join<br>Flag teams (90 - 91). <code>?flag</code> to join</p>
      </div><!-- gameplay -->
      <a name="commands"></a>
      <h1>Common Commands</h1>
      <p>In Continuum, commands are preceeded by a question mark (<code>?</code>). The following is a list of common commands most relevant to playing in Hyperspace.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Command</th>
              <th>Action, Result</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>?arena [ -a ]</td>
              <td>Display a list of available public arenas. Using the <code>-a</code> switch will show all public arenas with zero or more players.</td>
            </tr>
            <tr>
              <td>?bountytype</td>
              <td>Cycle through the available bounty display modes (Bounty, Exp, and Money).</td>
            </tr>
            <tr>
              <td>?buy [ category | item ]</td>
              <td>Displays the list of items available for purchase. Including the optional <i>category name</i> displays a list of purchasable items in that category, while including the optional <i>item name</i> purchases that item.<br><br>
                Multiple items can be purchased in one line (at the same time) by using the format: <code class="nowrap">?| buy -c # &lt;item&gt; | buy -c # &lt;item&gt; [ | etc.. ]</code></td>
            </tr>
            <tr>
              <td>?chat</td>
              <td>Get a list of players enrolled in your chat channels.</td>
            </tr>
            <tr>
              <td>?chat=&lt;chatname&gt;</td>
              <td>Create or join the specified chat channel.</td>
            </tr>
            <tr>
              <td>?iteminfo &lt;item&gt;</td>
              <td>Get the description and properties of a purchasable item.</td>
            </tr>
            <tr>
              <td>?kill</td>
              <td>Cycle through the available Continuum kill message modes (Center, Chat, Off).</td>
            </tr>
            <tr>
              <td>?killmessages</td>
              <td>Enable or disable Hyperspace kill messages. Hyperspace kill messages are only displayed for your kills, and your teammates' kills that earn you money or exp.</td>
            </tr>
            <tr>
              <td>?ping</td>
              <td>Check the various ping times between you and the server.</td>
            </tr>
            <tr>
              <td>?flag</td>
              <td>Join the flagging game (the server will place you on one of the designated flag frequencies).</td>
            </tr>
            <tr>
              <td>?flags</td>
              <td>Get a list of players carrying flags, and/or a count of uncarried flags.</td>
            </tr>
            <tr>
              <td>?ping</td>
              <td>Check the various ping times between you and the server.</td>
            </tr>
            <tr>
              <td>?help</td>
              <td>Get live help from the staff members currently online.</td>
            </tr>
            <tr>
              <td>?lag</td>
              <td>Retrieve stats on your current connection to the server.</td>
            </tr>
            <!--
            <tr>
              <td>?listnewb</td>
              <td>Retrieve a list of players the staff have identified as being new (or, more probably, veteran players that are being shamed).</td>
            </tr>
            -->
            <tr>
              <td>?ping</td>
              <td>Check the various ping times between you and the server.</td>
            </tr>
            <tr>
              <td>?shipstatus [ -v ]</td>
              <td>Get a list of items equiped on your ship. Including the optional <code>-v</code> (verbose) switch will also display the complete ship properties your ship.</td>
            </tr>
            <tr>
              <td>?spec</td>
              <td>Get the list of players viewing your ship from spectator mode.</td>
            </tr>
            <tr>
              <td>?status</td>
              <td>Displays the Recharge, Thruster, Speed, Rotation, and Shrapnel properties of your current ship, expressed in percentages.</td>
            </tr>
            <!--
            <tr>
              <td>?squadcreate &lt;squadname&gt;:&lt;squadpassword&gt;</td>
              <td>Create a new squad.</td>
            </tr>
            -->
            <tr>
              <td>?squadjoin &lt;name&gt;:&lt;password&gt;</td>
              <td>Join an existing squad.</td>
            </tr>
            <!--
            <tr>
              <td>?squadkick</td>
              <td>Allows a squad owner to remove a player from his/her squad.</td>
            </tr>
            -->
            <tr>
              <td>?squadleave</td>
              <td>Leave your currently enrolled squad.</td>
            </tr>
            <!--
            <tr>
              <td>?squadlist</td>
              <td>For squad owners, shows a list of people in your squad.</td>
            </tr>
            -->
          </tbody>
        </table>
      </div><!-- commands -->
      <a name="arenas"></a>
      <h1>Public Arenas</h1>
      <p>Hyperspace includes many sub-arenas, some of which incorporate games with differing styles of gameplay. For a list of arenas which currently have active players use the <code>?arena</code> command. You can list all available public arenas with <code>?arena -a</code>. To enter any arena, use the command <code>?go &lt;arena&gt;</code> where <i>&lt;arena&gt;</i> is the name of the arena.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Arena</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>(Public 0)</td>
              <td>Also called 'Pub,' this is the main Hyperspace arena. Traditional dogfighting is typical in Center, the middle section of the map, and flag games in the bases around the outside.<br>
                If you're in a sub-arena, you can return to Pub by typing <code>?go 0</code>. You can create a copy of Pub as an additional arena by using <code>?go #</code> where <i>#</i> is any number greater than 0.</td>
            </tr>
            <tr>
              <td>teamelim</td>
              <td>Team Elimination is bot-coordinated (typically) 3 vs. 3 cooperative team gameplay. Help your teammates kill the opposing team before they do the same to you.</td>
            </tr>
            <tr>
              <td>duel</td>
              <td>A special sub-arena designed specifically to find out which of two players is the better fighter.</td>
            </tr>
            <tr>
              <td>events</td>
              <td></td>
            </tr>
            <tr>
              <td>fishies</td>
              <td></td>
            </tr>
            <tr>
              <td>hit</td>
              <td><i>Note: this arena is currently broken and trying to <code>?go hit</code> will crash your Continuum client.</i></td>
            </tr>
            <tr>
              <td>hyperball</td>
              <td>Hyperball is B.O.X.'s fast-paced powerball game. Help your team score powerball goals, while fending off your enemies.</td>
            </tr>
            <tr>
              <td>hsdbl</td>
              <td></td>
            </tr>
            <tr>
              <td>hstown</td>
              <td></td>
            </tr>
            <tr>
              <td>maze</td>
              <td></td>
            </tr>
            <tr>
              <td>paint</td>
              <td>One player pilots a 'paintbrush' ship that paints pictures with mines while spectators try to be the first to guess what the picture is.</td>
            </tr>
          </tbody>
        </table>
      </div><!-- arenas -->
      <a name="locations"></a>
      <h1>Key Locations</h1>
      <p>There are a few notable locations in Hyperspace (public arena) that each have special purpose. The following is a lit of places to be familiar with, or places you may be told to go during gameplay.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Location</th>
              <th>Description, Function</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ammo Depot</td>
              <td>Ammo Depots are (generally) small safe zones which allow you to purchase Consumables for your ship, for example Bricks and Fields, with the <code>?buy</code> menu.<br>
                Ammo Depots are currently located at <i>I7</i>, and <i>L7</i>.</td>
            </tr>
            <tr>
              <td>Center Safe</td>
              <td>This is the safe zone in the center of the entire map (<i>J10</i>), where your ship spawns when you first enter the arena, and every time you die. A safe zone is an area where enemy weapons do not hurt you, and is useful if you need to chat, or take a break from gameplay. However, you should be aware that the cost of stopping in a safe zone is one death on your record (not an actual ship death), and your bounty is reset to <i><a href="/ref/glossary.php#ref-gloss-initialbounty">initialbounty</a></i>.<br>
                Most items can be purchased here through the <code>?buy</code> menu.</td>
            </tr>
            <tr>
              <td>Hypertunnels</td>
              <td>The Hypertunnels are the long cooridors surrounding the entire map which allow ships to quickly travel between sectors. From Center, you can enter the Hypertunnels from the portals at <i>H8</i>, and <i>L14</i>. You then transfer from the Hypertunnels to individual sectors with the various portals.</td>
            </tr>
            <tr>
              <td>Sectors (Bases)<br>
                B1, B2, etc..</td>
              <td>There are 9 sectors in the Hyperspace map. The 8 sectors located around the outside of the map are more commonly called 'bases.' They are numbered clockwise, starting with B1 at the top-right.<br>
                Center is also a sector, but is most commonly refered to as 'Center' or 'C,' and is not considered a base. It is numbered 0, or 'B0.'<br>
                Sector 8 (top, middle) is a special sector (which includes the areas formerly called 'Scrap & Salvage,' and the 'Transwarp Hub'), not typically used for flag games.</td>
            </tr>
          </tbody>
        </table>
      </div><!-- locations -->
    </div>
  </div>
<?php include __DIR__.'/inc/foot.inc'; ?>