<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="/UserAuthenticationSystem/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/UserAuthenticationSystem/CSS/myCSS.css">

  <title>Student Login</title>
</head>

<body>

  <div class="mainDiv">
    <div class="innerDiv">
      <div class="container">
        <div class="row" style="margin: 2%">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-8">
            <label class="text-info" style="font-size:24px">ROLL NO</label>
          </div>
          <div class="col-lg-2">
          </div>
        </div>
        <div class="row" style="margin: 2%">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8">
            <input class="loginTextBox" id="txtRollNo" type="text" style="background-color: #D4F1F4">
          </div>
          <div class="col-lg-2">

          </div>
        </div>
        <div class="row" style="margin: 2%">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-8">
            <label class="text-info" style="font-size: 24px">PASSWORD</label>
          </div>
          <div class="col-lg-2">

          </div>
        </div>
        <div class="row" style="margin: 2%">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-8">
            <input class="loginTextBox" id="txtPassword" type="password" style="background-color: #D4F1F4">
          </div>
          <div class="col-lg-2">

          </div>
        </div>
        <div class="row" style="margin: 2%">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-8">
            <div style="width: 100%; display: flex; justify-content: space-between; align-items: center">
              <label id="errorMsg"></label>
              <button class="btn btn-success" id="btnlogin">LOGIN</button>
            </div>
          </div>
          <div class="col-lg-2">

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="/UserAuthenticationSystem/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
  <script src="/UserAuthenticationSystem/JQuery/jquery.js"></script>
  <script src="/UserAuthenticationSystem/UserInterface/slogin.js"></script>
</body>

</html>