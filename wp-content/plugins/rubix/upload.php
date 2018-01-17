<?php
require_once 'funciones.php';


$sourcePath = $_FILES['userImage']['tmp_name'];			//saving images in directory til line 7
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
 print_r($_POST);   
//var_dump ($_FILES['userImage']['tmp_name']);
}

$prueba =new funciones();
$prueba->insertar(
        $_POST['your-name'],
        $_POST['identificacion'],
        $_POST['your-email'],
        $_POST['your-tel'],
        $_POST['your-user'],
        $_POST['your-pass'],
        $targetPath
        );

?>
