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
        <p>The goal of this zone is to kill people to gain money and experience, this will allow you to upgrade your ship! If you have questions don't be afraid to ask people in public chat or using <i>?help &lt;message&gt;</i></p>
        <h2>Buying a Ship</h2>
        <img class="tut-img" src="tut/buying_a_ship.png">
        <p>Buy a ship by typing <i>?buy warbird</i> or </i>?buy javelin</i></p>
        <h2>Entering a Ship</h2>
        <img class="tut-img" src="tut/entering_a_ship.png">
        <p>Enter the ship you bought by pressing esc+1 (if you bought a warbird) or esc+2 (if you bought a javelin). After you've entered your ship you can fly around with the arrow keys, shoot guns with CTRL and shoot bombs with TAB.</p>
        <h2>Default Key Bindings</h2>
        <img class="tut-img" src="tut/default_key_bindings.png">
        <p>You can edit these in the main Continuum menu (by leaving a zone with ESC+Q). <i>Profile > Select your profile > Key Defs... > Making a new one or editing the default one</i></p>
        <h2>In-Game Tutorial</h2>
        <img class="tut-img" src="tut/tutorial.png">
        <p>If you press F1 in game a tutorial will be shown in the top right corner of your screen. Keep pressing F1 to read the next pages.</p>
        <h2>Buying Items</h2>
        <img class="tut-img" src="tut/buying.png">
        <p>Typing <i>?buy</i> will list all available categories. Typing <i>?buy &lt;category name&gt;</i> will list all the items from a category. Green items are purchasable, red ones are not (yet). Gather more experience and/or money to be able to buy them.</p>
        <h2>Inspecting Items</h2>
        <img class="tut-img" src="tut/buying_2.png">
        <p>Type <i>?buy &lt;item name&gt;</i> to purchase the item.<br>Type <i>?iteminfo &lt;item name&gt;</i> to see the stats of an item.<br>Don't forget to regulary check if you're able to buy new items, so you're able to upgrade your ship and kill some noobs!</p>
        <h2>Flag Games</h2>
        <img class="tut-img" src="tut/flag_games.png">
        <p>The blue/white-ish things are called flags. Collecting (by flying over them, you can carry 4 max) and drop them in a "flag room"(by letting the timer run out) will win you the flag game and reward your team with money and experience.<br>Type <i>?flag</i> to join a flagging freq(uency). Type <i>?lancs</i> to find out who your team's anchor is. You're able to attach (teleport to him) by private messaging him <i>?attach</i>. This is the fastest way to return to your team after you've been killed.</p>
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
        <p>Spectator team. <i>ESC + S</i> to join<br>Other teams (00-89). <i>=28</i> to join<br>Flag teams (90 - 91). <i>?flag</i> to join</p>
      </div>
      <a name="commands"></a>
      <h1>Common Commands</h1>
      <p>In Continuum, commands are preceeded by a question mark (<i>?</i>). The following is a list of common commands most relevant to playing in Hyperspace.</p>
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
              <td>?bountytype</td>
              <td>Cycle through the available bounty display modes (Bounty, Exp, and Money).</td>
            </tr>
            <tr>
              <td>?buy [ category | item ]</td>
              <td>Displays the list of items available for purchase. Including the optional <i>category name</i> displays a list of purchasable items in that category, while including the optional <i>item name</i> purchases that item.</td>
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
              <td>Retrieve a list of players the staff has 'called out.'</td>
            </tr>
            -->
            <tr>
              <td>?ping</td>
              <td>Check the various ping times between you and the server.</td>
            </tr>
            <tr>
              <td>?shipstatus [ -v ]</td>
              <td>Get a list of items equiped on your ship. Including the optional <i>-v</i> (verbose) switch will also display the complete ship properties your ship.</td>
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
              <td>?squadjoin <br>&lt;name&gt;:&lt;password&gt;</td>
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
      </div>
    </div>
  </div>
<?php include __DIR__.'/inc/foot.inc'; ?>