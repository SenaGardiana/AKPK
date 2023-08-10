<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>Jabatan/proses_tambah" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>jabatan/index" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">AKP Jabatan</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Data</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-dark">
                        <h6 class="m-0 font-weight-bold text-white">AKP JABATAN</h6>
                    </div>

                    <div class="card-body">
                        <div class="col-lg-12">
                            <!-- NIP -->
                            <div class="form-group"><label>NIP</label>
                                <input list="data_peserta" class="form-control" name="nip" id="nip" type="text" placeholder="Masukan NIP" onchange="return autofill();">
                            </div>

                            <!-- Nama -->
                            <div class="form-group"><label>Nama Pegawai</label>
                                <input class="form-control" name="nama" id="nama" type="text" >
                            </div>

                             <!-- Jabatan-->
                             <div class="form-group"><label>Jabatan</label>
                                <input class="form-control" name="nama_jabatan" id="nama_jabatan" type="text" >
                            </div>

                             <!-- Status -->
                             <div class="form-group"><label>Status</label>
                                <input class="form-control" name="status" id="status" type="text" >
                            </div>
                        </div>
                    </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table " id="dtHorizontalExample" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
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
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="kt_gap" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="kt_usulan" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="km_gap" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="km_usulan" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="ks_gap" type="text" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="ks_usulan" type="text" >
                                                    </div>
                                                </td>
                                            </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    
                </div>


    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<datalist id="data_peserta">
    <?php
    foreach ($peserta->result() as $p)
    {
        echo "<option value='$p->nip'>$p->nama</option>";
    }
    ?>
    
</datalist>   
<script>
    function autofill(){
        var nim =document.getElementById('nip').value;
        $.ajax({
                       url:"<?php echo base_url();?>Individu/cari",
                       data:'&nip='+nip,
                       success:function(data){
                           var hasil = JSON.parse(data);  
					
			$.each(hasil, function(key,val){ 
				
			    document.getElementById('nip').value=val.nip;
                document.getElementById('nama').value=val.nama;
                document.getElementById('nama_jabatan').value=val.nama_jabatan;
                document.getElementById('status').value=val.status;	
                               
					
				});
			}
                   });
                  
    }
</script>

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