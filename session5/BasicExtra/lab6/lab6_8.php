<?php
    $list1 = ["John"=>12, "Kate"=>15, "Henry"=>35];
    $list2 = ["Mike"=>18, "Scott"=>20, "Joseph"=>48, "Larry"=>54];
    echo "Output:";
    var_dump(merge($list1,$list2));
    
    $list4 = ["John"=>12, "Kate"=>15, "Mike"=>18, "Scott"=>20, "Henry"=>35, "Joseph"=>48, "Larry"=>54];
    echo "Correct answer:";
    var_dump($list4);

    function merge($list1,$list2){
        # Write code here
        $_list = [];



        // while (sizeof($list1) != 0 || sizeof($list2) != 0){
            
        //     if (sizeof($list1) != 0 && sizeof($list2) == 0){
        //         while (sizeof($list1) != 0){
        //             $_list[] = reset($list1);
        //         array_splice($list1, 0, 1);
        //         }
        //     } elseif (sizeof($list1) == 0 && sizeof($list2) != 0){
        //         while (sizeof($list2) != 0){
        //             $_list[] = reset($list2);
        //         array_splice($list2, 0, 1);
        //         }
        //     }

        //     while (sizeof($list1) != 0 && sizeof($list2) != 0){
        //         if (reset($list1) > reset($list2)){
        //             $_list[] = reset($list2);
        //             array_splice($list2, 0, 1);
        //         } else {
        //             $_list[] = reset($list1);
        //             array_splice($list1, 0, 1);
        //         }
        //     }
        // }
        
        return $_list;
        # End of code
    }
?>
