<?php
// arraytotable.php
$array = [
array("Indonesia","D.K.I Jakarta", "+62"),
array("Singapura", "Singapura", "+65"),
array("Malaysia", "Kuala Lumpur", "+60"),
array("Brunei", "Bandar Seri Begawan", "+673"),
array("Tahiland", "Bangkok", "+66"),
array("Laos", "Vientiane", "+856"),
array("Filipina", "Manila", "+63"),
array("Myanmar", "Naypyidaw", "+95")
];
 
echo "<table border='1'";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>