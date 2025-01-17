@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section_gap" style="padding: 200px 0 50px 0;">
    <div class="container">
        <div class="text-center" style="margin: -50px 0 50px 0;">
            <h2 class="text-left" style="color: #000;">7 Урок <br>Разработка функционала администратора</h2>
        </div>
        <div class="">
            <div class="row">
                <div class="offset-lg-12 col-lg-12">
                    <div class="mt-30">
                        <style>
                            p {
                                text-align: justify;
                                font-size: 20px;
                            }
                        </style>
                        <p>
                            Разработать функционал администратора. Администратора должен иметь возможность выполнять следующие функции: просмотр всех сотрудников;
                            Регистрация новых пользователей в системе;
                            Назначение/снятие работников на смены;
                            просмотр всех заказов определенной смены;
                            Увольнение работников;
                        <p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Для того чтобы сделать задание, создать файл AdminRegister.jsx, скопируем в файл всё содержимое из папка WSR-Master "admin-register.html".
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px;" class="img-fluid" src="../assets/img/tasks/tasks7New.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img text-center">
                        <img style="margin-top: 50px; width: 450px; height: 400px" class="img-fluid" src="../assets/img/tasks/newOff.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p style="text-indent: 20px; margin-top: 50px;">
                            После того как перетащив весь контент из html в JSX, нужно задачать стили и дизайн окну администратора, чтобы их выводить на экран, для этого пропишем код, который можно скопировать из листинга.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="DIV_1">
                <div id="DIV_2">
                    <div id="DIV_3">
                        <div id="DIV_4">
                            <svg id="svg_5">
                                <path id="path_6">
                                </path>
                            </svg> Terminal
                        </div>
                        <div id="DIV_7" style="cursor: pointer;" onclick="copyToClipboard('#DIV_12')">
                            <button id="BUTTON_8">
                            </button>
                            <svg id="svg_9">
                                <path id="path_10">
                                </path>
                                <path id="path_11">
                                </path>
                            </svg>
                            <!-- -->
                            Copy
                        </div>
                    </div>
                </div>
                <div id="DIV_12">

* {<br>
  margin: 0;<br>
  padding: 0;<br>
}<br>

