<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="data">
        <input type="submit"  name="crypter">
    </form>

    <form action="" method="post">
        <input type="text" name="data">
        <input type="submit"  name="decrypter">
    </form>
    <?php

  
   

    if(isset($_POST['crypter'])){
        $res = ''; 
        $val = $_POST['data'];
        $length = strlen($val);

        for ($i = 0; $i < $length; $i++) {
            $char = $val[$i];
            $res .= chr(ord($char) + 1); 
        }

        echo $res;
    }

    if(isset($_POST['decrypter'])){
        $res = ''; 
        $val = $_POST['data'];
        $length = strlen($val);

        for ($i = 0; $i < $length; $i++) {
            $char = $val[$i];
            $res .= chr(ord($char) - 1); 
        }
       echo $res;
    }
    ?>
</body>
</html>
