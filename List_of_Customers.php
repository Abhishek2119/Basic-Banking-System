<?php

    //Extracting the Data from Customers Table to show the List of All the Customers and showing the details in the form of a Table

    //The Table Consists of Account Holder Name, Account Number, Email Id, Branch of the Bank & Current Balance
     
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $db_name = "internship";

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if(!$conn) {
        die ("Connection Failed...." . mysqli_connect_error()); 
    }

    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo "Error...." . mysqli_error($conn);
        exit;
    }
    echo "<table id = 'data-table'>";
    echo "<tr> <th>Sr_No</th> <th>Name</th> <th>Account_Number</th> <th>Email</th> <th>Branch</th> <th>Current Balance</th> <th>Options</th>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Sr_No"]. "</td>";
        echo "<td>" . $row["Name"]. "</td>";
        echo "<td>" . $row["Account_Number"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Branch"] . "</td>";
        echo "<td>" . $row["Current_Balance"] . "</td>";
        echo '<td> <button class="show-data-button" data-column1 = "'.$row["Name"].'" data-column2 = "'.$row["Account_Number"].'" data-column3 = "'.$row["Email"].'" data-column4 = "'.$row["Branch"].'" data-column5 = "'.$row["Current_Balance"].'"> Transfer Money </button> </td>';
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conn);
?>