<?php

require_once("include/config.php");
require_once("include/class/FormSanitizer.php");
require_once("include/class/account.php");
require_once("include/class/Constants.php");

if(!isset($_SESSION["juryLoggedIn"])) {
    header("Location: login.php");
}
$juryLoggedIn = $_SESSION["juryLoggedIn"];
$query = $con->prepare("SELECT * FROM jury where username = '$juryLoggedIn' ");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$juryId = $row["id"];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.21/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>

</head>
<body>

</body>
<script type="text/javascript">
document.addEventListener("contextmenu",function(learner){
learner.preventDefault();
window.alert("right Click Disabled");
});
</script>
</html>
