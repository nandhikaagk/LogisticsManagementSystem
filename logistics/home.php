<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        <div class="row" >
          <div class="col-6 col-sm-3 col-md-3" >
            <div class="small-box bg-light shadow-sm border" >
              <div class="inner text-center"style="background-color:skyblue" >
                <h3><?php echo $conn->query("SELECT * FROM branches")->num_rows; ?></h3>

                <p style="color:black;font-size:25px;font-weight:400;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >Vehicles</p>
              </div>
              <!-- <div class="icon">
                <i class="fa fa-building"></i>
              </div> -->
            </div>
          </div>
           <div class="col-6 col-sm-3 col-md-3">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner text-center"style="background-color:skyblue">
                <h3><?php echo $conn->query("SELECT * FROM parcels")->num_rows; ?></h3>

                <p style="color:black;font-size:25px;font-weight:400;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Booking Shipments</p>
              </div>
              <!-- <div class="icon">
                <i class="fa fa-boxes"></i>
              </div> -->
            </div>
          </div>
           <div class="col-6 col-sm-3 col-md-3">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner text-center" style="background-color:skyblue">
                <h3><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></h3>

                <p style="color:black;font-size:25px;font-weight:400;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Truckers</p>
              </div>
              <!-- <div class="icon">
                <i class="fa fa-users"></i>
              </div> -->
            </div>
          </div>
          <hr>
          <?php 
              $status_arr = array(" Accepted ","Shipped","In-Transit","At Destination"," Out for Delivery","Delivered");
               foreach($status_arr as $k =>$v):
          ?>
          <div class="col-6 col-sm-3 col-md-3">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner text-center"style="background-color:skyblue">
                <h3><?php echo $conn->query("SELECT * FROM parcels where status = {$k} ")->num_rows; ?></h3>

                <p style="color:black;font-size:25px;font-weight:400;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?php echo $v ?></p>
              </div>
              <!-- <div class="icon">
                <i class="fa fa-boxes"></i>
              </div> -->
            </div>
          </div>
            <?php endforeach; ?>
      </div>

<?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          		Welcome <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
          
<?php endif; ?>
