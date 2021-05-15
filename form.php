<?php
// Include the config file
require_once "ketNoi.php"; // lien ket cai nay voi file dang nhap

If ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $ten = mysqli_real_escape_string($link, $_REQUEST['ten']);
    $diem = mysqli_real_escape_string($link, $_REQUEST['diem']);
    
    // Insert into the CAREER database
    $sql = "INSERT INTO kiemTra(ten, diem) VALUE
            ('$ten','$diem')";
    
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="form.php" method="post">
    <p>
        <label>Ten</label>
        <input type="text" name="ten" >
    </p>
    <p>
        <label>Diem So</label>
        <input type="text" name="diem">
    </p>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>