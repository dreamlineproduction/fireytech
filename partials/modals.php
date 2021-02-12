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
      <form class="forms-sample">
                        <div class="form-group">
                          <label for="zip">ZIP</label>
                          <input type="number" class="form-control" id="zip-code" placeholder="Enter zip code" value="00501">
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
                        <div class="form-group">
                          <label for="region">REGION</label>
                          <input type="text" class="form-control" id="region" placeholder="Enter Region" value="SUFFOLK">
                        </div>
                        <div class="form-group">
                          <label for="lat">LATITUDE</label>
                          <input type="number" class="form-control" id="lat" placeholder="Enter Latitude" value="40.922326">
                        </div>
                        <div class="form-group">
                          <label for="long">LONGITUDE</label>
                          <input type="number" class="form-control" id="long" placeholder="Enter Longitude" value="-72.637078">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light" data-dismiss="modal">Cancel</button>
                      </form>
      </div>
     
    </div>
  </div>
</div>