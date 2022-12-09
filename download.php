<?php

// get converted excel file name from url parameter
$converted_excel_file = $_GET['converted_excel_file'];

// get path of converted excel file name
$converted_excel_file_path = 'outputs/' . $converted_excel_file;

// if successfully get converted file name and path
if (!empty($converted_excel_file) && file_exists($converted_excel_file_path)) {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename={$converted_excel_file}");

    // download converted file
    readfile($converted_excel_file_path);
}
