<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
  </head>
  <body>
    <section class="container">
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar" href="http://localhost/index.php" style="color:#eca302;">Honey Sucking</a>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/introduce.php">허니석킹 소개</a></li>
        <li class=><a href="http://localhost/gae.php">자유게시판 <span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost/QNA.php">QnA게시판</a></li>
        <li><a href="http://localhost/board.php">보드 게시판</a></li>

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>
<section class="container">

<div class="jumbotron pya">
  <h2 class="hy">Honey Sucking에 오신것을 환영!</h2>
  <p class="ht">넘넘 꿀잼이양>< ㄹㅇ꿀빠는 커뮤니티 ㅇㅈ? ㅇㅇㅈ~ 너무 꿀잼이여서 선우선배 머리처럼 헤어 나올 수 ㅇ벗엉</p>
  <p><a class="btn btn-warning btn-lg" href="http://localhost/introduce.php" role="button">ㅇㅈ? ㅇ ㅇㅈ~</a></p>
</div>
  </section>

  <section class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner .witdh1" role="listbox">
        <div class="item active">
          <img src="./img/1.png" alt="..."class="witdh1">
          <div class="carousel-caption">
            꿀잼 커뮤니티<br> HoneySucking
          </div>
        </div>
        <div class="item">
          <img src="./img/2.png" alt="..." class="witdh1">
          <div class="carousel-caption">
            꿀잼 커뮤니티<br> HoneySucking
          </div>
        </div>
        <div class="item">
          <img src="./img/3.png" alt="..." class="witdh1">
          <div class="carousel-caption">
            꿀잼 커뮤니티<br> HoneySucking
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </section>

  <section class="container">
    <div class="row">

    <div class="col-sm-5">
      <div class="media">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title hr ">횐님들의 한줄 게시판</h3>
        </div>
        <div class="panel-body">

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/g.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">고블린</h4>
              요즘 개나소나 이런거만드네
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/h.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">꿀딴지</h4>
              ㅎㅎ꿀잼이양 꿀잼 ㅎㅎㅎㅎ
            </div>


          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/mom.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">엄마</h4>
              레어닉 먹었다 ㅎㅎ 수고링~
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/g.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">고블린</h4>
              ㅈ노잼이네 ㅄ
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/g.jpg" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading ">고블린</h4>
              허석 수준 알만하다 ㅉㅉ
            </div>
          </div>

              <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-rounded" src="./img/mom.jpg" alt="...">
              </a>
            </div>
        <div class="media-body">
          <h4 class="media-heading">엄마</h4>
          응~ 니엄마가 더 노잼이야~
        </div>

          </div>
        </div>
        </div>
      </div>
      </div>
      </div>

      <div class="col-sm-7">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title hr">자유게시판</h3>
  </div>
  <ul class="list-group">
    <li class="list-group-item">엉덩이 때려줘 흐악악아 <span class="label label-success">공지사항</span></li>
    <li class="list-group-item">내껄 들어봐봐 확실한 어나더 어나더레벌 얍얍얍 <span class="label label-primary">New</span></li>
    <li class="list-group-item">꿀잼 커뮤니티 넘나 꿀재미^^ <span class="label label-primary">New</span></li>
    <li class="list-group-item">오늘 버스기사랑 맞짱뜬 썰 푼다 <span class="label label-danger">Hot</span></li></li>
    <li class="list-group-item">[자작만화] 소개팅 가는길 <span class="label label-danger">Hot</span></li>
    <li class="list-group-item">여기 고아들 너무 많은것같다... <span class="label label-primary">New</span></li>
    <li class="list-group-item">리신 이정도면 ㅍㅌㅊ? <span class="label label-primary">New</span></li>
    <li class="list-group-item">꿀잼 커뮤니티 롤큐로 놀러와~ <span class="label label-primary">New</span></li>
    <li class="list-group-item">꿀머니 얻는법 어디서보냐? <span class="label label-primary">New</span></li>
  </ul>
</div>
  </div>


      </div>

  </section>




    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
