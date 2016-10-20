<?php
/* Database 연결 */
 $host = 'mysql:host=localhost;dbname=test';
 $user = 'test';
 $password = 'a12350611';
 $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

 /* Data 조회를 위한 Query 작성 */
 $stmt = $conn->prepare('SELECT * FROM boa');
 /* Query 실행 */
 $stmt->execute();
 /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
 $list = $stmt->fetchAll();


 /* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
 // foreach($list as $item) {
 //   print_r($item);
 //   echo '<br>';

 // }


 ?>



<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Over Watch</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th width="10%">No.</th>
            <th width="50%">제목</th>
            <th width="20%">작성자</th>
            <th width="20%">작성일</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($list as $item) {?>


          <tr>
            <td><?PHP echo $item['id']?></td>
            <td><a href="./board_detail.php?id=<?php echo $item['id']?> "><?PHP echo $item['title']?></a></td>
            <td><?PHP echo $item['author']?></td>
            <td><?PHP echo $item['timestamp']?></td>
          </tr>
        <?php  } ?>

        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-center">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </td>
            <td class="text-right">
              <a href="#" class="btn btn-primary"><i class="fa fa-pencil"></i> 글쓰기</a>
            </td>
          </tr>
        </tfoot>
      </table>
    </section>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
