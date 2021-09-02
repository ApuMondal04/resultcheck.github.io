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
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  top:0;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
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
<center><fieldset style="background-color:red;height:52px;border:none;">RGU</fieldset></center><br>
<div class="sidebar">
  <a class="active" href="#Dashboard"><i class="fa fa-dashboard"> Dashboard</i></a>
  <a href="#news"><i class="fa fa-plus"> Add</i></a>
  <a href="#contact"><i class="fa fa-eye"> View</i></a>
  <a href="log.php"><i class="fa fa-power-off"> Logout</i></a>
</div>
</body>
</html>
