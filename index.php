<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $string = "aabbckkkml";
    $string2 = "aaaabsdfbhckkhfdkml";
    foreach (count_chars($string, 1) as $i => $val)
    {
        echo chr($i).$val ; 
    }
?>

<br>

<?php
    $string2 = "aaaabsdfbhckkhfdkml";
    foreach (count_chars($string2, 1) as $i => $val)
    {
        echo chr($i).$val ; 
    }
?>

<br>

<?php
    $numbers = [
        [1, 5, 7, 7, 9, 5], 
        [5, 2, 3, 5, 8, 1]
    ];



    

    // foreach($numbers as $data){   
    //     echo $data[0]; 
    // } 

    
?>
</body>
</html>