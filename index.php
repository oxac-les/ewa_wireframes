<!DOCTYPE html>
<html>
	<head>  
		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />	
		<?php include('inc/headcommon.php') ?>		
    </head>
  <body>
	
<?php include('inc/header.php') ?>
      
<div class="marginTop clearfix"></div>
 
<div class="container"> <!-- page content -->

	<div class="row">
		
		<div class="col-sm-4">
			<div class="featureBox left">
                <a href="browse.php#tabs-3">
					<img src="img/imgplaceholder.jpg" alt="..."/>
				<div class="featureOvly">							
					<h3 class="featureTitle">Bird</h3>
					<p class="featureDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus maximus euismod. Nunc lacus quam, rhoncus ac nulla ac, tristique pulvinar tortor.</p>
				</div>
                </a>
			</div>    
		</div>
		
		<div class="col-sm-4">      
			<div class="featureBox">
                <a href="browse.php#tabs-1">
				    <img src="img/imgplaceholder.jpg" alt="..."/>
				<div class="featureOvly">
					<h3 class="featureTitle">Place</h3>
					<p class="featureDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus maximus euismod. Nunc lacus quam, rhoncus ac nulla ac, tristique pulvinar tortor.</p>
				</div>
                </a>
			</div> 
		</div>

		<div class="col-sm-4">     
			<div class="featureBox right">
                <a href="browse.php#tabs-2">
				    <img src="img/imgplaceholder.jpg" alt="..."/>
				<div class="featureOvly">
					<h3 class="featureTitle">People</h3>
					<p class="featureDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus maximus euismod. Nunc lacus quam, rhoncus ac nulla ac, tristique pulvinar tortor.</p>
				</div>
                </a>
			</div>  
		</div>
	
	</div>         
         
      
<div class="marginTop clearfix"></div>
  
	<div class="row">
		  <div class="col-sm-12">          
				  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <a href="collection.php">
                          <img src="img/imgplaceholder.jpg" alt="..."/>
					  <div class="carouselcaption">
						<div class="carouselcaptionText">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ut enim id porta. Maecenas est dolor, pharetra non tincidunt sed, consectetur ut velit. Nam lobortis molestie ante nec molestie.</p>
						</div>
					  </div>
                     </a>
					</div>
					<div class="item">
					  <a href="collection.php">
                          <img src="img/imgplaceholder.jpg" alt="..."/>
					  <div class="carouselcaption">
						<div class="carouselcaptionText">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ut enim id porta. Maecenas est dolor, pharetra non tincidunt sed, consectetur ut velit. Nam lobortis molestie ante nec molestie.</p>
						</div>
					  </div>
                     </a>
					</div>
					<div class="item">
					  <a href="collection.php">
                          <img src="img/imgplaceholder.jpg" alt="..."/>
					  <div class="carouselcaption">
						<div class="carouselcaptionText">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ut enim id porta. Maecenas est dolor, pharetra non tincidunt sed, consectetur ut velit. Nam lobortis molestie ante nec molestie.</p>
						</div>
					  </div>
                     </a>
					</div>
				  </div>

				</div>   
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
              
		 </div>
	</div> 
   
      
<div class="marginTop clearfix"></div>

       
	<div class="row">
		<div class="col-sm-12">
			<div class="owl-carousel">

                 <!-- example collection entries -->
                  <div>
                    <div class="carouselThmb">
                        <a href="entry.php?id=x">
                            <div class="carouselThmbOvly">
                                <img src="img/imgplaceholder.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="carouselIcon glyphicon glyphicon-folder-open" aria-hidden="true"></div>
                        <div class="carouselQty"><span>3</span></div>
                    </div>

                    <div class="carouselThmb">
                        <a href="entry.php?id=x">
                            <div class="carouselThmbOvly">
                                <img src="img/imgplaceholder.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="carouselIcon glyphicon glyphicon-folder-open" aria-hidden="true"></div>
                        <div class="carouselQty"><span>3</span></div>
                    </div>

                  </div>



                <!-- example text entries -->
                  <div>
                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>

                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>

                </div>


                <!-- video entry -->
                  <div>
                    <div class="carouselThmb">
                        <a href="entry.php?id=x">
                            <div class="carouselThmbOvly">
                                <img src="img/carouselThmbOvly.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="fa fa-play-circle-o carouselIcon" aria-hidden="true"></div>
                    </div>
                      
                <!-- music entry -->
                    <div class="carouselThmb">
                        <a href="entry.php?id=x">
                            <div class="carouselThmbOvly">
                                <img src="img/carouselThmbOvly.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="fa fa-music carouselIcon" aria-hidden="true"></div>
                    </div>

                  </div>    

                <!-- doc entry -->
                  <div>
                    <div class="carouselThmb">
                        <a href="entry.php?id=x">
                            <div class="carouselThmbOvly">
                                <img src="img/carouselThmbOvly.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="fa fa-file-o carouselIcon" aria-hidden="true"></div>
                    </div>
                <!-- video entry -->
                    <div class="carouselThmb">
                        <a href="entry.php?id=x">                            
                            <div class="carouselThmbOvly">
                                <img src="img/carouselThmbOvly.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="fa fa-play-circle-o carouselIcon" aria-hidden="true"></div>
                    </div>
                  </div>  

                 <!-- example text entries -->
                  <div>
                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>

                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>

                </div>
    <!-- example text entries -->
                  <div>
                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>

                    <div class="carouselThmb">
                    <a href="entry.php?id=x"><img src="img/imgplaceholder.jpg" alt="..."/>
                      <div class="carouselTextOvly"><p>Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.Some entries may show text rather than a photo.</p></div></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
      
      
<div class="clearfix"></div>
      
<div class="row callstoAction">
    <div class="col-sm-4">
        <div class="call">
        <a href="#">
            <img src="img/ewaBtn1.png" alt="EWA's Work" class="callImg"/>
				<div class="callText">
					<h3>EWA's Work</h3>
				</div>
         </a>
         </div>
    </div>
    <div class="col-sm-4">
        <div class="call">
            <a href="#">
                <img src="img/ewaBtn2.png" alt="Aubmit an entry" class="callImg"/>
                    <div class="callText">
                        <h3>Submit an Entry</h3>                   
                    </div>
             </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="call">
            <a href="#">
                <img src="img/ewaBtn3.png" alt="Support EWA" class="callImg"/>
                    <div class="callText">
                        <h3>Support EWA</h3>
                    </div>
             </a>
        </div>
    </div>
</div>

<div class="marginTop clearfix"></div>
      
      
        <div class="row">
            <div class="col-sm-12 partnerLogos">
            <h5>Partnered with</h5>
                <a href="http://www.ox.ac.uk" target="_blank"><img alt="" src="img/ox_small_black_rev.gif" style="height:120px;"/></a>
                <a href="http://www.birdlife.org" target="_blank"><img src="img/birdlife-logo.gif" alt="Birdlife International" /></a>
                <a href="http://www.hbw.com" target="_blank"><img src="img/alive-logo.gif" alt="Handbook of the birds of the world" /></a>
                <a href="http://www.ahrc.ac.uk/" target="_blank"><img src="img/imgplaceholder.jpg" alt="Arts &amp; Humanities Research Council" /></a>
            </div>
        </div>
        
    </div>
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	
        
  </body>
</html>