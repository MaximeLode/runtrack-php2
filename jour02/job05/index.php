<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    for ($i = 2; $i <= 1000; $i++) {
        $ii = true;
    for ($n = 2; $n <= sqrt($i); $n++) 
        if ($i % $n == 0) {
            $ii = false; 
            break;
        }
        if ($ii) {
        echo $i. "<br />";
    }
    }
    
    
    
    
    ?>
</body>
</html>