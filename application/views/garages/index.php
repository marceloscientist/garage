<br>
<h2><?php $title; ?></h2>
<?php foreach ($garages as $garage            ) : ?>
    <h3><?php echo $garage['name']; ?></h3>
    <p>Located at: <?php echo $garage['location']; ?></p> 
    <p>Phone: <?php echo $garage['phone']; ?></p> 
    <hr style="border-top: 1px solid #524; ">
<?php endforeach; ?>
