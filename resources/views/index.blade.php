<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>AIRTEL.DEV WORKSHOP SOTRY</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<img src="">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">에닷 개발 & 디자인팀</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#slogan">팀훈</a>
                </li>
                <li>
                    <a class="page-scroll" href="#photo">사진</a>
                </li>
                <li>
                    <a class="page-scroll" href="#schedule">일정</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">팀원들</a>
                </li>
                {{--<li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">2015. 6. 19 - 6. 21</div>
            <div class="intro-heading">제주 워크샵 !</div>
            <a href="#slogan" class="page-scroll btn btn-xl">둘러보기</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="slogan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">팀훈</h2>
                <h3 class="section-subheading text-muted">우리를 하나로 만드는 힘 !</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-music fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">같이 즐겁게 !</h4>
                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-education fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">자신을 계발 개발 !</h4>
                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-heart fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">서로 존중 ! 사랑 !</h4>
                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="photo" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">사진</h2>
                <h3 class="section-subheading text-muted">아름다운 추억들 !</h3>
            </div>
        </div>
        <div class="row">

            @foreach( $photoList as $idx => $photo )
            <div class="col-md-4 col-sm-6 portfolio-item">

            <a href="#" class="portfolio-link photo" data-toggle="modal" data-idx="{{$photo->id}}" data-title="{{$photo->title}}" data-desc="{{$photo->desc}}">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        </div>
                    </div>
                <img src="/img/photo/{{$photo->file_path}}" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>{{$photo->title}}</h4>
                <p class="text-muted">{{$photo->desc}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- About Section -->
<section id="schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">우리가 들른 곳 !</h2>
                <h3 class="section-subheading text-muted">유네스코 지정 아름다운 섬 제주 !</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015. 6. 19</h4>
                                <h4 class="subheading">제주공항 도착 !</h4>
                            </div>
                            <div class="timeline-body">
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/2.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015. 6. 19</h4>
                                <h4 class="subheading">에코랜드 !</h4>
                            </div>
                            <div class="timeline-body">
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/3.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015. 6. 20</h4>
                                <h4 class="subheading">한라산 !</h4>
                            </div>
                            <div class="timeline-body">
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/4.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015. 6. 20</h4>
                                <h4 class="subheading">우도 !</h4>
                            </div>
                            <div class="timeline-body">
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/5.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015. 6. 20</h4>
                                <h4 class="subheading">힐링캠프 !</h4>
                            </div>
                            <div class="timeline-body">
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>즐겁고 !
                                <br>알찬 !
                                <br>제주 워크샵 !</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">팀원들 !</h2>
                <h3 class="section-subheading text-muted">ㅋㅋㅋㅋㅋㅋㅋㅋ</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                    <h4>김종운</h4>
                    <p class="text-muted">개발 대장</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>조오성</h4>
                    <p class="text-muted">이글스라 행복합니다</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>김상민</h4>
                    <p class="text-muted">실세</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/4.jpg" class="img-responsive img-circle" alt="">
                    <h4>김성용</h4>
                    <p class="text-muted">SCV</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/5.jpg" class="img-responsive img-circle" alt="">
                    <h4>정주리</h4>
                    <p class="text-muted">뼈자이너</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/6.jpg" class="img-responsive img-circle" alt="">
                    <h4>한혜정</h4>
                    <p class="text-muted">발을 동동</p>
                    {{--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>--}}
    </div>
</section>

<!-- Clients Aside -->
{{--<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>--}}

<!-- Contact Section -->
{{--<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>--}}

{{--<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2014</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>--}}

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<div class="portfolio-modal modal fade" id="photoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 id="title">TITLE</h2>
                        <img id="photoPath" class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                        <p id="desc">DESC</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        <button type="button" class="btn btn-danger" id="photoDelete" data-dismiss="modal"><i class="fa fa-times"></i> Delete </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<script>

    //csrf tokken
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){

        // show
        $('a.photo').on('click', function(){

            $('#photoModal').data('idx', $(this).data('idx'));

            $('#photoModal #title').text( $(this).data('title') );
            $('#photoModal #desc').text( $(this).data('desc') );

            $('#photoModal #photoPath').attr( 'src', $(this).attr('src') );

            $('#photoModal').modal('show');

        });

        // delete
        $('#photoModal').on('click', '#photoDelete', function(e){

            var deletePassword = prompt('삭제 비번 입력');

            $.post('/photo/' + $(e.delegateTarget).data('id'), { _method : 'DELETE', deletePassword : deletePassword }, function(res){

                if(res){

                    alert('ok');
                    location.reload();

                }else{

                    alert('fail');

                }

            });

        });

    });

</script>

</body>

</html>
