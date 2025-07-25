 <?php 
  
  include 'header.php';

  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Alumni</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Add Alumni</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="bi bi-people"></i>  &nbsp;&nbsp;&nbsp;New Alumni Registration</h3>
              <form action="userdb.php" method="POST">
                <div class="row mb-3">
                  <label for="Text" class="col-sm-2 col-form-label">Full Name </label>
                  <div class="col-sm-10">
                    <input type="text"  name="name" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Phone-No:</label>
                  <div class="col-sm-10">
                    <input type="number" name="phone" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                  </div> 
                </div>

               
                <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Pass Out Year:</label>
                  <div class="col-sm-10">
                    <input type="number" name="year" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Company Name:</label>
                  <div class="col-sm-10">
                    <input type="text" name="cname" class="form-control">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="url" class="col-sm-2 col-form-label">Linkedin URL:</label>
                  <div class="col-sm-10">
                    <input type="url" name="url" class="form-control">
                  </div>
                </div><br><br>
                <br><br>
                <div class="row mb-3">
                  <div align="center" class="col-sm-6">
                    <button  type="submit"  class="btn btn-primary"  style="float: right;width: 230px;font-size: 20px"><b>Submit</b></button>
                  </div>
                  <div align="center" class="col-sm-6" >
                    <button  type="reset"  class="btn btn-primary" style="float: left;width: 230px;font-size: 20px;"><b>Reset</b></button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  </main><!-- End #main -->

<?php

 include 'footer.php';  

?>



