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
      <div class="container mh-100 p-3" style="">
              <small style="font-size: 30px; font-family:Times; color: #1d9feb;">Pharmacists</small>
              <div class="container" style=" border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color:#1d9feb;">
              </div>
              <div class="list_pharmacist d-flex row p-2 mt-3 w-100 container justify-content-center " style="border-radius: 30px 30px 30px 30px;">
                <div class="col-3 m-2 p-4  flex-column d-flex border " style=" border-radius:30px 30px 30px 30px; height:40%; width:50%;">
                    <img src="login/images/user.jpg " style="; height:90px; margin-top:2px; margin-left:2px;">

                  <p style="font-size:17px;font-family:Helvetica; margin-top:25px;">
                    <small style="font-weight:bold; text-align:left;">NAME: </small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Date Created:</small>
                    <br>
                    <small style=" text-align:left;">Address</small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Contact Information:</small>
                  </p>
                </div>
                <div class="col-3 m-2 p-4  flex-column d-flex border " style=" border-radius:30px 30px 30px 30px; height:40%; width:50%;">
                    <img src="login/images/user.jpg " style="; height:90px; margin-top:2px; margin-left:2px;">
                  <p style="font-size:17px;font-family:Helvetica; margin-top:25px;">
                    <small style="font-weight:bold; text-align:left;">NAME: </small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Date Created:</small>
                    <br>
                    <small style=" text-align:left;">Address</small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Contact Information:</small>
                  </p>
                </div>
                <div class="col-3 m-2 p-4  flex-column d-flex border " style=" border-radius:30px 30px 30px 30px; height:40%; width:50%;">
                    <img src="login/images/user.jpg " style="; height:90px; margin-top:2px; margin-left:2px;">
                  <p style="font-size:17px;font-family:Helvetica; margin-top:25px;">
                    <small style="font-weight:bold; text-align:left;">NAME: </small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Date Created:</small>
                    <br>
                    <small style=" text-align:left;">Address</small>
                    <br>
                    <small style=" text-align:left;">Account Status:</small>
                    <br>
                    <small style=" text-align:left;">Contact Information:</small>
                  </p>
                </div>

                <div class="col-3 m-2 p-4  flex-column d-flex border " style=" border-radius:30px 30px 30px 30px; height:40%; width:50%; background:#1d9feb;">
                  <div class="container justify-content-center " style="height:254px; margin-right:auto; margin-left:auto; text-align:center;">
                    <button class="btn mt-5" data-toggle="modal" type="button" data-target=".bd-example-modal-lg" style="font-size:100px; color: black;">
                      <i class="fas fa-user-plus " ></i>
                    </button>
                  </div>
                </div>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header justify-content-center " style="font-size:40px; font-weight:bolder; font-family:times; color:white; background:#1d9feb;">
                        <h2>Registration Form</h2>
                      </div>
                    <form class="" action="" method="post">
                      <div class="modal-body h-100">
                        <div class=" h-auto justify-content-center" style="text-align:center">
                          <h3 style="font-size:35px; font-family:times;">Pharmacists</h3>
                          <p style="color:orange;">Provide one pharmacist information working in the pharmacy.</p>
                        </div>

                          <div class="h-auto mt-4" style="text-align:center;">
                            <label for="" style="margin-top:10px; font-size:22px; font-family:times; "> Name Information</label>
                          </div>
                          <div class="form-group first" style="text-align:center;">
                            <label class="ml-3"for="" style="font-size:20px; font-family:times;">First Name</label>
                            <input type="text" class="form-control" id="f_name" name = "f_name" placeholder="Enter First Name" required
                            style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%; margin-right:auto; margin-left:auto;
                            text-align:center;">
                          </div>

                          <div class="h-auto" style="text-align:center;">
                            <label class="ml-3"for="" style="font-size:20px; font-family:times;">Last Name</label>
                            <input type="text" class="form-control" id="l_name" name = "l_name" placeholder="Enter Last Name" required
                            style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%; margin-right:auto; margin-left:auto;
                            text-align:center;">
                          </div>

                          <div class="h-auto mt-4" style="text-align:center;">
                            <label for="" style="margin-top:10px; font-size:22px; font-family:times; "> Contact Information</label>
                          </div>

                          <div class="form-group first justify-content-center" style="text-align:center;">
                            <label class="mt-1"for="" style="font-size:20px; font-family:times;">Email</label>
                            <input type="text" class="form-control" id="email" name = "email" placeholder="Email" required
                            style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%; margin-right:auto; margin-left:auto;
                            text-align:center;">
                          </div>

                          <div class="form-group first justify-content-center" style="text-align:center;">
                            <label class="mt-1"for="" style="font-size:20px; font-family:times;">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name = "contact_number" placeholder="Enter Contact Number" required
                            style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%; margin-right:auto; margin-left:auto;
                            text-align:center;">
                          </div>

                          <div class="h-auto mt-4" style="text-align:center;">
                            <label for="" style="margin-top:10px; font-size:22px; font-family:times; ">Address</label>
                          </div>

                          <div class="form-group first justify-content-center" style="text-align:center;">
                            <label class="mt-1"for="" style="font-size:20px; font-family:times;">Provinces</label>
                              <select class="form-control justify-content-center" id="province"name="Province" style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%;
                              margin-right:auto; margin-left:auto; text-align:center;font-family:times;">
                                <!-- <option value="" class = "justify-content-center"disabled selected style="text-align:center; justify-content:center; color:gray;">Provinces</option> -->

                              </select>
                          </div>

                          <div class="form-group first justify-content-center" style="text-align:center;">
                            <label class="mt-1"for="" style="font-size:20px; font-family:times;">Cities</label>
                              <select class="form-control" id = "city" name="City" style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%;
                              margin-right:auto; margin-left:auto; text-align:center; justify-content:center;font-family:times;">
                                <!-- <option value="" disabled selected style="text-align:center; justify-content:center; color:gray; font-family:times">Cities</option>
                                <option value="">Iligan City</option> -->
                              </select>
                          </div>

                          <div class="form-group first justify-content-center" style="text-align:center;">
                            <label class="mt-1"for="" style="font-size:20px; font-family:times;">Barangays</label>
                              <select class="form-control" id= "barangay" name="Barangay" style="font-size:15px; border-radius: 30px 30px 30px 30px; border-color:#1d9feb; width:50%;
                              margin-right:auto; margin-left:auto; text-align:center; justify-content:center;font-family:times; text-transform: uppercase;">
                                <!-- <option value="" disabled selected style="text-align:center; justify-content:center; color:gray; font-family:times">Barangays</option>
                                <option value="" style="">Saray</option>
                                <option value="">Tambacan</option>
                                <option value="">Tominobo</option>
                                <option value="">Luinab</option> -->
                              </select>
                          </div>
                          <div class="modal-footer">
                            <button name="update" class="btn rounded border border-primary "><span class="glyphicon glyphicon-edit"></span>Submit</button>
                            <button class="btn rounded border border-danger" type="button"  data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
                          </div>
                        </form>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
          </div>
      </div>
    </div>
    </body>
  </html>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

  <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
  <script type="text/javascript">

      var my_handlers = {

          // fill_provinces:  function(){
          //
          //     var region_code = $(this).val();
          //     $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
          //
          // },

          fill_cities: function(){

              var province_code = $(this).val();
              $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
          },


          fill_barangays: function(){

              var city_code = $(this).val();
              $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
          }
      };

      $(function(){
          // $('#region').on('change', my_handlers.fill_provinces);
          $('#province').on('change', my_handlers.fill_cities);
          $('#city').on('change', my_handlers.fill_barangays);

          // $('#region').ph_locations({'location_type': 'regions'});
          $('#province').ph_locations({'location_type': 'provinces'});
          $('#city').ph_locations({'location_type': 'cities'});
          $('#barangay').ph_locations({'location_type': 'barangays'});

          $('#province').ph_locations('fetch_list');
      });
  </script>
