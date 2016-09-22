<!-- Modal -->
<div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="registration-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" class="registration-submit"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="registration-modal-label">Registrace na Volební kalkulačce</h5>
            </div>
            <div class="modal-body">
                <p>
                    Zaregistrujte se na Volební kalkulačce:
                    <ul class="hidden-xs">
                        <li>Vždy se o nové kalkulačce dozvíte jako <strong>první</strong>!
                        <li>Registrace je <strong>zdarma</strong>.
                        <li>Dlouhodobě bojujeme za ochranu osobních údajů, Vaše údaje nikomu nedáme.
                    </ul>
                <p>
                <div class="form-group">
                    <label for="registration-email">Vaše emailová adresa:</label>
                    <input type="email" class="form-control" id="registration-email" name="regem" placeholder="jmeno@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">PSČ <small>{if $abrextext==1}(abychom Vás upozornili na Volební kalkulačky přesně pro Vás){else}(abychom Vás zbytečně neobtěžovali s kalkulačkami, které se Vás netýkají){/if}</small></label>
                    <input type="number" class="form-control" id="registration-postcode" name="regpo" placeholder="33199">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" checked="checked" id="registration-remind" name="regre"> Chci před volbami připomenout svojí shodu s kandidáty
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="registration-remind" name="regmo"> Zajímám se o politiku hodně a chci dostávat info o analýzách autorů Volební kalkulačky
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success registration-submit" data-dismiss="modal" id="registration-submit">Uložit a pokračovat</button>
            </div>
        </div>
    </div>
</div>
