<br>
<h2><?= $title; ?></h2>


<?php echo validation_errors(); ?>
<?php echo form_open('/garages/update'); ?>

<input type="hidden" name="id" value="<?php echo $garage['id']; ?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="<?php echo $garage['name']?>">
  </div>
  <div class="form-group">
    <label for="abstract">Abstract</label>
    <textarea type="text" class="form-control" name="abstract" placeholder="<?php echo $garage['abstract']?>">
    </textarea>
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" placeholder="<?php echo $garage['location']?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="<?php echo $garage['phone']?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
