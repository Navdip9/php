<?php
$file = "test.txt"; // Path to the text file to be updated
$content = $_POST['content'];

if(file_put_contents($file, $content) !== false) {
    echo "Text file updated successfully!";
} else {
    echo "Failed to update text file.";
}
?>
