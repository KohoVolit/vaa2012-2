	<div data-role="footer" data-theme="{if isset($partner)}{$partner['swatch_footer']}{else}f{/if}">  
	  <div data-role="navbar" class="ui-body-c">
	    <ul>
	      <li><span class="computer"><a href="/support">{$text.dms_1}: {$text.dms_2} {$text.dms_code} {$text.dms_mobile_3} {$text.dms_code_year} {$text.dms_mobile_explanation}</a></span>
	      <span class="mobile"><a href="#dms-mobile" class="mobile" data-rel="popup">{$text.dms_mobile_2}: {$text.dms_code} {$text.dms_mobile_3} {$text.dms_code_year}</a></span>
	      </li>
	    </ul>
	  </div>
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  {if isset($partner) and ($partner['name'] != 'default')}<img src="/image/{$partner['name']}.png">{/if}
		  </div>
		 </div>
	  </div>
	</div>
