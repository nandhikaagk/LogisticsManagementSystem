<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:24px;color:maroon">TRUCKER'S DETAILS</h1>

<style>
  textarea{
    resize: none;
  }
</style>
<div class="col-lg-12">
	<div class="card card-outline card-danger">
		<div class="card-body">
			<form action="" id="manage-staff">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div class="row">
          <div class="col-md-12">
            <div id="msg" class=""></div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Truckers Name</label>
                <input type="text" name="firstname" id="" class="form-control form-control-sm" value="<?php echo isset($firstname) ? $firstname : '' ?>" required>
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Contact</label>
                <input type="text" name="lastname" id="" class="form-control form-control-sm" value="<?php echo isset($lastname) ? $lastname : '' ?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Vehicle Allocation</label>
                <select name="branch_id" id="" class="form-control input-sm select2">
                  <option value=""></option>
                  <?php
                    $branches = $conn->query("SELECT *,concat(street,', ',city,', ',state,', ',zip_code,', ',country) as address FROM branches");
                    while($row = $branches->fetch_assoc()):
                  ?>
                  <option value="<?php echo $row['id'] ?>" <?php echo isset($branch_id) && $branch_id == $row['id'] ? "selected":'' ?>><?php echo $row['branch_code']. ' | '.(ucwords($row['address'])) ?></option>
                <?php endwhile; ?>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Health Status</label>
                <select name="email" id="" class="form-control form-control-sm" <?php echo isset($email) ? $email : '' ?>>
                  <option >Fit for Driving </option>
                  <option>Unfit for Driving  </option>
                  <option>fit for Driving  </option>
                  <option >Fit for Drivings </option>
                  <option>Ok with fitness  </option>
                  <option>Normal condition</option>
                  <option>Normal conditions</option>
                  <option>normalsss conditions</option>
                  <option>good conditions</option>
                  <option>Normal Health</option>
                  <option>Abnormal health</option>







                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Experience</label>
                <input type="type" name="password" id="" class="form-control form-control-sm" <?php echo isset($id) ? '' : 'required' ?>>
                <?php if(isset($id)): ?>
                  <small class=""><i>Leave this blank if you dont want to change this</i></small>
                <?php endif; ?>
              </div>
            </div>

            
          </div>
        </div>
      </form>
  	</div>
  	<div class="card-footer border-top border-info">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-staff">Save</button>
  			<a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=staff_list">Cancel</a>
  		</div>
  	</div>
	</div>
</div>
<script>
	$('#manage-staff').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
              location.href = 'index.php?page=staff_list'
					},2000)
				}else if(resp == 2){
          $('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>Enter it correctly.</div>')
          end_load()
        }
			}
		})
	})
  function displayImgCover(input,_this) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#cover').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>