body {<br>
  background: linear-gradient(#113156, #070731);<br>
  height: 100vh;<br>
  width: 100vw;<br>
}<br>

#container {<br>
  max-width: 100vw;<br>
  height: 100vh;<br>
  position: fixed;<br>
  width: 100%;<br>
  left: 50%;<br>
  top: 0;<br>
  transform: translate(-50%);<br>
  display: flex;<br>
  align-items: center;<br>
  justify-content: center;<br>
  background-image: radial-gradient(#203462 2px, transparent 2px);<br>
  background-size: calc(10 * 2px) calc(10 * 2px);<br>
}<br>

.container-inner {<br>
  background: #a4363e;<br>
  padding: 40px;<br>
  border-radius: 30px;<br>
  box-shadow: 5px 6px 0px -2px #620d15, -6px 5px 0px -2px #620d15,<br>
    0px -2px 0px 2px #ee9191, 0px 10px 0px 0px #610c14,<br>
    0px -10px 0px 1px #e66565, 0px 0px 180px 90px #0d2f66;<br>
  width: 640px;<br>
}<br>

.content {<br>
  font-family: "Skranji", cursive;<br>
  background: radial-gradient(#fffbf3, #ffe19e);<br>
  padding: 24px;<br>
  box-sizing: border-box;<br>
  border-radius: 20px 18px 20px 18px;<br>
  box-shadow: 0px 0px 0px 6px #5e1e21, 0px 0px 8px 6px #84222b,<br>
    inset 0px 0px 15px 0px #614506, 6px 6px 1px 1px #e66565,<br>
    -6px 6px 1px 1px #e66565;<br>
  text-align: center;<br>

  p {<br>
    font-size: 56px;<br>
    padding: 40px;<br>
    box-sizing: border-box;<br>
    color: #461417;<br>
  }<br>
}<br>

.buttons {<br>
  margin-top: 40px;<br>
  display: flex;<br>
  justify-content: normal;<br>
  align-items: center;<br>
  gap: 30px;<br>
  box-sizing: border-box;<br>

  button {<br>
    padding: 20px;<br>
    flex: 1;<br>
    border-radius: 20px;<br>
    border: 2px solid #49181e;<br>
    font-family: "Skranji", cursive;<br>
    color: #fff;<br>
    font-size: 32px;<br>
    text-shadow: 1px 2px 3px #000000;<br>
    cursor: pointer;<br>

    &.confirm {<br>
      background: linear-gradient(#ced869, #536d1b);<br>
      box-shadow: 0px 0px 0px 4px #7e1522, 0px 2px 0px 3px #e66565;<br>
      &:hover {<br>
      box-shadow: 0px 0px 0px 4px #7e1522, 0px 2px 0px 3px #e66565,<br>
        inset 2px 2px 10px 3px #4e6217;<br>
      } <br>
    }<br>

    &.cancel {<br>
      background: linear-gradient(#ea7079, #891a1a);<br>
      box-shadow: 0px 0px 0px 4px #7e1522, 0px 2px 0px 3px #e66565;<br>
      &:hover {<br>
      box-shadow: 0px 0px 0px 4px #7e1522, 0px 2px 0px 3px #e66565,<br>
        inset 2px 2px 10px 3px #822828;<br>
      }<br>
    }<br>
  }<br>
} <br>

                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Итоговый результат действий, это возможность зарегистрировать сотрудников, результат того, что должно получиться можно увидеть на рисунке.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px; border: 1px solid #000;" class="img-fluid" src="../assets/img/tasks/registerAdmin1.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px;" class="img-fluid" src="../assets/img/tasks/tasks7New.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Для того чтобы сделать Увольнение сотрудников, создадим файл Admin.jsx, скопируем всё содержимое из папка WSR-Master "admin.html".
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p style="text-indent: 20px; margin-top: 50px;">
                            После того как перетащив весь контент из html в JSX, нужно получить данные из базы данных чтобы их выводить на экран, для этого пропишем код, который можно скопировать из листинга.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img text-center">
                        <img style="margin-top: 50px; width: 450px; height: 400px" class="img-fluid" src="../assets/img/tasks/newOff.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="DIV_1">
                <div id="DIV_2">
                    <div id="DIV_3">
                        <div id="DIV_4">
                            <svg id="svg_5">
                                <path id="path_6">
                                </path>
                            </svg> Terminal
                        </div>
                        <div id="DIV_7" style="cursor: pointer;" onclick="copyToClipboard('#DIV_12')">
                            <button id="BUTTON_8">
                            </button>
                            <svg id="svg_9">
                                <path id="path_10">
                                </path>
                                <path id="path_11">
                                </path>
                            </svg>
                            <!-- -->
                            Copy
                        </div>
                    </div>
                </div>
                <div id="DIV_12">
                    constructor(props) {
                    super(props);
                    this.state = {
                    users: [],
                    idUser: '',
                    };
                    }

                    componentDidMount() {
                    fetch('http://127.0.0.1:8000/api-cafe/work-shift')
                    .then((res) => res.json())
                    .then((result) => {
                    this.setState({
                    users: result,
                    });
                    })
                    .catch((error) => console.log(error));
                    }

                    submit(id, userId) {
                    console.log(userId);
                    fetch(
                    'http://127.0.0.1:8000/api-cafe/work-shift/' + id + '/user/' + userId,
                    {
                    method: 'DELETE',
                    headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    },
                    }
                    ).then(function (response) {
                    response.json().then(function (resp) {
                    console.log(resp);
                    window.location.href = 'http://localhost:3000/AdminShift';
                    });
                    });
                    }
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px; border: 1px solid #000;" class="img-fluid" src="../assets/img/tasks/registerAdmin2.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Итоговый результат действий, это возможность уволить сотрудников, результат того, что должно получиться можно увидеть на рисунке.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Для того чтобы сделать возможность добавлять сотрудников на смены, создадим файл AdminShift.jsx, скопируем всё содержимое из папка WSR-Master "admin-shift.html".
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px;" class="img-fluid" src="../assets/img/tasks/tasks7New.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img text-center">
                        <img style="margin-top: 50px; width: 450px; height: 400px" class="img-fluid" src="../assets/img/tasks/newOff.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p style="text-indent: 20px; margin-top: 50px;">
                            После того как перетащив весь контент из html в JSX, нужно получить данные из базы данных чтобы их выводить на экран, для этого пропишим код, который можно cкопировать из листинга.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="DIV_1">
                <div id="DIV_2">
                    <div id="DIV_3">
                        <div id="DIV_4">
                            <svg id="svg_5">
                                <path id="path_6">
                                </path>
                            </svg> Terminal
                        </div>
                        <div id="DIV_7" style="cursor: pointer;" onclick="copyToClipboard('#DIV_12')">
                            <button id="BUTTON_8">
                            </button>
                            <svg id="svg_9">
                                <path id="path_10">
                                </path>
                                <path id="path_11">
                                </path>
                            </svg>
                            <!-- -->
                            Copy
                        </div>
                    </div>
                </div>
                <div id="DIV_12">
                    constructor(props) {
                    super(props);
                    this.state = {
                    users: [],
                    idUser: '',
                    };
                    }

                    componentDidMount() {
                    fetch('http://127.0.0.1:8000/api-cafe/work-shift')
                    .then((res) => res.json())
                    .then((result) => {
                    this.setState({
                    users: result,
                    });
                    })
                    .catch((error) => console.log(error));
                    }

                    submit(id, userId) {
                    console.log(userId);
                    fetch(
                    'http://127.0.0.1:8000/api-cafe/work-shift/' + id + '/user/' + userId,
                    {
                    method: 'DELETE',
                    headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    },
                    }
                    ).then(function (response) {
                    response.json().then(function (resp) {
                    console.log(resp);
                    window.location.href = 'http://localhost:3000/AdminShift';
                    });
                    });
                    }
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Итоговый результат действий, это возможность посмотреть и назаначи на смену сотрудников, результат того что должно получиться можно увидить на рисунке.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px; border: 1px solid #000;" class="img-fluid" src="../assets/img/tasks/newOff2.png" alt="">
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px;" class="img-fluid" src="../assets/img/tasks/tasks7New.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Для того чтобы сделать просмотр заказов определённого заказа, создадим файл AdminOrders.jsx, скопируем всё содержимое из папка WSR-Master "admin-orders.html".
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p style="text-indent: 20px; margin-top: 50px;">
                            После того как перетащив весь контент из html в JSX, нужно получить данные из базы данных чтобы их выводить на экран, для этого пропишим код, который можно скопировать из листинга.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img text-center">
                        <img style="margin-top: 50px; width: 450px; height: 400px" class="img-fluid" src="../assets/img/tasks/newOff.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="DIV_1">
                <div id="DIV_2">
                    <div id="DIV_3">
                        <div id="DIV_4">
                            <svg id="svg_5">
                                <path id="path_6">
                                </path>
                            </svg> Terminal
                        </div>
                        <div id="DIV_7" style="cursor: pointer;" onclick="copyToClipboard('#DIV_12')">
                            <button id="BUTTON_8">
                            </button>
                            <svg id="svg_9">
                                <path id="path_10">
                                </path>
                                <path id="path_11">
                                </path>
                            </svg>
                            <!-- -->
                            Copy
                        </div>
                    </div>
                </div>
                <div id="DIV_12">
                    constructor(props) {
                    super(props);
                    this.state = {
                    users: [],
                    idUser: '',
                    };
                    }

                    componentDidMount() {
                    fetch('http://127.0.0.1:8000/api-cafe/work-shift')
                    .then((res) => res.json())
                    .then((result) => {
                    this.setState({
                    users: result,
                    });
                    })
                    .catch((error) => console.log(error));
                    }

                    submit(id, userId) {
                    console.log(userId);
                    fetch(
                    'http://127.0.0.1:8000/api-cafe/work-shift/' + id + '/user/' + userId,
                    {
                    method: 'DELETE',
                    headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    },
                    }
                    ).then(function (response) {
                    response.json().then(function (resp) {
                    console.log(resp);
                    window.location.href = 'http://localhost:3000/AdminShift';
                    });
                    });
                    }
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img style="width: 450px; height: 350px; border: 1px solid #000;" class="img-fluid" src="../assets/img/tasks/final2.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            Итоговый результат действий, это возможность смотреть заказы, результат того, что должно получиться можно увидить на рисунке.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30" style="margin-top: 30px;">
                        <h4 class="text-uppercase">Видео ролик к уроку</h4>
                        <p style="text-indent: 20px;">
                            В видео подробно рассказано и показано, как разработать фунционал администратора.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio_right_text mt-30">
                        <iframe class="video" width="500" height="300" src="https://www.youtube.com/embed/1_9c5KrMdpE" title="React JS фундаментальный курс от А до Я" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Portfolio Details Area =================-->
<a class="text-center" style="cursor: pointer; color: #000; margin-bottom: 10px;" onclick="window.history.go(-1); return false;">
    <div class="main_title text-center">
        <span class="primary_btn" style="width: 150px;">Назад</span>
    </div>
</a>
<h1 class="text-center mb-5">Урок №:</h1>
<!--================ Srart Brand Area =================-->
<section class="brand_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('sixpagesSpa') }}">
                <div class="single-brand-item d-table">
                    <div class="d-table-cell text-center">
                        <h1>8</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!--================ End Brand Area =================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>
<style>
    @media (max-width: 1199px) {
        .brand_area {
            padding-bottom: 160px;
        }
    }

    @media (max-width: 530px) {
        .video {
            width: 320px;
            height: 200px;
        }
    }

    #DIV_1 {
        block-size: 104px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-end-end-radius: 8px;
        border-end-start-radius: 8px;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-start-end-radius: 8px;
        border-start-start-radius: 8px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: auto;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        perspective-origin: 439.6px 52px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 52px;
        width: auto;
        background: rgb(94, 104, 126) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        border-radius: 8px;
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1*/

    #DIV_1:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1:after*/

    #DIV_1:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_1:before*/

    #DIV_2 {
        block-size: 34px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-start-end-radius: 8px;
        border-start-start-radius: 8px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 34px;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        perspective-origin: 439.6px 17px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 17px;
        width: auto;
        background: rgb(78, 87, 105) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        border-radius: 8px 8px 0px 0px;
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2*/

    #DIV_2:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2:after*/

    #DIV_2:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 17px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_2:before*/

    #DIV_3 {
        block-size: 34px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        bottom: 0px;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: flex;
        height: 34px;
        inline-size: 879.2px;
        inset-block-end: 0px;
        inset-block-start: 0px;
        inset-inline-end: 0px;
        inset-inline-start: 0px;
        justify-content: space-between;
        left: 0px;
        overflow-wrap: break-word;
        padding-block-end: 2px;
        padding-block-start: 2px;
        padding-inline-end: 16px;
        padding-inline-start: 16px;
        perspective-origin: 439.6px 17px;
        position: relative;
        right: 0px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        top: 0px;
        transform-origin: 439.6px 17px;
        width: auto;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
        padding: 2px 16px;
    }

    /*#DIV_3*/

    #DIV_3:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_3:after*/

    #DIV_3:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_3:before*/

    #DIV_4 {
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 30px;
        inline-size: 77.4px;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 38.7px 15px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 38.7px 15px;
        width: 77.4px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4*/

    #DIV_4:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4:after*/

    #DIV_4:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_4:before*/

    #svg_5 {
        align-self: center;
        block-size: 13px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: inline-flex;
        fill: none;
        height: 13px;
        inline-size: 13px;
        margin-inline-end: 8px;
        overflow-clip-margin: content-box;
        overflow-wrap: break-word;
        perspective-origin: 6.5px 6.5px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 6.5px 6.5px;
        vertical-align: middle;
        width: 13px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        margin: 0px 8px 0px 0px;
        outline: rgb(246, 247, 249) none 0px;
        overflow: hidden;
    }

    /*#svg_5*/

    #svg_5:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_5:after*/

    #svg_5:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_5:before*/

    #path_6 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        d: path("M 2.40299 2.61279 H 14.403 C 14.5798 2.61279 14.7494 2.68303 14.8744 2.80806 C 14.9994 2.93308 15.0697 3.10265 15.0697 3.27946 V 13.9461 C 15.0697 14.1229 14.9994 14.2925 14.8744 14.4175 C 14.7494 14.5426 14.5798 14.6128 14.403 14.6128 H 2.40299 C 2.22618 14.6128 2.05661 14.5426 1.93159 14.4175 C 1.80657 14.2925 1.73633 14.1229 1.73633 13.9461 V 3.27946 C 1.73633 3.10265 1.80657 2.93308 1.93159 2.80806 C 2.05661 2.68303 2.22618 2.61279 2.40299 2.61279 Z M 8.403 10.6128 V 11.9461 H 12.403 V 10.6128 H 8.403 Z M 6.01233 8.61279 L 4.12699 10.4981 L 5.06966 11.4415 L 7.89833 8.61279 L 5.06966 5.78413 L 4.12699 6.72746 L 6.01233 8.61279 Z");
        display: block;
        fill: rgb(246, 247, 249);
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6*/

    #path_6:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        fill: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6:after*/

    #path_6:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        fill: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_6:before*/

    #DIV_7 {
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: 30px;
        inline-size: 56.325px;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 28.1625px 15px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 28.1625px 15px;
        width: 56.325px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7*/

    #DIV_7:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7:after*/

    #DIV_7:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_7:before*/

    #BUTTON_8 {
        appearance: button;
        block-size: 30px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-end-width: 0px;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-block-start-width: 0px;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-end-width: 0px;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        border-inline-start-width: 0px;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        height: 30px;
        inline-size: 56.325px;
        overflow-wrap: break-word;
        padding-block-end: 0px;
        padding-block-start: 0px;
        padding-inline-end: 0px;
        padding-inline-start: 0px;
        perspective-origin: 28.1625px 15px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 28.1625px 15px;
        width: 56.325px;
        background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
        padding: 0px;
    }

    /*#BUTTON_8*/

    #BUTTON_8:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#BUTTON_8:after*/

    #BUTTON_8:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#BUTTON_8:before*/

    #svg_9 {
        align-self: center;
        block-size: 13px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: inline-flex;
        fill: none;
        height: 13px;
        inline-size: 13px;
        margin-inline-end: 8px;
        overflow-clip-margin: content-box;
        overflow-wrap: break-word;
        perspective-origin: 6.5px 6.5px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 6.5px 6.5px;
        vertical-align: middle;
        width: 13px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        margin: 0px 8px 0px 0px;
        outline: rgb(246, 247, 249) none 0px;
        overflow: hidden;
    }

    /*#svg_9*/

    #svg_9:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_9:after*/

    #svg_9:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        display: block;
        fill: none;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#svg_9:before*/

    #path_10 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        d: path("M 5.40382 15.3671 C 5.03332 15.1901 4.70081 14.9381 4.42481 14.6286 C 4.34831 14.5431 4.23931 14.5001 4.12981 14.5206 L 3.66181 14.6081 C 3.33531 14.6691 3.02032 14.4361 2.96232 14.0876 L 1.30981 4.12512 C 1.28181 3.95662 1.31731 3.7861 1.40981 3.6456 C 1.50231 3.5051 1.64082 3.41162 1.79932 3.38162 L 3.22131 3.00012 C 3.37681 2.97062 3.48981 2.82761 3.48981 2.65961 V 1.9101 C 3.48981 1.8276 3.49381 1.74561 3.49931 1.66461 C 3.50931 1.53461 3.35181 1.57211 3.35181 1.57211 L 1.64381 2.0076 C 1.18481 2.0936 0.751316 2.32662 0.451316 2.70612 C 0.0808162 3.17362 -0.0686885 3.77259 0.0293115 4.36459 L 1.68231 14.3281 C 1.84531 15.3081 2.65031 16.0001 3.55631 16.0001 C 3.66531 16.0001 3.77631 15.9896 3.88731 15.9691 L 5.36632 15.6916 C 5.52332 15.6626 5.54982 15.4366 5.40382 15.3671 Z M 14.9331 4.55801 H 12.9116 C 12.1351 4.55801 11.5001 3.91502 11.5001 3.12952 V 1.06802 C 11.5001 0.480524 11.0196 0 10.4321 0 H 7.44161 C 6.36911 0 5.50011 0.879508 5.50011 1.96451 V 12.1665 C 5.50011 13.179 6.33412 14 7.36262 14 H 14.1371 C 15.1661 14 16.0001 13.179 16.0001 12.1665 V 5.625 C 16.0001 5.038 15.5201 4.55801 14.9331 4.55801 Z");
        display: block;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10*/

    #path_10:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10:after*/

    #path_10:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_10:before*/

    #path_11 {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        d: path("M 12.5888 0.0914385 C 12.4493 0.00843847 12.5158 0.252449 12.5158 0.252449 C 12.5653 0.428449 12.5918 0.613451 12.5918 0.804451 V 2.90296 C 12.5918 3.17646 12.8158 3.40046 13.0903 3.40046 H 15.1718 C 15.3883 3.40046 15.5968 3.43495 15.7918 3.49845 C 15.7918 3.49845 15.9373 3.50844 15.9008 3.43494 C 15.8383 3.33744 15.7673 3.24494 15.6833 3.16044 L 12.8303 0.289467 C 12.7558 0.214467 12.6743 0.149438 12.5888 0.0914385 Z");
        display: block;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        min-block-size: auto;
        min-height: auto;
        min-inline-size: auto;
        min-width: auto;
        overflow-wrap: break-word;
        perspective-origin: 0px 0px;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 0px 0px;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11*/

    #path_11:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11:after*/

    #path_11:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        clip-rule: evenodd;
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        cursor: pointer;
        fill: rgb(246, 247, 249);
        fill-rule: evenodd;
        overflow-wrap: break-word;
        tab-size: 4;
        text-align: left;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        border: 0px solid rgb(229, 231, 235);
        font: 13px / 30px "Optimistic Text", -apple-system, ui-sans-serif, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#path_11:before*/

    #DIV_12 {
        block-size: 70px;
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        height: auto;
        inline-size: 879.2px;
        overflow-wrap: break-word;
        padding-block-end: 24px;
        padding-block-start: 16px;
        padding-inline-end: 32px;
        padding-inline-start: 32px;
        perspective-origin: 439.6px 35px;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        transform-origin: 439.6px 35px;
        width: auto;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
        padding: 10px;
    }

    /*#DIV_12*/

    #DIV_12:after {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        white-space: pre;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_12:after*/

    #DIV_12:before {
        border-block-end-color: rgb(229, 231, 235);
        border-block-end-style: solid;
        border-block-start-color: rgb(229, 231, 235);
        border-block-start-style: solid;
        border-inline-end-color: rgb(229, 231, 235);
        border-inline-end-style: solid;
        border-inline-start-color: rgb(229, 231, 235);
        border-inline-start-style: solid;
        box-sizing: border-box;
        caret-color: rgb(246, 247, 249);
        color: rgb(246, 247, 249);
        column-rule-color: rgb(246, 247, 249);
        overflow-wrap: break-word;
        tab-size: 4;
        text-decoration: none solid rgb(246, 247, 249);
        text-emphasis-color: rgb(246, 247, 249);
        text-size-adjust: 100%;
        white-space: pre;
        border: 0px solid rgb(229, 231, 235);
        font: 15.3px / 30px "Source Code Pro", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        outline: rgb(246, 247, 249) none 0px;
    }

    /*#DIV_12:before*/
</style>
@endsection