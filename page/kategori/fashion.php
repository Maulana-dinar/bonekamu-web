<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bonekamu-web/config/Database.php';

$database = new Database();
$koneksi = $database->getConnection();

// kategori Fashion = 3
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM produk
     WHERE id_kategori='3'
     ORDER BY id_produk DESC"
);

?>

<div class="container mt-5">

    <h2 class="mb-4">
        Fashion
    </h2>

    <div class="row">

        <?php while($data = mysqli_fetch_assoc($query)) { ?>

            <div class="col-md-3 mb-4">

                <div class="card product-card h-100 shadow-sm">

                    <img src="/bonekamu-web/image/produk/<?= $data['gambar']; ?>"
                         class="card-img-top"
                         style="height:250px; object-fit:cover;">

                    <div class="card-body product-info">

                        <h6>
                            <?= strtoupper($data['nama_produk']); ?>
                        </h6>

                        <p>
                            <?= substr($data['deskripsi'], 0, 50); ?>...
                        </p>

                        <p class="keterharga fs-5">

                            Rp <?= number_format($data['harga'], 0, ',', '.'); ?>

                        </p>

                        <a href="index.php?page=detail&id=<?= $data['id_produk']; ?>">

                            <button type="button"
                                    class="buton button">

                                Lebih Detail

                            </button>

                        </a>

                    </div>

                </div>

            </div>

        <?php } ?>

    </div>

</div>