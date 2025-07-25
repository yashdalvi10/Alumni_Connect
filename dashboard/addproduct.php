<?php

include 'header.php';

?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Add Event</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> <i class="bi bi-bag-plus-fill"></i> Add New Event</h5>

              <!-- General Form Elements -->
              <form action="addproductdb.php" method="POST">
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Event Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="ename" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Organize By</label>
                  <div class="col-sm-10">
                    <input type="text" name="organize" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Event Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Venue</label>
                  <div class="col-sm-10">
                    <input type="text" name="venue" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="time" class="col-sm-2 col-form-label">time</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="time" type="time" id="text">
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