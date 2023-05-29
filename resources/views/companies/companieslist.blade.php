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
    <a class="active" href="#home">Companies App</a>
    <div class="topnav-right">
    <a href="login">Log Out</a>
    </div>
</div>
    <div class="container">
        <div class="text-right">
            <a href="createcompany" class="btn btn-warning mt-2">Add Company</a>
        </div>
    </div> 
    <div class=container>
        <table class="table">
        <h2 class="card-title text-white">Company List</h2>
    <thead>
      <tr>
        <th class="card-content">Name</th>
        <th class="card-content">Email</th>
        <th class="card-content">Website</th>
        <th class="card-content">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($companies as $company)
      <tr>

        <td><img src="../companies/{{ $company->image}}" class="rounded-circle mr-1" width="50" height="50" />
        <a href="{{ $company->id }}/show" class="text-primary">{{ $company->name }}</a></td>
        <td>{{ $company->email }}</td>
        <td>{{ $company->website }}</td>
        <td>
          <a href="{{ $company->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
          <a href="{{ $company->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    
  </div>
     
    </div>
    </div>
</body>
</html>

<style>
.table  {
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 15px;
  border-top: none;
}
body {
/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
.card-title {
  margin-bottom: 1rem;
  font-weight: 300;
  font-size: 2 rem;

}
.card-content {
  margin-bottom: 2rem;
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