


	<div role="main" class="main">

				
				<div class="slider-container rev_slider_wrapper" style="height: 650px;">
					<div id="revolutionSlider" class="slider rev_slider manual">
						<ul>



    <?php 


$slidersor=$db->prepare("select * from slider order by slider_id DESC limit 25");

$slidersor->execute();
while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {





                           ?>

<!-- li data-transition="fade -----   fade kısmı eresim değişme efektidir fade , zoom CSS animate Diye arat bul  -->


							<li data-transition="fade" data-title="<?php echo $ayarcek['ayar_author']; ?>" data-thumb="<?php echo $slidercek['slider_resimyol']; ?>">

								<img src="<?php echo $slidercek['slider_resimyol']; ?>"  
									alt="<?php echo $slidercek['slider_ad']; ?>"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat"
									class="rev-slidebg">























										<!--









											
								<div class="tp-caption top-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">YOUR TRUSTED</div>

								<div class="tp-caption main-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">ADVOCATE TEAM</div>

								<div class="tp-caption bottom-label"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Consult With Our Experienced Team for Solutions.</div>

								<a class="tp-caption btn btn-primary btn-lg"
									data-hash
									data-hash-offset="85"
									href="#home-intro"
									data-x="right" data-hoffset="100"
									data-y="center" data-voffset="80"
									data-start="2500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Request a Free Consultation</a>


								-->
								
							</li>

						<?php } ?>


						</ul>
					</div>
				</div>