<?php
include_once "partials/header.php";
require_once "config/dbConn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link type="text/css" rel="stylesheet" href="css/home.css" />
</head>
<body>
    <table>
        <tr>
            <td>#</td>
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
<?php
$user_data = "SELECT * FROM `author_tbl` ORDER BY username ASC";
$result = $conn->query($user_data);

$serial=1;

if($result->num_rows > 0){
    while($user_row = $result->fetch_assoc()){
?>     
        <tr>
            <td><?php print $serial; $serial++; ?>.</td>
            <td><?php print $user_row["username"]; ?></td>
            <td><?php print $user_row["full_name"]; ?></td>
            <td><?php print $user_row["email"]; ?></td>
            
        </tr>
<?php
    }
} else{
    echo "Failed";
}
?>

    </table>
</body>
</html>