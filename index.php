<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align: center;
        }
        .number{
            
            text-align: center;
            font-size: 24px;
            margin: auto;
            padding: 16px;
            
            
        }
        .test{
            margin: auto;
            
            padding-bottom: 128px;
            
        }
    </style>
</head>
<body>
    <form method="post" action="index.php">
        <input type="number" name="num" placeholder="Type a number to generate an math table"> </input>
        <input type="submit" value="Generate math table">
        <br>
        <div class="test">
        <?php 
            $num = $_POST["num"] ?? null;
            if($num != null){
                for($i=0;$i <= 10; $i++){
                    echo "<p class='number'> $num * $i =  ". ($i * $num); echo "</p>";
                   
                }
        }
        ?>
        </div>
    </form>
</body>
</html>