<?php

use App\Core\View;
View::$activeItem = 'dashboard';
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= View::assets('css/bootstrap.css') ?>" />

    <link rel="stylesheet" href="<?= View::assets('vendors/toastify/toastify.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/perfect-scrollbar/perfect-scrollbar.css')?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/favicon.ico') ?>" type="image/x-icon')" />
    <link rel="stylesheet" href="<?= View::assets('css/quan.css') ?>" />
</head>

<body>
    <div id="app">
        <!-- SIDEBAR -->
        <?php View::partial('sidebar')  ?>
        <div id="main" class="layout-navbar">
            <!-- HEADER -->
            <?php View::partial('header')  ?>
            <?php View::partial('changepass')  ?>
            <div id="main-content">
                <div class="page-heading">
                <section id="content-types">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/samples/sgu3.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu1.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu2.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu4.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu5.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu6.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu7.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu8.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/sgu9.jpg" class="d-block w-100">
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">H?????ng d???n l??m b??i thi tr???c nghi???m</h4>
                                        <img class="img-fluid w-50" src="assets/images/samples/gif1.gif">
                                        <p class="card-text">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">1. ?????i ?????n khi ?????n th???i gian l??m b??i.</li>
                                                <li class="list-group-item">2. Click v??o "Thi" ????? ti???n h??nh l??m b??i thi.</li>
                                                <li class="list-group-item">3. ??? m???i c??u h???i, ch???n ????p ??n ????ng.</li>
                                                <li class="list-group-item">4. H???t th???i gian l??m b??i, h??? th???ng s??? t??? ?????ng thu b??i. B???n c?? th??? n???p b??i tr?????c khi th???i gian k???t th??c b???ng c??ch nh???n n??t "N???p b??i".</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h1 class="card-title pl-1">H?????ng d???n s??? d???ng website</h1>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion" id="cardAccordion">
                                            <div class="card">
                                                <div id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                    <span class="collapsed collapse-title"> 1. Gi???ng vi??n/sinh vi??n ????ng nh???p v??o h??? th???ng v???i th??ng tin ????ng nh???p g???m "T??n ????ng nh???p" l?? m?? vi??n ch???c/m?? sinh vi??n v?? m???t kh???u (password) theo quy ?????nh nh?? sau:</span>
                                                </div>
                                                <div id="collapseOne" class="collapse pt-1" aria-labelledby="headingOne" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">- V???i gi???ng vi??n/sinh vi??n ???? t???ng s??? d???ng h??? th???ng, m???t kh???u v???n ???????c gi??? nh?? ??ang s??? d???ng.</li>
                                                            <li class="list-group-item">- V???i gi???ng vi??n/sinh vi??n ch??a s??? d???ng h??? th???ng, m???t kh???u m???c ?????nh l?? "12345678".</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header">
                                                <div id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                                    <span class="collapsed collapse-title">2. Gi???ng vi??n/sinh vi??n ???? t???ng s??? d???ng h??? th???ng, n???u qu??n m???t kh???u c???n th???c hi???n:</span>
                                                </div>
                                                <div id="collapseTwo" class="collapse pt-1" aria-labelledby="headingTwo" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">- Li??n h??? Ph??ng ????o t???o ????? ?????t l???i m???t kh???u v??? "11111111".</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                                    <span class="collapsed collapse-title">3. Ngay sau khi ????ng nh???p l???n ?????u, gi???ng vi??n/sinhvi??n c???n th???c hi???n ngay vi???c ?????i m???t kh???u m???i</span>
                                                </div>
                                                <img class="img-fluid w-50" src="assets/images/samples/gif3.gif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h1 class="card-title pl-1">Vip Pro Team</h1>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion" id="cardAccordion">
                                            <div class="card">
                                                <div id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Tr???n Th??? Thu Thanh</span>
                                                </div>
                                                <div id="collapseFive" class="collapse pt-1" aria-labelledby="headingFive" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/thuthanh.png" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header">
                                                <div id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Phan Thanh Th???ng</span>
                                                </div>
                                                <div id="collapseSix" class="collapse pt-1" aria-labelledby="headingSix" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/thanhthang.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingSeven" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Phan Anh Qu??n</span>
                                                </div>
                                                <div id="collapseSeven" class="collapse pt-1" aria-labelledby="headingSeven" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/anhquan.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> Cao Nguy???n Ph????ng Trang</span>
                                                </div>
                                                <div id="collapseEight" class="collapse pt-1" aria-labelledby="headingEight" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/phuongtrang.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- FOOTER -->
                <?php View::partial('footer')  ?>
            </div>
        </div>
    </div>
    <script src="<?= View::assets('vendors/toastify/toastify.js') ?>"></script>
        <script src="<?= View::assets('vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= View::assets('js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= View::assets('vendors/jquery/jquery.min.js') ?>"></script>
        <script src="<?= View::assets('vendors/jquery/jquery.validate.js') ?>"></script>
        <script src="<?= View::assets('js/main.js') ?>"></script>
        <script src="<?= View::assets('js/changepass.js') ?>"></script>
        <script src="<?= View::assets('js/menu.js') ?>"></script>
        <script src="<?= View::assets('vendors/apexcharts/apexcharts.js') ?>"></script>
        <script src="<?= View::assets('js/api.js') ?>"></script>

</body>

</html