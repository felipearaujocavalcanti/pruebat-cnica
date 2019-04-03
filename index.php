<html>
<body>
<form action="index.php" method="get">
<input type="submit" value="Generar">
</form>

<?php

$random = range(1, 30);
shuffle($random);
reset($random);

foreach ($random as $valor) {
echo $valor . "<br/>";
}

?>

</body>
</html>


