<br>
<h2><?= $title; ?></h2>
<?php foreach ($vehicles as $vehicle            ) : ?>
    <h3><?php echo $vehicle['title']; ?></h3> 
    <small class="vehicle-date">Updated on: <?php echo $vehicle['created_at']; ?></small><br> 
    <p>Details: <?php echo $vehicle['marca']; ?> | <?php echo $vehicle['ano']; ?> | <?php echo $vehicle['cor']; ?></p> 
    <hr style="border-top: 1px solid #524; ">
<?php endforeach; ?>
