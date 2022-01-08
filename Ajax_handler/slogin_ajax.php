<?php

  $rootpath = $_SERVER["DOCUMENT_ROOT"];
  require_once $rootpath . "/UserAuthenticationSystem/DB_handler/DB_StudentDetails.php";
  $dbo = new DB_StudentDetails();

  $action = "";

  if(isset($_POST["action"]))
    $action = $_POST["action"];
  
  if($action == "loginHandler")
  {
    $rn = $_POST["rollno"];
    $pw = $_POST["password"];

    $id = $dbo->getID($rn,$pw);

    if($id != -1)
    {
      session_start();
      $_SESSION["student_id"] = $id;

      $status = "OK";
    }
    else
    {
      $status = "ERROR";
      
      session_start();
      session_destroy();

    }

    $rv = array("status"=>$status,"rollno"=>$rn,"password"=>$pw);
    echo json_encode($rv);

    exit;
  }


?>
