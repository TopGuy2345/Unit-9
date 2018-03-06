<?php ?>


<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">

</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<style>
.center-div
{
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 200px;
  height: 200px;

  border-radius: 3px;
}
h2, .h2 {
    font-size: 30px;
    padding: 100PX;
}

.btn {
    margin: 35px;
  }
  .navbar-default {
     background-color: #ffffff;
     border-color: #ffffff;
}
select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 6px);
}
.center-div {
    position: ABSOLUTE;
    margin: auto;
    right: 0;
    bottom: -200px;
    left: 0;
    width: 200px;
    height: 200px;
    border-radius: 3px;
}


</style>
</head>
<body>


  <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">

                  <form class="navbar-form navbar-right" role="search" action="includes/login.php" method="post">
                      <div class="form-group">
                          <input type="text" class="form-control" name="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default">Sign In</button>
                  </form>
              </div>
          </center>
      </div>
  </div>

  <div class="container">

  <h2 style="margin: 100px"> Select the query you like to display</h2>
    <div class="col-lg-4 col-lg-offset-4 center-div">

     <div class="form-group row">
 <div class="form-group">
<<<<<<< HEAD
<form action="/Buinesslayers.php" method="post" >
s
=======
<form action="/Buinesslayer.php" method="post" >

>>>>>>> a73163cfcc723fa36f28f5c6b621c9f0b11e4427
  <select name="Selection" class="form-control">
  <option value="1">Customer data</option>
  <option value="2">Customer num</option>
</select>

  <input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>

</body>
</html>
