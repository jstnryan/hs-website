<?php
$pagetitle = 'Development Information';
include __DIR__.'/../inc/head.inc';
?>
</head>
<body id="development">
<?php include __DIR__.'/../inc/menu.inc'; ?>
  <div class="center-h" id="container">
    <div id="main-content">
      <a name="development"></a>
      <h1>Open Source Philosophy</h1>
      <p>Hyperspace is open source! All software and code required to operate the zone is freely available on the Internet. Hyperspace is a cooperative zone where anyone can suggest a change with a pull request.</p>
      <a name="zone"></a>
      <h2>Zone Server and Configuration</h2>
      <p><a href="http://asss.minegoboom.com/">A Small Subspace Server (ASSS)</a> - Originally developed by <a href="https://bitbucket.org/grelminar/">Grelminar</a>, and now mostly maintained by <a href="https://bitbucket.org/jowie/">jowie</a>, ASSS is the open source successer to SubGame, Virgin Interactive's original Subspace server. Unlike SubGame, ASSS was designed to provide far more extensibility, offering zones the ability to completely customize their gameplay. Without this extensibility, the Hyperspace concept would not be possible. For additional extensive information about using ASSS, go to the <a href="http://www.minegoboom.com/server/">Server Help</a> site, and the <a href="http://forums.minegoboom.com/">Server Help Forums</a>.</p>
      <p><a href="https://github.com/Ceiu/hyperspace-asss">Canonical Hyperspace zone modules and configuration repository</a> - These are the additional code neccessary to be added to ASSS in order to run Hyperspace. Ceiu is currently the zone sysop, and main developer; all zone changes come from, or get pushed to, his repository before being enabled on the server. For some cursory tips on getting started with the modules, have a look at <a href="http://wiki.minegoboom.com/index.php?title=Writing_Modules_for_Hyperspace&oldid=5869">Writing Modules for Hyperspace</a> on the ASSS wiki.</p>
      <p><a href="https://github.com/Ceiu/hyperspace-items">Authoritative JSON config for Hyperspace items</a> - Ceiu also maintains the official repository for zone item configuration. Items and their properties are kept in a JSON object, in plain text, so that it can be edited by anyone. As such anyone interested is welcome to modify the JSON, and submit it for consideration to be included on the server.<br>
        CDB, the lead items developer, also maintains <a href="https://github.com/CDB-Man/hyperspace-items">his own branch of the items JSON</a>.</p>
      <p><a href="https://github.com/jstnryan/hyperspace-ships">Ship settings JSON config</a> - sigma13 maintains a repo containing an unofficial JSON config (in the vein of the items config) which details the default ship values (initial & max) listed in the <code>?shipinfo #</code> in-game menu.</p>
      <a name="website"></a>
      <h2>Website</h2>
      <p><a href="https://github.com/jstnryan/hs-website">Hyperspace Website Repository</a> - Naturally, the entire website is open source as well. sigma13 maintains the official repository; anyone is welcome to fork it, modify, and pull request changes, which will be considered for inclusion.</p>
      <a name="bot"></a>
      <h2>Monkeybot</h2>
      <p><a href="https://github.com/plushmonkey/monkeybot">Continuum Screen Bot</a> - Unlike other Subspace bots (which basically run in the background with no interface), monkey's 'ScreenBot' is a program that runs alongside the Continuum application, and mimics the actions of a human player. Continuum Screen Bot is not distributed as an executable, and must be compiled from source.</p>
      <p>AI Bots (those that fly around and shoot other players) in Hyperspace are player run. Although there is no explicit list of rules when running a bot in Hyperspace, the following guidelines are to be kept in mind:</p>
      <ul>
        <li>The bot may be forced to spec, or kicked from the zone by a staff member at any time, for any reason.</li>
        <li>"Farming" bots (either by killing them over and over, or by transfering money from the bot's account to your own) is not allowed. There are multiple safeguards to discourage this behavior, including but not limited to <i>Reward Restrictor</i> (<a href="/ref/glossary.php#ref-gloss-hsd_multiplier">hsd_multiplier</a> and <a href="/ref/glossary.php#ref-gloss-exp_multiplier">exp_multiplier</a>). If zone staff feel necessary, the offending player may be fined money, degranted items, have their kill counts reset, and possible just <code>?explode</code>d on site.</li>
        <li>Bots should not be annoying. Bots may "taunt," however the 'cooldown' period should be set to a reasonable length of time. Real players can be annoying enough as it is.</li>
        <li>Bots should identify themselves as bots by responding to the <code>!owner</code> command with the player name of the bot's operator.</li>
      </ul>
      <h3>Common Bots</h3>
      <p>The following are the AI bots can sometimes be found in the zone, and their owners/operators.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Owner</th>
              <th>Bot(s)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Baked Cake</td>
              <td>Baked Cake occasionally runs an obscene number of bots, all of which have names which are some variation on his own, such as, "Borked Cork."</td>
            </tr>
          <!--
            <tr>
              <td>kevinz</td>
              <td></td>
            </tr>
          -->
            <tr>
              <td>monkey</td>
              <td>taz, X FORCE</td>
            </tr>
            <tr>
              <td>nn</td>
              <td>who.cares, booty.warrior</td>
            </tr>
            <tr>
              <td>Noldec</td>
              <td>Nolbot</td>
            </tr>
            <tr>
              <td>Pity.</td>
              <td>Baby Bot Back, Botham Knight</td>
            </tr>
            <tr>
              <td>Saiyan Prince</td>
              <td>Bringer of Rain, Pabl0 Escobar</td>
            </tr>
            <tr>
              <td>sigma13</td>
              <td>dosed, desod</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p>In addition to user-run AI bots, Hypserspace also utilizes various 'bots;' each facilitate their own unique gameplay features.</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Bot</th>
              <th>Function</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>UB-Picobot</td>
              <td>Picobot tracks win/loss/suicide numbers and ratios, as well as providing time-tracking alerts for items such as Antideath. PM UB-Picobot <code>!help</code> for a list of commands.</td>
            </tr>
            <tr>
              <td>&lt;Cobalt Mk2&gt;<br>
                &lt;engine failure&gt;<br>
                &lt;extraweapon&gt;</td>
              <td>These 'bots' are server modules which control various item-related functions from the server-side, such as Point Defense, Fields, and controlling engine failures. You can not interact with these bots in the traditional sense, other than engaging in gameplay.</td>
            </tr>
            <tr>
              <td>Autoturret</td>
              <td>Although very rarely seen, Autoturrets can be placed in game by moderators. These are virual players who's ships are stationary, but target and shoot at other players. Their specific purpose is varied, but Autoturrets are usually used to temporarily enhance gameplay by challenging users to specific tasks (such as getting past one or more turrets in a base).</td>
            </tr>
          </tbody>
        </table>
      </div>
      <a name="chatnet-for-android"></a>
      <h2>ChatNet for Android</h2>
      <p>Although not open source, <a href="https://play.google.com/store/apps/details?id=com.k3nn37h.chatnet">ChatNet for Android</a> was written so that anyone can connect to Hyperspace on the go. All you need is an Android device running v2.3.4 or above, and you can Hyperspec with the best players. It was developed and is maintained by dest_matter, and CDB-Man, using Ceiu's jcnlib (see below).</p>
      <a name="other"></a>
      <h2>Other Projects</h2>
      <p>There are a lot of talented people in the Subspace community. Here is a quick list of other interesting projects to have a look at:</p>
      <div class="tut">
        <table cellspacing="0">
          <thead>
            <tr>
              <th>Project</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="https://bitbucket.org/weasal/resizer">Continuum Resizer</a></td>
              <td>Weasal's helper-application to update Continuum's dated graphics code (as well as other useful features), C# and C++</td>
            </tr>
            <tr>
              <td><a href="http://ss-discretion.sourceforge.net/">Discretion</a></td>
              <td>BaK's open source replacement for the Continuum client</td>
            </tr>
            <tr>
              <td><a href="https://github.com/Ceiu/jcnlib">jcnlib</a></td>
              <td>Ceiu's Java ChatNet library</td>
            </tr>
            <tr>
              <td><a href="http://www.mervbot.com">MERVbot</a></td>
              <td>The first and most widely used Suspace bot, written by catid in C++</td>
            </tr>
            <tr>
              <td><a href="https://github.com/cycad/opencore">OpenCore</a></td>
              <td>Cycad's Subspace bot for use on Linux, written in Python, C and C++</td>
            </tr>
            <tr>
              <td><a href="https://github.com/extreme-games/PyCore">PyCore</a></td>
              <td>Extreme Games' zone bot, written in Python</td>
            </tr>
            <tr>
              <td><a href="http://www.twcore.org">TWCore</a></td>
              <td>Subspace bot written in Java, originally designed for Trench Wars zone</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include __DIR__.'/../inc/foot.inc'; ?>