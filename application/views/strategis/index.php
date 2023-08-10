<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Maintenance!</h1>
        <a href="<?= base_url() ?>strategis/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Data</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    </div>

    <h1 class="h6 mb-0 text-gray-800">Perangkat Daerah: </h1>
    <h1 class="h6 mb-0 text-gray-800">Nama Pelatihan: </h1>
    <br>

<div class="col-lg-12 mb-4" id="container">

        <!-- Illustrations -->
        <div class="card border-bottom-secondary shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Nama Jabatan</th>
                                <th>Unit Kerja</th>
                                <th>Status Pegawai</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>


    
        <h1 class="h6 mb-0 text-gray-800">Perangkat Daerah: </h1>
        <h1 class="h6 mb-0 text-gray-800">Nama Pelatihan: </h1>
        <br>

        <div class="col-lg-12 mb-4" id="container">

        <div class="card border-bottom-secondary shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Nama Jabatan</th>
                                <th>Unit Kerja</th>
                                <th>Status Pegawai</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
</div>
</div>
<!-- /.container-fluid -->

</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

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