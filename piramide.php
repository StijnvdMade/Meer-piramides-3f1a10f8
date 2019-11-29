<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 3px solid black;
}
.zwart {
    background-color:black;
}
.wit {
    background-color:white;
}
</style>
</head>
<body>

<table>
<?php
function zwartvakje(){
    echo "<td class='zwart'></td>";
}
function witvakje() {
    echo "<td class='wit'></td>";
}

echo "<tr>";
for ($i = 0; $i < 10; $i++) {   
    echo "<tr>" . str_repeat("<td></td>", $i) . "</tr>" ;
}


?>
</table>

</body>
</html>