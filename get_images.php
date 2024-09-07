<?php
$folder = $_GET['folder'];

if (is_dir($folder)) {
    $files = array_diff(scandir($folder), array('.', '..')); // قراءة جميع الملفات باستثناء . و ..
    $images = array();

    foreach ($files as $file) {
        if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
            $images[] = $file; // إضافة الصورة إلى القائمة إذا كانت صورة
        }
    }

    echo json_encode($images);
} else {
    echo json_encode([]);
}
?>
