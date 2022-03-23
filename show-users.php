<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Users
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsible Innovation in Investing Services">
    <meta name="Language" content="English">
    <meta name="distribution" content="Global">
    <meta name="coverage" content="Worldwide">
    <meta name="Classification" content="Business">
    <meta name="url" content="https://websitename.com">
    <link rel="shortcut icon" href="assets/images/WebsiteName-favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="c-body">
    <div class="c-main-container">
        <a href="index.php" class="c-homepage-button">Homepage</a>
        <form id="c-search-form" method="post" action="">
            <input type="text" id="search-bar" name="searchdata" onkeydown="searchValue();"placeholder="Search">
        </form>
        <form method="post" action="excel-page.php" name="excel.php">
            <input type="submit" name="excel" id="excel-button" value="EXPORT">
        </form>

        <div class="c-table-main-container">
            <table class="c-table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Cpassword</th>
                        <th>Gender</th>
                        <th>Message</th>
                        <th>Terms</th>
                    </tr>
                </thead>
       

<tbody>

    <?php

    include("includes/db.php");

    $get_all_users = "SELECT * FROM users";
    $get_all_users_connection = mysqli_query($connection, $get_all_users);

    while ($row = mysqli_fetch_array($get_all_users_connection)) {
        $id = $row["id"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $country = $row["country"];
        $phone = $row["phone"];
        $password = $row["password"];
        $cpassword = $row["cpassword"];
        $gender = $row["gender"];
        $message = $row["message"];
        $terms = $row["terms"];
    ?>

        <tr>
            <td><?php echo $firstname ?></td>
            <td><?php echo $lastname ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $country ?></td>
            <td><?php echo $phone ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $cpassword ?></td>
            <td><?php echo $gender ?></td>
            <td><?php echo $message ?></td>
            <td><?php echo $terms ?></td>
        </tr>

    <?php } ?>

</tbody>



            </table>
        </div>
    </div>

    <script src="assets/js/custom.js"></script>
</body>

</html>