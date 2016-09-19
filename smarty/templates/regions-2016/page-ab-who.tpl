    <div class="item" id="item-who">
        <div class="container">
            <div class="carousel-caption center-block">
                <h2>Koho zvažujete, že budete volit?</h2>
                <h3>Můžete vybrat více stran</h3>
                <h5>Výběr neovlivní výsledky volební kalkulačky, vybrané Vám zvýrazníme</h5>
                <div data-toggle="buttons" id="ab-table">
                    <table class="table">
                        <tbody>
                          {$i=0}
                          {foreach $candidates as $candidate}
                              <tr id="who-row-{$candidate['id']}" class="who-row">
                                <td class="weightsel-td">
                                  <label class="weightsel-button btn btn-lg btn-block" for="who-{$candidate['id']}" id="label-who-{$candidate['id']}">
                                    <input type="checkbox" name="who[]" id="who-{$candidate['id']}" value="{$candidate['id']}"/> <strong>{$candidate['abbreviation']}</strong> <small><span class="hidden-xs">( {$candidate['name']|truncate:75:"..."})</span></small>
                                  </label>
                                </td>
                              </tr>
                          {/foreach}
                        </tbody>
                    </table>
                    <!-- <input type="hidden" name="ab-who-val" id="ab-who-val" value="" /> -->
                    {*<input type="hidden" name="ab-who" value="1" />*}
                </div> <!-- /buttons -->

                <p>
                  <button class="btn btn-default btn-lg wide-button button-last" type="submit" id="who-submit">{$text['page_important_results']} <i class="fa fa-arrow-right"></i></button>
                </p>
            </div>
        </div>
    </div>
    <script>
    /*$('document').ready(function() {
        $(".abwho-td").click(function() {
            $('#carousel').carousel('next');
        });
    });*/
    </script>
