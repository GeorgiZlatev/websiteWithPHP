<?php
    define("TITLE", "Team | Franklin`s");
    include('./assets/includes/header.php');
 ?>
 
<div id="team-members" class="cf">
    <hr>
    <h1>Our Team at Franklin`s</h1>
    <p>Loren input</p>
    <hr>
    <?php foreach ($teamMembers as $member) { ?>
			
			<div class="member">
				<img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
				<h2><?php echo $member["name"]; ?></h2>
				<p><?php echo $member["bio"]; ?></p>
			</div><!-- member -->
		
		<?php } ?>
		
	</div><!-- team-members -->
	
	<hr>

<?php 
    include('./assets/includes/footer.php');
 ?>