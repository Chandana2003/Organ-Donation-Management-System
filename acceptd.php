<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$status = 'Accepted';
	$sql = "UPDATE organdonate SET status = '$status' WHERE donoid = '$donoid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../organdonate.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../organdonate.php?error=".$error );
    }
    mysqli_close($conn);
?>
