# O projektu

Volební kalkulačka<sup><a href="https://isdv.upv.cz/webapp/resdb.print_detail.det?pspis=OZ/542865&amp;plang=CS" target="_blank">®</a></sup> (anglicky voting advice application) je jednoduchý, zpravidla internetový test porovnávající Vaše politické postoje s postoji politických stran či osob (zákonodárců, kandidátů ve volbách atd.). Více o historii volebních kalkulaček a o úspěšných příkladech ze světa se můžete dočíst na [Wikipedii](http://cs.wikipedia.org/wiki/Volebn%C3%AD_kalkula%C4%8Dka).

Českou a [slovenskou](https://volebnakalkulacka.sk) Volební kalkulačku vyvíjí a provozuje spolek [KohoVolit.eu](http://kohovolit.eu) již od roku 2006. Celkem jsme vytvořili již přes 30 volebních kalkulaček pro všechny druhy voleb (evropské, prezidentské, parlamentní, regionální i komunální). Pravidelně také pomáháme tvožit kalkulačky v [Maďarsku](https://voksmonitor.hu) a v dalších zemích. Zatím nejúspěšnější kalkulačku před prvním kolem prezidentských voleb v ČR v roce 2018 použil více než 1.25 milionu voličů.

[KohoVolit.eu](http://kohovolit.eu) vytváří dva druhy kalkulaček: **Inventura hlasování** porovnává Vaše odpovědi s reálnými hlasováními v zákonodárném sboru za uplynulé funkční období. **Volební kalkulačka** (názorový test) porovnává Vaše odpovědi s odpověďmi, které nám poskytly samotné politické strany či kandidáti ve volbách. Pokud některá strana či kandidát v názorovém testu chybí, je to vždy proto, že jsme neobdrželi odpovědi.

Použitá loga politických stran a fotografie osob pochází z webových stránek politických stran, z Wikipedie nebo z webových stránek příslušeného zastupitelského sboru.

## Výběr témat a formulace otázek

Obzvláště v názorovém testu ("volební kalkulačce") je výběr a formulace otázek klíčovým místem tvorby kalkulačky. Z důvodu tranpsarentnosti zde uvádíme náš dokument, kterým se při tvorbě otázek řídíme: [Metodika výběru témat a tvorby otázek](https://docs.google.com/document/d/1JRCRWKQKCHnTCPfzSeeHsSAdEkHMga-vwpppYThA1j4/pub)

V naprosté většině případů názorového testu ("volební kalkulačky") stranám nebo kandidátům posíláme více otázek, než kolik se použije ve výsledné kalkulačce. Obvykle se vyřadí otázky, kde je u kandidátů shoda (tj. takové otázky nerozdělují kandidáty). Potom otázky, které se nepovedly (kandidáti správně upozorní na nějaký problém s otázkou, příp. na něj přijdeme sami až po odeslání), a otázky, které jsou podobné jako jiné.

## Popis výpočtu
Pro maximální transparentnost a ověřitelnost spočtených výsledků zde uvádíme, jak se Vaše shoda se stranami či osobami počítá, a také proč se počítá zrovna takhle.

### Názorový test ("volební kalkulačka")
Otázka, u níž neodpovíte „Ano“ či „Ne“, se do výpočtu nezahrnuje. Pokud na otázku odpovíte „Ano“, strany či kandidáti, kteří rovněž odpověděli „Ano“, získávají jeden bod. Strany či kandidáti, kteří odpověděli „Ne“, jeden bod ztrácejí. Pokud odpovíte „Ne“, získávají jeden bod strany či kandidáti, kteří rovněž odpověděli „Ne“. Ti, kteří odpověděli „Ano“, naopak jeden bod ztrácejí. Strany či kandidáti, kteří na otázku neodpověděli „Ano“ ani „Ne“, nezískávají ani neztrácí žádné body.

Následně se každé straně či kandidátovi sečtou body za všechny otázky, u nichž jste odpověděli „Ano“ či „Ne“, a výsledek se vydělí počtem takových otázek. Tím je získána shoda v rozmezí -100 % až 100 %. Pro větší názornost se shoda převádí na rozmezí 0 % až 100 % tak, že se vydělí dvěma a přičte se k ní 50 % (u kalkulaček od poloviny roku 2013).

### Inventura hlasování
Hlasování, u kterého nehlasujete „Ano“ ani „Ne“, se do výpočtu nezahrnuje. Pokud hlasujete „Ano“, zákonodárci, kteří hlasovali pro návrh, získávají jeden bod. Zákonodárci, kteří hlasovali proti návrhu, zdrželi se, nebo byli přihlášeni, ale nestiskli žádné tlačítko, jeden bod ztrácejí. Pokud hlasujete „Ne“, získávají jeden bod zákonodárci, kteří hlasovali proti návrhu, zdrželi se, nebo byli přihlášeni, ale nestiskli žádné tlačítko. Ti, kteří hlasovali pro návrh, naopak jeden bod ztrácejí. Zákonodárci, kteří nebyli v době daného hlasování přihlášeni, nebo nebyli členy Parlamentu, nezískávají ani neztrácí žádné body.

Následně se každému zákonodárci sečtou body za všechna hlasování, u nichž jste hlasovali „Ano“ či „Ne“, a výsledek se vydělí počtem takových hlasování. Tím je získána shoda v rozmezí -100 % až 100 %. Pro větší názornost se shoda převádí na rozmezí 0 % až 100 % tak, že se vydělí dvěma a přičte se k ní 50 % (u kalkulaček od poloviny roku 2013).

Situace, kdy se zákonodárce zdržel nebo nestiskl žádné tlačítko, má pro výsledek hlasování přesně stejný význam jako hlasování proti návrhu. Zákonodárce totiž nehlasuje pro návrh, a přitom se jeho hlas započítává do kvora, které je pro přijetí návrhu zapotřebí. Proto tyto situace při výpočtu shody považujeme za hlasování proti návrhu.


### Důležitost otázek a hlasování
U každé otázky či hlasování máte možnost nastavit, jakou pro Vás má shoda důležitost, tedy váhu s jakou se má zahrnout do celkového součtu shody. Každé ze dvou úrovní důležitosti (normální, vysoká) odpovídá jistá váha a celková shoda je pak váženým průměrem shody v jednotlivých otázkách či hlasováních. Ve skutečnosti se tedy místo jednoho bodu ke shodě přičte, resp. odečte váha příslušné otázky či hlasování a na konci se dělí nikoli počtem otázek či hlasování, ale součtem absolutních hodnot jejich vah. Nastavení vah je takové, že vysoká důležitost má oproti normální důležitosti dvojnásobnou váhu.
Zobrazení výsledné shody

Může se stát, že Vám vyjde stejná shoda se dvěma nebo více stranami či osobami. V tom případě je pořadí stran či osob při zobrazení výsledné shody určeno **náhodně**.

## Kontakt
Michal Škop, +420 735 518 529, email: jmeno.prijmeni[zavinac]kohovolit.eu