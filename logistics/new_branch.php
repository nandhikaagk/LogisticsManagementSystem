<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:24px;color:maroon">VEHICLE DETAILS</h1>

<style>
  textarea{
    resize: none;
  }
</style>
<div class="col-lg-12">
	<div class="card card-outline card-danger">
		<div class="card-body">
			<form action="" id="manage-branch">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div class="row">
          <div class="col-md-12">
            <div id="msg" class=""></div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Vehicle Type</label>
                <textarea required name="street" id="" cols="30" rows="1" class="form-control"><?php echo isset($street) ? $street : '' ?></textarea>
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Fuel Type</label>
                <textarea name="city" id="" cols="30" rows="1" class="form-control"><?php echo isset($city) ? $city : '' ?></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Plate No</label>
                <textarea required name="state" id="" cols="30" rows="1" class="form-control"><?php echo isset($state) ? $state : '' ?></textarea>
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Plate Expiry</label>
                <textarea required name="zip_code" id="" cols="30" rows="1" class="form-control"><?php echo isset($zip_code) ? $zip_code : '' ?></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Weight</label>
                <textarea required name="country" id="" cols="10" rows="1" class="form-control"><?php echo isset($country) ? $country : '' ?></textarea>
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Mileage</label>
                <textarea name="contact" id="" cols="10" rows="1" class="form-control"><?php echo isset($contact) ? $contact : '' ?></textarea>
                
              </div>
            </div>

          </div>
        </div>
      </form>
  	</div>
  	<div class="card-footer border-top border-info">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-branch">Save</button>
  			<a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=branch_list">Cancel</a>
  		</div>
  	</div>
	</div>
</div>
<script>
	$('#manage-branch').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_branch',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data saved successfully',"success");
					setTimeout(function(){
              location.href = 'index.php?page=branch_list'
					},2000)
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