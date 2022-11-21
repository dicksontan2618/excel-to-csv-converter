<?php
$input_path = $_POST["name"];
exec("java -jar exceltocsv.jar $input_path");
echo ("Convert Success!");
