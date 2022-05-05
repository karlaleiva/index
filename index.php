<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET"action="index.php">
        <p>A:<input type ="tex" name="a"></p>
        <p>B:<input type ="tex" name="b"></p>
        <p>C:<input type ="tex" name="c"></p>
        <p><input type ="submit" value="sumar"></p>
    </form>
    
    <?php
    if(isset($_GET [ "a"]))
    {
        $a=$_GET [ "a"];
        $b=$_GET [ "b"];
        $c=$_GET [ "c"];
        $s=($a+$b+$c)/3;

        echo "<p>La suma es $s </P>";

        
    }

    

    ?>

</body>
</html>

