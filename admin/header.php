<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #34495E;
  position: fixed;
  height: 100%;
  top:0;
  overflow: auto;
  position: absolute;
}

.sidebar a {
  display: block;
  color:white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #17202A;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color:#F4D03F;
  color: white;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
button{
  height: 110px;
  width: 220px;
  margin-left: 20px;
}

</style>
</head>
<body>
<center><fieldset style="background-color:#F2F3F4;height:47px;border:none;"></fieldset></center><br>
<div class="sidebar">
  
  <a class="active" href="admin.php"><i class="fa fa-dashboard"> Dashboard</i></a>
  <a href="add.php"><i class="fa fa-plus"> Add</i></a>
  <a href="view.php"><i class="fa fa-eye"> View</i></a>
  <a href="viewall.php"><i class="fa fa-eye"> View All</i></a>
  <a href="new.php"><i class="fa fa-user-plus"> New Admin</i></a>
  <a href="log.php"><i class="fa fa-power-off"> Logout</i></a>
</i>
</div>
</body>
</html>
