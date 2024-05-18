<html>
  <title>Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="../view/css/admin.css" rel="stylesheet">
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
                <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <button class="nav-link" href="#contact">Contact us</button>
              </li>
            </ul>
            <div id="catgory"> 
            <input type="text" onkeyup="filterTable()" id="searchInput" placeholder="Enter the place name">
            </div>
          </div>
        </div>
      </nav>
    </section>
    <br>
    <br>
       
<center> 
<?php
require("C:/xampp/htdocs/touriset/control/db-conn.php");
    if(isset($_GET['place'])) {
        $place = $_GET['place'];
        $s="SELECT  `place`, `catgory`, `link_destination` FROM `places` WHERE `city`='$place' ORDER BY place ASC";
    }
    else
    {
      if (isset($_GET['catgory']))
      {
      $catgory=$_GET['catgory'];
      $s="SELECT  `place`, `catgory`, `link_destination` FROM `places` WHERE `catgory`='$catgory' ORDER BY place ASC";
    }
  }
  $result = mysqli_query($conn, $s);

 
    ?>
<section id="viewbycatgory">
    <center><h5 style="color:blue;">Filter</h5>
        <hr style="width:25%;height:2px;color:white;">
    <table class="table table-striped" style="width:55%;" id="placesTable">
        <thead>
          <tr>
            <th scope="col">place</th>
            <th scope="col">catgory</th>
            <th scope="col">Location</th>
            <th scope="col">comment&rating</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {?>
          <tr>
            <td><?php echo $row['place'];?></td>
            <td><?php echo $row['catgory'];?></td>
            <td><a class="btn btn-outline-primary" href="<?php echo $row['link_destination'];?>">GO</a</td>
            <td><a class="btn btn-outline-primary"  href="rate.html">Rate</a></td>
          </tr>
          <?php }} else {?>
            <tr>
                        <td colspan="4">No results found</td>
                    </tr>
                <?php } ?>
        </tbody>
      </table>

      <script>
      function filterTable() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            table = document.getElementById('placesTable');
            tr = table.getElementsByTagName('tr');

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = 'none'; // Hide the row initially
                td = tr[i].getElementsByTagName('td');
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = ''; // Show the row if any cell matches
                            break;
                        }
                    }
                }
            }
        }
</script>
</section>
</center>
    <br>
    <br>
    <section id="contact">
        <div class="text-center py-4 align-items-center" id="contactus">
            <p>Contact travarse on social media</p>
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
</body>
</html>