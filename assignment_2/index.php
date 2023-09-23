<?php
include_once "partials/header.php";

?>
 <link type="text/css" rel="stylesheet" href="css/viewUsers.css" />
<?php
include_once "partials/navBar.php";
?>
<div class="main">
    <p class="heading">SIGNED UP USERS</p>
    <table>
        <tr>
            <td>#</td>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
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
            <td class="capitalize"><?php print $user_row["username"]; ?></td>
            <td class="capitalize"><?php print $user_row["full_name"]; ?></td>
            <td><?php print $user_row["email"]; ?></td>
            
        </tr>
<?php
    }
} else{
    echo "Failed";
}
?>

    </table>
    </div>
</body>
</html>