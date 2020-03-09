<br>
<h2><?php $title; ?></h2>

<?php echo form_open('/garages/create/'); ?>
    <input type="submit" value="create" class="btn btn-danger">
</form>

<br>
<?php foreach ($garages as $garage) : ?>
    <h3><?php echo $garage['name']; ?></h3>
    <p>Located at: <?php echo $garage['location']; ?></p> 
    <p>Phone: <?php echo $garage['phone']; ?></p> 
    <hr style="border-top: 1px solid #524; ">
    <p>
        <a href="<?php echo site_url('/garages/' .$garage['slug']); ?>">Read More...</a>
    </p>
<?php endforeach; ?>
