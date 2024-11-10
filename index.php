<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link  rel="stylesheet" type="style/css" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">JD Technical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- 
style -->
<style>

*{
    margin:0; padding:0; box-sizing: border-box;
}

.carousel-inner img{

   width: 100%; 
   height:100%;
}


  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 90vh;
  }

  font-family: "Lora", serif;s
  </style>
  



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>

    <li data-target="#demo" data-slide-to="1"></li>

    <li data-target="#demo" data-slide-to="2"></li>
    
    <li data-target="#demo" data-slide-to="3"></li>
    
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="images/a.jpg" alt="Los Angeles" width="1100" height="500">

    </div>
    <div class="carousel-item">
      <img src="images/b.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">

      <img src="images/c.jpg" alt="New York" width="1100" height="500">

    </div>

    <div class="carousel-item">

      <img src="images/d.jpg" alt="New York" width="1100" height="500">

    </div>

    
    <div class="carousel-item">

      <img src="images/e.jpg" alt="New York" width="1100" height="500">

    </div>


  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  
  </a>
  
</div>











<section class="my-5">
  <div  class="py-5">
    <h2 class="text-center">About Us</h2>
    </div>
<div  class="container-fluid">

    <div class="row">
    <div class="col-lg-6  col-md-6 col-12">

    <img src="images/z.webp" width="1200px" height="1200px" class="img-fluid  about-img"> 

    </div>

    <div class="col-lg-6  col-md-6 col-12">
<h2  class="display-4"> I am  JD  Technical</h2>
<p  class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos mollitia rem,
 nam voluptatum cumque omnis dolorum ea aliquam eum qui! ipsum dolor sit, amet consectetur 
 adipisicing elit. Voluptatem, veniam ea. Et, aliquid non Ex.</p>
 
 <a href="about.php"  class="btn btn-success">

 Check  More</a>
</div>
</div>
</div>
</div>
</section>


<section class="my-5">
  <div  class="py-5">
    <h2 class="text-center">Our Services</h2>
    </div>

    <br>

    <div class="container-fluid">
    <div class="row">

    <div class="col-lg-4  col-md-4 col-12">
    <div class="card">

    

    <img  class="card-img-top" src="images/x.webp" class="img-fluid  about-img"> 

    <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text"> Some example text.</p>
    <a href="#"  class="btn btn-primary">See Profile</a>

    
    
  </div>
    </div>

   </div>
    

   
   <div class="col-lg-4  col-md-4 col-12">
    <div class="card">

    

    <img  class="card-img-top" src="images/x.webp" class="img-fluid  about-img"> 

    <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text"> Some example text.</p>
    <a href="#"  class="btn btn-primary">See Profile</a>

    
    
  </div>
    </div>

   </div>

   
   <div class="col-lg-4  col-md-4 col-12">
    <div class="card">

    

    <img  class="card-img-top" src="images/x.webp" class="img-fluid  about-img"> 

    <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text"> Some example text.</p>
    <a href="#"  class="btn btn-primary">See Profile</a>

    
    
  </div>
    </div>

   </div>
    
   </div>
   </div>
   
    
    
    </section>

    
<section class="my-5">
  <div  class="py-5">
    <h2 class="text-center">Our Services</h2>

    <div class="container-fluid">
    
    <div class="row">
    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>


    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>

    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>

    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>

    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>
    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>

    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>
    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>

    <div class="col-lg-4  col-md-4 col-12">
    
    <img src="images/l.jpeg" alt="New York"   class="img-fluid pb-4">
    
    </div>


    
    
    
    </div>
    
    
    </div>
    </div>
    </section>


    <section class="my-5">
  <div  class="py-5">
    <h2 class="text-center">Our Gallery</h2>

    </div>
    <div  class="w-50 m-auto">

    <form action="userinfo.php   method="post">

    <div class="form-group">
    <lable>User Name</lable>

    <input type="text" name="user" autocomplete="off"  class=" form-control">

    </div>

    
    <div class="form-group">
    <lable>Email-Id</lable>

    <input type="text" name="email" autocomplete="off"  class=" form-control">

    </div>
    
    <div class="form-group">
    <lable>Mobile No</lable>

    <input type="text" name="mobile no" autocomplete="off"  class=" form-control">

    </div>

    
    <div class="form-group">
    <lable>Comments</lable>

<textarea  class="form-control">
</textarea>

<br>


<button type="submit" class="btn btn-success">Submit</button>


    </div>

    </section>


    <footer>
    <h3  class="p-3 bg-dark text-white  text-center">@JdtechnicalProducation</h3>
    </footer>

    
</body>
</html>

     
    