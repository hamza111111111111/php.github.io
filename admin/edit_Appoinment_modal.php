<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['booking_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Apooinment</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_appoinment.php">
				<input type="hidden" class="form-control" name="booking_id" value="<?php echo $row['booking_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Doctor name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dname" value="<?php echo $row['dname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dcontact" value="<?php echo $row['dcontact']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">expertise:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="expertise" value="<?php echo $row['expertise']; ?>">
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fee:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fee" value="<?php echo $row['fee']; ?>">
					</div>
				</div>
                
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pateint Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>">
					</div>
				</div>
                
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Patient Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pcontact" value="<?php echo $row['pcontact']; ?>">
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
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Address" value="<?php echo $row['Address']; ?>">
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
						<label class="control-label modal-label">Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="date" value="<?php echo $row['date']; ?>">
					</div>
				</div>
                
                  <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Time:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="time" value="<?php echo $row['time']; ?>">
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


