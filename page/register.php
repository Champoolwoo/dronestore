<?session_start();?>
<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>3 Ya Flying Club</title>
	<link rel="stylesheet" href="../css/style.css">

  <!-- frame Bootstrap -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
  <!-- framework Angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!--เรียกไฟล์ app.js-->
	<script src="../js/app.js"></script>
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
        <a class="navbar-brand" href="../index.php">3 Ya Flying Club.<i class="fa fa-plane" aria-hidden="true"></a>
      </div>
      <div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#section1">ลงทะเบียน</a></li>
            <li><a href="login.php">เข้าสู่ระบบ</a></li>
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
      <div class="col-sm-10 col-md-10">
        <center>
          <h1>ลงทะเบียน<i class="fa fa-plane" aria-hidden="true"></h1>
          <h4>กรอกข้อมูลด้านล่าง</h4>
        </center>
      </div><!-- col -->
      <div class="col-sm-1 col-md-1"></div>
    </div><!-- row -->
    <br><br>
  </div><!-- section1 -->
  <!--//////////////////// section1 ////////////////////-->

   <!--//////////////////// section2 Register ////////////////////-->
  <div id="section22" class="container-fluid">
    <div class="row">
      <div class="col-sm-1 col-md-1"></div>
      <div class="col-sm-10 col-md-10">
        <center>
          <h1>ลงทะเบียน<i class="fa fa-plane" aria-hidden="true"></h1>
          <h4>กรอกข้อมูลด้านล่าง</h4>
        </center>
      </div><!-- col -->

      
      <div class="col-sm-1 col-md-1"></div>
    </div><!-- row -->
    <br><br>
  </div><!-- section1 -->
  <!--//////////////////// section2 ////////////////////-->

 

</body>
</html>
