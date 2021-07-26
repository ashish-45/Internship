<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "template";

  $con =   mysqli_connect($server,$user,$password,$db);

  if($con){
      ?>
        <script>
            // alert("Connection Successfull");
        </script>
      <?php
  }
  else{
    ?>
    <script>
        alert("Connection Failed");
    </script>
  <?php
  }

?>