<?php
$folder_dir = "uploads/";
$target_file_dir = $folder_dir . ($_FILES["uploadFile"]["name"]);
$target_file_ext = strtolower(pathinfo($target_file_dir, PATHINFO_EXTENSION));
$target_file_name = $_FILES["uploadFile"]["name"];

$output_dir = "outputs/";

// Check if file already exists
if ($target_file_ext != "xls" && $target_file_ext != "xlsx") {
    echo "Sorry, wrong file format.";
} else {
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file_dir)) {
        if ($target_file_ext == "xls") {
            $target_file_name_without_ext = substr($target_file_name, 0, -4);
            $output_file_dir = $output_dir . $target_file_name_without_ext;
        }
        if ($target_file_ext == "xlsx") {
            $target_file_name_without_ext = substr($target_file_name, 0, -5);
            $output_file_dir = $output_dir . $target_file_name_without_ext;
        }

        $output_file_name = $target_file_name_without_ext . ".csv";
        exec("java -jar exceltocsvasg.jar $target_file_dir $output_file_dir");
        header("Location: success_convert.php?converted_file={$output_file_name}");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
