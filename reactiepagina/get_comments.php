<?php
// connect to the database (replace host, username, password and dbname with your own values)
$conn = mysqli_connect('host', 'username', 'password', 'dbname');

if (!$conn) {
 die('Connection failed' . mysqli_connect_error());
} 

// select all comments from the "comments" table in the database
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);
$comments = array();

if (mysqli_num_rows($result) > 0 ) {  
 while($row=mysqli_fetch_assoc($result)) {    
     array_push( $comments,$row );
 }   
}

header('Content-Type: application/json');
echo json_encode($comments);
?>