<div class="container mt-4">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Matakuliah Yang Saya Ambil</h3>
            <?php foreach( $data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nim']; ?></li>
                    <li><?= $mhs['matakuliah']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>