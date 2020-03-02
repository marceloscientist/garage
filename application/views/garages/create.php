<br>
<h2><?= $title; ?></h2>


<?php echo validation_errors(); ?>
<?php echo form_open('/garages/create'); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="abstract">Abstract</label>
    <textarea type="text" class="form-control" name="abstract" placeholder="Enter Abstract">
    </textarea>
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" placeholder="Enter Location">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
