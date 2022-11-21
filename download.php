<?php
$converted_excel_file = $_GET['converted_excel_file'];
$converted_excel_file_path = 'outputs/' . $converted_excel_file;

if(!empty($converted_excel_file)&&file_exists($converted_excel_file_path)){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename={$converted_excel_file}");

    readfile($converted_excel_file_path);
}
