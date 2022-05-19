<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- BANNER -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Kantin Online</h1>
            <h3>Mau Makan Apa Hari ini??</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Apa Yang Ingin Dimakan?"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn btn-primary">Berburu Makanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Highlighted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-makanan d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Makanan">Makanan</a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-minuman d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Minuman">Minuman</a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-cemilan d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Cemilan">Cemilan</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Menu</h3>

            <!--makanan-->
            <div class="row mt-5">
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/makanan/sate.jpg" class="card-img-top" alt="sate">
                        <div class="card-body">
                            <h4 class="card-title">Sate</h4>
                            <p class="card-text text-truncate">
                                Sate daging ayam dengan bumbu kacang yang nikmat.
                            </p>
                            <p class="card-text text-harga">Rp 20.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/makanan/bakso.jpg" class="card-img-top" alt="bakso">
                        <div class="card-body">
                            <h4 class="card-title">Bakso</h4>
                            <p class="card-text text-truncate">
                                Bakso daging sapi dengan isian yang beragam.
                            </p>
                            <p class="card-text text-harga">Rp 15.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/makanan/nasigoreng.png" class="card-img-top" alt="nasi goreng">
                        <div class="card-body">
                            <h4 class="card-title">Nasi Goreng</h4>
                            <p class="card-text text-truncate">
                                Nasi goreng dengan bumbu khasnya dan dengan beragam isian.
                            </p>
                            <p class="card-text text-harga">Rp 12.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- minuman -->
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/minuman/esjeruk.jpg" class="card-img-top" alt="Es Jeruk">
                        <div class="card-body">
                            <h4 class="card-title">Es Jeruk</h4>
                            <p class="card-text text-truncate">
                                es jeruk dari buah jeruk asli dan tanpa tambahan pemanis buatan.
                            </p>
                            <p class="card-text text-harga">Rp 10.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/minuman/jusalpukat.jpg" class="card-img-top" alt="Jus Alpukat">
                        <div class="card-body">
                            <h4 class="card-title">Jus Alpukat</h4>
                            <p class="card-text text-truncate">
                                Jus alpukat dari buah alpukat asli dan tanpa tambahan pemanis buatan.
                            </p>
                            <p class="card-text text-harga">Rp 12.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/minuman/tehmanis.jpg" class="card-img-top" alt="Teh Manis">
                        <div class="card-body">
                            <h4 class="card-title">Teh Manis</h4>
                            <p class="card-text text-truncate">
                                Teh manis dari daun teh kebun sendiri dan tanpa pengawet.
                            </p>
                            <p class="card-text text-harga">Rp 10.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- cemilan -->
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/cemilan/keripik.jpg" class="card-img-top" alt="Keripik">
                        <div class="card-body">
                            <h4 class="card-title">Keripik</h4>
                            <p class="card-text text-truncate">
                                Keripik Singkong dari singkong asli dan tanpa pengawet tambahan.
                            </p>
                            <p class="card-text text-harga">Rp 15.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/cemilan/mielidi.jpg" class="card-img-top" alt="Mie Lidi">
                        <div class="card-body">
                            <h4 class="card-title">Mie Lidi</h4>
                            <p class="card-text text-truncate">
                                Mie lidi dari bahan alami dan tanpa pengawet tambahan.
                            </p>
                            <p class="card-text text-harga">Rp 10.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="images/cemilan/stikkeju.jpg" class="card-img-top" alt="Stik Keju">
                        <div class="card-body">
                            <h4 class="card-title">Stik Keju</h4>
                            <p class="card-text text-truncate">
                                Stik keju yang terbuat dari bahan bahan berkualitas dan tanpa pengawet buatan.
                            </p>
                            <p class="card-text text-harga">Rp 10.000</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Tentang Kami -->
    <div class="container-fluid warna3 py-3">
        <div class="container text-center">
            <h3>Tentang Kantin</h3>
            <p class="fs-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et veniam quibusdam molestiae deserunt qui
                sed! Consectetur fuga autem labore facere quia deserunt tempore veniam sed doloremque consequatur,
                itaque, dolores sit.
            </p>

        </div>
    </div>

    <script src=" bootstrapt/js/bootstrap.bundle.min.js">
    </script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>