<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard </h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4" id="grafik">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                    <h6 class="m-0 font-weight-bold border-0 text-white">Grafik</h6>
                    <div class="col-lg-2">
                        <select name="" id="" class="form-control" onchange="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area" id="chart">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Page level plugins -->
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
