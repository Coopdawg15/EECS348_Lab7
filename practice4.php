<!DOCTYPE html>
<html>
<head>
<title>Multiplication Table</title>
</head>
<body>
<?php
if(isset($_POST['number'])){
$size = $_POST['number'];
echo "<h2>Multiplication Table of $size</h2>";
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";
for($i = 1; $i <= $size; $i++){
echo "<th>$i</th>";
}
echo "</tr>";
for($i = 1; $i <= $size; $i++){
echo "<tr><th>$i</th>";
for($j = 1; $j <= $size; $j++){
$result = $i * $j;
echo "<td>$result</td>";
}
echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>

