 <!--  
    Name: Wei Minn
    Email: wei.minn.2018@sis.smu.edu.sg
 -->

 <?php

    // Write your codes in the following
    if(isset($_POST['name']) && isset($_POST['email'])){
      $name = $_POST['name'];
      $email = $_POST['email'];

      echo "
      <p>Dear $name, Thank you for subscribing to SIS Newsletter!</p>
      ";
    }

?>