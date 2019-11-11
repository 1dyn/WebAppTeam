<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width", inital-scale="1">
        <title>seleab</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/common.css">
    </head>
    <body>
        <style type="text/css">
            .jumbotron{
                background-image: url('img/yh.jpeg');
                background-size: contain;
                text-shadow: black 0.2em 0.2em 0.2em;
                color : white;
            }
        </style>
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
                        <li><a href="index.php" >소개</a></li>
                        <li><a href="notice.php">NOTICE</a></li>
                        <li class="active"><a href="members.php">MEMBERS<span class="sr-only"></span></a></li>
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
        <div class="container">
            <h1 style="text-align: left;; font-size: 50px; font-weight: bold; color: cornflowerblue">MEMBERS</h1><hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align: center">
                                <span class="glyphicon glyphicon-tags"></span>
                                &nbsp;&nbsp; Professor
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/members/scott.jpg" style="width: 250px; height; 250px" alt="개발자 이미지">
                                    </a>
                                </div>
                                <div class="media-body" >
                                    <ul>
                                        <blockquote style="font-size:25px;font-weight:bold;">Scott Uk-Gin Lee</blockquote>
                                        <li>scottlee@hanyang.ac.kr</li>
                                        <li>TBA</li>
                                        <li>An asst. prof. in the CSE Dept. @ HYU (ERICA)leading this Laboratory!</li>
                                        <li>
                                            career
                                            <ul>
                                                <li>00 - 03 : BE in Software Engineering @ University of Auckland, NZ</li>
                                                <li>04 - 08 : Ph.D in Computer Science @ University of Auckland, NZ</li>
                                                <li>04 - 04 : Visiting Researcher @ National University of Singapore</li>
                                                <li>05 - 06 : SE Programmer in SE Dept. @ University of Auckland, NZ</li>
                                                <li>09 - 11 : Postdoc @ CEA LIST, France</li>
                                                <li>11 - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Assistant Professor in CSE Dept. @ Hanyang University, Korea</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="text-align:center">
                                    <span class="glyphicon glyphicon-tags"></span>
                                    &nbsp;&nbsp; Developer
                                </h3>
                            </div>
                            <div class="panel-body" id="memberImg" style="text-align: center;">
                               <a class="btn btn-default" data-target="#modal1" data-toggle="modal"> <img src="img/members/dy.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                               <a class="btn btn-default" data-target="#modal2" data-toggle="modal"><img src="img/members/yh.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                               <a class="btn btn-default" data-target="#modal3" data-toggle="modal"><img src="img/members/yr.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                               <a class="btn btn-default" data-target="#modal4" data-toggle="modal"><img src="img/members/mj.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                               <a class="btn btn-default" data-target="#modal5" data-toggle="modal"><img src="img/members/jh.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                               <a class="btn btn-default" data-target="#modal6" data-toggle="modal"><img src="img/members/sg.jpeg" alt="Professor Lee" style="width: 150px;"></a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="modal" id="modal1" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            한동연
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" style="text-align: left;">
                            <ul>
                              <li>한동연</li>
                              <li>1997.10.30</li>
                              <li>해양초등학교졸</li>
                              <li>해양중학교졸</li>
                              <li>고잔고등학교</li>
                              <li>Hanyang University ERICA Software</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="modal" id="modal2" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                안요한
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                안요한<br>
                                안요한안요한안요한<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="modal" id="modal3" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                석예림
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                석예림<br>
                                석예림석예림석예림<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="modal" id="modal4" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                김민재
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                김민재<br>
                                김민재김민재김민재<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="modal" id="modal5" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                박재현
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                박재현<br>
                                박재현박재현박재현<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="modal" id="modal6" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                김서권
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                김서권<br>
                                김서권김서권김서권<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
