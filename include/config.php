<?php
// Report all errors
error_reporting(E_ALL);

// Display errors on the screen
ini_set('display_errors', 1);

define("WEB_TITLE","Union Trust Alliance"); // Change Bank Name
define("WEB_URL","https://dashboard.uniontrustalliance.online"); // Change No "/" Ending splash
define("WEB_EMAIL","contact@uniontrustalliance.online"); // Change Your Website Email

$web_url = WEB_URL;
function support_plugin(){
    require_once 'support_plugin.php';
}

function dbConnect(){
    $servername = "localhost";
    $username = "multistream6_Union_Trust_Alliance";//DATABASE USERNAME
    $password = "000000";//DATABASE PASSWORD
    $database = "multistream6_Union_Trust_Alliance";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}
