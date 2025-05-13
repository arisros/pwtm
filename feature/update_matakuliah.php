<?php
include __DIR__ . '/../config/db.php';

if (isset($_POST['kd']) && isset($_POST['nm']) && isset($_POST['sks'])) {
    $kd  = $_POST['kd'];
    $nm  = $_POST['nm'];
    $sks = $_POST['sks'];

    $stmt = $conn->prepare("UPDATE matakuliah SET nm_mtk = ?, sks = ? WHERE kd_mtk = ?");
    $stmt->bind_param("sis", $nm, $sks, $kd);

    if ($stmt->execute()) {
        header("Location: ../index.php?updated=true");
        exit();
    } else {
        header("Location: ../index.php?updated=false");
        exit();
    }
}
?>

