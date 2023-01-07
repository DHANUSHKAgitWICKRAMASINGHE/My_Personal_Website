<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylep.css">
</head>
<body>
     
<?php
// $connection = mysqli_connect('localhost','root');
// mysqli_select_db($connection,"myperweb");

// $name = $_POST['name'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $message = $_POST['message'];

// $query = "INSERT INTO `con_infor`(`Name`,`Email`,`Number`,`Message`) VALUES ('$name','$email','$number','$message') ";
// mysqli_query($connection,$query);

// echo "Done"

require './dbconnection.php';

if (isset($_REQUEST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `con_infor`(`Name`,`Email`,`Number`,`Message`) VALUES ('$name','$email','$number','$message') ";
	$result = $conn->query($sql);
			if ($result === true){
	
    echo "<section id='contact'>";
    echo "<div class='contact containerr'>";			
	echo "<div class='contact-items2'>";
      echo "<div class='contact-item2'>";
      echo "<div class='icon'><img class='iconimg2' src='./img/Untitled.png' /></div>";
      echo "<div class='contact-info'>";
      echo "<h1>Send Message</h1>";
      echo "<form method='post' action='./indexp.html'>";

          

      echo "<h2>Enter Your Message</h2>";
      echo "<br>";
    //   echo "<input type='submit' value='BACK' name='send' >";
      echo "<a href='./indexp.html' class='cta'><font color ='black'>BACK</font></a>";
      echo "</form>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</section>";
				
			}else{
				echo "not aded";
			}
}
?>
</body>
</html>
