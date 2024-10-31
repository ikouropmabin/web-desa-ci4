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

                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input name="judul_berita" class="form-control" placeholder="Judul Berita">
                            </div>

                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea id="summernote"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Gambar Berita</label>
                                <input type="file" name="gambar_berita" class="form-control" accept="image/*" required>
                            </div>

                            <div class="form-group">
                                <a href="<?= base_url('Berita') ?>" class="btn btn-success">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Total Pendatang Bulan Ini end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Isi Berita',
        height: 250
    });
</script>