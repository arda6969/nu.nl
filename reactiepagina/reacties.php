<?php

$dbhost = "localhost";
$dbname = "netland";
$charset = "utf8";
$dbuser = "root";
$dbpass = "";

try {
    $db  = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
} catch (PDOException $err) {
    echo "Databse connection problem. " . $err->getMessage();
    exit();
}

try {
    $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$username,$password);
} catch(PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}

if(isset($_POST['comment'])) {

// prepare statement for inserting comment into database
$sql_insert_comment = "INSERT INTO comments (comment_text) VALUES (:comment)";

$stmt_insert_comment= $dbcon ->prepare($sql_insert_comment);

// bind parameters and execute the query

$stmt_insert_comment->bindParam(':comment', $_POST['comment']);

if ($stmt_insert_comment->execute()) {

// if comment inserted successfully, fetch all comments and display them

$sql_fetch_comments="SELECT * FROM comments";

$stmt_fetch_comments=$dbcon ->prepare($sql_fetch_comments);

if ($stmt_fetch_comments->execute()) {

while ($row=$stmt_fetch_comments->fetch(PDO::FETCH_ASSOC)) {
          echo "<li>".$row['comment_text']."</li>";
        }
      } else {
        echo "Error fetching comments";
      }

} else {
echo "Error inserting comment";
}
}