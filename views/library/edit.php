<section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['judul']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= BASEURL; ?>/library/updateDataBuku" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['databuku']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul" value="<?= $data['databuku']['judul'];?>">
                  </div>
                  <div class="form-group">
                    <label >Kategori</label>
                    <input type="text" class="form-control" placeholder="masukkan kategori buku..." name="kategori" value="<?= $data['databuku']['kategori'];?>">
                  </div>
                  <div class="form-group">
                    <label >Jumlah</label>
                    <input type="text" class="form-control" placeholder="masukkan jumlah buku..." name="jumlah" value="<?= $data['databuku']['jumlah'];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>