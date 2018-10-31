<?php echo '
<section id="filter_options">
	<header>
		<h3>Resultaten verfijnen</h3>
		<button id="close_filter_options"></button>
	</header>
	<form>
	  <fieldset>
		<legend>Duratie</legend>
		<span class="checkbox_label">
			<input id="5_10_minutes" type="checkbox" name="5_10_minutes" value="5_10_minutes" required>
			<label for="5_10_minutes">5 - 10 minuten</label>
		</span>
		<span class="checkbox_label">
			<input id="10_20_minutes" type="checkbox" name="10_20_minutes" value="10_20_minutes" required>
			<label for="10_20_minutes">10 - 20 minuten</label>
		</span>
		<span class="checkbox_label">
			<input id="plus_20_minutes" type="checkbox" name="plus_20_minutes" value="plus_20_minutes" required> 
			<label for="plus_20_minutes"> 20 minuten</label>
		</span>
	  </fieldset>

	  <fieldset>
		<legend>Soort</legend>
		<span class="checkbox_label">
			<input id="dichtvorm" type="checkbox" name="dichtvorm" value="dichtvorm" required> 
			<label for="dichtvorm">Dichtvorm</label>
		</span>
		<span class="checkbox_label">
			<input id="lied" type="checkbox" name="lied" value="lied" required>
			<label for="lied">Lied</label>
		</span>
		<span class="checkbox_label">
			<input id="verhaal" type="checkbox" name="verhaal" value="verhaal" required>
			<label for="verhaal">Verhaal</label>
		 </span>
	  </fieldset>

	  <fieldset>
		<legend>Thema</legend>
		<span class="checkbox_label">
			<input id="aandoening" type="checkbox" name="aandoening" value="aandoening" required>
			<label for="aandoening">Aandoening</label>
		</span>
		<span class=checkbox_label>
			<input id="fictie" type="checkbox" name="fictie" value="fictie" required>
			<label for="fictie">Fictie</label>
		</span>
		<span class="checkbox_label">
			<input id="gevoel" type="checkbox" name="gevoel" value="gevoel" required>
			<label for="gevoel">Gevoel</label>
		</span>
		<span class="checkbox_label">
			<input id="komisch" type="checkbox" name="komisch value="komisch required> 
			<label for="komisch">Komisch</label>
		</span>
		<span class="checkbox_label">
			<input id="science_fiction" type="checkbox" name="science_fiction" value="science_fiction" required> 
			<label for="science_fiction">Science-fiction</label>
		</span>
		<span class="checkbox_label">
			<input id="sport" type="checkbox" name="sport" value="sport" required>
			<label for="sport">Sport</label>
		</span>
	  </fieldset>
	  <button class="cta_blue" type="submit" value="Bekijk 38 resultaten">Bekijk 38 resultaten</button>
	  <button class="cta_grey" type="reset" value="Wis alle filters">Wis alle filters</button>
	</form>
</section>
';?>