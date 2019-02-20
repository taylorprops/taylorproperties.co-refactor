<h2 class="text-center my-5">Featured Listings</h2>
<!--Carousel Wrapper-->
<div id="featured_carousel" class="carousel slide carousel-fade carousel-multi-item" data-ride="carousel" data-interval="3000">


    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#featured_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#featured_carousel" data-slide-to="1"></li>
        <li data-target="#featured_carousel" data-slide-to="2"></li>
		<li data-target="#featured_carousel" data-slide-to="3"></li>
		<li data-target="#featured_carousel" data-slide-to="4"></li>
		<li data-target="#featured_carousel" data-slide-to="5"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

	<?php for($p=0;$p<$propsCount;$p++) {

		$link = 'http://homesearch.taylorproperties.co/homes/113643/530/'.urlencode($props[$p]['FullStreetAddress']).'-'.urlencode($props[$p]['City']).'-'.$props[$p]['StateOrProvince'].'-'.$props[$p]['PostalCode'].'/'.$props[$p]['ListingId'];

		// wrap sets of 4
		if($p == 0) {
			echo '
			<div class="carousel-item active">
				<div class="row">';
			$styles = '';
		} else if($p == 4 || $p == 8 || $p == 12 || $p == 16 || $p == 20) {
			echo '
			<div class="carousel-item">
				<div class="row">';
			$styles = '';
		} else {
			$styles = 'clearfix d-none d-md-block';
		}
		?>

		<div class="col-md-3 <?php echo $styles; ?>">
			<div class="card mb-2">
				<div class="view overlay">
	                <img class="card-img-top" src="<?php echo str_replace('http', 'https', $props[$p]['ListPictureURL']); ?>" alt="<?php echo $props[$p]['FullStreetAddress']; ?>">
	                <a href="<?php echo $link; ?>">
	                    <div class="mask rgba-white-slight"></div>
	                </a>
	            </div>

	            <!-- Button -->
	            <a class="btn-floating btn-action ml-auto mr-2 bg-color3 view-featured" href="<?php echo $link; ?>"><i class="far fa-chevron-right pl-1"></i></a>

	            <!-- Card content -->
	            <div class="card-body">

	                <!-- Title -->
	                <h5 class="card-title featured-address"><?php echo $props[$p]['FullStreetAddress'].'<br>'.$props[$p]['City'].', '.$props[$p]['StateOrProvince'].' '.$props[$p]['PostalCode']; ?></h5>
	                <hr class="d-none d-sm-none d-md-none d-lg-block">
	                <!-- Text -->
					<div class="scrollbar scrollbar-primary featured-remarks d-none d-sm-none d-md-none d-lg-block">
		                <p class="card-text"><?php echo $props[$p]['PublicRemarks']; ?></p>
					</div>

	            </div>

	            <!-- Card footer -->
	            <div class="rounded-bottom bg-color2 text-center pt-3">
	                <ul class="list-unstyled list-inline font-medium featured-details">
	                    <li class="list-inline-item pr-1 pl-1"><a href="<?php echo $link; ?>" class="white-text">$<?php echo number_format($props[$p]['ListPrice'], 0, '.', ','); ?></a></li>
	                    <li class="list-inline-item pr-1 pl-1"><a href="<?php echo $link; ?>" class="white-text"><?php echo $props[$p]['BedroomsTotal']; ?> BR</a></li>
	                    <li class="list-inline-item pr-1 pl-12"><a href="<?php echo $link; ?>" class="white-text"><?php echo $props[$p]['BathroomsFull'] + $props[$p]['BathroomsHalf']; ?> BA</a></li>
	                </ul>
	            </div>
			</div>
		</div>


		<?php
		// end wrap sets of 4
		if($p == 3 || $p == 7 || $p == 11 || $p == 15 || $p == 19 || $p == 23) {
			echo '
				</div>
			</div>';
		}
		?>


    <?php } ?>
	</div>
	<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->