<?php
$pagetitle = 'Ship Builder';
include __DIR__.'/../../inc/head.inc';
?>
    <style>
.pcontainer {
  margin: 80px auto;
  width: 640px;
  text-align: center;
}
.pcontainer .progress {
  margin: 0 auto;
  width: 400px;
}

.progress {
  padding: 4px;
  background: rgba(0, 0, 0, 0.25);
  border-radius: 6px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.08);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.08);
}

.progress-bar {
  position: relative;
  height: 16px;
  border-radius: 4px;
  -webkit-transition: 0.4s linear;
  -moz-transition: 0.4s linear;
  -o-transition: 0.4s linear;
  transition: 0.4s linear;
  -webkit-transition-property: width, background-color;
  -moz-transition-property: width, background-color;
  -o-transition-property: width, background-color;
  transition-property: width, background-color;
  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25), inset 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25), inset 0 1px rgba(255, 255, 255, 0.1);
}
.progress-bar:before, .progress-bar:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.progress-bar:before {
  bottom: 0;
  background: url("img/stripes.png") 0 0 repeat;
  border-radius: 4px 4px 0 0;
}
.progress-bar:after {
  z-index: 2;
  bottom: 45%;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
}

/*
 * Note: using adjacent or general sibling selectors combined with
 *       pseudo classes doesn't work in Safari 5.0 and Chrome 12.
 *       See this article for more info and a potential fix:
 *       http://css-tricks.com/webkit-sibling-bug/
 */
#five:checked ~ .progress > .progress-bar {
  width: 5%;
  background-color: #f63a0f;
}

#twentyfive:checked ~ .progress > .progress-bar {
  width: 25%;
  background-color: #f27011;
}

#fifty:checked ~ .progress > .progress-bar {
  width: 50%;
  background-color: #f2b01e;
}

#seventyfive:checked ~ .progress > .progress-bar {
  width: 75%;
  background-color: #f2d31b;
}

#onehundred:checked ~ .progress > .progress-bar {
  width: 100%;
  background-color: #86e01e;
}

.radio {
  display: none;
}

.label {
  display: inline-block;
  margin: 0 5px 20px;
  padding: 3px 8px;
  color: #aaa;
  text-shadow: 0 1px black;
  border-radius: 3px;
  cursor: pointer;
}
.radio:checked + .label {
  color: white;
  background: rgba(0, 0, 0, 0.25);
}


.progress-group { margin-top: 20px; }
.progress-title,
.bar-values { overflow: auto; width: 100%; /* float clear */ }
.title { font-weight: bold; }
.title_left { float: left; }
.title_right { float: right; }
.bar-values { position: relative; }
.abs { position: absolute; }
.min-all { left: 0px; }
.max-all { right: 0px; }

#prog-energy .progress-bar { width: 22.5%; left: 2.4%; } /* 138px */
#prog-energy .progress-bar { background: linear-gradient(to right, #f2b01e, #f2b01e 53.5%, #666 53.5%, #666); }
/* #prog-energy .progress-bar { background: -webkit-linear-gradient(left, #f2b01e, #f2b01e 53.5%, #666 53.5%, #666); } */
#prog-energy .min-this { left: 2.4%; }
#prog-energy .max-this { right: 75.0%; }

#prog-recharge .progress-bar { width: 40.0%; left: 0.1%; } /* 350px */
#prog-recharge .progress-bar { background: linear-gradient(to right, #86e01e, #86e01e 85.0%, #666 85.0%, #666); }
#prog-recharge .min-this { left: 0.1%; }
#prog-recharge .max-this { right: 60.0%; } /* 44.0% */

#prog-speed .progress-bar { width: 33.6%; left: 66.4%; } /* 212px */
#prog-speed .progress-bar { background: linear-gradient(to right, #f63a0f, #f63a0f 18.0%, #666 18.0%, #666); }
#prog-speed .min-this { left: 66.4%; }
#prog-speed .max-this { right: 0.0%; }

#prog-thrust .progress-bar { width: 52.6%; left: 47.4%; } /* 333px */
#prog-thrust .progress-bar { background: linear-gradient(to right, #f2d31b, #f2d31b 75.0%, #666 75.0%, #666); }
#prog-thrust .min-this { left: 47.4%; }
#prog-thrust .max-this { right: 0.0%; }

#prog-rotation .progress-bar { width: 51.2%; left: 47.4%; } /* 326px */
#prog-rotation .progress-bar { background: linear-gradient(to right, #f27011, #f27011 24.5%, #666 24.5%, #666); }
#prog-rotation .min-this { left: 47.4%; }
#prog-rotation .max-this { right: 1.4%; }
    </style>
    <script>
      function collision(a, b) {
        return !(
          ((a.y + a.height) < (b.y)) ||
          (a.y > (b.y + b.height)) ||
          ((a.x + a.width) < b.x) ||
          (a.x > (b.x + b.width))
        );
      }

      function rect(obj) {
        //var objstyle = window.getComputedStyle(obj);
        return {
          x : obj.offsetLeft,
          y : obj.offsetTop,
          width : obj.offsetWidth,
          height : obj.offsetHeight
        };
      }

      window.addEventListener('load', function() {
        var pbs = document.getElementsByClassName('bar-values');
        for (var i = 0; i <= pbs.length - 1; ++i) {
          var minall = pbs[i].getElementsByClassName('min-all');
          var minthis = pbs[i].getElementsByClassName('min-this');
          if (collision(rect(minall[0]), rect(minthis[0]))) {
            minall[0].style.visibility = 'hidden';
          } else {
            minall[0].style.visibility = '';
          }
          var maxall = pbs[i].getElementsByClassName('max-all');
          var maxthis = pbs[i].getElementsByClassName('max-this');
          if (collision(rect(maxall[0]), rect(maxthis[0]))) {
            maxall[0].style.visibility = 'hidden';
          } else {
            maxall[0].style.visibility = '';
          }
        }
      });
    </script>
  </head>
  <body id="build">
