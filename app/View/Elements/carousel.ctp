<!--Début Carousel Droite-->

<div class="row-fluid">
	<div class="span9">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
             <?php echo $this->Html->image('vilgenis1.png');?>
				<div class="carousel-caption">
					<h4>First label</h4>
					<p>A working Bootstrap carousel example.</p>
				</div>
			</div>
			<div class="item">
              <?php echo $this->Html->image('vilgenis2.png');?>
				<div class="carousel-caption">
					<h4>Second label</h4>
					<p>This is the second slide text.</p>
				</div>
			</div>
			<div class="item">
				<?php echo $this->Html->image('vilgenis3.png');?>
				<div class="carousel-caption">
					<h4>Third label</h4>
					<p>Take note of the 'active' and 'slide' classes.</p>
				</div>
			</div>
		</div>
</div>
</div>
</div>
<!--Fin Carousel Droite-->