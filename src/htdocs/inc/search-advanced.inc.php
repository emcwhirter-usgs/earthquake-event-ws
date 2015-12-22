<?php
  date_default_timezone_set('UTC');
  $now = time();
  $starttime = $now - 604800; // 1 week ago
  $starttime -= ($starttime % 86400); // Round to start of day
  $starttime = date('Y-m-d H:i:s', $starttime);

  $endtime = $now + 86400; // Tomorrow
  $endtime -= ($endtime % 86400); // Round to start of day (i.e. end of today)
  $endtime = date('Y-m-d H:i:s', $endtime - 1);
?>

<div class="one-of-two column">
  <section aria-labelledby="datetime">
    <h3 id="datetime" class="label">Date &amp; Time</h3>
    <ul class="vertical no-style">
      <li>
        <label for="starttime" class="label" id="datetime-starttime">
          Start (UTC)
        </label>
        <input type="text" name="starttime" id="starttime"
            placeholder="yyyy-mm-dd hh:mm:ss"
            value="<?php print $starttime; ?>"
            aria-labelledby="datetime datetime-starttime"/>
      </li><li>
        <label for="endtime" class="label" id="datetime-endtime">
          End (UTC)
        </label>
        <input type="text" name="endtime" id="endtime"
            placeholder="yyyy-mm-dd hh:mm:ss"
            value="<?php print $endtime; ?>"
            aria-labelledby="datetime datetime-endtime"/>
      </li>
    </ul>
  </section>

  <section aria-labelledby="magnitude">
    <h3 id="magnitude" class="label">Magnitude</h3>
    <ul class="vertical no-style two-up">
      <li>
        <label for="minmagnitude" class="label" id="magnitude-minmagnitude">
          Minimum
        </label>
        <input type="number" step="any" name="minmagnitude" id="minmagnitude"
            min="-1" max="10" step="0.1" value="6.0"
            aria-labelledby="magnitude magnitude-minmagnitude"/>
      </li><li>
        <label for="maxmagnitude" class="label" id="magnitude-maxmagnitude">
          Maximum
        </label>
        <input type="number" step="any" name="maxmagnitude" id="maxmagnitude"
            min="-1" max="10" step="0.1"
            aria-labelledby="magnitude magnitude-maxmagnitude"/>
      </li>
    </ul>
  </section>

  <section aria-labelledby="depth">
    <h3 id="depth" class="label">Depth (km)</h3>
    <ul class="vertical no-style two-up">
      <li>
        <label for="mindepth" class="label" id="depth-mindepth">Minimum</label>
        <input type="number" step="any" name="mindepth" id="mindepth"
            min="-100" max="1000" step="0.1"
            aria-labelledby="depth depth-mindepth"/>
      </li><li>
        <label for="maxdepth" class="label" id="depth-maxdepth">Maximum</label>
        <input type="number" step="any" name="maxdepth" id="maxdepth"
            min="-100" max="1000" step="0.1"
            aria-labelledby="depth depth-maxdepth"/>
      </li>
    </ul>
  </section>
</div>