<?php include __DIR__.'/../../inc/menu.inc'; ?>
  <div class="center-h container" id="container">
    <div id="main-content">
      <a name="build"></a>
      <h1>Ship Builder</h1>
      <p>The Ship Builder tool can be used to more efficiently plan your next ship build. Items are automatically updated, and have the latest attributes. The values in the result table are not actual totals, and do not take into account ship defaults; they are merely the amount modified by items.</p>
      <div class="">

      <div style="width:350px;"><!-- size mod -->

        <div id="prog-energy" class="progress-group">
          <div class="progress-title">
            <span class="title_left"><span class="title">Energy: </span><span class="title_value">1250</span></span>
            <span class="title_right"><span class="title">Upgrade: </span><span class="title_value">7</span></span>
          </div>
          <div class="bar">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <div class="bar-values">
              <span class="min-all" title="All-ship minimum value">800</span>
              <span class="abs min-this" title="Your ship's initial value">875</span>
              <!-- <span class="abs current">1250</span> -->
              <span class="abs max-this" title="Your ship's maximum value">1575</span>
              <span class="abs max-all" title="All-ship maximum value">3900</span>
            </div>
          </div>
        </div>

        <div id="prog-recharge" class="progress-group">
          <div class="progress-title">
            <span class="title_left"><span class="title">Recharge: </span><span class="title_value">1425</span></span>
            <span class="title_right"><span class="title">Upgrade: </span><span class="title_value">5</span></span>
          </div>
          <div class="bar">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <div class="bar-values">
              <span class="min-all" title="All-ship minimum value">950</span>
              <span class="abs min-this" title="Your ship's initial value">1000</span>
              <span class="abs max-this" title="Your ship's maximum value">1500</span>
              <span class="abs max-all" title="All-ship maximum value">2200</span>
            </div>
          </div>
        </div>

        <div id="prog-speed" class="progress-group">
          <div class="progress-title">
            <span class="title_left"><span class="title">Speed: </span><span class="title_value">3655</span></span>
            <span class="title_right"><span class="title">Upgrade: </span><span class="title_value">75</span></span>
          </div>
          <div class="bar">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <div class="bar-values">
              <span class="min-all" title="All-ship minimum value">2040</span>
              <span class="abs min-this" title="Your ship's initial value">3520</span>
              <span class="abs max-this" title="Your ship's maximum value">4270</span>
              <span class="abs max-all" title="All-ship maximum value">4270</span>
            </div>
          </div>
        </div>

        <div id="prog-thrust" class="progress-group">
          <div class="progress-title">
            <span class="title_left"><span class="title">Thrust: </span><span class="title_value">37</span></span>
            <span class="title_right"><span class="title">Upgrade: </span><span class="title_value">2</span></span>
          </div>
          <div class="bar">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <div class="bar-values">
              <span class="min-all" title="All-ship minimum value">4</span>
              <span class="abs min-this" title="Your ship's initial value">22</span>
              <span class="abs max-this" title="Your ship's maximum value">42</span>
              <span class="abs max-all" title="All-ship maximum value">42</span>
            </div>
          </div>
        </div>

        <div id="prog-rotation" class="progress-group">
          <div class="progress-title">
            <span class="title_left"><span class="title">Rotation: </span><span class="title_value">275</span></span>
            <span class="title_right"><span class="title">Upgrade: </span><span class="title_value">11</span></span>
          </div>
          <div class="bar">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <div class="bar-values">
              <span class="min-all" title="All-ship minimum value">95</span>
              <span class="abs min-this" title="Your ship's initial value">197</span>
              <span class="abs max-this" title="Your ship's maximum value">307</span>
              <span class="abs max-all" title="All-ship maximum value">310</span>
            </div>
          </div>
        </div>

        </div><!-- size mod -->





        <section class="pcontainer">
          <input type="radio" class="radio" name="progress" value="five" id="five">
          <label for="five" class="label">5%</label>

          <input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>
          <label for="twentyfive" class="label">25%</label>

          <input type="radio" class="radio" name="progress" value="fifty" id="fifty">
          <label for="fifty" class="label">50%</label>

          <input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">
          <label for="seventyfive" class="label">75%</label>

          <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
          <label for="onehundred" class="label">100%</label>

          <div class="progress">
            <div class="progress-bar"></div>
          </div>
        </section>


      </div>
    </div>
  </div>
<?php include __DIR__.'/../../inc/foot.inc'; ?>