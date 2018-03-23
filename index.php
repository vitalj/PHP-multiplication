<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 
<title>La table de 3</title> 
</head> 
<body> 
<?php 
// $NbrCol : le nombre de colonnes 
// $NbrLigne : le nombre de lignes 


error_reporting(E_ALL);
if(!empty($_POST))
{
echo '<pre>';
echo print_r($_POST['Chosir une table'],true);
echo '</pre><br/>
Faire un autre test : <a href="multiplication.php">Tester à nouveau</a>';
}
else
{
echo '<b>Choisir une table de mutliplication</b>';

echo '<form method="POST" action="multiplication.php">
    <input type="checkbox" name="choix[]" value="1">Table de 1<br>
    <input type="checkbox" name="choix[]" value="2">Table de 2<br>
    <input type="checkbox" name="choix[]" value="3">Table de 3<br>
    <input type="checkbox" name="choix[]" value="4">Table de 4<br>
	<input type="checkbox" name="choix[]" value="5">Table de 5<br>
	<input type="checkbox" name="choix[]" value="6">Table de 6<br>
    <input type="checkbox" name="choix[]" value="7">Table de 7<br>
    <input type="checkbox" name="choix[]" value="8">Table de 8<br>
    <input type="checkbox" name="choix[]" value="9">Table de 9<br>

    <input type="submit" value="chiffre">
    </form>';

	foreach($_POST['choix'] as $valeur)

	echo "La checkbox $valeur a été cochée<br>";



?> 
</body></html>