<?php 
	$sql = "SELECT * FROM zipcodes";
  $result = $mysqli->query($sql);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $data[] = $row;
  }
?> 
<!-- Edit Zip Modal -->
<div class="modal fade" id="edit-zip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Zip Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="forms-sample" action="" method="post">
                        <div class="form-group">
                          <label for="zip">ZIP</label>
                          
                          <input type="number" class="form-control" name="Zip" placeholder="Enter zip code" value="<?php echo ( isset ( $rows ) ? $rows[1] : '' ); ?>">
                        </div>
                        <div class="form-group">
                          <label for="city">CITY</label>
                          <input type="text" class="form-control" id="city" placeholder="Enter City" value="HOLTSVILLE">
                        </div>
                        <div class="form-group">
                          <label for="county">COUNTY</label>
                          <input type="text" class="form-control" id="county" placeholder="Enter County" value="SUFFOLK">
                        </div>
                        <div class="form-group">
                          <label for="county">STATE</label>
                          <?php include 'tools-data/states.php';?>
                        </div>
                       
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light" data-dismiss="modal">Cancel</button>
                      </form>
                  
      </div>
     
    </div>
  </div>
</div>