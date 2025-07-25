<?php

include 'header.php';


?>
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-12" >

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Alumni</h5>
             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone-No</th>
                    <th scope="col">Email</th>
                    <th scope="col">P-Year</th>
                    <th scope="col">C-Name</th>
                    <th scope="col">Linkedin</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php

                  include 'db.php';

                  $sql = "SELECT * FROM `user` ";
                  $result = $conn->query($sql);
                  if($result->num_rows >0) 
                  {
                    $i=1;
                    while($row = $result->fetch_assoc())
                    {
                      ?>
                  <tr>
                    <th scope="row"><?php  echo $i; $i+=1; ?></th>
                    <td><?php echo $row["first_name"]; echo " "; echo $row["last_name"];  ?></td>
                    <td><?php echo $row["email"];  ?></td>
                    <td><?php  echo $row["phone"]; ?></td>
                    <td><a href="updateuser.php?id=<?php echo $row["user_id"]; ?>"> <i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="deleteuser.php?id=<?php echo $row["user_id"];  ?>"><i class="bi bi-trash"></i></a></td>
                  </tr> 

                      <?php
                    }

                  }
                  else
                  {
                    echo "noting found";
                  }

                  ?>



                  
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
    <?php


include 'footer.php';


    ?>