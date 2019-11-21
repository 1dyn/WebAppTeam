<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width", inital-scale="1">
        <title>seleab</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/common.css">
        <style type="text/css">
            .jumbotron{
                background-image: url('img/yh.jpeg');
                background-size: contain;
                text-shadow: black 0.2em 0.2em 0.2em;
                color : white;
            }
            .carousel-control {
                position: absolute;
                top: 10%;
                bottom: 0;
                left: 0;
                width: 15%;
                height: 45%;
                font-size: 20px;
                color: #fff;
                text-align: center;
                text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
                background-color: rgba(0, 0, 0, 0);
                filter: alpha(opacity=50);
                opacity: .5;
            }

            .carousel-control.right, .carousel-control.left {
                background-image: none;
                color: dodgerblue;
            }

            .carousel-indicators li {
            border-color: dodgerblue;
            }

            .carousel-indicators li.active {
            background-color: dodgerblue;
            }

            .item span {
            font-style: normal;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SELAB</a>
                </div>
                <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" >소개<span class="sr-only"></span></a></li>
                        <li><a href="notice.php">NOTICE</a></li>
                        <li><a href="members.php">MEMBERS</a></li>
                        <li><a href="research.php">RESEARCH</a></li>
                        <li><a href="publication.php">PUBLICATION</a></li>
                        <li><a href="course.php">COURSE</a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="내용을 입력하시오.">
                        </div>
                        <button type="submit" class="btn btn-default">검색</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                접속하기<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">로그인</a></li>
                                <li><a href="register.php">회원가입</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="article">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active">
                            ::before
                            ::after
                        </li>
                        <li data-target="#myCarousel" data-slide-to="1">
                            ::before
                            ::after
                        </li>
                        <li data-target="#myCarousel" data-slide-to="2">
                            ::before
                            ::after
                        </li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="./img/1.png" alt="SELab"/>
                        </div>
                        <div class="item">
                            <img src="./img/2.png" alt="Web & Web Security"/>
                        </div>
                        <div class="item">
                            <img src="./img/3.png" alt="The Real-Time Software Engineering"/>
                        </div>
                    </div>
                    <!--left controls-->
                    <div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <!--right controls-->
                    <div>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h4>11월 1일차 미팅</h4>
                    <p>부트스트랩 라이센스, 코드분석, 참고자료 이거 안 해올 시 커피 한 잔 !</p>
                    <p><a class="btn btn-default" data-target="#modal1" data-toggle="modal">자세히 알아보기</a></p>
                </div>
                <div class="col-md-4">
                    <h4>디자인</h4>
                    <p>부트스트랩, 캘린더, 논문정리, RESEARCH페이지</p>
                    <p><a class="btn btn-default" data-target="#modal2" data-toggle="modal">자세히 알아보기</a></p>
                </div>
                <div class="col-md-4">
                    <h4>로그인</h4>
                    <p>Q&A, chatting, 팀별공간, 알린, 북마크</p>
                    <p><a class="btn btn-default" data-target="#modal3" data-toggle="modal">자세히 알아보기</a></p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="modal" id="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                이거 안 해오면 진짜 커피 사오기..
                                <button class="close" data-miss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                아 근데 이거 이렇게 옮기면 꽤 빨리 끝낼 수 있긴 할 거 같은데<br>
                                아직 11월 초고... <br>
                                룰라랄라<br><br>
                                <img src="img/yr.jpeg" id="imagepreview" style="width: 256px; height: 256px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        </div>
    </body>
</html>