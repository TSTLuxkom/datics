<?php
if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $file = $_FILES['file'];
    $upload_dir = '.'; // Set the directory to upload the files
    $upload_file = $upload_dir . '/' . $file['name'];

    if(move_uploaded_file($file['tmp_name'], $upload_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "No file selected.";
}
?>