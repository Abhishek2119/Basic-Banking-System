<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/customer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Customers</title>
</head>
<body>

    <!-- This code styles the header of the page -->
    <div class="container">
        <div class="heading">
            <h1>The ABC Bank</h1>
        </div>

        <h1>LIST OF CUSTOMERS</h1>

        <!-- An External PHP File is included to show the List of all the Customers of the Bank -->
        <?php include 'PHP Files/List_of_Customers.php'; ?>
    </div>

        <!-- This code styles the Footer of the page -->
    <footer>
            <p>www.abcbank.com</p>
            <p>All Rights Reserved &copy</p>
    </footer>

    <!-- JavaScript used to collect the details of the Money Sender -->
    <script>
        const dataTable = document.getElementById('data-table');
        dataTable.addEventListener('click', function (event) {
            if (event.target.className === 'show-data-button') {
                const column1 = event.target.getAttribute('data-column1');
                const column2 = event.target.getAttribute('data-column2');
                const column3 = event.target.getAttribute('data-column3');
                const column4 = event.target.getAttribute('data-column4');
                const column5 = event.target.getAttribute('data-column5');
                window.location.href = "transfer.php?column1=" + column1 + "&column2=" + column2 + "&column3=" + column3 + "&column4=" + column4 + "&column5=" + column5;
            }
        });
    </script>
    
</body>
</html>