<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['booking_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Appoinment</h4></center>
            </div>
            <div class="modal-body">	
            	<h5 align="center">Are you sure you want to Cancil your appoinment</h5>
				<h2 class="text-center"><?php echo $row['dname']; ?></h2>
                <h2 class="text-center">Date: <?php echo $row['date']; ?></h2>
                <h2 class="text-center">Time: <?php echo $row['time']; ?></h2>


			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                <a href="delete_Appoinment.php?booking_id=<?php echo $row['booking_id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

