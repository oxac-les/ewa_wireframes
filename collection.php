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
            <p><strong>Created by: </strong>< user ><br/>
            <strong>On: </strong><date>< date ></date></p>
            </div>
		</div>
		<div class="col-md-6">
            <h1>Collection Title</h1>
		</div>
	</div>
    
	<div class="row">
        <div class="col-sm-6">
            <div class="princAsset"><img src="img/imgplaceholder.jpg" width="100%" id="mainImage"/></div>
        </div>
        
		<div class="col-sm-6">    
            <H3 style="margin-top:-5px;">Description</H3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed lectus dui. Integer nec sollicitudin arcu, pharetra iaculis dolor. Praesent tincidunt dapibus nulla a placerat. Praesent vehicula, massa non sollicitudin pulvinar, mi risus suscipit lacus, vel tristique nunc enim sit amet nisl. Morbi vitae finibus nibh. Suspendisse cursus tortor metus, ut sagittis ante facilisis a. Maecenas tellus mi, ultricies vitae nunc quis, facilisis vestibulum ligula.</p>

            <p>Nullam vitae ultrices tortor. Vivamus in augue nibh. Etiam rhoncus, lacus at venenatis ultrices, turpis ex vehicula enim, et cursus diam lectus quis dui. Praesent feugiat tellus sed nisi interdum feugiat. Donec pharetra mattis tortor, vitae molestie ipsum venenatis sit amet. Aenean cursus tortor metus, non dignissim nunc interdum vitae. Pellentesque eu maximus eros. Praesent a ligula euismod, dignissim leo vitae, blandit justo. Curabitur commodo nisl velit, vel facilisis est semper sed. Proin ultricies quis nisi sit amet laoreet.</p>
		</div>
	</div>


<!-- tabbed view of entries in this collection -->
    
<div class="marginTop clearfix"></div>
	
	<div class="row">
		
		<div class="col-sm-12">
		
			<h3>Entries in this collection</h3>

			<div id="resultsTabs">
			  <ul class="results-tabs">
				<li><a href="#tabs-1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-2"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-3"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></li>
			  </ul>
			  <div id="tabs-1">
				<!-- map view -->
                <img src="img/imgplaceholder.jpg" alt="" width="100%" height="800"/>
			  </div>
			  <div id="tabs-2">
                  
				<!-- List view -->
                <div id="list-browse"></div>
<!--   hardcoded test entry do not remove
                <div class="col-sm-2 list-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/></div>
                <div class="col-sm-10"><h3>Entry title</h3><p>Description</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div>
-->

                <div class="clearfix"></div>
                <nav>
                  <ul class="pagination pagination-sm">
                    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                  </ul>
                </nav>
			  </div>
                
			  <div id="tabs-3">
                  
        <!-- Thumb view via carousel -->
                  
			<div class="owl-carousel other-entries collection">

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
	</div>    
    
 <!-- other collections by this owner -->
    
<div class="marginTop clearfix"></div>
	
	<div class="row">
		
		<div class="col-sm-12">   
            <h3>Other collections by: <span class="user">< user ></span></h3>
                
			<div class="owl-carousel other-collections">
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
			  <a href="collection.php?id=1"><div>
				<img src="img/imgplaceholder.jpg" alt="..."/><div class="other-collections-ovly"><p>Collection title</p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div>
			  </div></a>
            </div>
            
        </div>
    </div>
            
		
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	
  
      
  </body>
</html>