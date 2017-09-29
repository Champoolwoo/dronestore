<?session_start();?>
<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>3 Ya Flying Club</title>
	<link rel="stylesheet" href="css/style.css">

  <!-- frame Bootstrap -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
  <!-- framework Angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!--เรียกไฟล์ app.js-->
	<script src="js/app.js"></script>
  <!--<script src="../js/burger.js"></script>-->

  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Athiti|Titillium+Web" rel="stylesheet">

</head>
<script>
</script>
<body ng-controller="PlaneController" data-spy="scroll" data-target=".navbar">

  <!--//////////////////// navbar ////////////////////-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html">3 Ya Flying Club.<i class="fa fa-plane" aria-hidden="true"></a>
      </div>
      <div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#section1">หน้าแรก</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">สินค้า<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#section21">โดรนบังคับ</a></li>
                <li><a href="#section22">เฮริคอปเตอร์บังคับ</a></li>
              </ul>
            </li>
            <li><a href="#section3">รายการที่เลือก <span class="badge">{{sunselect}}</span></a></li>
            <li><a href="#section4">ติดต่อเรา</a></li>
            <li><a href="#section5">วิธีการชำระเงิน</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">ลงทะเบียน</a></li>
            <li><a href="page/login.php">เข้าสู่ระบบ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>    
  <!--//////////////////// navbar ////////////////////-->

  <!--//////////////////// section1 Head ////////////////////-->
  <div id="section1" class="container-fluid">
    <div class="row">
      <div class="col-sm-1 col-md-1"></div>
      <div class="col-sm-5 col-md-5">
        <center>
          <h1>3 Ya Flying Club.<i class="fa fa-plane" aria-hidden="true"></h1>
          <h4>จำหน่ายโดรนบังคับ และเฮริคอปเตอร์บังคับ</h4>
        </center>
      </div><!-- col -->

      <div class="col-sm-5 col-md-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="picture/slide/s1.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="picture/slide/s2.jpg" alt="Chicago" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="picture/slide/s3.jpg" alt="New york" style="width:100%;">
            </div>
          </div><!-- slides -->

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- carousel slide -->
      </div><!-- col -->
      <div class="col-sm-1 col-md-1"></div>
    </div><!-- row -->
    <br><br>
  </div><!-- section1 -->
  <!--//////////////////// section1 ////////////////////-->

  <!--//////////////////// section21 Drone ////////////////////-->
  <div id="section21" class="container-fluid">
    <div class="page-header">
      <h1>โดรนบังคับ</h1>
    </div><!--page-header-->
    <div class="container">
      <h2>รายการสินค้า</h2>
      <br>
      <div class="row">
        <div class="col-sm-5 col-md-3" ng-repeat="show in product" ng-if="show.type === 'Drone'">
          <div class="thumbnail">
            <img ng-src="{{show.pic}}" class="img-responsive" width="100%">
            <div class="caption">
              <h3>{{show.name}}</h3><h5>ID : {{show.id}}</h5>
              <p>...</p>
              <h3>ราคา : {{show.price}}</h3>
              <p>
                <a class="btn btn-primary" role="button" ng-click="addlist(show)">เลือก</a>
                <!--<a href="#" class="btn btn-default" role="button">Button</a>-->
              </p>
            </div><!--caption-->
          </div><!--col-->
        </div><!--thumbnail-->
      </div><!--row-->
    </div><!--container-->
    <br><br>
  </div><!--section21-->
  <!--//////////////////// section21 ////////////////////-->

  <!--//////////////////// section22 Helicopter ////////////////////-->
  <div id="section22" class="container-fluid">
    <div class="page-header">
      <h1>เฮริคอปเตอร์บังคับ</h1>
    </div><!--page-header-->
    <div class="container">
      <h2>รายการสินค้า</h2>
      <br>
      <div class="row">
        <div class="col-sm-5 col-md-3" ng-repeat="show in product" ng-if="show.type === 'Helicopter'">
          <div class="thumbnail">
            <img ng-src="{{show.pic}}" class="img-responsive" width="100%">
            <div class="caption">
              <h3>{{show.name}}</h3><h5>ID : {{show.id}}</h5>
              <p>...</p>
              <h3>ราคา : {{show.price}}</h3>
              <p>
                <a class="btn btn-primary" role="button" ng-click="addlist(show)">เลือก</a>
                <!--<a href="#" class="btn btn-default" role="button">Button</a>-->
              </p>
            </div><!--caption-->
          </div><!--col-->
        </div><!--thumbnail-->
      </div><!--row-->
    </div><!--container-->
    <br><br>
  </div><!--section21-->
  <!--//////////////////// section22 ////////////////////-->

  

  <!--//////////////////// section3 Select Product ////////////////////-->
  <div id="section3" class="container-fluid" >
    <div class="page-header" >
      <h1>รายการที่เลือก <span class="badge">{{sunselect}}</span></h1>
    </div><!--header-->
    <center>
      <div class="row">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-6 col-md-6">
          <div class="panel panel-default">
          <!-- Default panel contents -->
            <div class="panel-heading"><h4>รายการที่เลือก</h4></div>
            <!-- Table -->
            <table class="table" style="color: black;">
              <tr>
                <th>ID</th>
                <th>ชื่อสินค้า</th>
                <th>จำนวน</th>
                <th>ราคา(บาท)</th>
              </tr>
              <tr ng-repeat="sel in list">
                <th>{{sel.id}}</th>
                <th>{{sel.name}}</th>
                <th>{{sel.amount}}</th>
                <th>{{sel.price}}</th>
                <th><a class="btn btn-danger btn-xs" role="button" ng-click="deletelist($index)" style="float:center;">ลบ</a></th>
              </tr>
            </table> 
          </div><!-- panel-default -->
        </div><!-- col -->
        <div class="col-sm-3 col-md-3"></div>
      </div><!-- row -->
      <h4>จำนวนเงินที่ต้องชำระ : {{sum}} บาท</h4>
      <a class="btn btn-primary">สั่งซื้อ</a> 
    </center>
    <br><br>
  </div><!--section3-->
  <!--//////////////////// section3 ////////////////////-->

  <!--//////////////////// section4 Tel ////////////////////-->
  <div id="section4" class="container-fluid">
    <div class="page-header">
      <h1>ติดต่อเรา</h1>
    </div><!--header-->
    <center>
      <div class="container">
        <center>
          <br>
          <div class="container">
            <h1>ที่ตั้งของร้าน</h1>
            <h4>
              ซอย แพหมอพัฒนา ตำบล แพรกษาใหม่<br>
              อำเภอ เมืองสมุทรปราการ จังหวัด เมืองสมุทรปราการ 10280
            </h4>
          </div><!--container-->
          <br>
        </center>
      </div><!--container-->
      <div class="row">
        <div class="col-sm-1 col-md-1"></div>
        <div class="col-sm-10 col-md-10">
          <div id="map" style="width:100%;height:500px;color:black;"></div>
        </div>
        <div class="col-sm-1 col-md-1"></div>
      </div><!--row-->
    </center>
    <br><br>
  </div><!--section4-->
  <!--//////////////////// section4 ////////////////////-->

  <!--//////////////////// section5 วิธีการสั่งซื้อ ////////////////////-->
  <div id="section5" class="container-fluid" >
    <div class="page-header" >
      <h1>วิธีการสั่งซื้อ</h1>
    </div><!--header-->
    <center>
      
    </center>
    <br><br>
  </div><!--section5-->

  <!--//////////////////// section6 วิธีการชำระเงิน ////////////////////-->
  <div id="section6" class="container-fluid" >
    <div class="page-header" >
      <h1>วิธีการชำระเงิน</h1>
    </div><!--header-->
    <center>
      
    </center>
    <br><br>
  </div><!--section6-->
  <!--//////////////////// section6 ////////////////////-->

  <script>
    function myMap() {
      var myCenter = new google.maps.LatLng(13.589456, 100.652088);
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
        center: myCenter, 
        zoom: 16,
        scrollwheel: true,
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({position:myCenter});
      marker.setMap(map);
      var infowindow = new google.maps.InfoWindow({
        content: "Here"
      })
      infowindow.open(map,marker);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrq1aCbpJCuu1CxWadx7U3CUKnlOsNsmg&callback=myMap"></script>

</body>
</html>
