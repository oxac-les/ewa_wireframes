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

		<div id="filterTabs" class="col-sm-12">
          <ul class="filterCircles">
            <li><a href="#tabs-1"><div class="circle"><img src="img/imgplaceholder.jpg" alt="" /></div><div class="browse-tab-circle-text">Place</div></a></li>
            <li><a href="#tabs-2"><div class="circle"><img src="img/imgplaceholder.jpg" alt="" /></div><div class="browse-tab-circle-text">People</div></a></li>
            <li><a href="#tabs-3"><div class="circle"><img src="img/imgplaceholder.jpg" alt="" /></div><div class="browse-tab-circle-text">Bird</div></a></li>
            <li><a href="#tabs-4"><div class="circle"><img src="img/imgplaceholder.jpg" alt="" /></div><div class="browse-tab-circle-text">Genre</div></a></li>
            <li><a href="#tabs-5"><div class="circle"><img src="img/imgplaceholder.jpg" alt="" /></div><div class="browse-tab-circle-text">Format</div></a></li>
          </ul>
                  
            <div id="filter-form">
                 <form role="form">
                     
                      <div id="tabs-1">
                            <!-- Place filters -->                     
                            <div id="placeTabs">  
		                          <?php include('inc/placetab.php') ?>	   
                              </div>
                        </div>

                      <div id="tabs-2">
                            <!-- People filters -->                     
                            <div id="peopleTabs">  
		                          <?php include('inc/peopletab.php') ?>	   
                              </div>
                        </div>
 
                        <div id="tabs-3">
                            <!-- bird filters -->                     
                            <div id="birdTabs">  
		                          <?php include('inc/birdtab.php') ?>	   
                            </div>
                        </div>

                        <div id="tabs-4">
                            <!-- genre filters -->                     
                            <div id="genreTabs">
		                          <?php include('inc/genretab.php') ?>	 
                              </div>
                        </div>
                     
                        <div id="tabs-5">
                            <!-- format filters -->                     
                            <div id="formatTabs">
		                          <?php include('inc/formattab.php') ?>
                              </div>
                        </div>
                     
                      <div id="keyword-search" class="col-sm-12" style="padding-top:20px;">
                        <label for="keyword-search">Keyword search:</label><br/>
                        <input type="input" class="" id="keyword-search">
                        <div class="resetBtns">
                        <button type="submit" class="btn btn-default">Update</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                     
                </form>
            </div>
		</div>
		
	</div>	
       
<div class="marginTop clearfix"></div>
	
	<div class="row">
		
		<div class="col-sm-12">
		
			<h2>Results (x)</h2>

			<div id="resultsTabs">
			  <ul class="results-tabs">
				<li><a href="#tabs-1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-2"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li>
				<li><a href="#tabs-3"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a></li>
			    <li><a href="#">Sort by A-Z</a></li>
                <li><a href="#">Sort by Date</a></li>
			  </ul>
                
			  <div id="tabs-1" class="browseMap">
                  
				<!-- map view -->
                <img src="img/imgplaceholder.jpg" alt="" width="100%" height="800"/>
			  </div>
                
			  <div id="tabs-2" class="browseList">
                  
				<!-- List view -->
                <div id="list-browse"></div>
<!--   hardcoded test entry do not remove
                <div class="col-sm-2 list-view"><img src="img/imgplaceholder.jpg" alt="" /></div>
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
                
			  <div id="tabs-3" class="browseThmb">
                  
				<!-- Thumb view -->
                <div id="thmb-browse"></div>
                
                <!--   hardcoded test entry do not remove 
                <div class="col-sm-2 thumb-view"><img src="img/imgplaceholder.jpg" alt="" /><div class="thumb-view-ovly"><p>Entry title</p><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></div></div>-->

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