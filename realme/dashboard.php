<?php include 'x.php'; ?>
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style4.css?v=<?=$version?>"/>
</head>
<body class="dash">
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p ><button type="sumbit"> <a href="home2.php" type="hidden"><b>Click Me</b></a> </button></p>
    </div>
</body>
</html>