<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="topnav">
    <a class="active" href="../companieslist">Companies App</a>
    <a  href="../companieslist">Companies List</a>
    <div class="topnav-right">
    <a href="login">Log Out</a>
    </div>
</div>
        <div class="container p-4">
                    <div class="card p-4">
                        <h3 class="card-title">View Company</h3>
                        <p class="card-content">Name: <b>{{$companies->name}}</b></p>
                        <p class="card-content">Email: <b>{{$companies->email}}</b></p>
                        <p class="card-content">Website: <b>{{$companies->website}}</b></p>
                        <img src="/companies/{{$companies->image}}" class="rounded"width="100%"/>
                    </div>
        </div>
</body>
</html>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
  transition: 0.3s;
  width: 40%;
  border-radius: 15px;
  margin-left: auto;
  margin-right: auto;
}
body {
/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
.card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 2 rem;
  margin-left: auto;
  margin-right: auto;
}
.card-content {
  margin-bottom: 1rem;
  font-weight: 300;
  font-size: 1 rem;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #0095ff;
  color: white;
}

.topnav-right {
  float: right;
  background-color: red;
}
</style>