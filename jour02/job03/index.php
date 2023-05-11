<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_" . "<br />";
    } elseif ($i <= 20) {
        echo "<i>" . $i . "</i><br />";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u><br />";
    } else {
        echo $i . "<br />";
    }
}
?>

    
</body>
</html>