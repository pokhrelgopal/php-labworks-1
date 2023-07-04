<?php
// Open the input file in read mode
$infile = fopen("input.txt", "r");

// Open the output file in write mode
$outfile = fopen("b-output.txt", "w");

if ($infile && $outfile) {
    // Read the content of the input file
    $content = fread($infile, filesize("input.txt"));

    // Modify the content (e.g., convert to uppercase)
    $modifiedContent = ($content . "  Gopal Pokhrel");

    // Write the modified content to the output file
    fwrite($outfile, $modifiedContent);

    // Close the input and output files
    fclose($infile);
    fclose($outfile);

    echo "File has been read and written successfully.";
} else {
    echo "Failed to open input or output file.";
}
