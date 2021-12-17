<?php
function getdb(){
$servername = "sql308.epizy.com";
$username = "epiz_30612038";
$password = "eEexOcBxXW";
$db = "epiz_30612038_qwerty";
try {
   
    $conn = mysqli_connect(sql308.epizy.com, epiz_30612038, eEexOcBxXW, epiz_30612038_qwerty);
    echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>