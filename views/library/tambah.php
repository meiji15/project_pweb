<section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['judul']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= BASEURL; ?>/library/simpanData" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul">
                  </div>
                  <div class="form-group">
                    <label >Kategori</label>
                    <input type="text" class="form-control" placeholder="masukkan Kategori buku..." name="penerbit">
                  </div>
                  <div class="form-group">
                    <label >Jumlah</label>
                    <input type="text" class="form-control" placeholder="masukkan jumlah buku..." name="pengarang">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambahkan data</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>