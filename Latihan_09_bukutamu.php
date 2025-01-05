<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Simpan data ke dalam session
    $_SESSION['bukutamu'][] = ['nama' => $nama, 'pesan' => $pesan];
}
?>

<div class="container">
    <h2>Buku Tamu</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <h3 class="mt-4">Pesan Tamu</h3>
    <ul class="list-group">
        <?php
        if (isset($_SESSION['bukutamu'])) {
            foreach ($_SESSION['bukutamu'] as $tamu) {
                echo '<li class="list-group-item"><strong>' . $tamu['nama'] . ':</strong> ' . $tamu['pesan'] . '</li>';
            }
        }
        ?>
    </ul>
</div>