<?php
include("includes/db.php");

$output = '';
if (isset($_POST["excel"])) {
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
   <table class="c-table" bordered="1">  
    <tr>  
        <th>Firstname</th>
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
  ';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
    <tr>  
        <td>' . $row["firstname"] . '</td>  
        <td>' . $row["lastname"] . '</td>  
        <td>' . $row["email"] . '</td>  
        <td>' . $row["country"] . '</td>  
        <td>' . $row["phone"] . '</td>  
        <td>' . $row["password"] . '</td>  
        <td>' . $row["cpassword"] . '</td>  
        <td>' . $row["gender"] . '</td>  
        <td>' . $row["message"] . '</td>  
        <td>' . $row["terms"] . '</td>   
    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=download.xls');
        echo $output;
    }
}
