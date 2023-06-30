<?php
// preg_match()
if (preg_match("/\d+/", "Hello, 123 World!", $m)) echo "Match found: $m[0]<br>";
else echo "No match found.<br>";

// preg_match_all()
if (preg_match_all("/\b\w{4}\b/", "The quick brown fox jumps over the lazy dog.", $m)) {
    echo "Matches found:<br>";
    print_r($m[0]);
    echo "<br>";
} else echo "No matches found.<br>";

// preg_replace()
echo "Modified string: " . preg_replace("/Hello/", "Hi", "Hello, World!") . "<br>";