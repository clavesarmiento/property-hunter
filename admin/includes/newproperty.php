
<div class="modal fade" id="newproperty">
<div class="modal-dialog" style="width: 100rem;">
<div class="modal-content">
<div class="modal-header" style="height: 7rem; background-color: #EAEDED;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" style="font-size: 2.5rem; text-align: center; padding-top: 0.5rem; font-family: 'Segoe UI', sans-serif;">Add Property</h4>
</div>
<div class="modal-body" style="background-color: #ecf0f5;">
  <div class="row">
  <div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Basic Info</div>


                  <div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Property ID<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="property_id" class="form-control" required>
</div>


<label class="col-sm-2 control-label">Property Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="property_type" required>

<option value=""> Select </option>

          <?php $ret = "SELECT propertytype_id,property_type from propertytype";
                $query= $dbh -> prepare($ret);
                $query-> execute();
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                if($query -> rowCount() > 0){
                foreach($results as $result){
              ?>
<option value="<?php echo htmlentities($result->propertytype_id);?>"><?php echo htmlentities($result->property_type);?></option>
<?php }} ?>

</select>
</div>
</div>
                      
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="price" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Property Location<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="property_loc" required>
<option value=""> Select </option>

          <?php $ret = "SELECT location_id,location_name from propertyloc";
                $query= $dbh -> prepare($ret);
                $query-> execute();
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                if($query -> rowCount() > 0){
                foreach($results as $result){
              ?>
<option value="<?php echo htmlentities($result->location_id);?>"><?php echo htmlentities($result->location_name);?></option>
<?php }} ?>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Occupancy<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="occupancy" required>
<option value=""> Select </option>

          <?php $ret = "SELECT occupancy_id,occupancy from occupancy";
                $query= $dbh -> prepare($ret);
                $query-> execute();
                $results = $query -> fetchAll(PDO::FETCH_OBJ);
                if($query -> rowCount() > 0){
                foreach($results as $result){
              ?>
<option value="<?php echo htmlentities($result->occupancy_id);?>"><?php echo htmlentities($result->occupancy);?></option>
<?php }} ?>
</select>
</div>
</div>
<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-10 col-md-push-1">
IMAGE  <span style="color:red">*</span><input type="file" name="prop_img" required>
</div>


</div>
<div class="hr-dashed"></div>                 
</div>
</div>
</div>
</div>
              

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Ammenities</div>
        <div class="panel-body">


<div class="form-group">
  <div class="col-sm-2">
    <div class="checkbox checkbox-inline">
      <label for="bathroom "> Bathroom: </label>
      <input type="textbox" id="bathroom" name="bathroom" class="form-control" style="width: 10rem;">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-2">
    <div class="checkbox checkbox-inline">
      <label for="bedroom "> Bedroom: </label>
      <input type="textbox" id="bedroom" name="bedroom" class="form-control" style="width: 10rem;">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-2">
    <div class="checkbox checkbox-inline">
      <label for="garage "> Garage: </label>
      <input type="textbox" id="garage" name="garage" class="form-control" style="width: 10rem;">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-2">
    <div class="checkbox checkbox-inline">
      <label for="lot "> Lot Area: </label>
      <input type="textbox" id="lot" name="lot" class="form-control" style="width: 10rem;">
    </div>
  </div>
</div>
  <div class="form-group">
  <div class="col-sm-2">
    <div class="checkbox checkbox-inline">
      <label for="floor "> Floor Area: </label>
      <input type="textbox" id="floor" name="floor" class="form-control" style="width: 10rem;">
    </div>
  </div>
       </div>
</div>
  <div class="modal-footer" align="center">
      <button type="reset" name=""class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="submit" name="submit"class="btn btn-primary">Save Changes</button>
                
        </div>
      </div>
            <!-- /.modal-content -->
    </div>
          <!-- /.modal-dialog -->
  </div>