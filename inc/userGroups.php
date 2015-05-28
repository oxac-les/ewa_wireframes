
	<h2>Groups</h2>
	
	<form>	

		<h3>Groups I Own</h3>	
		<div class="row">
			<div class="col-md-2 marginTop">
				<div class="thumb-view">
                    <a href="creategroup.php"><button type="button" class="btn hugeBtn">Create a new group</button></a>
                </div>
			</div>
			<div class="col-md-10 marginTop">  
				<!-- Thumb view via carousel -->
				<div class="admin-carousel">
					<div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                        <p class="title">Member request:<br/>
                        < username ><br/>
                        Role: < role ></p>
                        <button type="button" class="btn btn-xs btn-primary">edit</button>
                    </div>
					<div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                        <p class="title">Member request:<br/>
                        < username ><br/>
                        Role: < role ></p>
                        <button type="button" class="btn btn-xs btn-primary">edit</button>
                    </div>
				</div>
			</div>
		</div>
		<hr/>
	
		<h3>Groups I am In</h3>	
		<div class="row">
			<div class="col-md-12 marginTop">  
				<!-- Thumb view via carousel -->
				<div class="admin-carousel">
					<div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><p class="title">
                        Entries: 5/20<br/>
                        Role: < role ><br/>
                        Owners: < owner ></p>
                        <button type="button" class="btn btn-xs btn-primary">change role</button>
                        <button type="button" class="btn btn-xs btn-primary">add notice</button>
                        <button type="button" class="btn btn-xs btn-danger">leave group</button>                     
				    </div>
					<div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><p class="title">
                        Entries: 5/20<br/>
                        Role: < role ><br/>
                        Owners: < owner ></p>
                        <button type="button" class="btn btn-xs btn-primary">change role</button>
                        <button type="button" class="btn btn-xs btn-primary">add notice</button>
                        <button type="button" class="btn btn-xs btn-danger">leave group</button>                      
				    </div>
			     </div>
		      </div>
        </div>
		<hr/>			

        
                
        <h3>Request Group Membership</h3>		
	
        <div class="row">

            <div class="col-sm-12 marginTop">

                <div class="form-group">
                    <label>Search for group: </label><input type="text" class="form-control">
					<button type="button" class="btn btn-primary">Search</button>
                </div>

                <div class="form-group">
                  <label for="sort">Sort by:</label>
                  <select class="form-control" id="sel1">
                    <option>Sort order</option>
                    <option>A to Z</option>
                    <option>Date added</option>
                    <option>No of members</option>
                  </select>
                </div>

                <!-- Thumb view via carousel -->
                <div class="admin-carousel margonTop">
                    <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                        <p class="title"></p>  
                        <button type="button" class="btn btn-xs btn-primary">request membership</button>
                    </div>
                    <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                        <p class="title"></p>  
                        <button type="button" class="btn btn-xs btn-primary">request membership</button>
                    </div>
                    <div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/>
                        <p class="title"></p>  
                        <button type="button" class="btn btn-xs btn-primary">request membership</button>
                    </div>
                </div>

            </div>	

        </div>

        <hr/>               
                
                
		<h3>Groups Requesting You To Become A Member</h3>	
		<div class="row">
			<div class="col-md-12 marginTop">  
				<!-- Thumb view via carousel -->
				<div class="admin-carousel">
					<div class="thumb-view"><img src="img/imgplaceholder.jpg" alt="" width="100%"/><p class="title">
                        <a href="">View group</a><br/>
                        <a href="">Contact owner</a></p>
                        <div class="radio">
                          <label><input type="radio" name="optradio">Accept</label>
                          <label><input type="radio" name="optradio">Decline</label>
                          <button type="button" class="btn btn-xs btn-primary">submit</button>
                        </div>
                    </div>
			   </div>
		  </div>
        </div>
		<hr/>
                
                
                
	</form>
