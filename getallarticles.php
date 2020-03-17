<?php

$filepath = "Artikler.json";
$response = file_get_contents($filepath);
$response = json_decode($response, true);

echo '<table>';
echo '<tr>';
echo '<td><b>Forfatter</b></td>';
echo '<td><b>Overskrift</b></td>';
echo '<td><b>Tekst</b></td>';
echo '<td><b>Årstal</b></td>';
echo '</tr>';

foreach($response["Artikler"] as $row)
{
	echo '<tr>';
	echo '<td>' . $row["Forfatter"] . '</td>';
	echo '<td>' . $row["Overskrift"] . '</td>';
	echo '<td>' . $row["Tekst"] . '</td>';
	echo '<td>' . $row["Årstal"] . '</td>';
	echo '</tr>';
}
echo '</table>';

?>
