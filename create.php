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
    <h1>게시물 작성</h1>
    <hr>
    <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">제목</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="제목적어랑~">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">비밀번호</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      <div style="padding-top:20px">
      <textarea name="name" rows="20" cols="100" placeholder="내용을 적어라~" ></textarea>
      </div>
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">확인</button>
        <button type="submit" class="btn btn-default">취소</button>
    </div>
  </div>
</form>


  </section>



    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
