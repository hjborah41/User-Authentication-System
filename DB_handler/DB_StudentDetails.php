<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];

require_once $rootpath . "/UserAuthenticationSystem/DB_handler/DB_Connection.php";

class DB_StudentDetails
{
    public function getID($rn,$pw)
    {
        //connect with the DB and return the ID column from the student_details table where the rn and pw is a match
        
        $id = "-1";
        
        $dbo = new DB_Connection();
        $cmd = "select ID from student_details where ROLL_NO = :tROLL_NO and PASSWORD = :tPASSWORD";
        $template = ($dbo->conn)->prepare($cmd);

        $template->execute([":tROLL_NO"=>"$rn","tPASSWORD"=>"$pw"]);

        if($template->rowCount() > 0)
        {
            $ret_table = $template->fetchAll(PDO::FETCH_ASSOC);
            $id = $ret_table[0]["ID"];
        }

        return $id;
    }
}

?>