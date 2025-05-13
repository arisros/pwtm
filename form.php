
<?php include 'config/db.php'; ?>
<?php include 'template/header.php'; ?>

<?php
$edit = false;
$data = ['kd_mtk' => '', 'nm_mtk' => '', 'sks' => ''];

if (isset($_GET['kd'])) {
    $edit = true;
    $stmt = $conn->prepare("SELECT * FROM matakuliah WHERE kd_mtk = ?");
    $stmt->bind_param("s", $_GET['kd']);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
}
?>

<h2 class="text-2xl font-bold mb-6 text-center"><?= $edit ? 'Edit' : 'Tambah' ?> Mata Kuliah</h2>

<form action="<?= $edit ? '../feature/update_matakuliah.php' : '../feature/create_matakuliah.php' ?>" method="POST" class="space-y-6 max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg border border-gray-300">
  <div>
    <label for="kd" class="block text-lg font-semibold text-gray-700">Kode Mata Kuliah</label>
    <input type="text" name="kd" id="kd" value="<?= $data['kd_mtk'] ?>" <?= $edit ? 'readonly' : '' ?> class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
  </div>

  <div>
    <label for="nm" class="block text-lg font-semibold text-gray-700">Nama Mata Kuliah</label>
    <input type="text" name="nm" id="nm" value="<?= $data['nm_mtk'] ?>" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
  </div>

  <div>
    <label for="sks" class="block text-lg font-semibold text-gray-700">SKS</label>
    <input type="number" name="sks" id="sks" value="<?= $data['sks'] ?>" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
  </div>

  <div class="flex justify-between items-center">
    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <?= $edit ? 'Update' : 'Simpan' ?>
    </button>
    <a href="index.php" class="text-gray-600 hover:underline">Kembali</a>
  </div>
</form>

<?php include 'template/footer.php'; ?>

