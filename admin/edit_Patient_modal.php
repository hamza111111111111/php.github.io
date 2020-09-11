<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Patient</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_patient.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Patient name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
					</div>
				</div>
                
                				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Age:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>">
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">City:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
					</div>
				</div>
				                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
                
                
             
                
         
          
			
            
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Update</a></button>
			
            </div>
</form>
        </div>
    </div>
</div>


