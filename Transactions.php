<?php

    //Extracting data from the transfer_history table to show the Transactions

    //The Table Consists of Money Sender Name, Money Sender Account Number, Money Receiver Name, Money Receiver Account Number, Amount Transferred

    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $db_name = "internship";

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if(!$conn) {
        die ("Connection Failed...." . mysqli_connect_error()); 
    }

    $sql = "SELECT * FROM transfer_history";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo "Error...." . mysqli_error($conn);
        exit;
    }
    echo "<table id = 'data-table'>";
    echo "<tr> <th>Tr_No</th> <th>Sender Name</th> <th>Sender Account Number</th> <th>Receiver Name</th> <th>Receiver Account Number</th> <th>Amount</th>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Tr_No"]. "</td>";
        echo "<td>" . $row["s_name"]. "</td>";
        echo "<td>" . $row["s_account"] . "</td>";
        echo "<td>" . $row["r_name"] . "</td>";
        echo "<td>" . $row["r_account"] . "</td>";
        echo "<td>" . $row["amount"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conn);
?>