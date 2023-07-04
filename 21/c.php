<?php
function copyImage($s, $d)
{
    if (copy($s, $d)) {
        echo "Image copied successfully.";
    } else {
        echo "Failed to copy image.";
    }
}

// Example usage
$source = "source_image.png";
$dest = "destination_image.png";
copyImage($source, $dest);
