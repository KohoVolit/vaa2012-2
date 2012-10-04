	<div data-role="footer" data-theme="{$partner['swatch_bar']}">  
	  <div class="footerContainer"> 
		<div class="right computer">{if $partner['name'] == 'default'}... další projekt od{/if}
		  {if $partner['name'] != 'default'}<img src="/image/{$partner['name']}.png">{/if}
			<a href="http://kohovolit.eu">
				<img src="http://test.kohovolit.eu/images/kohovolit-footer.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		 </div>
	  </div>
	</div>
