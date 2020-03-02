<br>
<h2><?php $title; ?></h2>
<h3><?php echo $garage['name']; ?></h3>
    <p><?php echo $garage['abstract'] ?></p>
    <p>Located at: <?php echo $garage['location']; ?></p> 
    <p>Phone: <?php echo $garage['phone']; ?></p> 
    <hr style="border-top: 1px solid #524; ">
    <p><a href="<?php echo base_url(); ?>garages">return</a></p>