	<div data-role="footer" data-theme="{if isset($partner)}{$partner['swatch_footer']}{else}f{/if}">  
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  {if isset($partner) and ($partner['name'] != 'default')}<img src="/image/{$partner['name']}.png">{/if}
		  </div>
		 </div>
	  </div>
	</div>
