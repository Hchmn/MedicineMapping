<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inbox/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js / bootstrap.bundle.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=""></script>
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
  <body style="overflow:hidden">
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
      <div class="col-2 flex-column d-flex w-100 border"style="background: white !important; font-family:Times; margin-left: 250px; height:67%; margin-top:60px; border-radius: 25px 25px 25px 25px; height:70%;">
        <div class="medicine container  mt-4 mb-2" style="border-radius: 30px 30px 30px 30px; height:93%; width:100%; overflow-y:scroll;">
              <button type ="button" class="btn mt-4 "
                id="show_convo_1"style="text-align:center; width:100%; height:8%; background:#1d9feb;">
                <img src="css/inbox/user1.jpg " alt="" style="border-radius: 50%;width: 36px; float:left;">
                <small style="font-size:17px; font-family:times;  float:left;  margin-left:10px; color:white;">Nasrollah Gandamato
                </small>
                <span class="" style="font-size:12px; font-family:times;  float:left; margin-left:10px; color:white; margin-bottom:5px;">2:10 AM | August 20</span>
              </button>

              <button type ="button" class="btn mt-3 "
                id="show_convo_2"style="text-align:center; width:100%; height:8%; background:#1d9feb;">
                <img src="css/inbox/user3.jpg " alt="" style="border-radius: 50%;width: 36px; float:left;">
                <small style="font-size:17px; font-family:times;  float:left;  margin-left:10px; color:white;">Hachiman Hikigaya
                </small>
                <span class="" style="font-size:12px; font-family:times;  float:left; margin-left:10px; color:white; margin-bottom:5px;">2:07 AM | August 20</span>
              </button>

        </div>
      </div>

      <div class="col-3 flex-column d-flex h-75 w-100" style="font-family:Tahoma; margin-top:60px;">
        <div class="container " id ="convo_1" style="">
          <div class="msg-header">
              <div class="msg-header-img">
                <img src="css/inbox/user1.jpg" alt="">
              </div>
              <div class="active ">
                  <h4>Nasrollah Gandamato</h4>
                  <h6>3 hours ago...</h6>
              </div>
              <div class="header-icons ">

              </div>
          </div>
          <div class="chat-page">
            <div class="msg-inbox">
              <div class="chats">
                <div class="msg-page">
                  <div class="msg-page">

                    <!---the user who sent you message-->
                      <div class="received-chats">
                      <div class="received-chats-img">
                        <img src="css/inbox/user1.jpg" alt="">
                      </div>
                      <div class="received-msg">
                        <div class="received-msg-inbox">
                          <p> Hello lods</p>
                          <span class="time">2:00 AM | August 20</span>
                        </div>
                      </div>
                      </div>

                      <!--- your message-->
                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> Hi lods</p>
                          <span class="time">2:01 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <!---the user who sent you message-->
                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user1.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> test lods</p>
                            <span class="time">2:03 AM | August 20</span>
                          </div>
                        </div>
                      </div>

                      <!--- your message-->
                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> sge sge lods</p>
                          <span class="time">2:05 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user1.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> bye lods</p>
                            <span class="time">2:07 AM | August 20</span>
                          </div>
                        </div>
                      </div>

                      <!--- your message-->
                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> sge sge bye tug na</p>
                          <span class="time">2:08 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user1.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> zzzzzzzzzzzzzzzz</p>
                            <span class="time">2:09 AM | August 20</span>
                          </div>
                        </div>
                      </div>

                      <!--- your message-->
                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> Zzzzzzzzzzzzz</p>
                          <span class="time">2:11 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="msg-bottom">
              <div class="bottom-icons">

              </div>
              <div class="input-group">
                <input type="text" class="form-control" name="" value="">
                <div class="input-group-append">
                  <span class="input-group-text"> <i class="fa fa-paper-plane"></i></span>
                </div>
              </div>
          </div>
        </div>


        <div class="container " id ="convo_2" style=" display:none;">
          <div class="msg-header">
              <div class="msg-header-img">
                <img src="css/inbox/user3.jpg" alt="">
              </div>
              <div class="active ">
                  <h4>Hachiman Hikigaya</h4>
                  <h6>5 hours ago...</h6>
              </div>
              <div class="header-icons ">

              </div>
          </div>
          <div class="chat-page">
            <div class="msg-inbox">
              <div class="chats">
                <div class="msg-page">
                  <div class="msg-page">

                      <div class="received-chats">
                      <div class="received-chats-img">
                        <img src="css/inbox/user3.jpg" alt="">
                      </div>
                      <div class="received-msg">
                        <div class="received-msg-inbox">
                          <p> Hi lods. </p>
                          <span class="time">2:10 AM | August 20</span>
                        </div>
                      </div>
                      </div>

                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> yo hoo lods</p>
                          <span class="time">2:11 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user3.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> FAR BEYOND DRIVEN LODS</p>
                            <span class="time">2:12 AM | August 20</span>
                          </div>
                        </div>
                      </div>


                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> TEST TEST TEST</p>
                          <span class="time">2:13 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user3.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> this is just a test</p>
                            <span class="time">2:14 AM | August 20</span>
                          </div>
                        </div>
                      </div>

                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> OKAY</p>
                          <span class="time">2:16 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>

                      <div class="received-chats">
                        <div class="received-chats-img">
                          <img src="css/inbox/user3.jpg" alt="">
                        </div>
                        <div class="received-msg">
                          <div class="received-msg-inbox">
                            <p> okay im done</p>
                            <span class="time">2:18 AM | August 20</span>
                          </div>
                        </div>
                      </div>

                      <div class="outgoing-chats">
                        <div class="outgoing-chats-msg">
                          <p> nice</p>
                          <span class="time">2:19 AM | August 20</span>
                        </div>
                        <div class="outgoing-chats-img">
                          <img src="css/inbox/user2.jpg" alt="">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="msg-bottom">
              <div class="bottom-icons">

              </div>
              <div class="input-group">
                <input type="text" class="form-control" name="" value="">
                <div class="input-group-append">
                  <span class="input-group-text"> <i class="fa fa-paper-plane"></i></span>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>
    </body>
  </html>
<!-- Smartsupp Live Chat script -->
<!-- <script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '325755b15a315c552ecdea55d37de3253b48c829';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script> -->

<script >
$(document).ready(function(){

  $("#show_convo_1").click(function(){
      $("#convo_1").css("display","block");
      $("#convo_2").css("display","none");
  });
  $("#hide_convo_1").click(function(){
      $("#convo_1").css("display","none");
  });

  $("#show_convo_2").click(function(){
      $("#convo_2").css("display","block");
      $("#convo_1").css("display","none");
  });
  $("#hide_convo_2").click(function(){
      $("#convo_2").css("display","none");
  });
});
</script>
