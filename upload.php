<?php

// ignore warnings reported during uploading and converting file
error_reporting(E_ERROR | E_PARSE);

// get uploaded file name (with extension)
$upload_file_name = $_FILES['uploadFile']['name'];

// rename uploaded file that have spaces between the name
$upload_file_name_without_space = preg_replace("/\s+/", '_', $upload_file_name);
if ($upload_file_name_without_space != $upload_file_name) {
    rename($upload_file_name_without_space, $upload_file_name);
}

// get uploaded file temporary name
$upload_file_tmp_name = $_FILES['uploadFile']['tmp_name'];

// get uploaded file extension
$upload_file_extension = strtolower(pathinfo($upload_file_name, PATHINFO_EXTENSION));

// get uploaded file name (without extension)
if ($upload_file_extension == "xls") {
    $upload_file_name_without_extension = substr($upload_file_name_without_space, 0, -4); // file name without extension
}
if ($upload_file_extension == "xlsx") {
    $upload_file_name_without_extension = substr($upload_file_name_without_space, 0, -5);
}

// check uploaded file is excel or not based on file extension
if (($upload_file_extension == "xls" || $upload_file_extension == "xlsx")) {

    // path for upload and output folders
    $location_upload = "uploads/";
    $location_output = "outputs/";

    // move uploaded file to "uploads" folder
    if (move_uploaded_file($upload_file_tmp_name, $location_upload . $upload_file_name_without_space)) {

        // specify convert path and output path
        $converted_csv_file = $upload_file_name_without_extension . ".csv";
        $convert_path = $location_upload . $upload_file_name_without_space;
        $output_path = $location_output . $upload_file_name_without_extension;

        // convert file to csv file using jar file
        exec("java -jar exceltocsv.jar $convert_path $output_path");

        // redirect to success convert file page if convert success
        header("Location: success_convert_file.php?converted_file={$converted_csv_file}");
    } else { // if error occured during uploading
        header('Location: error.php'); // redirect to error page if error occurs
    }
} else { // if uploaded file is not excel file
    header('Location: error.php'); // redirect to error page if error occurs
}
