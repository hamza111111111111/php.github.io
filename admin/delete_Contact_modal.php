<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Message</h4></center>
            </div>
            <div class="modal-body">	
            	<h5 align="center">Are you sure you want to Delete</h5>
				<h2 class="text-center"><?php echo $row['username']; ?></h2>
                <h2 class="text-center"><?php echo $row['email']; ?></h2>
                <h2 class="text-center"><?php echo $row['message']; ?></h2>

			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                <a href="delete_contact.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

