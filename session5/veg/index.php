<?php
// key: vegetable,  value: type
$vegTypeArr = [ 
    'asparagus' => 'stem',
    'cabbage'   => 'leafy', 
    'celery'    => 'stem',
    'lettuce'   => 'leafy', 
    'potato'    => 'root', 
    'spinach'   => 'leafy',
    'yam'       => 'root', 
];
?>

<html>
<body>
    <form action='process.php'>
        Leafy Vegetable&nbsp;
        
        <select name="vegetable">
        <?php
            foreach($vegTypeArr as $veg => $type){
                echo '<option value="'. $veg .'">'. $veg . '</option>';
            }
        ?>
        </select>
        &nbsp;

        <input type='submit' />
    </form>
</body>
</html>