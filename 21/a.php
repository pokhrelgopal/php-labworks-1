<?php
$infile = fopen("input.txt", "r");
$outfile = fopen("a-output.txt", "w");

if ($infile && $outfile) {
    while (($char = fgetc($infile)) !== false) {
        fwrite($outfile, strtoupper($char));
    }

    fclose($infile);
    fclose($outfile);

    echo "File has been read and written successfully.";
} else {
    echo "Failed to open.";
}
