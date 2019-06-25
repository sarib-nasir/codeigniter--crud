<h3 class="mt-3 text-center">data tables</h3>
<div class="container mt-3">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-dark btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
    add user/student
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">enter student data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open('CrudController/create'); ?>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Enter first name">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Enter last name">
            </div>
            <div class="form-group">
              <label>Date od Birth</label>
              <input type="date" name="dob" class="form-control form-control-sm" placeholder="Enter dob">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control form-control-sm" placeholder="Enter address">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name="phone" class="form-control form-control-sm" placeholder="Enter number">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <table id="example" class="table table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="text-capitalize">#</th>
        <th scope="col" class="text-capitalize">First</th>
        <th scope="col" class="text-capitalize">Last</th>
        <th scope="col" class="text-capitalize">dob</th>
        <th scope="col" class="text-capitalize">address</th>
        <th scope="col" class="text-capitalize">phone</th>
        <th scope="col" class="text-capitalize">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row):?>
      <tr>
        <th scope="row"><?php echo $row->id ?></th>
        <td><?php echo $row->firstName ?></td>
        <td><?php echo $row->lastName ?></td>
        <td><?php echo $row->dob ?></td>
        <td><?php echo $row->address ?></td>
        <td><?php echo $row->phone ?></td>
        <td> <a href="<?php echo base_url().'index.php/CrudController/edit/'; ?><?php echo $row->id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/CrudController/delete/'; ?><?php echo $row->id; ?>">delete</a> </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
