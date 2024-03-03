<?php
// varl url 
$base_url = 'http://localhost/boxshop';

// var database
$host = 'localhost';
$user = 'root';
$password = '1234';
$name = 'boxshop';


// conenct db
$conn = mysqli_connect($host,$user,$password,$name) or die ('connection failed');

?>