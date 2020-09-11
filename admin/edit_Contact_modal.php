<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Contact</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_contact.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">User name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
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
						<label class="control-label modal-label">Message:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="message" value="<?php echo $row['message']; ?>">
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


