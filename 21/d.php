<?php
$fileContents = file_get_contents('input.txt');
$fileContents = preg_replace('/\b[Tt]\w+\b/', 'HEHE', $fileContents);
file_put_contents('d-output.txt', $fileContents);
