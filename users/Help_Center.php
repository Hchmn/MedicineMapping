<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js / bootstrap.bundle.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
    <script>
      var ScrollMsg= "Pharmaceutical - Medicine - System - "
      var CharacterPosition=0;
      function StartScrolling() {
      document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
      ScrollMsg.substring(0, CharacterPosition);
      CharacterPosition++;
      if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
      window.setTimeout("StartScrolling()",150); }\Web_HairSalon\conn\logout.php
      StartScrolling();
    </script>

  </head>
  <body style="overflow:hidden;">
    <div class="">
      <nav class="navbar navbar-expand-md navbar-light " style="background: #1d9feb; height:45px;" >
            <div class="topnav-centered" style="justify-content: center;">
              <a href="\dashboard" class="btn rounded-0 " style="height:auto; width:auto;">
                <small style=" color:White; font-size:26px;text-align:center; font-family:Times; font-weight:bold">Pharmaceutical Medicine System</small>
              </a>
            </div>

          <div id="navbarCollapse" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link" data-toggle="dropdown" style="color:White;">Nasrollah Gandamato <i class="fa fa-fw fa-user" style="color:White;"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item">Generic Pharmacy</a>
                          <div class="dropdown-divider"></div>
                          <a href="\login\login.php" onclick="return confirm('Are you sure you want to log out?');" class="dropdown-item">Logout</a>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
  </div>
    <div class="d-flex flex-row h-100 w-100">
      <div class="col-2 h-100 flex-column mt-2"style="height:150%;background: white !important; font-family:Times;">
        <a href="/dashboard.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size: 130%;">
          <i class="fas fa-home fa-lg" ></i>
          <small style="margin-left: 15px;">Home</small></p></a>
          <br>
        <a href="/inbox.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="far fa-comments fa-lg"></i>
          <small style="margin-left:15px;">Inbox</small></p></a>
          <br>
        <a href="/add_medicine.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="fas fa-capsules fa-lg"></i>
          <small style="margin-left:15px;">Add Medicine</small></p></a>
          <br>
        <a href="/logs.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="fas fa-clipboard-list fa-lg"></i>
          <small style="margin-left:26px;">Logs</small></p></a>
          <br>
        <a href="/pharmacists.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="far fa-user fa-lg"></i>
          <small style="margin-left:22px;">Pharmacists</small></p></a>
          <br>
        <a href="/settings" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="fas fa-cog fa-lg"></i>
          <small style="margin-left:18px;">Settings</small></p></a>
          <br>
        <a href="help_center.php" class="btn rounded-0 pt-0" style=""><p class="m-0" style="color:black; font-size:130%; text-align:left;">
          <i class="far fa-question-circle fa-lg"></i>
          <small style="margin-left:18px;">Help Center</small></p></a>
          <br>

      </div>
    </div>
    </body>
  </html>
