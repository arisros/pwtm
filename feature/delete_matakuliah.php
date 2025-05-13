<?php
include __DIR__ . '/../config/db.php';

if (isset($_GET['kd'])) {
    $kd = $_GET['kd'];
    $stmt = $conn->prepare("DELETE FROM matakuliah WHERE kd_mtk = ?");
    $stmt->bind_param("s", $kd);
    if ($stmt->execute()) {
        // Redirect with success message
        header("Location: ../index.php?deleted=true");
    } else {
        // Redirect with failure message
        header("Location: ../index.php?deleted=false");
    }
    exit();
}
?>

