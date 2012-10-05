	<div data-role="footer" data-theme="{if isset($partner)}$partner['swatch_bar']{else}f{/if}">  
	  <div class="footerContainer"> 
		<div class="right computer">{if isset($partner) and ($partner['name'] == 'default')}... další projekt od{/if}
		  {if isset($partner) and ($partner['name'] != 'default')}<img src="/image/{$partner['name']}.png">{/if}
			<a href="http://kohovolit.eu">
				<img src="http://test.kohovolit.eu/images/kohovolit-footer.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		 </div>
	  </div>
	</div>
