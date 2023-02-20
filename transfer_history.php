<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/transfer_history.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Transactions</title>
</head>
<body>
    <!-- This code styles the header of the page -->
    <div class="heading">
      <h1>The ABC Bank</h1>
    </div>
    <h1 class="heading">Transfer History</h1>

    <?php
    
        //Inserting the details in the transfer_history table 
        session_start();
        $hostname = "127.0.0.1";
        $username = "root";
        $password = "";
        $db_name = "internship";
        
        $conn = mysqli_connect($hostname, $username, $password, $db_name);
        
        if(!$conn) {
            die ("Connection Failed...." . mysqli_connect_error()); 
        }
        
        $s_Name = $_SESSION['s_name'];
        $s_Account = $_SESSION['s_account'];
        $amount = $_POST['amount'];

        $receiver = explode(",", $_POST['menu']);
        $r_Name = $receiver[0];
        $r_Account = $receiver[1];

        $sql = "INSERT INTO transfer_history (s_name, s_account, r_name, r_account, amount) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ssssd", $s_Name, $s_Account, $r_Name, $r_Account, $amount);

        mysqli_stmt_execute($stmt);
        mysqli_close($conn);

        //Including External PHP file for showing the Transactions
        include 'PHP Files/Transactions.php';
    ?>

    <!-- This code styles the header of the page -->
    <footer>
        <p>www.abcbank.com</p>            
        <p>All Rights Reserved &copy</p>
    </footer>
</body>
</html>