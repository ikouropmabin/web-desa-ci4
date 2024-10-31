<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Pekerjaan</h4>
      </div>
      <div class="row">
        <div class="col-12">
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
              <i class="fas fa-plus"></i> Tambah
            </button>
            <table class="table table-sm table-bordered-bd-primary table-head-bg-primary mt-4">
              <thead>
                <tr class="text-center">
                  <th width="50px">#</th>
                  <th scope="col">Pekerjaan</th>
                  <th width="100px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($pekerjaan as $key => $p) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p['pekerjaan'] ?></td>
                    <td class="text-center">
                      <button class="btn btn-warning btn-xs" data-toggle="modal"
                        data-target="#edit<?= $p['id_pekerjaan'] ?>"><i class="fa fa-pencil-alt"></i></button>
                      <button class="btn btn-danger btn-xs" data-toggle="modal"
                        data-target="#delete<?= $p['id_pekerjaan'] ?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <!-- [ Main Content ] start -->

    </div>
  </div>
</div>

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
      echo form_open('Pekerjaan/InsertData')
        ?>
      <div class="modal-body">

        <div class="form-group">
          <label>Pekerjaan</label>
          <input name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
        </div>

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
foreach ($pekerjaan as $key => $p) { ?>

  <!-- Modal edit -->
  <div class="modal fade" id="edit<?= $p['id_pekerjaan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
        echo form_open('Pekerjaan/UpdateData/' . $p['id_pekerjaan'])
          ?>
        <div class="modal-body">

          <div class="form-group">
            <label>Pekerjaan</label>
            <input name="pekerjaan" value="<?= $p['pekerjaan'] ?>" class="form-control" placeholder="Pekerjaan" required>
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
  <div class="modal fade" id="delete<?= $p['id_pekerjaan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
        echo form_open('Pekerjaan/DeleteData/' . $p['id_pekerjaan'])
          ?>
        <div class="modal-body">

          Apakah Ingin Hapus Data <b><?= $p['pekerjaan'] ?></b> ..?
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