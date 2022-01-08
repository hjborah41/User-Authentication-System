<?php
$servername = "localhost";
$username = "root";
$password = "";

$databasename = "our_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $cmd = "insert into student_details(ROLL_NO,NAME,PASSWORD) values(:tROLL_NO,:tNAME,:tPASSWORD)";
    $template = $conn->prepare($cmd);

    //Data Entry
    $template->execute([":tROLL_NO" => "A1", ":tNAME" => "X", ":tPASSWORD" => "1"]);
    $template->execute([":tROLL_NO" => "A2", ":tNAME" => "Y", ":tPASSWORD" => "2"]);
    $template->execute([":tROLL_NO" => "A3", ":tNAME" => "Z", ":tPASSWORD" => "3"]);
    $template->execute([":tROLL_NO" => "A4", ":tNAME" => "V", ":tPASSWORD" => "4"]);
    $template->execute([":tROLL_NO" => "A5", ":tNAME" => "W", ":tPASSWORD" => "5"]);  
} catch (PDOException $e) {
    echo $e->getMessage();
}
