<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="p-5">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="user" name="user" aria-describedby="usernameHelp"
                                            placeholder="Username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="pwd" name="pwd" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <hr>
                                    </div>
                                    <center>
                                    <a href="#" onclick="proses_login()" id="login" class="btn btn-primary btn-user shadow">Submit</a>
                                    </center>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                            </div>
                        </div>    

                    <div class="col-lg-3">
                    <img width="cover" src="<?= base_url() ?>assets/icon/logologin.png">
                    
                                    
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/login.js"></script>
<?php if($this->session->flashdata('Pesan')): ?>
<?= $this->session->flashdata('Pesan'); ?>
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
function proses_login() {

var usr = $("[name='user']").val();
var pwd = $("[name='pwd']").val();

if (usr == "") {
    validasi('Username masih kosong!', 'warning');
    return false;
} else if (pwd == '') {
    validasi('Password masih kosong!', 'warning');
    return false;
} else {
    cek_user(usr, pwd);
} 

}

function cek_user(usr, pwd, status) {
var link = $('#baseurl').val();
var base_url = link + 'login/proses_login';
$("#login").text("Memuat...");

$.ajax({
    type: 'POST',
    data: {
        user: usr,
        pwd: pwd,
        status: status
    },
    url: base_url,
    dataType: 'json',
    success: function(hasil) {
        // console.log(hasil.respon);
        if (hasil.respon == 'success') {
                pesan('Berhasil Login!', 'success', 'true');
                $("#login").text("Login");
            } else if (hasil.respon == 'failed'){
                pesan('User & Password salah!', 'error', 'false');
                $("#login").text("Login");
            } else if (hasil.respon == 'warning'){
                pesan('Status anda Tidak Aktif, tidak bisa akses!','warning');
                $("#login").text("Login");
            }
    }
});

}
</script>