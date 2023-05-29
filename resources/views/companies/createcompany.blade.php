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
    <a class="active" href="companieslist">Companies App</a>
    <a  href="companieslist">Companies List</a>
    <div class="topnav-right">
    <a href="login">Log Out</a>
    </div>
</div>
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class = "card mt-2 p-3 bg-dark text-white">
            <h5 class="card-title">Add New Company</h5>
            <form method="POST" action="/companies/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control"/>
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control"/>
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Websites </label>
                    <input type="text" name="website" class="form-control"/>
                    @if($errors->has('website'))
                        <span class="text-danger">{{ $errors->first('website')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label> Logo </label>
                    <input type="file" name="image" class="form-control"/>
                    @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image')}}</span>
                    @endif
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Company</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
  transition: 0.3s;
  width: 100%;
  border-radius: 15px;
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
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
  font-size: 1.5rem;
  margin-left: auto;
  margin-right: auto;
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