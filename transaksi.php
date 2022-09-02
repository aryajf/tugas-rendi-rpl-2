<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once('components/nav.php') ?>
            <div class="col-10 my-3">
                <h2>Transaksi</h2>
                <table class="table">
                <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle" scope="row">1</th>
                            <td class="align-middle">Mas Ujang</td>
                            <td class="align-middle">Printer Hp Laserjet</td>
                            <td class="align-middle">Jalan Bahagia Sentosa</td>
                            <td class="align-middle">Rp.500.000</td>
                            <td><img src="assets/image.jfif" class="image-table" alt=""></td>
                            <td class="align-middle">Dikirim</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm">Detail Transaksi</button>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">2</th>
                            <td class="align-middle">Usup Parasup</td>
                            <td class="align-middle">Printer Epson</td>
                            <td class="align-middle">Jalan Yang Lurus</td>
                            <td class="align-middle">Rp.250.000</td>
                            <td><img src="assets/image.jfif" class="image-table" alt=""></td>
                            <td class="align-middle">Dikemas</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm">Detail Transaksi</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once('components/footer.php') ?>