<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php echo validation_errors(); ?>
      <?php echo form_open('CrudController/update/'.$row->id);?>
        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Enter first name" value="<?php echo $row->firstName; ?>">
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Enter last name" value="<?php echo $row->lastName; ?>">
        </div>
        <div class="form-group">
          <label>Date od Birth</label>
          <input type="date" name="dob" class="form-control form-control-sm" placeholder="Enter dob" value="<?php echo $row->dob; ?>">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control form-control-sm" placeholder="Enter address" value="<?php echo $row->address; ?>">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control form-control-sm" placeholder="Enter number" value="<?php echo $row->phone; ?>">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </form>
    </div>
  </div>
</div>
