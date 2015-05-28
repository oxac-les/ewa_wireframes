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
      
<div class="marginTop clearfix"></div>
 
    <div class="row">
		<div class="col-md-6 marginTop">
            <img src="img/imgplaceholder.jpg" width="48" height="48" style="float:left;"/>
            <div class="author">
            <p><strong>Created by: </strong>< username ><br/>
            <strong>On: </strong><date>date</date></p>
            </div>
		</div>
		<div class="col-md-6">
            <h1>Entry Title</h1>
            <div class="printIcon">
                <a href="javascript:window.print()" title="Print Page"><span class="glyphicon glyphicon-print" aria-hidden="true" style="margin-left:5px;"></span></a>
                <a href="entry-printview.php?id='x'" class="printview" title="Document View"><span class="glyphicon glyphicon-file"></span></a>
            </div>
		</div>

	</div>
    
	<div class="row">
		<div class="col-md-6">        
            <div id="assetTabs">
                <div id="tabs-1">
                    <div class="princAsset"><img src="img/imgplaceholder-alt.jpg" width="100%" id="mainImage"/></div>        
                    <p  class="marginTop"><strong>1st Asset Title</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed lectus dui. Integer nec sollicitudin arcu, pharetra iaculis dolor.</p>
                    <P><strong>Use:</strong></P>
                    <p class="assetLicense"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.</p>
                </div>
                 <div id="tabs-2">
                    <div class="princAsset">
                        <audio controls>
                          <source src="horse.ogg" type="audio/ogg">
                          <source src="horse.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                        </audio>>
                    </div>      
                    <p  class="marginTop"><strong>2nd Asset Title</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <P><strong>Use:</strong></P>
                    <p class="assetLicense"><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
                </div>   
                <div id="tabs-3">
                    <div class="princAsset">
                        <video width="100%" controls>
                          <source src="movie.mp4" type="video/mp4">
                          <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                        </video>
                    </div>      
                    <p  class="marginTop"><strong>3rd Asset Title</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed lectus dui. Integer nec sollicitudin arcu, pharetra iaculis dolor.</p>
                    <P><strong>Use:</strong></P>
                    <p class="assetLicense"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.</p>
                </div>
                 <div id="tabs-4">
                    <div class="princAsset"><img src="img/imgplaceholder-alt.jpg" width="100%" id="mainImage"/></div>      
                    <p  class="marginTop"><strong>4th Asset Title</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <P><strong>Use:</strong></P>
                    <p class="assetLicense"><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
                </div> 

                <!-- asset thumbs-->
                <div id="assetThmbs">
                    <p class="marginTop"><strong>Assets in this collection</strong></p>  
                    <ul>
                    <li><a href="#tabs-1"><div class="asset"><img class="thmb" src="img/imgplaceholder.jpg"/><div class="assetIcon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a></li>
                    <li><a href="#tabs-2"><div class="asset"><img class="thmb" src="img/imgplaceholder-alt.jpg"/><div class="assetIcon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a></li>
                    <li><a href="#tabs-3"><div class="asset"><img class="thmb" src="img/imgplaceholder.jpg"/><div class="assetIcon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a></li>
                    <li><a href="#tabs-4"><div class="asset"><img class="thmb" src="img/imgplaceholder-alt.jpg"/><div class="assetIcon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a></li>
                    </ul>
                </div>
            </div>
            
    <div id="appearsIn" class="marginTop">
            <div class="col-md-6">
                <div class="content">
                    <p><strong>Appears in:</strong></p>
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>Collection Title</p>
                    </div>
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>Collection Title</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <p><strong>Visibility:</strong></p>
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>Collection Title</p>
                    </div>
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>Collection Title</p>
                    </div>
                </div>
            </div>      
    </div>
            
    <div id="comments" class="marginTop">
            <div class="col-md-6">
                <h3>Comments</h3>             
                <div class="content">
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>My comment is<br/>
                    <strong>< username ></strong></p>
                    </div>
                    <img src="img/imgplaceholder.jpg"/>
                    <div class="author">
                    <p>My comment is<br/>
                    <strong>< username ></strong></p>
                    </div>
                </div>
            </div>    
     </div>
            
            <div class="marginTop clearfix"></div>
		</div>

        
		<div class="col-md-6">
            <article>
            <H3 style="margin-top:-5px;">Introduction</H3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed lectus dui. Integer nec sollicitudin arcu, pharetra iaculis dolor. Praesent tincidunt dapibus nulla a placerat. Praesent vehicula, massa non sollicitudin pulvinar, mi risus suscipit lacus, vel tristique nunc enim sit amet nisl. Morbi vitae finibus nibh. Suspendisse cursus tortor metus, ut sagittis ante facilisis a. Maecenas tellus mi, ultricies vitae nunc quis, facilisis vestibulum ligula.</p>

            <p>Nullam vitae ultrices tortor. Vivamus in augue nibh. Etiam rhoncus, lacus at venenatis ultrices, turpis ex vehicula enim, et cursus diam lectus quis dui. Praesent feugiat tellus sed nisi interdum feugiat. Donec pharetra mattis tortor, vitae molestie ipsum venenatis sit amet. Aenean cursus tortor metus, non dignissim nunc interdum vitae. Pellentesque eu maximus eros. Praesent a ligula euismod, dignissim leo vitae, blandit justo. Curabitur commodo nisl velit, vel facilisis est semper sed. Proin ultricies quis nisi sit amet laoreet.</p>

            <H3>My Story</H3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed lectus dui. Integer nec sollicitudin arcu, pharetra iaculis dolor. Praesent tincidunt dapibus nulla a placerat. Praesent vehicula, massa non sollicitudin pulvinar, mi risus suscipit lacus, vel tristique nunc enim sit amet nisl. Morbi vitae finibus nibh. Suspendisse cursus tortor metus, ut sagittis ante facilisis a. Maecenas tellus mi, ultricies vitae nunc quis, facilisis vestibulum ligula.</p>

            <p>Nullam vitae ultrices tortor. Vivamus in augue nibh. Etiam rhoncus, lacus at venenatis ultrices, turpis ex vehicula enim, et cursus diam lectus quis dui. Praesent feugiat tellus sed nisi interdum feugiat. Donec pharetra mattis tortor, vitae molestie ipsum venenatis sit amet. Aenean cursus tortor metus, non dignissim nunc interdum vitae. Pellentesque eu maximus eros. Praesent a ligula euismod, dignissim leo vitae, blandit justo. Curabitur commodo nisl velit, vel facilisis est semper sed. Proin ultricies quis nisi sit amet laoreet.</p>         

            <!-- meta icons -->
            <div style="margin-top:40px;"></div>

                <div id="metaiconTabs">			
                  <ul>
                    <li><a href="#tabs-1"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></div></a></li>
                    <li><a href="#tabs-2"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></div></a></li>
                    <li><a href="#tabs-3"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="fa fa-comments-o"></span></div></a></li>
                    <li><a href="#tabs-4"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="fa fa-cutlery"></span></div></a></li>
                    <li><a href="#tabs-5"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="fa fa-pagelines"></span></div></a></li>
                    <li><a href="#tabs-6"><div class="metaIcon"><img src="img/imgplaceholder.jpg"/><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></div></a></li>
                  </ul>
                  <div id="tabs-1">
                    <h3>Information</h3>
                    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. </p>
                  </div>
                  <div id="tabs-2">
                    <h3>Location</h3>
                    <p>enean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. </p>
                  </div>
                  <div id="tabs-3">
                    <h3>Comment</h3>
                    <p>Mauris eleifend est et turpis. Ut posuere viverra nulla.</p>
                  </div>
                  <div id="tabs-4">
                    <h3>Food</h3>
                    <p>enean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. </p>
                  </div>
                  <div id="tabs-5">
                    <h3>Habitat</h3>
                    <p>Mauris eleifend est et turpis.</p>
                  </div>
                  <div id="tabs-6">
                    <h3>Mystery</h3>
                    <p>Mauris eleifend est et turpis.</p>
                  </div>
                </div> 

       
 
            <div class="marginTop"></div>
            <p><strong>Categories: </strong>a category, another category</p>
            <p><strong>Keywords: </strong>a keyword, another keyword</p>
            <p><strong>Share: </strong> sharing icons here</p>
            <p><strong>Add to collection: </strong><label><input type="checkbox"></label></p>
            </article>
        </div>
            
<div class="marginTop clearfix"></div>
        
        
        <!-- related entries -->
    <div class="row" style="margin-top:40px;">
        <div class="col-sm-12 relatedEntries">
            <h3>Related Entries</h3>      

                <div class="owl-carousel">
              
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
                <a href="entry.php?id=1"><div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div></a>
            
                </div>
                
            <!-- related entries via json removed
            <div  id="related-entries" class="owl-carousel"></div>-->
          
        </div> 
    </div>
        
        
    </div>        
        
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	
  
      
  </body>
</html>