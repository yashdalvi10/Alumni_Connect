 <?php 
  
  include 'header.php';

  include 'db.php';

  $id = $_GET["id"];

  $sql = "SELECT * FROM `user` WHERE `user_id`='$id'";
  $result = $conn->query($sql);
  if($result->num_rows > 0 )
  {
    while($row=$result->fetch_assoc())
    {
      $first_name = $row["first_name"];
      $last_name = $row["last_name"];
      $email = $row["email"];
      $phone = $row["phone"];
      $address = $row["address"];
      $pincode = $row["pincode"];
      
    }
  }

  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Update User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="bi bi-people"></i>  &nbsp;&nbsp;&nbsp;Update User Data</h3>
              <form action="updateuserdb.php" method="POST">
                <div class="row mb-3">
                  <label for="Text" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="id" value="<?php echo $id;  ?>" hidden="">
                    <input type="text"  name="first_name" value="<?php  echo $first_name; ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Last Name:</label>
                  <div class="col-sm-10">
                    <input type="text" name="last_name" value="<?php  echo $last_name; ?>" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">E-mail:</label>
                  <div class="col-sm-10">
                    <input type="email" name="email"  value="<?php  echo $email; ?>" readonly="" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Phone No:</label>
                  <div class="col-sm-10">
                    <input type="number" name="phone" value="<?php  echo $phone; ?>"  placeholder="enter number" class="form-control">
                </div><br><br>

               
                <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Address:</label>
                  <div class="col-sm-10">
                    <input type="text" name="address" value="<?php  echo $address; ?>"  class="form-control">
                  </div>
                </div><br><br>
                <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Pincode:</label>
                  <div class="col-sm-10">
                    <input type="number" name="pincode" value="<?php  echo $pincode; ?>"  class="form-control">
                  </div>
                </div><br><br>
                 <div class="row mb-3">
                  <label for="number" class="col-sm-2 col-form-label">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" readonly="" class="form-control">
                  </div>
                </div><br><br>
                <br><br>
                <div class="row mb-3">
                  <div align="center" class="col-sm-6">
                    <button  type="submit"  class="btn btn-primary"  style="float: right;width: 230px;background-color: green;font-size: 20px"><b>Update</b></button>
                  </div>
                  <div align="center" class="col-sm-6" >
                    <button  type="reset"  class="btn btn-primary" style="float: left;width: 230px;font-size: 20px;background-color: orange"><b>Reset</b></button>
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



