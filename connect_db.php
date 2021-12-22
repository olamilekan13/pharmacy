<?php

// error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
// $con=mysqli_connect('localhost','root','')or die("cannot connect to server");
// //mysqli_connect($mysql_hostname , $mysql_username
// $mysqli -> select_db('pharmacy')or die("cannot connect to database");
// // $mysqli->select_db('pharmacy', $con);
// // if ($result = $mysqli->query("SELECT DATABASE()")) {
// //   // success
// // } else {
// //   // error
// // }



// /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $mysqli = new mysqli("localhost", "root", "", "pharmacy");
 
// // Check connection
// if($mysqli === false){
//     die("ERROR: Could not connect. " . $mysqli->connect_error);
// }
 
// // Print host information
// echo "Connect Successfully. Host info: " . $mysqli->host_info;


//using pdo to connect

// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=pharmacy', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $statement = $pdo->prepare('SELECT * FROM admin ORDER BY username DESC');
// $statement->execute();
// $products = $statement->fetchAll(PDO::FETCH_ASSOC);
// // echo htmlentities($statement['_message']);

$con = mysqli_connect('localhost', 'root', '', 'pharmacy');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
 }
//  echo "Connected successfully";
 



// echo '<pre>';
// var_dump($con);
// echo '</pre>' ;
// exit;

?>