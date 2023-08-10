<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>strategis/tambah2" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>strategis/index" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">AKP Strategis</h1>
            </div>
        </div>

                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-dark">
                        <h6 class="m-0 font-weight-bold text-white">FORM 1</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="dtHorizontalExample" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tujuan</th>
                                        <th>Sasaran</th>
                                        <th>Program</th>
                                        <th>Indikator Kinerja Program</th>
                                        <th>Kegiatan</th>
                                        <th>Sub-Kegiatan</th>
                                        <th>Prioritas</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                            <?php $no=1 ?>
                                            <tr>
                                                <td><?= $no++ ?>.</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="tujuan" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="sasaran" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="program" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="indikator_kinerja" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="kegiatan" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="sub_kegiatan" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <center><input id="prioritas" name="prioritas" type="checkbox" value=""></center>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php ?>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <center><input id="prioritas" name="prioritas" type="checkbox" value=""></center>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <center><input id="prioritas" name="prioritas" type="checkbox" value=""></center>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <center><input id="prioritas" name="prioritas" type="checkbox" value=""></center>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <center><input id="prioritas" name="prioritas" type="checkbox" value=""></center>
                                                    </div>
                                                </td>
                                            </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Kirim</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
    </button></center>

    </form>
    
    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/sbadmin/vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/chart/chart-area.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/pie-chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="<?= base_url(); ?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard.js"></script>

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

    })
});
</script>
<?php endif; ?>

<script>
    function validateForm() {
    var nama_barang = document.forms["myForm"]["nama_barang"].value;
    var posisi = document.forms["myForm"]["posisi"].value;
    var kategori = document.forms["myForm"]["kategori"].value;
    var tanggal_masuk = document.forms["myForm"]["tanggal_masuk"].value;

    if (nama_barang == "") {
        validasi('Nama Barang wajib di isi!', 'warning');
        return false;
    } else if (posisi == '') {
        validasi('Posisi wajib di isi!', 'warning');
        return false;
    } else if (kategori == '') {
        validasi('kategori Barang wajib di isi!', 'warning');
        return false;
    } else if (tanggal_masuk == '') {
        validasi('Tanggal Masuk wajib di isi!', 'warning');
        return false;
    }
}
</script>