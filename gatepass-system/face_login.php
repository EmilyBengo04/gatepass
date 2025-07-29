<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['face_image'])) {
    $imgData = $_POST['face_image'];

    // Remove the base64 prefix
    $imgData = str_replace('data:image/png;base64,', '', $imgData);
    $imgData = str_replace(' ', '+', $imgData);
    $imgBinary = base64_decode($imgData);

    // Save image temporarily
    $fileName = 'temp_face.png';
    file_put_contents($fileName, $imgBinary);

    // TODO: Use face recognition library to compare with stored face(s)

    // Example success
    echo "Face image received. Ready to process.";
} else {
    echo "No image data received.";
}
?>