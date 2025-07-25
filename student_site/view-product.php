<?php

include 'header.php';


?>
<main id="main" class="main">
<section class="section">
      <div class="row">
        <div class="col-lg-12" >

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Events</h5>
             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Organize</th>
                    <th scope="col">Even Date</th>
                    <th scope="col">Venue</th>
                    <th scope="col">time</th>
                     

                  </tr>
                </thead>
                <tbody>
                  <?php

                  include 'db.php';

                  $sql = "SELECT * FROM `event`";
                  $result = $conn->query($sql);
                  if($result->num_rows >0) 
                  {
                    $i=1;
                    while($row = $result->fetch_assoc())
                    {
                      ?>
                  <tr>
                    <th scope="row"><?php  echo $i; $i+=1; ?></th>
                    <td><?php echo $row["ename"];  ?></td>
                    <td><?php echo $row["organize"];  ?></td>
                    <td><?php echo $row["date"];  ?></td>
                    <td><?php echo $row["venue"];  ?></td>
                    <td><?php echo $row["time"];  ?></td>
                    
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