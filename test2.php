<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .container{
            max-width: 70%;
            background-color: blue;
            margin: 100px;
            padding: 20px;
    }
</style>
<body>
    <div class="container">
        this is a container
        </div>
        <?php
        echo "<br><br>";
         $a=20;
         if($a==20)
         {
         echo "the value is 20";
         }
         function tr()
         {
            echo "<br>this is function";
         }
         tr();
         $str="this is length";
         $len=strlen($str);
         echo "<br>this is len".$len;
        ?>

   
    
</body>
</html>