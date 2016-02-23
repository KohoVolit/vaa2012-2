
{$parties = ['Konzervativcé', 'Labouristé', 'Liberální demokraté', 'UKIP', 'Zelení', 'Skotská nár.strana', 'Plaid Cymru']}
{$slugs = ['cp','lp','ld','ukip','gp','snp','pc']}

    <div class="item" id="item-abwho">
        <div class="container">
            <div class="carousel-caption center-block">
                <h2>Mimochodom, co myslíte, kdo Vám vyjde nejlépe?</h2>
                <div data-toggle="buttons" id="ab-table">
                    <table style="width:100%">
                        <tbody>
                          {for $i=0 to 6}
                            {if !($i % 2)}<tr id="abwho-row-{$i}">{/if}
                              <td class="abwho-td" style="width:50%">
                                <label class="abwho-button btn btn-lg btn-primary" for="abwho" id="abwho-{$i}-{$slugs[$i]}" style="width:100%">
                                  <input type="radio" name="abwho" id="abwho-{$slugs[$i]}" value="{$slugs[$i]}"/> <img src="../image/1x1.png" class="sprite sprite-{$slugs[$i]} img-rounded media-object pull-left" alt="{$parties[$i]}" > {$parties[$i]}
                                </label>
                              </td>
                            {if $i % 2}</tr>{/if}
                          {/for}
                        </tbody>
                    </table>
                    <input type="hidden" name="ab-who-val" id="ab-who-val" value="" />
                    <input type="hidden" name="ab-who" value="1" />
                </div> <!-- /buttons -->
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
