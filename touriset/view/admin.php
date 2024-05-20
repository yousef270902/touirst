<!DOCTYPE html>
<html lang="en">
<head>
  <title>customer service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../view/css/admin.css" rel="stylesheet">
</head>
<body>
    <section> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> travarse</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <button class="nav-link active" onclick="addd()">Add</button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link"  onclick="updatee()">Edit</button>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link"  onclick="deletee()">Delete</button>
                  </li>
                  <li class="nav-item">
                    <a href="#contact" class="nav-link">contact us</a>
                  </li>
                </ul>
                  <a href= "homepage.php"class="btn btn-danger" type="submit">Log out</a>
              </div>
            </div>
          </nav>
    </section>
    <br>
    <br>
    <center> 
<section id="add" style="display:none;"> 
<div class="container mt-3">
  <div class="card img-fluid" style="width:700px">
    <img class="card-img-top" src="../view/city/trip.png" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <i> <h5 class="card-title">Add Place</h5></i>
      <br>
      <form class="card-text" method="post">
        <input placeholder="Enter place" name="place" width="25%" height="5%" type="text" required>
            <br>
            <br>
            <input placeholder="Enter city" name="city" width="25%" height="5%" type="text" required>
            <br>
            <br>
            <input placeholder="Enter city photo" name="cityphoto" width="15%" height="5%" type="file" required>
            <br>
            <br>
            <input placeholder="Enter catgory" name="catgory" width="25%" height="5%" type="text" required>
            <br>
            <br>
            <input placeholder="Enter catgory photo" name="catgoryphoto" width="15%" height="5%" type="file" required>
            <br>
            <br>
            <textarea width="15%" height="5%" name="link" required>link destination:......</textarea>
            <br>
            <br>
            <input placeholder="Enter video" name="video" width="15%" height="5%" type="file" required>
            <br>
            <br>
            <textarea width="15%" height="5%" name="description" required>Description:......</textarea>
            <br>
            <br>
            <input placeholder="Enter price" name="price" width="15%" height="5%" type="text" required>
            <br>
            <br>
        <input type="submit" name="submit" class="btn btn-primary" value="Save">
        <button type="submit" name="submit" class="btn btn-danger">Cancel</button>
      </form>
    </div>
  </div>
</div>
</section>
<section id="update" style="display:none;"> 
    <div class="container mt-3">
      <div class="card img-fluid" style="width:550px">
        <img class="card-img-top" src="../view/city/trip.png" alt="Card image" style="width:100%">
        <div class="card-img-overlay">
          <i> <h5 class="card-title">Update Place</h5></i>
          <br>
          <form class="card-text" method="post">
            <input placeholder="Enter place" name="place" width="25%" height="5%" type="text" required>
            <br>
            <br>
            <input placeholder="Enter Newset Name place" name="place2" width="25%" height="5%" type="text" required>
            <br>
            <br>
            <textarea width="15%" height="5%" name="link" required>link destination:......</textarea>
            <br>
            <br>
            <input type="submit" name="submit" class="btn btn-primary" value="update">
            <button type="submit" name="submit" class="btn btn-danger">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    </section>
    <section id="delete" style="display:none;"> 
        <div class="container mt-3">
          <div class="card img-fluid" style="width:300px">
            <img class="card-img-top" src="../view/city/trip.png" alt="Card image" style="width:100%">
            <div class="card-img-overlay">
              <i> <h5 class="card-title">Delete Place</h5></i>
              <br>
              <form class="card-text" method="post">
                <input placeholder="Enter city" name="place" width="25%" height="5%" type="text" required>
                <br>
                <br>
                <input type="submit" name="submit" class="btn btn-primary" value="Delete">  
                <button type="submit" name="submit" class="btn btn-danger">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <?php require("C:/xampp/htdocs/touriset/control/control.php");?>
        </section>
        <script src="script/homepage.js"></script>
        <br>
        <section id="contact">
            <div class="text-center py-4 align-items-center" id="contactus">
                <p>Support if problem occur:</p>
                <a href="#" class="btn btn-primary m-1" role="button" data-mdb-ripple-init
                   rel="nofollow" target="_blank">
                   <i class="fa fa-telegram"></i>
                </a>
                <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
                   target="_blank">
                   <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
                   target="_blank">
                   <i class="fa fa-whatsapp"></i>
                </a>
                <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
                   target="_blank">
                   <i class="fa fa-instagram"></i>
                </a>
              </div>  
        </section>
</center>
</body>
</html>