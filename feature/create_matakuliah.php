<?php
include __DIR__ . '/../config/db.php';

if (isset($_POST['kd']) && isset($_POST['nm']) && isset($_POST['sks'])) {
    $kd  = $_POST['kd'];
    $nm  = $_POST['nm'];
    $sks = $_POST['sks'];

    $stmt = $conn->prepare("INSERT INTO matakuliah (kd_mtk, nm_mtk, sks) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $kd, $nm, $sks);

    if ($stmt->execute()) {
        header("Location: ../index.php?created=true");
        exit();
    } else {
        header("Location: ../index.php?created=false");
        exit();
    }
}
?>

