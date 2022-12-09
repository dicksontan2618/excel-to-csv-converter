<?php

error_reporting(E_ERROR | E_PARSE);

$upload_file_name = $_FILES['uploadFile']['name'];
$upload_file_name_without_space = preg_replace("/\s+/", '_', $upload_file_name);
if ($upload_file_name_without_space != $upload_file_name) {
    rename($upload_file_name_without_space, $upload_file_name);
}
$upload_file_tmp_name = $_FILES['uploadFile']['tmp_name'];
//$upload_file_extension = strtolower(substr($name, strlen($name) - strpos(strrev($name), '.')));
$upload_file_extension = strtolower(pathinfo($upload_file_name, PATHINFO_EXTENSION));

if ($upload_file_extension == "xls") {
    $upload_file_name_without_extension = substr($upload_file_name_without_space, 0, -4); // file name without extension
}
if ($upload_file_extension == "xlsx") {
    $upload_file_name_without_extension = substr($upload_file_name_without_space, 0, -5);
}

if (($upload_file_extension == "xls" || $upload_file_extension == "xlsx")) { // check file type
    $location_upload = "uploads/";
    $location_output = "outputs/";
    if (move_uploaded_file($upload_file_tmp_name, $location_upload . $upload_file_name_without_space)) {

        $converted_csv_file = $upload_file_name_without_extension . ".csv";
        $convert_path = $location_upload . $upload_file_name_without_space;
        $output_path = $location_output . $upload_file_name_without_extension;

        exec("java -jar exceltocsv.jar $convert_path $output_path");

        header("Location: success_convert_file.php?converted_file={$converted_csv_file}");
    } else {
        header('Location: error.php');
    }
} else { // if file type is not pdf
    header('Location: error.php');
}
