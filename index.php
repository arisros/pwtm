
<?php include 'config/db.php'; ?>
<?php include 'template/header.php'; ?>

<h2 class="text-2xl font-bold mb-4">Daftar Mata Kuliah</h2>
<a href="form.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mb-4 inline-block">Tambah Mata Kuliah</a>

<?php
// Show notification for actions (Create, Update, Delete)
if (isset($_GET['created'])) {
    $message = $_GET['created'] == 'true' ? 'Mata Kuliah berhasil ditambahkan!' : 'Gagal menambahkan Mata Kuliah.';
    $color = $_GET['created'] == 'true' ? 'green' : 'red';
    echo "<div class='bg-$color-500 text-white p-4 rounded mb-4'>$message</div>";
}

if (isset($_GET['updated'])) {
    $message = $_GET['updated'] == 'true' ? 'Mata Kuliah berhasil diperbarui!' : 'Gagal memperbarui Mata Kuliah.';
    $color = $_GET['updated'] == 'true' ? 'green' : 'red';
    echo "<div class='bg-$color-500 text-white p-4 rounded mb-4'>$message</div>";
}

if (isset($_GET['deleted'])) {
    $message = $_GET['deleted'] == 'true' ? 'Mata Kuliah berhasil dihapus!' : 'Gagal menghapus Mata Kuliah.';
    $color = $_GET['deleted'] == 'true' ? 'green' : 'red';
    echo "<div class='bg-$color-500 text-white p-4 rounded mb-4'>$message</div>";
}
?>

<?php
$stmt = $conn->prepare("SELECT * FROM matakuliah");
$stmt->execute();
$result = $stmt->get_result();
?>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md overflow-hidden">
  <thead>
    <tr class="bg-blue-600 text-white text-left">
      <th class="px-6 py-3 text-sm font-semibold">Kode Mata Kuliah</th>
      <th class="px-6 py-3 text-sm font-semibold">Nama Mata Kuliah</th>
      <th class="px-6 py-3 text-sm font-semibold">SKS</th>
      <th class="px-6 py-3 text-sm font-semibold">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-gray-700">
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr class="border-b hover:bg-gray-100">
        <td class="px-6 py-4 text-sm"><?= $row['kd_mtk'] ?></td>
        <td class="px-6 py-4 text-sm"><?= $row['nm_mtk'] ?></td>
        <td class="px-6 py-4 text-sm"><?= $row['sks'] ?></td>
        <td class="px-6 py-4 text-sm">
          <a href="form.php?kd=<?= $row['kd_mtk'] ?>" class="text-yellow-600 hover:underline">Edit</a> | 
          <a href="feature/delete_matakuliah.php?kd=<?= $row['kd_mtk'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php include 'template/footer.php'; ?>

