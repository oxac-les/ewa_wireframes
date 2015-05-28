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
            
            <h2>Create Collection</h2>
            
            <div id="accordion">
              <h3>Create Collection</h3>
                <div>
                    <form>      
                        <div class="form-group">
                            <label>Title: </label><input type="text" class="form-control">
                        </div>                  

                        <div class="form-group">
                          <label class="">Summary:</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                        </div>

                        <div class="form-group">
                            <label>Upload Image: <input type="file" class="upload"></label>
                        </div>

                        <div class="form-group">
                            <label>Weblinks: </label><input type="text" class="form-control">
                            <button type="button" class="btn btn-primary btn-xs">add</button>
                        </div>

                        <button type="button" class="btn btn-primary">save</button>
                    </form>
                </div>
                
              <h3>Add / Remove Entries</h3>
                <div>
  
                    <div class="row">
                        <div class="col-md-12 marginTop">  
                            <!-- Thumb view via carousel -->
                            <div class="admin-carousel">
                                <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                                    <p class="title">Entry Title</p>
                                    <button type="button" class="btn btn-xs btn-primary">Add to collection</button>
                                </div>
                                <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                                    <p class="title">Entry Title</p>
                                    <button type="button" class="btn btn-xs btn-primary">Add to collection</button>
                                </div>
                                <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                                    <p class="title">Entry Title</p>
                                    <button type="button" class="btn btn-primary btn-xs">Add to collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    
                    <form>      
                        <div class="form-group">
                            <label>Find an entry: </label><input type="text" class="form-control" placeholder="Type in title to search">
                            <button type="button" class="btn btn-primary btn-xs" >Add to this collecton</button>
                        </div>  
                    
                    </form>  
                    
                    <hr/>
                    
                    <h3>Entries in collection</h3>
                    
                        <table>
                          <tr>
                            <th></th>
                            <th>Entry</th>
                            <th>Added by</th>
                            <th>Belongs to</th>
                            <th>Date added</th>
                            <th></th>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry title</td>
                            <td>Joe user</td>
                            <td>Joe user</td>
                            <td>21-oct-2014</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry title</td>
                            <td>Joe user</td>
                            <td>Joe user</td>
                            <td>21-oct-2014</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry title</td>
                            <td>Joe user</td>
                            <td>Joe user</td>
                            <td>21-oct-2014</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                        </table>
                    
                </div>
                
              <h3>Sharing</h3>
                <div>    
                    <form> 
                        <div class="radioBtns">
                          <label>Visibility:</label>
                          <label><input type="radio" name="optradio">Open</label>
                          <label><input type="radio" name="optradio">Closed</label>
                        </div>      
             
                        <h4>Additional Users</h4>
                        
                        <div class="form-group">
                            <label>Name:</label><input type="text" class="form-control" placeholder="Type to search">
                            <button type="button" class="btn btn-primary btn-xs" >Add</button>
                        </div>  
                        
                        <div class="radioBtns">
                          <label>Role:</label>
                          <label><input type="radio" name="optradio">Owner</label>
                          <label><input type="radio" name="optradio">Co-curator</label>
                        </div>    
                    </form>
                    
                    <div class="marginTop">
                        <table>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Joe user</td>
                            <td>Owner</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Joe user</td>
                            <td>Owner</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Joe user</td>
                            <td>Owner</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                        </table>
                    </div>
                    
                </div>
            
              <h3>Preview</h3>
                <div>
                    <form>                


                        
                    </form>
                </div>
            
            </div>
            
		</div>
		
	</div>	
  
 
    
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	

  </body>
</html>