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
