<?php
// key: vegetable,  value: quantity
$vegQtyArr = [ 
    'cabbage'   => 3, 
    'lettuce'   => 3,
    'spinach'   => 2,
];

// get submitted value of form field 'vegetable'
$veg = $_GET['vegetable'];
?>

<html>
<body>
    <?php
        echo "
            <h1>$veg</h1>
        ";

        if(array_key_exists($veg, $vegQtyArr)){
            $n = $vegQtyArr[$veg];
            for($i = 0; $i<$n; $i++){
                echo '<img src="./img/' . $veg . '">';
            }
        }
        

    ?>
</body>
</html>