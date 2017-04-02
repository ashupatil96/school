<?php
   session_start();
   unset($_SESSION["id"]);
   unset($_SESSION["password"]);
   header("refresh:1;url=logIn.php"); 

?>