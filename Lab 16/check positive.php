<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = readline("Enter a number \n");

        if($num<0){
            echo $num , "is negative integer !";

        }
        else{
            echo $num , " is positive integer !";
        }
    ?>
    
</body>
</html>