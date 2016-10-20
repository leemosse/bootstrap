<?php $id =$_GET['id'];

$host = 'mysql:host=localhost;dbname=test';
$user = 'test';
$password = 'a12350611';
$conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

/* Data 조회를 위한 Query 작성 */
$stmt = $conn->prepare('SELECT * FROM boa WHERE id='.$id);
/* Query 실행 */
$stmt->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$item = $stmt->fetchAll();


/* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
// foreach($list as $item) {
//   print_r($item);
//   echo '<br>';

// }


?>
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
      <table class="table table-striped table-hover table-condensed">
        <thead>
          <tr>
            <th width="10%">
              <p>제목</p>
            </th>
            <th width="90%">
              <p><?php echo $item[0]['title']?></p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>내용</td>
            <td>
              <p><?php echo $item[0]['contents']?></p>
              <br><br><br><br><br><br><br><br><br><br>
            </td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><?php echo $item[0]['author']?></td>
          </tr>
          <tr>
            <td>작성일</td>
            <td><?php echo $item[0]['timestamp']?></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">
              <a href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target="#remove_board"><i class="fa fa-trash"></i> 삭제</a>
              <a href="./board.php" class="btn btn-success pull-right"><i class="fa fa-list" aria-hidden="true"></i> 목록</a>
            </td>
          </tr>
        </tfoot>
      </table>
    </section>

    <div class="modal fade" id="remove_board" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">게시물 삭제</h4>
          </div>
          <div class="modal-body">
            <p>정말 삭제하시겠습니까?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-danger">삭제</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
