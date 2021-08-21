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

      <div class="col-2 flex-column d-flex h-75 w-75 mt-5"style="background: white !important; font-family:Times; margin-left:110px;">
        <div class="medicine container border h-100 w-100 border mt-0 mb-2" style="">
          <p class="m-0 mt-2 " style="color:black; font-size:160%; text-align:left; font-family:Helvetica; font-weight:bolder;">
            <small >Generic Name</small>
          </p>
          <form action="/action_page.php">
          <p class="medicines mt-4 mb-3" style="color:black; font-size:120%; text-align:left; font-family:Tahoma;">
              <input type="checkbox" id="generic_Name" name="generic_Name" value="X" onclick="return ValidateGenericNameSelection();">
              <label for="y" style="margin-left: 10px;">X</label><br>

              <input type="checkbox" id="generic_Name" name="generic_Name" value="Y" onclick="return ValidateGenericNameSelection();">
              <label for="y" style="margin-left: 10px;">Y</label><br>

              <input type="checkbox" id="generic_Name" name="generic_Name" value="z" style="height:auto;" onclick="return ValidateGenericNameSelection();">
              <label for="z" style="margin-left: 10px;">Z</label><br>

            <p class="m-0 mt-2 " style="color:black; font-size:160%; text-align:left; font-family:Helvetica; font-weight:bolder;">
              <small >Other Attribute</small>
            </p>
            <p class="brand_name mt-3 mb-3" style="color:black; font-size:120%; text-align:left; font-family:Tahoma;">
              <input type="checkbox" id="brand_XY" name="brand_XY" value="XY">
              <label for="XY" style="margin-left: 10px;">XY</label><br>
            </p>
          </form>
        </div>

      </div>
      <div class="col-7 flex-column d-flex h-75 w-100  mt-5 ml-3 border" style="font-family:Tahoma; overflow-y:scroll; ">
        <div class="list_medicine container  h-100 w-100  mt-2 mb-2" style="border-radius: 30px 30px 30px 30px; ">
          <div class="topnav">
            <div class="searchbar mb-2 mt-2 border border-primary" style="float:left; margin-left:7px">
              <input class="search_input" id="myInput" onkeyup="myFunction()" type="text" name="" placeholder="Search Medicine...." style="width:200px;">
              <a href="/dashboard.php" class="search_icon"><i class="fa fa-search"></i></a>
            </div>
          </div>
        <table id ="myTable" class="table table-bordered mt-3 border" style="margin-left:7px">
         <thead id ="myTable"class="" style="background:#54BEFF;">
           <tr>
             <th>ID No.</th>
             <th>Attribute #1</th>
             <th>Attribute #2</th>
             <th>Attribute #3</th>
             <th>Attribute #4</th>
             <th>Attribute #5</th>
             <th></th>

           </tr>
         </thead>
         <tbody style="background-color:#fff;">
           <tr>
             <th>1</th>
             <th>sample 1.1</th>
             <th>sample 1.2</th>
             <th>sample 1.3</th>
             <th>sample 1.4</th>
             <th>sample 1.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>2</th>
             <th>sample 2.1</th>
             <th>sample 2.2</th>
             <th>sample 2.3</th>
             <th>sample 2.4</th>
             <th>sample 2.5</th>

             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>3</th>
             <th>sample 3.1</th>
             <th>sample 3.2</th>
             <th>sample 3.3</th>
             <th>sample 3.4</th>
             <th>sample 3.5</th>

             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>4</th>
             <th>sample 4.1</th>
             <th>sample 4.2</th>
             <th>sample 4.3</th>
             <th>sample 4.4</th>
             <th>sample 4.5</th>

             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>5</th>
             <th>sample 5.1</th>
             <th>sample 5.2</th>
             <th>sample 5.3</th>
             <th>sample 5.4</th>
             <th>sample 5.5</th>

             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>6</th>
             <th>sample 6.1</th>
             <th>sample 6.2</th>
             <th>sample 6.3</th>
             <th>sample 6.4</th>
             <th>sample 6.5</th>

             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>7</th>
             <th>sample 7.1</th>
             <th>sample 7.2</th>
             <th>sample 7.3</th>
             <th>sample 7.4</th>
             <th>sample 7.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>8</th>
             <th>sample 8.1</th>
             <th>sample 8.2</th>
             <th>sample 8.3</th>
             <th>sample 8.4</th>
             <th>sample 8.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>9</th>
             <th>sample 9.1</th>
             <th>sample 9.2</th>
             <th>sample 9.3</th>
             <th>sample 9.4</th>
             <th>sample 9.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>10</th>
             <th>sample 10.1</th>
             <th>sample 10.2</th>
             <th>sample 10.3</th>
             <th>sample 10.4</th>
             <th>sample 10.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
         <tbody style="background-color:#fff;">
           <tr>
             <th>11</th>
             <th>sample 11.1</th>
             <th>sample 11.2</th>
             <th>sample 11.3</th>
             <th>sample 11.4</th>
             <th>sample 11.5</th>
             <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#update_modal" style="width:70px;"><span class="glyphicon glyphicon-edit"></span>Add </button></td>
           </tr>
         </tbody>
        </table>
        <div class="modal fade" id="update_modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" action="/users/edit_validation">
              <div class="modal-header" style="justify-content: center; font-weight:bolder;">
                <h3 class="modal-title" style="">Medicine Name</h3>
              </div>
              <div class="modal-body">
                <div class="col-md-2"></div>
                <div class="col-md-12 ">
                  <div class="form-group" >
                    <label style="font-style:Tahoma; font-size: 20px;">Medicine Info</label>
                    <div class="mt-4 " style="float:right;">
                      <input type="text " name="price" placeholder="Price" class="form-control mt-1 mb-2 rounded" required="required" />
                    </div>
                  </div>
                </div>
              </div>
              <div style="clear:both;"></div>
                <div class="modal-footer">
                  <button name="update" class="btn rounded border border-primary "><span class="glyphicon glyphicon-edit"></span>Add</button>
                  <button class="btn rounded border border-danger" type="button"  data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                </div>
              </div>
            </form>
              </div>
          </div>
      </div>
    </div>
  </div>

  </body>
</html>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("th")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function ValidateGenericNameSelection()
{
    var checkboxes = document.getElementsByName("generic_Name");
    var numberOfCheckedItems = 0;
    for(var i = 0; i < checkboxes.length; i++)
    {
        if(checkboxes[i].checked)
            numberOfCheckedItems++;
    }
    if(numberOfCheckedItems > 1)
    {
        alert("You can't select more than one generic name!");
        return false;
    }
}
</script>
