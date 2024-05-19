<?php 
 
include 'db_connt.php';

if (isset($_POST['donation']) )
{
  $name = $_POST["name"];
  $amount = $_POST["amount"];

  $sql = "INSERT INTO donation (donor_name, amount, date)
  VALUES ('$name', '$amount', NOW())"; 

  if ($conn->query($sql) === TRUE) {
    header("Location: mainpage.php"); 
    exit(); 
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
