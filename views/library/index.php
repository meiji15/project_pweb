<div class="container mt-5">
<h3 class="card-title"></h3> <div class="btn-group"><a href="<?= BASEURL; ?>/library/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Data</a></div>
<h3 class="card-title"></h3> <div class="btn-group"><a href="<?= BASEURL; ?>/library/edit" class="btn float-right btn-xs btn btn-primary">Edit Data</a></div>
    <div class="row">
        <div class="col-6">
            <h3 class="text-center">Daftar Buku</h3>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Judul</th>
                    <th scope="col" class="text-center">Kategori</th>
                    <th scope="col" class="text-center">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                    <?php foreach( $data["lbr"] as $lbr ) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $lbr['judul'];?></td>
                      <td><?= $lbr['kategori'];?></td>
                      <td><?= $lbr['jumlah'];?></td>
                    </tr>
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
