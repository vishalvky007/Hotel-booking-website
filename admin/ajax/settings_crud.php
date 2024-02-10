<?php

  require("../include/db_config.php");
  require("../include/essentials.php");
  adminLogin();

  if(isset($_POST['get_general']))
  {
    $q = "SELECT * FROM `settings` WHERE `sr_no` = ?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
  }

?>