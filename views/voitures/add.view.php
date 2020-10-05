<form method="post" action="index.php?controller=voitures&action=add">
<label>marque</label>
<input type="text" name="marque"> 
<br>
<label>modele</label>
<input type="text" name="modele"> 
<br>
<label>couleur</label>
<select name="couleur">
	<option value="bleu">Bleu</option>
	<option value="rouge">rouge</option>
	<option value="vert">vert</option>
</select>
<br>
<label>nombre de portes</label>
<br>
<input type="text" name="nbporte"> 

<h3>OPTIONS</h3>
<label>climatisation</label>
<input type="radio" name="clim" value=1> oui
<input type="radio" name="clim" value=0> nom
<br>
<br>
<input type="submit" value="ajouter voiture">
</form>
