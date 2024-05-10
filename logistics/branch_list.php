<?php include'db_connect.php' ?>
<h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:24px;color:maroon">VEHICLE LIST</h1>

<div class="col-lg-12">
	<div class="card card-outline card-danger">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-secondary btn-flat border-primary " href="./index.php?page=new_branch"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th> Code</th>
						<th>Vehicle Type</th>
						<th>Fuel Type</th>
						<th>Plate No</th>
						<th>Plate Expiry</th>
						<th>Weight</th>
						<th>Mileage</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM branches order by street asc,city asc, state asc ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td class=""><b><?php echo $row['branch_code'] ?></b></td>
						<td><b><?php echo ucwords($row['street']) ?></b></td>
						<td><b><?php echo ucwords($row['city']) ?></b></td>
                        <td><b><?php echo ucwords($row['state']) ?></b></td>
						<td><b><?php echo ucwords($row['zip_code']) ?></b></td>
                        <td><b><?php echo ucwords($row['country']) ?></b></td>
						<td><b><?php echo $row['contact'] ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="index.php?page=edit_branch&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-flat ">
		                          <i class="fas fa-edit"></i>
		                        </a>&nbsp;&nbsp;
		                        <button type="button" class="btn btn-secondary btn-flat delete_branch" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
		$('.view_branch').click(function(){
			uni_modal("branch's Details","view_branch.php?id="+$(this).attr('data-id'),"large")
		})
	$('.delete_branch').click(function(){
	_conf("Are you sure to delete this vehicle details?","delete_branch",[$(this).attr('data-id')])
	})
	})
	function delete_branch($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_branch',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>