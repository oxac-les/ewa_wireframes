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
            
            <h2>Create User Group</h2>
            
            <div id="accordion">
              <h3>Create Group</h3>
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
                
              <h3>Members / Invite Members</h3>
                <div>
                    <form>      
                        <div class="form-group">
                            <label>Name: </label><input type="text" class="form-control">
                        </div>  
                        
                        <div class="radioBtns">
                          <label><input type="radio" name="optradio">Owner</label>
                          <label><input type="radio" name="optradio">Co-Owner</label>
                          <label><input type="radio" name="optradio">Viewer</label>
                          <label><input type="radio" name="optradio">Submitter</label>
                        </div>

                        <div class="form-group">
                          <label class="">Message:</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                        </div>

                        <button type="button" class="btn btn-primary">save</button>
                    </form>              
                </div>
                
              <h3>Noticeboard</h3>
                <div>    
                      <form> 
                          
                        <div class="form-group">
                          <label class="">Message:</label>
                          <textarea class="form-control" rows="5" id=""></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Start date: <input type="text" class="form-control datepicker"></label>   
                            <label>End date: <input type="text" class="form-control datepicker"></label>
                        </div>   
 
                        <div class="radioBtns">
                          <label>Visibility: </label>
                          <label><input type="radio" name="optradio">Restrict to Group</label>
                          <label><input type="radio" name="optradio">Open</label>
                        </div>
                          
                        <button type="button" class="btn btn-primary">Add</button>
                          
                        <table>
                          <tr>
                            <th></th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Date2?</th>
                            <th>Visibility</th>
                            <th>Owner</th>
                            <th></th>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Message1</td>
                            <td>Published</td>
                            <td>18-oct-2014</td>
                            <td>21-oct-2014</td>
                            <td>Restricted</td>
                            <td>Joe</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                           <td>&nbsp;</td>
                            <td>Message1</td>
                            <td>Published</td>
                            <td>18-oct-2014</td>
                            <td>21-oct-2014</td>
                            <td>Restricted</td>
                            <td>Joe</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                          <tr>
                           <td>&nbsp;</td>
                            <td>Message1</td>
                            <td>Published</td>
                            <td>18-oct-2014</td>
                            <td>21-oct-2014</td>
                            <td>Restricted</td>
                            <td>Joe</td>
                            <td><button type="button" class="btn btn-danger btn-xs">Del</button></td>
                          </tr>
                        </table>
                          
                    </form>
                </div>
            
              <h3>View Entries</h3>
                <div>
                    <form>                

                          <table>
                          <tr>
                            <th></th>
                            <th>Entry</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Views</th>
                            <th>Message</th>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry1</td>
                            <td>Joe User</td>
                            <td>Open</td>
                            <td>25 views</td>
                            <td>message</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry1</td>
                            <td>Joe User</td>
                            <td>Open</td>
                            <td>25 views</td>
                            <td>message</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry1</td>
                            <td>Joe User</td>
                            <td>Open</td>
                            <td>25 views</td>
                            <td>message</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry1</td>
                            <td>Joe User</td>
                            <td>Open</td>
                            <td>25 views</td>
                            <td>message</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>Entry1</td>
                            <td>Joe User</td>
                            <td>Open</td>
                            <td>25 views</td>
                            <td>message</td>
                          </tr>
                        </table>
                        
                    </form>
                </div>
            
              <H3>Preview</H3>
                <div>

                </div>
            </div>
            
		</div>
		
	</div>	
  
 
    
</div><!-- end page container -->   
    
<div class="marginTop clearfix"></div>

<?php include('inc/footer.php') ?>	

  </body>
</html>