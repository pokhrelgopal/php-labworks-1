<?php
// preg_match()
$string = "Hello, 123 World!";
if (preg_match("/\d+/", $string, $matches)) {
    echo "Match found: " . $matches[0] . "<br>";
} else {
    echo "No match found.<br>";
}

// preg_match_all()
$string = "The quick brown fox jumps over the lazy dog.";
if (preg_match_all("/\b\w{4}\b/", $string, $matches)) {
    echo "Matches found:<br>";
    print_r($matches[0]);
    echo "<br>";
} else {
    echo "No matches found.<br>";
}

// preg_replace()
$string = "Hello, World!";
$pattern = "/Hello/";
$replacement = "Hi";
$modifiedString = preg_replace($pattern, $replacement, $string);
echo "Modified string: $modifiedString<br>";
