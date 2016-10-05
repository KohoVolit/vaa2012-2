<form action="./" method="get" id="calc">
    <div class="item" id="item-who">
        <div class="container">
            <div class="carousel-caption center-block">
                <h1>Mezi kterými stranami vybíráte?</h1>
                <div data-toggle="buttons" id="ab-table">
                    <table class="table">
                        <tbody>
                          {$i=0}
                          {foreach $candidates as $candidate}
                              <tr id="who-row-{$candidate['id']}" class="who-row">
                                <td class="weightsel-td">
                                  <label class="weightsel-button btn btn-lg btn-block btn-{if $i%2}info{else}primary{/if}" {if !$candidate['answered']} disabled="disabled"{/if}" for="who-{$candidate['id']}" id="label-who-{$candidate['id']}">
                                    <input type="checkbox" name="who[]" id="who-{$candidate['id']}" value="{$candidate['id']}" {if !$candidate['answered']} disabled="disabled"{/if}"/> <strong>{if !$candidate['answered']}Neodpověděli: <s> {/if}{$candidate['abbreviation']}</strong> <small><span class="hidden-xs">( {$candidate['name']|truncate:75:"..."})</span></small>{if !$candidate['answered']}</s>{/if}
                                  </label>
                                </td>
                              </tr>
                              {$i = $i + 1}
                          {/foreach}
                        </tbody>
                    </table>
                    {*<input type="hidden" name="ab-who" value="1" />*}
                </div> <!-- /buttons -->

              {foreach $pparameters as $k => $p}
      	        <input type="hidden" value="{$p}" name="{$k}" id="{$k}" />
      	      {/foreach}
                <input type="hidden" name="cc" value="{$cc}" />
                <p>
                  <button class="btn btn-default btn-lg wide-button button-last" type="submit" id="who-submit">Pokračovat <i class="fa fa-arrow-right"></i></button>
                </p>
            </div>
        </div>
    </div>
</form>
<script>
/*$('document').ready(function() {
    $(".abwho-td").click(function() {
        $('#carousel').carousel('next');
    });
});*/
</script>
