<?php
$uploadDir = '../../uploads/';

echo "Upload directory: $uploadDir\n";
echo "Absolute path: " . realpath($uploadDir) . "\n";
echo "Exists: " . (file_exists($uploadDir) ? 'Yes' : 'No') . "\n";
echo "Is directory: " . (is_dir($uploadDir) ? 'Yes' : 'No') . "\n";
echo "Is writable: " . (is_writable($uploadDir) ? 'Yes' : 'No') . "\n";

if (!file_exists($uploadDir)) {
    echo "Attempting to create directory...\n";
    if (mkdir($uploadDir, 0755, true)) {
        echo "Directory created successfully\n";
    } else {
        echo "Failed to create directory\n";
    }
}
?>
