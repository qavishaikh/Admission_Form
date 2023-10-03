<?php 
define('DBNAME','admissionform');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');

try{
    $db= new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Your Page is Connected Successfully with Database...";
} catch(PDOException $e) {
    echo "Issue -> Connection failled: " . $e->getMessage();
}
?>