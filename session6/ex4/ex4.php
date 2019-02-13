<?php

    // /*
    // INSTRUCTIONS
    // ============

    // 1. Load the Person class.
    require_once './model/Person.php';

    // 2. Update the following line to create a new person ("Harry", 35);
    $harry = new Person('Kane', 4);  
    
    // 3. Update the following line to create a new person ("Mary", 27);
    $mary = new Person('Scot', 0);
    
	$another_mary = $mary;
    $harry = $mary;
    
    // 4. print the name of $harry object
    echo 'Name of Harry object: ' . $harry->getName();
    echo '<br>';

    // 5. print the name of mary object
    echo 'Name of Mary object: ' . $mary->getName();
    echo '<br>';
    
    // 6. set the name of $harry object to "Harry" 
    $harry->setName("Winks");

    // 7. print the name of $harry object
    echo 'Name of Harry object: ' . $harry->getName();
    echo '<br>';

    // 8. print the name of $mary object
    echo 'Name of Mary object: ' . $mary->getName();
    echo '<br>';
    
?>
