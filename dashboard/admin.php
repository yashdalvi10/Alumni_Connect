<?php

include 'header.php';


?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Admin Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-person-circle"></i>Admin</h5>

              <!-- General Form Elements -->
              <form  action="admindb.php" method="POST">
                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">name</label>
                  <div class="col-sm-10">
                    <input type="Name" name="name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">phone_no.</label>
                  <div class="col-sm-10">
                    <input type="phone_no" name="phone_no" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control">
                  </div>
                </div>
                

                
                  <div align="center" class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button></center>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
           
        </section>
        </main><!-- End #main -->



<?php


include 'footer.php';


?>