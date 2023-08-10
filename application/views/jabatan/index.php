<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Maintenance!</h1>
        <a href="<?= base_url() ?>jabatan/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Data</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    </div>

    <h1 class="h6 mb-0 text-gray-800">Perangkat Daerah: BKPSDM</h1>
        <br>


<div class="col-lg-12 mb-4" id="container">

        <!-- Illustrations -->
        <div class="card border-bottom-secondary shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">NIP</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th rowspan="2">Jabatan</th>
                                <th rowspan="2">Status</th>
                                <th colspan="2"><center>Kompetensi Teknis</center></th>
                                <th colspan="2"><center>Kompetensi Manajerial</center></th>
                                <th colspan="2"><center>Kompetensi Sosial Kultural</center></th>
                            </tr>
                            <tr>
                                <th>Gap Kompetensi</th>
                                <th>Usulan Pelatihan</th>
                                <th>Gap Kompetensi</th>
                                <th>Usulan Pelatihan</th>
                                <th>Gap Kompetensi</th>
                                <th>Usulan Pelatihan</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php $no=1; foreach ($jabatan as $j) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td>
                                    <?php if($j->nip == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->nip ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->nama == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->nama ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->nama_jabatan == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->nama_jabatan ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->status == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->status ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->kt_gap == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->kt_gap ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->kt_usulan == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->kt_usulan ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->km_gap == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->km_gap ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->km_usulan == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->km_usulan ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->ks_gap == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->ks_gap ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($j->ks_usulan == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $j->ks_usulan ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
<script src="<?= base_url(); ?>assets/js/loading.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formbarang.js"></script>
<script src="<?= base_url(); ?>assets/plugin/chosen/chosen.jquery.min.js"></script>

<script>
$('.chosen').chosen({
    width: '100%',

});
</script>

<?php if($this->session->flashdata('Pesan')): ?>

<?php else: ?>
<script>
$(document).ready(function() {
    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        $("#barang").addClass("bounceIn");
        $("#supplier").addClass("bounceIn");
        $("#stok").addClass("bounceIn");
        $("#user").addClass("bounceIn");
        $("#grafik").addClass("bounceIn");
        $("#grafikpie").addClass("bounceIn");
        $("#bmterakhir").addClass("bounceIn");
        $("#bkterakhir").addClass("bounceIn");
    })
});
</script>
<?php endif; ?>