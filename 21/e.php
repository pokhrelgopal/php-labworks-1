<?php
$file = fopen('e-input.txt', 'r');
if ($file) {
    fseek($file, rand(0, filesize('e-input.txt') - 1));
    $data = fread($file, 100);
    fclose($file);
    echo $data;
} else {
    echo "Failed to open the file.";
}