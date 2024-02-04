<?php
  $server = "0.0.0.0:3306";
  $username = "root";
  $password = "root";
  $database = "SignUpData";
  
  $connect = mysqli_connect($server, $username, $password, $database);
  
  /*if ($connect) {
    echo "Hello You Are Successfull";
  }else {
    echo "Sorry";
  }*/
  
  $inputData = $_POST["text"];
  echo $inputData;
  
  $query = "INSERT INTO `users` (`FullName`, `EmailID`, `Password`) VALUES ('$inputData', 'AA', '1234567890')";
  
  mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
  <form action="login.php" method="post" target="_self">
      <input type="text" name="text">
      <input type="submit" value="Send">
  </form>
  <!--<script>
    const input = document.querySelector('input');
    
    const button = document.querySelector('button');
    
    button.addEventListener('click', function () {
      input.setAttribute('name', 'text');
    });
  </script>-->
</body>
</html>