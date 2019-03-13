<?php
/*
    Name:  Wei Minn
    Email: wei.minn.2018@sis.smu.edu.sg
*/

    if(isset($_GET["action"])) {
        if($_GET["action"]=='Encrypt' &&  $_GET["message"]!='') {
            $message = $_GET["message"];
            $key = $_GET["key"];
            $encrypted_chunks = encrypt($message,$key); 
            
            foreach($encrypted_chunks as $encrypted_chunk) {
                echo $encrypted_chunk . "<br/>";
            }    
        }
        if($_GET["action"]=='Decrypt') {
            $encrypted_chunks = [];
            $encrypted_chunks[] = $_GET['chunk1'];
            $encrypted_chunks[] = $_GET['chunk2'];
            $encrypted_chunks[] = $_GET['chunk3'];
            $encrypted_chunks[] = $_GET['chunk4'];
            $key = $_GET["key"];

            echo decrypt($encrypted_chunks,$key);
        }  
    }

    ########### Helper Functions ########

    // (Optional) Add any additional functions or code here if needed

    ########### Part 1 ###########

    function encrypt_a_chunk($chunk, $key) {
       // Add your code here    
        $arr_chunk = str_split($chunk);
        $arr_key = str_split($key);

        $diff = sizeof($arr_chunk) - sizeof($arr_key);

        for ($i = 0; $i < $diff; $i++){
            $arr_key[] = '*';
        }

        $chunk = implode( $arr_chunk);
        $key = implode($arr_key);

        $cipher = $chunk ^ $key;
        $encoded = base64_encode($cipher);
        
        return $encoded;
    }

    // return an array of encrypted chunks
    function encrypt($message, $key){
        $encrypted_chunks = [];

        // Add your code here

        $sentences = explode('.', $message);
        foreach($sentences as $sentence){
            $encrypted_chunks[] = encrypt_a_chunk($sentence, $key);
        }

        return $encrypted_chunks;
    }

    ########### Part 2 ###########

    function decrypt_a_chunk($encrypted_chunk, $key) {
        // Add your code here
        $arr_chunk = str_split($encrypted_chunk);
        $arr_key = str_split($key);

        $diff = sizeof($arr_chunk) - sizeof($arr_key);

        for ($i = 0; $i < $diff; $i++){
            $arr_key[] = '*';
        }

        $chunk = implode($arr_chunk);
        $key = implode( $arr_key);

        $message = base64_decode($chunk) ^ $key;
        
        return $message;
    }

     // return the decrypted message
    function decrypt($encrypted_chunks, $key){
        $message = "";

        // Add your code here

        foreach($encrypted_chunks as $chunk){
            $message .= decrypt_a_chunk($chunk, $key);
        }

        return $message;
        
    }
?>