<div class="one-of-two column">
  <section aria-labelledby="region">
    <h3 id="region" class="label">Geographic Region</h3>
    <div class="region-description"></div>

    <div class="fieldset" role="group" aria-labelledby="region-rectangle">
      <h4 id="region-rectangle" class="label">Rectangle</h4>
      <p class="help">
        Decimal degree coordinates. North must be greater than South. East
        must be greater than West.
      </p>

      <button type="button" class="draw orange">Draw Rectangle on Map</button>

      <ul class="region-square-details no-style vertical">
      <li class="region-square-details-north">
        <label for="maxlatitude" class="label" id="rectangle-maxlatitude">
          North
        </label>
        <input type="number" step="any" name="maxlatitude" id="maxlatitude"
            min="-90.0" max="90"
            aria-labelledby="region region-rectangle rectangle-maxlatitude"/>
      </li>
      <li class="region-square-details-west">
        <label for="minlongitude" class="label" id="rectangle-minlongitude">
          West
        </label>
        <input type="number" step="any" name="minlongitude" id="minlongitude"
            min="-360" max="360"
            aria-labelledby="region region-rectangle rectangle-minlongitude"/>
      </li>
      <li class="region-square-details-east">
        <label for="maxlongitude" class="label" id="rectangle-maxlongitude">
          East
        </label>
        <input type="number" step="any" name="maxlongitude" id="maxlongitude"
            min="-360" max="360"
            aria-labelledby="region region-rectangle rectangle-maxlongitude"/>
      </li>
      <li class="region-square-details-south" id="rectangle-minlatitude">
        <label for="minlatitude" class="label">South</label>
        <input type="number" step="any" name="minlatitude" id="minlatitude"
            min="-90" max="90"
            aria-labelledby="region region-rectangle rectangle-maxlatitude"/>
      </li>
      </ul>
    </div>

    <div class="fieldset" role="group" aria-labelledby="region-circle">
      <h4 id="region-circle" class="label">
        Circle/ Donut
      </h4>
      <p class="help">
        Specify an inner radius to perform a donut search.
      </p>

      <ul class="vertical no-style two-up">
        <li>
          <label for="latitude" class="label" id="circle-latitude">
            Center Latitude
          </label>
          <input type="number" step="any" name="latitude" id="latitude"
              min="-90" max="90"
              aria-labelledby="region region-circle circle-latitude"/>
        </li>
        <li>
          <label for="longitude" class="label" id="circle-longitude">
            Center Longitude
          </label>
          <input type="number" step="any" name="longitude" id="longitude"
              min="-180" max="180"
              aria-labelledby="region region-circle circle-longitude"/>
        </li>
        <li>
          <label for="minradiuskm" class="label" id="circle-minradiuskm">
            <abbr title="Minimum">Inner</abbr> Radius (km) Optional
          </label>
          <input type="number" step="any" name="minradiuskm" id="minradiuskm"
              min="0" max="20001.6"
              aria-labelledby="region region-circle circle-minradiuskm"/>
        </li>
        <li>
          <label for="maxradiuskm" class="label" id="circle-maxradiuskm">
            <abbr title="Maximum">Outer</abbr> Radius (km)
          </label>
          <input type="number" step="any" name="maxradiuskm" id="maxradiuskm"
              min="0" max="20001.6"
              aria-labelledby="region region-circle circle-maxradiuskm"/>
        </li>
      </ul>
    </div>
  </section>
</div>

<div class="two-of-five column">
  <section aria-labelledby="azgap">
    <h3 id="azgap" class="label">Azimuthal Gap</h3>

    <ul class="vertical no-style two-up">
      <li>
        <label for="mingap" class="label" id="azgap-mingap">Minimum</label>
        <input type="number" step="any" name="mingap" id="mingap"
            min="0" max="360" step="0.01" aria-labelledby="azgap azgap-mingap"/>
      </li>
      <li>
        <label for="maxgap" class="label" id="azgap-maxgap">Maximum</label>
        <input type="number" step="any" name="maxgap" id="maxgap"
            min="0" max="360" step="0.01" aria-labelledby="azgap azgap-maxgap"/>
      </li>
    </ul>
  </section>

  <section aria-labelledby="reviewstatus">
    <h3 id="reviewstatus" class="label">Review Status</h3>

    <ul class="no-style reviewstatus-list">
      <li>
        <input id="reviewstatus-any" type="radio" name="reviewstatus"
            value="" checked="checked" aria-labelledby="reviewstatus"/>
        <label for="reviewstatus-any" class="label-checkbox">
          Any
        </label>
      </li>
      <li>
        <input id="reviewstatus-automatic" type="radio" name="reviewstatus"
            value="automatic" aria-labelledby="reviewstatus"/>
        <label for="reviewstatus-automatic" class="label-checkbox">
          Automatic
        </label>
      </li>
      <li>
        <input id="reviewstatus-reviewed" type="radio" name="reviewstatus"
            value="reviewed" aria-labelledby="reviewstatus"/>
        <label for="reviewstatus-reviewed" class="label-checkbox">
          Reviewed
        </label>
      </li>
    </ul>
  </section>
</div>

<!-- TODO :: Conform magnitude type to FDSN spec
<section class="toggle toggle-visible" aria-labelledby="magtype">
  <h3 id="magtype" class="label toggle-control">Magnitude Type</h3>
  <input type="text" name="magntiudetype" id="magnitudetype"
      aria-labelledby="magtype"/>
</section>
-->

