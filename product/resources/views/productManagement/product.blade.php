<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <!-- CSS only -->
  <style>
  .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}
.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
.thumbnail img {
    width: 200px;
    height: 200px;
}
.thumbnail .caption{
    margin: 7px;
}
.btn-holder{
    text-align: center;
}
.image{
    height : 100px;
    width : 100px;
}


    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 500%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      
       
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
                    <img src="{{ asset('/image/logo.jpg') }}" alt="logo" style="width:50px;">
                    
                </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
 <div class="row content">
 @include('productManagement.layouts.sidenav')
   <section class="content" style="padding-top:50px;">
   <h2><b>Barbie Doll</b></h2>
   <div class="container products">
        <div class="row">
            @foreach($users as $data)
                <div class="col-xs-18 col-sm-6 col-md-3" style="margin-left: 170px;">
                    <div class="thumbnail">
                        <img  src="{{asset('storage/image/'.$data->productimage)}}" width="500px" height="300px">
                        <div class="caption">
                            <h4>{{ $data->productname }}</h4>
                            <p><strong>SKU: </strong> {{ $data->SKU }}</p>
                            <p class="btn-holder"><a href="{{route('product/cart')}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
 </div>
</div>
<footer class="container-fluid text-center">
  <p>Thank You</p>
</footer>

</body>
</html>

  