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

		<div class="col-sm-2">
            <!-- search filter -->
    		<?php include('inc/searchfilter.php') ?>	
        </div>
		
        <div class="col-sm-10">

            <h2>Results (x)</h2>

			<div id="resultsTabs">
			  <ul class="results-tabs">
				<li><a href="#tabs-1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-2"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-3"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></li>
                <li><a href="#">Sort by A-Z</a></li>
                <li><a href="#">Sort by Date</a></li>
			  </ul>
                                
			  <div id="tabs-1" class="searchMap">
                  
				<!-- map view -->
                <img src="img/imgplaceholder.jpg" alt="" width="100%" height="800"/>
			  </div>
                
			  <div id="tabs-2" class="searchList">
                  
				<!-- List view -->
                <div id="list-search"></div>
<!--   hardcoded test entry do not remove
                <div class="col-sm-3 list-view"><img src="img/imgplaceholder.jpg" alt="" /></div>
                <div class="col-sm-6"><h3>Entry title</h3><p>Description</p><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></a></div>
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
                
			  <div id="tabs-3" class="searchThmb">
                  
				<!-- Thumb view -->
                 <div id="thmb-search"></div>                  
<!--   hardcoded test entry do not remove
                <div class="col-sm-3 thumb-view"><img src="img/imgplaceholder.jpg" alt="" /><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div>
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
            </div>
                        
        </div>
    </div>
	
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	
      
  </body>
</html>