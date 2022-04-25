<?php session_start();
require_once 'layouts/header.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <div>
                <img src="./img/logo.gif" class="img-logo" alt="logo" srcset="">
                <a class="navbar-brand title-logo" href="index.php">DOWNLOAD IMG</a>
            </div>
            <div>
            <?php if (!isset($_SESSION['username']) ){ ?>
                <a class="navbar-brand title-logo" href="./login.php">LOGIN</a>
            <?php } else { ?>
                <a class="navbar-brand title-logo" href="./logout.php">LOGOUT</a>
            <?php } ?>
            </div>
            
        </div>
    </nav>
    <main class="login-form">
        <div class="cotainer">
            <div class="row col-md-8 justify-content-center fix-img-row">
                <div class="col-md-4">
                    <div class="img-rounded card img-download ">
                        <img src="./img/1.gif" class="card-header"  />
                        <a href="#" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-rounded card img-download">
                        <img src="./img/2.gif" class="card-header"  />
                        <a href="./download.php?file=2.gif" class="card-body">Download</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-rounded card img-download">
                        <img src="./img/3.gif" class="card-header"  />
                        <a href="./download.php?file=3.gif" class="card-body">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let check = <?php echo (isset($_SESSION['username'])) ? 'true' : 'false'; ?>;
        let test = document.querySelectorAll('.img-download a');
        //Khi click vào các thẻ download
        for (var i = 0; i < test.length; i++) {
            test[i].onclick = function (e) {   
                if (!check){
                    e.preventDefault(); 
                    alert('Đăng nhập để tải ảnh');
                }
            }  
        }
    </script>
</body>
</html>