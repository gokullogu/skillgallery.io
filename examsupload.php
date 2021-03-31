<?php
include_once("db.php");

if (isset($_POST['upload_exam'])) {

    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "youexam/";

    /* new file size in KB */
    $new_size = $file_size / 1024;
    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file = str_replace(' ', '-', $new_file_name);

    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $sql = "INSERT INTO exam(filename,filetype,filesize)VALUES('$final_file','$file_type','$new_size')";
        mysqli_query($con, $sql);
        echo "<h3 style='color:green'>exam cetificates sucessfully uploaded</h3>";
    } else {

        echo "Error.Please try again";
    }
}
