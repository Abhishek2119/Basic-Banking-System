<?php

  // Collecting the Money Sender Details
  session_start();
  $column1 = $_GET["column1"];
  $column2 = $_GET["column2"];
  $column3 = $_GET["column3"];
  $column4 = $_GET["column4"];
  $column5 = $_GET["column5"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="css/transfer.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
      <title>Money Transfer</title>
</head>

<body>

  <!-- This code styles the header of the page -->
    <div class="heading">
      <h1>The ABC Bank</h1>
    </div>

    <div class="container">
      <h1 class="heading">Sender Details</h1>
      <div class="details">
        <p> Name: <?php echo $_GET["column1"] ?> </p>
        <p> Account Number: <?php echo $_GET["column2"] ?> </p>
        <p> Email: <?php echo $_GET["column3"] ?> </p>
        <p> Branch: <?php echo $_GET["column4"] ?> </p>
        <p> Current Balance: <?php echo $_GET["column5"] ?> </p>
      </div> 
    </div>

    <?php

      //Extracting data from the Customers Table to show the list of Accounts for Money Transfer and asking for the Amount to be transferred
      $hostname = "127.0.0.1";
      $username = "root";
      $password = "";
      $db_name = "internship";

      $conn = mysqli_connect($hostname, $username, $password, $db_name);

      if(!$conn) {
        die ("Connection Failed...." . mysqli_connect_error()); 
      }

      $value = $_GET["column2"];
      $query = "SELECT * FROM customers WHERE Account_Number != '$value'";
      $result = mysqli_query($conn, $query);
      echo '<form action="transfer_history.php" method="post">';
      echo '<p>Select the Receiver : </p>';
      echo '<select name="menu" class="menu">';

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row['Name'].','.$row['Account_Number'].'">'.$row['Name']."  ".$row['Account_Number']."  ".$row['Email']."  ".$row['Branch'].'</option>';
      }

      echo '</select>';
      echo '<p>Enter the Amount : </p>';
      echo '<input type="number" name="amount" class="amount">';
      echo '<input type="submit" value="Send Money" class="submit" onclick="checkAmount()">';
      echo '</form>';

      $_SESSION['s_name'] = $column1;
      $_SESSION['s_account'] = $column2;

      mysqli_free_result($result);
      mysqli_close($conn);
    ?>
    
    <!-- This code styles the Footer of the page -->
    <footer>
      <p>www.abcbank.com</p>
      <p>All Rights Reserved &copy</p>
    </footer>

    <script>

      //Checking the amount entered is Valid or Not
      function checkAmount() {
      var compareAmount = <?php echo $_GET["column5"]; ?>;
      var money = document.querySelector(".amount").value;
      
      if (money < compareAmount) {
        alert("Money Sent Sucessfully....");
      } 
      
      else {
        alert("Please enter an amount less than " + compareAmount + ".");
        event.preventDefault();
      }
    }
    </script>

</body>
</html>