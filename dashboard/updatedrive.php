<?php

include 'header.php';

  include 'db.php';

  $id = $_GET["id"];

  $sql = "SELECT * FROM `drive` WHERE `id`='$id'";
  $result = $conn->query($sql);
  if($result->num_rows > 0 )
  {
    while($row=$result->fetch_assoc())
    {
      $cname=$row["cname"];
      $branch=$row["branch"];
      $date=$row["date"];
      $venue=$row["venue"];
      $time=$row["time"];
    }
  }

?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Drive</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Update Drive</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> <i class="bi bi-bag-plus-fill"></i>Update Drive</h5>

              <!-- General Form Elements -->
              <form action="updateproductdb.php" method="POST">
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="id" value="<?php echo $id;  ?>" hidden=""><s></s>
                    <input type="text" name="cname" value="<?php  echo $cname; ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">For This Branch</label>
                  <div class="col-sm-10">
                    <input type="text" name="branch" value="<?php  echo $branch; ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" value="<?php  echo $date; ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Venue</label>
                  <div class="col-sm-10">
                    <input type="text" name="venue" value="<?php echo $venue;  ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="date"  type="date" id="text">
                  </div>
                </div>
                <div align="center" class="col-sm-10">
                	<input type="submit" class="btn btn-primary" name="submit	">
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

	  </main><!-- End #main -->




  <?php


include 'footer.php';

  ?>