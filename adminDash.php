<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<style>
		
	</style>
</head>

<body>
	<div class="container">
		<h2>Admin Dashboard :</h2>
		<i class="more-less glyphicon glyphicon-plus"></i>
		<i class="more-less glyphicon glyphicon-minus"></i>
		<i class="more-less glyphicon glyphicon-pencil"></i>
        <i class="more-less glyphicon glyphicon-menu-up"></i>
        <i class="more-less glyphicon glyphicon-menu-down"></i>
<?php 
    require_once 'data/appConnection.php';
    include_once 'controller/kickGrassHotel/kickgrassModel.php';
?>        
		<div class="panel-group" id="accordion">
            
            
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#burger">BURGER</a>
					</h4>
				</div>
            
				<div id="burger" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['BURGER'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#pizza">PIZZA</a>
					</h4>
				</div>
            
				<div id="pizza" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['PIZZA'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#sandwich">SANDWICH</a>
					</h4>
				</div>
            
				<div id="sandwich" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['SANDWICH'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#starter">STARTER</a>
					</h4>
				</div>
            
				<div id="starter" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['STARTER'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#curries">CURRIES</a>
					</h4>
				</div>
            
				<div id="curries" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['CURRIES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#breads">BREADS</a>
					</h4>
				</div>
            
				<div id="breads" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['BREADS'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#briyani">BRIYANI</a>
					</h4>
				</div>
            
				<div id="briyani" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['BRIYANI'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#rice">RICE</a>
					</h4>
				</div>
            
				<div id="rice" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['RICE'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#noodles">NOODLES</a>
					</h4>
				</div>
            
				<div id="noodles" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['NOODLES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#pastas">PASTAS</a>
					</h4>
				</div>
            
				<div id="pastas" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['PASTAS'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#soup">SOUP</a>
					</h4>
				</div>
            
				<div id="soup" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['SOUP'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#mojicool">MOJITOS AND COOLERS</a>
					</h4>
				</div>
            
				<div id="mojicool" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['MOJITOS AND COOLERS'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#mikshakes">MILKSHAKES</a>
					</h4>
				</div>
            
				<div id="mikshakes" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['MILKSHAKES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#desserts">DESSERTS</a>
					</h4>
				</div>
            
				<div id="desserts" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['DESSERTS'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#coldbeverages">COLD BEVERAGES</a>
					</h4>
				</div>
            
				<div id="coldbeverages" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['COLD BEVERAGES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#freshjuice">FRESH JUICE</a>
					</h4>
				</div>
            
				<div id="freshjuice" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['FRESH JUICE'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#hotbeverages">HOT BEVERAGES</a>
					</h4>
				</div>
            
				<div id="hotbeverages" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['HOT BEVERAGES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#icecream">ICE CREAM</a>
					</h4>
				</div>
            
				<div id="icecream" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['ICE CREAM'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
            
            
            <div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#sides">SIDES</a>
					</h4>
				</div>
            
				<div id="sides" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="list-unstyled">
              <?php 
                  foreach($class['SIDES'] as $row) {
                    //var_dump($row);
              ?>
							<li>
								<div class="checkbox">
									<label>
										<p><?php echo $row['PRODUCT_NAME']; ?><input type="checkbox"> </p> 
									</label>
								</div>
							</li>
              <?php } ?>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>

</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</html>
