<!DOCTYPE html>
<html>
	<head>  
		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />	
		<?php include('inc/headcommon.php') ?>		
    </head>
  <body id="adminPages">
	
<?php include('inc/header.php') ?>
      
<div class="marginTop clearfix"></div>
 
<div class="container content admin"> <!-- page content -->
	
<div class="marginTop clearfix"></div>
	
	<div class="row">

		<div id="userTabs" class="col-sm-12">
            
          <ul class="">
            <li><a href="#tabs-1">User Profile</a></li>
            <li><a href="#tabs-2">Entries/Create An Entry</a></li>		  
            <li><a href="#tabs-3">People</a></li>
            <li><a href="#tabs-4">Collections</a></li>
            <li><a href="#tabs-5">Groups</a></li>			
            <li><a href="#tabs-6">Settings</a></li>		    
		  </ul>
                     
            <div id="tabs-1">
                <?php include('inc/userProfile.php') ?>	   
            </div>

            <div id="tabs-2"> 
                <?php include('inc/userEntries.php') ?>	   
            </div>

            <div id="tabs-3"> 
                <?php include('inc/userPeople.php') ?>	   
            </div>

            <div id="tabs-4">
                <?php include('inc/userCollections.php') ?>	 
            </div>

            <div id="tabs-5">
                <?php include('inc/userGroups.php') ?>
            </div>

            <div id="tabs-6">
                <?php include('inc/userSettings.php') ?>
            </div>
            
		</div>
		
	</div>	
  
	
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	

  </body>
</html>