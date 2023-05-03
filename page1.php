<?php 
$txt = $_POST['txt'];
$badword = $_POST['badword'];
/* $error = ""; */

if((empty(trim($_POST['txt']))) && (empty(trim($_POST['badword'])))){
    
    $error = "testo non valido";

}else {
    $badtxt = str_replace($badword, "***", $txt);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_1</title>
</head>
<body>
<h1><?php echo "$txt" ?></h1>
<h1><?php echo "$badword" ?></h1>
<h1><?php echo "$badtxt" ?></h1>
<h1><?php echo "$error" ?></h1>
</body>
</html>