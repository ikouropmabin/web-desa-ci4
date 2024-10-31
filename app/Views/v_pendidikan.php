<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <!-- [ Main Content ] start -->
      <div class="row ">
        <!-- Pendidikan start -->
        <div class="col-12">
          <div class="card prod-p-card bg-c-secondary">
            <div class="card-header">
              <div class="card-title"><i class="fa fa-table"></i> Data <?= $judul ?></div>
            </div>
            <div class="card-body">
              <?php
              if (session()->get('insert')) {
                echo '<div class="alert alert-success">';
                echo session()->get('insert');
                echo '</div>';
              }

              if (session()->get('update')) {
                echo '<div class="alert alert-primary">';
                echo session()->get('update');
                echo '</div>';
              }

              if (session()->get('delete')) {
                echo '<div class="alert alert-danger">';
                echo session()->get('delete');
                echo '</div>';
              }
              ?>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">
                <i class="fas fa-plus"></i> Tambah
              </button>
              <table class="table table-sm table-bordered-bd-info table-head-bg-info mt-4">
                <thead>
                  <tr class="text-center">
                    <th width="50px">#</th>
                    <th scope="col">Pendidikan</th>
                    <th width="100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pendidikan as $key => $p) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $p['pendidikan'] ?></td>
                      <td class="text-center">
                        <button class="btn btn-warning btn-xs" data-toggle="modal"
                          data-target="#edit<?= $p['id_pendidikan'] ?>"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger btn-xs" data-toggle="modal"
                          data-target="#delete<?= $p['id_pendidikan'] ?>"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Total Pendatang Bulan Ini end -->
      </div>
      <!-- [ Main Content ] end -->

    </div>
  </div>
</div>


<!-- class="col-xl-3 col-md-6" -->


<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $judul ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      echo form_open('Pendidikan/InsertData')
        ?>
      <div class="modal-body">

        <div class="form-group">
          <label>Pendidikan</label>
          <input name="pendidikan" class="form-control" placeholder="Pendidikan" required>
        </div>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      <?php echo form_close() ?>
    </div>
  </div>
</div>

<?php
foreach ($pendidikan as $key => $p) { ?>

  <!-- Modal edit -->
  <div class="modal fade" id="edit<?= $p['id_pendidikan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit <?= $judul ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
        echo form_open('Pendidikan/UpdateData/' . $p['id_pendidikan'])
          ?>
        <div class="modal-body">

          <div class="form-group">
            <label>Pendidikan</label>
            <input name="pendidikan" value="<?= $p['pendidikan'] ?>" class="form-control" placeholder="Pendidikan"
              required>
          </div>
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

        <?php echo form_close() ?>
      </div>
    </div>
  </div>

  <!-- Modal delete -->
  <div class="modal fade" id="delete<?= $p['id_pendidikan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete <?= $judul ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
        echo form_open('Pendidikan/DeleteData/' . $p['id_pendidikan'])
          ?>
        <div class="modal-body">

          Apakah Ingin Hapus Data <b><?= $p['pendidikan'] ?></b> ..?

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>

        <?php echo form_close() ?>
      </div>
    </div>
  </div>


<?php } ?>