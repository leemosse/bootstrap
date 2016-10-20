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
  <section class="container pya">
    <h1>QNA 게시판</h1>
  </section>

<section class="container">
<h2>자주 묻는 질문</h2>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-warning">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            꿀머니는 어떻게 결제되나요?
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          저희는 개초딩의 돈 또한 빨아먹기때문에 틴캐시 등 모든 결제 수단을 사용합니다. 근데 문상이 제일 보편적이니까 그냥 문상사세요
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            이 사이트는 왜 열었죠?
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          돈벌려고요
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            운영자님이 가장 좋아하는건 무엇인가욤?
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          돈이요.
        </div>
      </div>
    </div>
  </div>

</section>


  <section class="container">
    <table class="table table-hover table-striped">

                  <button class="btn btn-default hl" type="submit">글쓰기</button>
          <hr>
          <thead>
            <tr>
              <th>ID</th>
              <th>제목</th>
              <th>닉네임</th>
              <th>작성일자</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Mother1122</td>
              <td>여기 고아들 너무 많은데 다 죽여주세요</td>
              <td>엄마</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">gogogo500550</td>
              <td>이 사이트 쓰레기같은데 왜열죠?</td>
              <td>고블린</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">Motherhunter544</td>
              <td>살아계셔요?</td>
              <td>엄마사냥꾼</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">Iwastea66</td>
              <td>여자친구는 어디서 만나나요?</td>
              <td>나는 홍차</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">honeyMan452</td>
              <td>꿀잼사이트네요ㅎㅎ</td>
              <td>운영자</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">honeyMan452</td>
              <td>너무 재밌는 사이트^^</td>
              <td>운영자</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">LSM6974</td>
              <td>엉덩이 때려주세요</td>
              <td>이수만</td>
              <td>2016-10-20</td>
            </tr>
            <tr>
              <td scope="row">NHM777</td>
              <td>너무 사는게 힘듭니다.</td>
              <td>노사람</td>
              <td>2016-10-20</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <nav>
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </nav>
</nav>

        <img src="./img/2.png" alt="" class="witdh1">


  </section>



    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
