<br>
<h2><?php $title; ?></h2>
<h3><?php echo $garage['name']; ?></h3>
    <p><?php echo $garage['abstract'] ?></p>
    <p>Located at: <?php echo $garage['location']; ?></p> 
    <p>Phone: <?php echo $garage['phone']; ?></p> 
    <hr style="border-top: 1px solid #524; ">

<a class="btn btn-info pull-left" href="<?php echo base_url();?>
/garages/edit/<?php echo $garage['slug']; ?>">Edit</a>

<!-- <a class="btn btn-info pull-left" href="edit/<?php # echo $garage['id']?>">Edit</a> -->
<?php echo form_open('/garages/delete/'.$garage['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>