<div class="two-of-five column">
  <section class="toggle toggle-visible" aria-labelledby="evttype">
    <h3 id="evttype" class="label toggle-control">Event Type</h3>
    <input type="text" name="eventtype" id="eventtype"
        aria-labelledby="evttype"/>
  </section>

  <section class="toggle toggle-visible" aria-labelledby="impact">
    <h3 id="impact" class="label toggle-control">
      Impact <span class="help">(PAGER, ShakeMap, DYFI)</span>
    </h3>

    <div class="fieldset" role="group" aria-labelledby="impact-sig">
      <h4 id="impact-sig" class="label">Significance</h4>

      <ul class="vertical no-style two-up">
        <li>
          <label for="minsig" class="label" id="impact-minsig">Minimum</label>
          <input type="number" step="any" name="minsig" id="minsig" min="0"
              step="1" aria-labelledby="impact-sig impact-minsig"/>
        </li>
        <li>
          <label for="maxsig" class="label" id="impact-maxsig">Maximum</label>
          <input type="number" step="any" name="maxsig" id="maxsig" min="0"
              step="1" aria-labelledby="impact-sig impact-maxsig"/>
        </li>
      </ul>
    </div>

    <div class="fieldset" role="group" aria-labelledby="impact-pager">
      <h4 id="impact-pager" class="label">PAGER Alert Level</h4>
      <ul class="no-style alertlevel-list">
        <li>
          <input id="alertlevel-all" type="radio" name="alertlevel"
              value="" checked="checked" aria-labelledby="impact-pager"/>
          <label for="alertlevel-all" class="label-checkbox">
            Any
          </label>
        </li>
        <li>
          <input id="alertlevel-green" type="radio" name="alertlevel"
              value="green" aria-labelledby="impact-pager"/>
          <label for="alertlevel-green" class="label-checkbox">
            Green
          </label>
        </li>
        <li>
          <input id="alertlevel-yellow" type="radio" name="alertlevel"
              value="yellow" aria-labelledby="impact-pager"/>
          <label for="alertlevel-yellow" class="label-checkbox">
            Yellow
          </label>
        </li>
        <li>
          <input id="alertlevel-orange" type="radio" name="alertlevel"
              value="orange" aria-labelledby="impact-pager"/>
          <label for="alertlevel-orange" class="label-checkbox">
            Orange
          </label>
        </li>
        <li>
          <input id="alertlevel-red" type="radio" name="alertlevel"
              value="red" aria-labelledby="impact-pager"/>
          <label for="alertlevel-red" class="label-checkbox">
            Red
          </label>
        </li>
      </ul>
    </div>

    <div class="fieldset" role="group" aria-labelledby="impact-shakemap">
      <h4 id="impact-shakemap" class="label">
        ShakeMap <abbr title="Modified Mercalli Intensity">MMI</abbr>
      </h4>

      <p class="help">Decimal numbers</p>

      <ul class="vertical no-style two-up">
        <li>
          <label for="minmmi" class="label" id="impact-minmmi">Minimum</label>
          <input type="number" step="any" name="minmmi" id="minmmi"
              min="0" max="12" step="0.1"
              aria-labelledby="impact-shakemap impact-minmmi"/>
        </li>
        <li>
          <label for="maxmmi" class="label" id="impact-maxmmi">Maximum</label>
          <input type="number" step="any" name="maxmmi" id="maxmmi"
              min="0" max="12" step="0.1"
              aria-labelledby="impact-shakemap impact-maxmmi"/>
        </li>
      </ul>
    </div>

    <div class="fieldset" role="group" aria-labelledby="impact-dyfi">
      <h4 id="impact-dyfi" class="label">
        Did You Feel It <abbr title="Community Determined Intensity">CDI</abbr>
      </h4>

      <p class="help">Decimal numbers</p>

      <ul class="vertical no-style two-up">
        <li>
          <label for="mincdi" class="label" id="impact-mincdi">Minimum</label>
          <input type="number" step="any" name="mincdi" id="mincdi"
              min="0" max="12" step="0.1"
              aria-labelledby="impact-dyfi impact-mincdi"/>
        </li>
        <li>
          <label for="maxcdi" class="label" id="impact-maxcdi">Maximum</label>
          <input type="number" step="any" name="maxcdi" id="maxcdi"
              min="0" max="12" step="0.1"
              aria-labelledby="impact-dyfi impact-mincdi"/>
        </li>
      </ul>
    </div>

    <div class="fieldset" role="group" aria-labelledby="impact-numresp">
      <h4 id="impact-numresp" class="label">Number of DYFI? Responses</h4>

      <ul class="vertical no-style two-up">
        <li>
          <label for="minfelt" class="label" id="impact-minfelt">Minimum</label>
          <input type="number" step="any" name="minfelt" id="minfelt" min="0"
              step="1" aria-labelledby="impact-numresp impact-minfelt"/>
        </li>
      </ul>
    </div>
  </section>

  <section class="toggle toggle-visible" aria-labelledby="cat">
    <h3 id="cat" class="label toggle-control">Catalog</h3>
    <input type="text" aria-labelledby="cat" name="catalog" id="catalog"/>
  </section>

  <section class="toggle toggle-visible" aria-labelledby="contrib">
    <h3 id="contrib" class="label toggle-control">Contributor</h3>
    <input type="text" aria-labelledby="contrib" name="contributor"
        id="contributor"/>
  </section>

  <section class="toggle toggle-visible" aria-labelledby="prodtype">
    <h3 id="prodtype" class="label toggle-control">Product Type</h3>
    <input type="text" aria-labelledby="prodtype" name="producttype"
        id="producttype"/>
  </section>
</div>