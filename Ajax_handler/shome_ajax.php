<?php

    $action = "";

    if (isset($_POST["action"]))
        $action = $_POST["action"];

    if($action == "handler")
    {
        session_start();

        if(isset($_SESSION["student_id"]))
            $status = "OK";
        else
            $status = "ERROR";

        session_destroy();

        $rv = array("status"=>$status);
        echo json_encode($rv);

        exit;
    }

?>
