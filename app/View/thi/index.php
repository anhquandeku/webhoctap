<?php

use App\Core\View;
use App\Model\CauHoiModel;
use App\Core\Cookie;

View::$activeItem = 'thi';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= View::assets('css/bootstrap.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/toastify/toastify.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/perfect-scrollbar/perfect-scrollbar.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('js/changepass.js') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/favicon.ico') ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= View::assets('css/quan.css') ?>" />
    <script src="<?= View::assets('js/api.js') ?>"></script>
    <style>
        .modal-pro-title {
            color: green;
            font-weight: bold;
            display: inline-flex;
            padding-right: 10px
        }

        .modal-pro-content {
            color: red;
            padding-right: 60px;
            display: inline-flex;
        }

        .datetime {
            float: left;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            color: red;
        }

        .btn-ques {
            width: 70px;
        }

        .modal-pro-title {
            display: inline-block;
            color: red;
        }

        #pro-id-person {
            color: red;
        }
    </style>
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
                <div class="page-heading" id="page-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="card">
                                    <div id="cover-card"></div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary  justify-content-center">
                                            <li class="page-item" id="pre-quest"><button class="btn btn-outline-primary">
                                                    <span aria-hidden="true"><i class="bi bi-caret-left-fill"></i></span>
                                                </button></li>
                                            <li class="page-item" id="next-quest"><button class="btn btn-outline-primary">
                                                    <span aria-hidden="true"><i class="bi bi-caret-right-fill"></i></span>
                                                </button></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Th???i gian c??n l???i</h4>
                                    </div>
                                    <div class="card-body" style="text-align: center">
                                        <div id="datetime" style="display:inline-block">
                                            <div class="datetime" id="minutes"></div>
                                            <div class="datetime">:</div>
                                            <div class="datetime" id="seconds"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Danh s??ch c??u h???i</h4>
                                    </div>
                                    <div class="card-body" id="form_input">
                                        <div class="buttons" id="cover-ques">
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination justify-content-center" id="submit">
                                    <a href="#" class="btn btn-outline-danger">N???p b??i</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- MODAL KET QUA -->
                <div class="modal fade" id="modal-result" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h5 class="modal-title" style="font-size:25px">K???T QU??? B??I THI</h5>
                            </div>

                            <div class="modal-body">
                                <div id="profile">
                                    <div class="modal-pro-title">M?? s??? sinh vi??n:</div>
                                    <div id="pro-id-person" class="modal-pro-content"></div>
                                    <div class="modal-pro-title">M?? ?????:</div>
                                    <div id="pro-id-exam" class="modal-pro-content"></div>
                                    <div class="modal-pro-title">S??? c??u ????ng:</div>
                                    <div id="pro-id-true" class="modal-pro-content"></div>
                                    <br>
                                    <div class="modal-pro-title">??i???m:</div>
                                    <div id="pro-id-diem" class="modal-pro-content"></div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary " data-bs-dismiss="modal" id="btn-model-close">????ng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TH??NG B??O -->
                <div class="modal fade" id="modal-noti" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title" style="font-size:25px;color:white">N???P B??I</h5>
                            </div>
                            <div class="modal-body" style="color:red;font-weight:bold">
                                B???n c?? ch???c ch???n mu???n n???p b??i?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" id="btn-modal-close-noti">????ng</button>
                                <button type="button" class="btn btn-success " data-bs-dismiss="modal" id="btn-modal-do-noti">Th???c hi???n</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TH??NG B??O GI??? THI-->
                <div class="modal fade" id="modal-time" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title" style="font-size:25px;color:white">TH??NG B??O</h5>
                            </div>
                            <div class="modal-body" style="color:red;font-weight:bold">
                                Hi???n ch??a ?????n gi??? l??m b??i, b???n vui l??ng quay l???i sau nh??!!!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" id="btn-modal-close-noti">????ng</button>
                            </div>
                        </div>
                    </div>
                </div><!-- MODAL TH??NG B??O ???? N???P B??I -->
                <div class="modal fade" id="modal-done" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title" style="font-size:25px;color:white">TH??NG B??O</h5>
                            </div>
                            <div class="modal-body" style="color:red;font-weight:bold">
                                B???n ???? n???p b??i, vui l??ng quay l???i sau!!!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" id="btn-modal-close-noti">????ng</button>
                            </div>
                        </div>
                    </div>
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
    <script src="<?= View::assets('js/api.js') ?>"></script>
    <script src="<?= View::assets('vendors\jquery.table2excel.min_bdjf5z\jquery.table2excel.min.js') ?>"> </script>
    <script>
       
        //L???y ????? thi
        var ajaxDeThi = $.ajax({
            type: 'GET',
            url: 'http://localhost/webhoctapmvc/dethi/getAllDeThi'
        });

        //Th???c hi???n sau khi l???y ???????c ????? thi
        ajaxDeThi.done(function(data) {

            var made = "";
            var index = 0;

            /** H??m so s??nh ng??y gi??? ????? thi v???i hi???n t???i
             *  return: 
             * -1: Ch??a ?????n gi??? v??o thi
             * 1: ???? qua gi??? l??m b??i
             * 0: C?? th??? v??o thi
             */
            function compareTime(datetime, hour) {
                var today = new Date();
                var date = today.getFullYear() + "-" + (((today.getMonth() + 1) < 10) ? "0" : "") + (today.getMonth() + 1) + "-" + ((today.getDate() < 10) ? "0" : "") + today.getDate();
                var time = ((today.getHours() < 10) ? "0" : "") + today.getHours() + ":" + ((today.getMinutes() < 10) ? "0" : "") + today.getMinutes() + ":" + ((today.getSeconds() < 10) ? "0" : "") + today.getSeconds();
                var arrhour = hour.split(":");
                arrhour[1] = (parseInt(arrhour[1]) + 15 < 10 ? "0" : "") + (parseInt(arrhour[1]) + 15).toString();
                if (parseInt(arrhour[1]) > 60) {
                    arrhour[0] = (parseInt(arrhour[0]) + 1 < 10 ? "0" : "") + (parseInt(arrhour[0]) + 1).toString();
                    arrhour[1] = (parseInt(arrhour[1] - 60)).toString();
                }
                var limitTime = arrhour[0] + ":" + arrhour[1] + ":" + arrhour[2];
                if (date < datetime) {
                    return -1;
                } else if (date > datetime) {
                    return 1;
                } else {
                    if (time < hour) return -1;
                    else if (time > limitTime) return 1;
                    else return 0;
                }
            };

            //L???y danh s??ch m??n h???c c???a sinh vi??n
            var listMaMon = localStorage.getItem('danhSachMaMon');
            var arrMaMon = listMaMon.split(",");
            arrMaMon[0] = arrMaMon[0].substring(2, arrMaMon[0].length - 1);
            arrMaMon[arrMaMon.length - 1] = arrMaMon[arrMaMon.length - 1].substring(1, arrMaMon[arrMaMon.length - 1].length - 2);
            for (var i = 1; i < arrMaMon.length - 1; i++) {
                arrMaMon[i] = arrMaMon[i].substring(1, arrMaMon[i].length - 1);
            }

            //Ki???m tra xem m??n n??o ???????c thi trong k??? thi hi???n t???i:
            function getMaDe() {
                for (var i = 0; i < arrMaMon.length; i++) {
                    for (var j = 0; j < parseInt(data['SoLuong']); j++) {
                        if (arrMaMon[i] == data[j]['MaMon']) {
                            switch (compareTime(data[j]['NgayThi'], data[j]['GioThi'])) {
                                case -1:
                                    made = "";
                                    break;
                                case 0:
                                    made = data[j]['MaDe'];
                                    index = j;
                                    return made;
                                default:
                                    made = "";
                                    break;
                            }
                        }
                    }
                }
                return made;
            }
            //L???y m?? ?????:
            made = getMaDe();

            //N???u m?? ????? r???ng t???c ch??a c?? m??n n??o ???????c thi, in ra modal th??ng b??o:
            if (made == "") {
                $('#page-content').hide();
                $('#modal-time').modal('show');
                $('#modal-time').on('hidden.bs.modal', function() {
                    window.location.href = 'http://localhost/webhoctapmvc/';
                })
            } else {
                //L???y tham s??? ki???m tra b??i thi:
                var checkIsset = $.ajax({
                    type: 'GET',
                    url: 'http://localhost/webhoctapmvc/baithi/checkIsset',
                    data: {
                        masv: $('#mail').html(),
                        made: made,
                    }
                });
                checkIsset.done(function(dt) {

                    //In th??ng b??o khi ???? l??m b??i: 
                    if (dt != 0) {
                        $('#page-content').hide();
                        $('#modal-done').modal('show');
                        $('#modal-done').on('hidden.bs.modal', function() {
                            window.location.href = 'http://localhost/webhoctapmvc/';
                        })
                    } else {

                        //H??m t???o n??t c??u h???i
                        function creatCardQuestion($num) {
                            var htmlStr = "";
                            for (var i = 1; i <= $num; i++) {
                                htmlStr += '<button class="btn btn-sm btn-outline-info btn-question" style="width:65px">C??u ' + String(i);
                            }
                            $("#cover-ques").html(htmlStr);
                        }

                        //H??m l???y d??? li???u t??? database:
                        function getQuest(maDe, orderQp) {

                            var datas = {
                                made: maDe.toString(),
                                orderQ: (parseInt(orderQp) - 1).toString()
                            }
                            $.ajax({
                                url: 'http://localhost/webhoctapmvc/cauhoi/getCauHoiOfDe',
                                type: 'GET',
                                data: datas,
                                success: function(data) {
                                    $('#quest-content-' + (parseInt(orderQp)).toString()).html("C??u " + (parseInt(orderQp)).toString() + ": " + data['NoiDung']);
                                    $('#quest-a-' + (parseInt(orderQp)).toString()).html(data['A']);
                                    $('#quest-b-' + (parseInt(orderQp)).toString()).html(data['B']);
                                    $('#quest-c-' + (parseInt(orderQp)).toString()).html(data['C']);
                                    $('#quest-d-' + (parseInt(orderQp)).toString()).html(data['D']);
                                }
                            });
                        }

                        //H??m t???o html ????? t???o card c??u h???i:
                        function createHtml(idCart, idQuest, idA, idB, idC, idD) {
                            return '<div class="card-quest" id="' + idCart + '">\
    <div class="card-header">\
        <h4 id="' + idQuest + '"></h4>\
    </div>\
        <div class="card-body">\
            <div class="alert alert-light-success color-success">\
                <div class="form-check form-check-success">\
                    <input class="form-check-input" type="radio" name="choice' + idQuest + '" id="flexRadioDefault1" value="A">\
                    <label class="form-check-label" for="flexRadioDefault1" id="' + idA + '"></label>\
                </div>\
            </div>\
            <div class="alert alert-light-warning color-warning">\
                <div class="form-check form-check-warning">\
                    <input class="form-check-input" type="radio" name="choice' + idQuest + '" id="flexRadioDefault1" value="B">\
                    <label class="form-check-label" for="flexRadioDefault2" id="' + idB + '"> </label>\
                </div>\
            </div>\
            <div class="alert alert-light-danger color-danger">\
                <div class="form-check form-check-danger">\
                    <input class="form-check-input" type="radio" name="choice' + idQuest + '" id="flexRadioDefault1" value="C">\
                    <label class="form-check-label" for="flexRadioDefault3" id ="' + idC + '"> </label>\
                </div>\
            </div>\
            <div class="alert alert-light-info color-info">\
                <div class="form-check form-check-info">\
                    <input class="form-check-input" type="radio" name="choice' + idQuest + '" id="flexRadioDefault1" value="D">\
                    <label class="form-check-label" for="flexRadioDefault4" id="' + idD + '"> </label>\
                </div>\
            </div>\
        </div>\
</div>'
                        }

                        //H??m t???o card c??u h???i ????? show n???i dung c??u h???i:
                        function createCart(numQuest, maDe) {
                            for (var i = 1; i <= numQuest; i++) {
                                var idCart = 'card-' + i.toString();
                                var idQuest = 'quest-content-' + i.toString();
                                var idA = 'quest-a-' + i.toString();
                                var idB = 'quest-b-' + i.toString();
                                var idC = 'quest-c-' + i.toString();
                                var idD = 'quest-d-' + i.toString();
                                $("#cover-card").append(createHtml(idCart, idQuest, idA, idB, idC, idD));
                                getQuest(maDe, i);
                            }
                        }

                        //H??m show card c??u h???i ch??? ?????nh:
                        function showCard(selectedCard) {
                            $(".card-quest").hide();
                            $("#card-" + selectedCard.toString()).show();
                        }

                        //Bi???n l??u c??u h???i hi???n t???i
                        var current_quest = 1;

                        //Bi???n l??u s??? l?????ng c??u h???i
                        var number_quest = data[index]['SoLuongCauHoi'];

                        //Bi???n l??u l???i k???t qu??? b??i l??m
                        var result = new Array();
                        for (var i = 1; i <= number_quest + 1; i++) {
                            result.push("#");
                        }

                        //L???y th???i gian thi:
                        function getTimeExam() {
                            var hour = data[index]['GioThi'];
                            var thoigian = data[index]['ThoiGianLamBai'];
                            var arr = hour.split(":");
                            arr[1] = (parseInt(arr[1]) + parseInt(thoigian)).toString();
                            if (parseInt(arr[1]) + parseInt(thoigian) > 60) {
                                var limit = Math.round(parseInt(arr[1]) / 60);
                                arr[0] = (parseInt(arr[0]) + limit).toString();
                                arr[1] = (parseInt(arr[1]) - limit * 60).toString();
                            };
                            var current = new Date();
                            if (arr[1] < current.getMinutes()) {
                                arr[0] = (parseInt(arr[0]) - 1).toString();
                                arr[1] = (parseInt(arr[1]) + 60).toString();
                            }

                            arr[0] = (parseInt(arr[0]) - parseInt(current.getHours())).toString();
                            arr[1] = ((parseInt(arr[0]) > 0 ? parseInt(arr[0]) * 60 : 0) + (parseInt(arr[1]) - parseInt(current.getMinutes()))).toString();

                            $("#minutes").html(arr[1]);
                            $("#seconds").html((60 - parseInt(current.getSeconds())));
                        }
                        getTimeExam();

                        //H??m ?????m ng?????c th???i gian
                        var timeout = null;

                        function countDowntStart() {
                            var getTime = $('.datetime');
                            var minutes = Number(getTime[0].innerHTML);
                            var seconds = Number(getTime[2].innerHTML);

                            if (seconds == 0) {
                                minutes = minutes - 1;
                                seconds = 59;
                            }

                            if (minutes == -1) {
                                sendResult(result, made);
                                clearTimeout(timeout);
                                return false;
                            }

                            timeout = setTimeout(function() {
                                seconds--;
                                if (minutes.toString().length < 2) {
                                    getTime[0].innerHTML = "0" + minutes.toString();
                                } else {
                                    getTime[0].innerHTML = minutes.toString();
                                }

                                if (seconds.toString().length < 2) {
                                    getTime[2].innerHTML = "0" + seconds.toString();
                                } else {
                                    getTime[2].innerHTML = seconds.toString();
                                }
                                countDowntStart();
                            }, 1000);
                        }
                        countDowntStart();

                        //Kh???i t???o b???ng c??u h???i: 
                        creatCardQuestion(data[index]['SoLuongCauHoi']);

                        //Kh???i t???o n???i dung c??u h???i
                        createCart(data[index]['SoLuongCauHoi'], data[index]['MaDe']);

                        //M???c ?????nh show c??u h???i ?????u ti??n:
                        showCard(1);

                        //B???t s??? ki???n click c??u ph??a tr?????c:
                        $('#pre-quest').click(function() {
                            if (current_quest != 1) {
                                current_quest--;
                                showCard(current_quest);
                            }
                        })

                        //B???t s??? ki???n click c??u ti???p theo:
                        $('#next-quest').click(function() {
                            if (current_quest < number_quest) {
                                current_quest++;
                                showCard(current_quest);
                            }
                        })

                        //B???t s??? ki???n click chuy???n c??u: 
                        $('.btn-question').click(function() {
                            var btnName = $(this).html();

                            //X??? l?? s??? c??u:
                            var btnNum = parseInt(btnName.substr(3));
                            current_quest = btnNum;
                            showCard(current_quest);
                        })

                        //B???t s??? ki???n khi ch???n ????p ??n:
                        $("input[type='radio']").change(function() {
                            result[current_quest] = $(this).val();
                            document.getElementsByClassName('btn-question')[current_quest - 1].style.background = '#56b6f7';
                            document.getElementsByClassName('btn-question')[current_quest - 1].style.color = 'white';
                        })

                        //N???p b??i khi ???n n??t
                        $('#submit').click(function() {
                            $('#modal-noti').modal('show');
                            $('#btn-modal-do-noti').click(function() {
                                sendResult(result, data[index]['MaDe']);
                            })
                        })

                        //B???t s??? ki???n ????ng modal k???t qu???: 
                        $('#btn-modal-close').click(function() {
                            $('#modal-result').modal('hide');
                        })

                        //B???t s??? ki???n khi t???t modal k???t qu???, chuy???n h?????ng v??? trang ch???:
                        $('#modal-result').on('hidden.bs.modal', function() {
                            window.location.href = 'http://localhost/webhoctapmvc/';
                        })

                        //T???t sidebar
                        $('.sidebar-link').click(function() {
                            Toastify({
                                text: "B???n kh??ng th??? tho??t khi ch??a n???p b??i",
                                duration: 1000,
                                close: true,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "#FF9933",
                            }).showToast();
                            return false;
                        })
                        //H??m x??? l?? k???t qu???: 
                        function sendResult(result, made) {

                            var datas = {
                                maSV: <?php echo Cookie::get('user_email') ?>,
                                maDe: made,
                                resultSV: result,
                                makythi: data[index]['MaKyThi'],
                            }

                            $.ajax({
                                url: 'http://localhost/webhoctapmvc/baithi/addBaiThi',
                                type: 'GET',
                                data: datas,
                                success: function(dt) {
                                    $('#pro-id-person').html(dt['MaSV']);
                                    $('#pro-id-exam').html(dt['MaDe']);
                                    $('#pro-id-true').html(dt['SoCauDung'] + "/" + data[index]['SoLuongCauHoi'].toString());
                                    $('#pro-id-diem').html(dt['Diem']);

                                    //B???t modal v?? th??ng b??o
                                    $('#modal-result').modal('show');
                                    Toastify({
                                        text: "N???p b??i th??nh c??ng",
                                        duration: 1000,
                                        close: true,
                                        gravity: "top",
                                        position: "center",
                                        backgroundColor: "#4fbe87",
                                    }).showToast();
                                },
                                error: function(dt) {
                                    Toastify({
                                        text: "N???p b??i th???t b???i",
                                        duration: 1000,
                                        close: true,
                                        gravity: "top",
                                        position: "center",
                                        backgroundColor: "#4fbe87",
                                    }).showToast();
                                }
                            });
                        }
                    }
                })
            }
        });
    </script>
</body>

</html>