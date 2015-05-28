    <form role="form">
 
                    <div class="marginTop"></div>                    
                    <h4><input type="input" class="form-control" value="Search" id="current-search"></h4>

                    <div class="marginTop"></div>
                    <button type="submit" class="btn btn-default">Search</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    
                    <div class="marginTop"></div>
                    <label for="current-search">Current search:</label>
                    <ul class="current-search">
                        <li>English <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></li>
                        <li>Robin <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></li>
                    </ul>
                           
                    
        <div id="searchFilters">
            
            <div class="closePanel marginTop"><i class="fa fa-angle-double-left"> Close Panel</i></div>
            
            <h4 class="marginTop">Refine search</h4>
                    
            <div id="accordion">
                
              <h5>Country</h5>
                <div class="form-group">
                    <select class="form-control" id="country">
                        <option>select</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>UK</option>
                    </select>
                </div>

              <h5>Language</h5>
                <div class="form-group">
                      <div class="checkbox">
                    <select class="form-control" id="language">
                        <option>select</option>
                        <option>French</option>
                        <option>German</option>
                        <option>English</option>
                    </select>
                      </div>
                </div>
                
              <h5>Bird</h5>            
                <div class="form-group">
                    <div id="subaccordion" class="">
                        <h5>Hierarchical</h5>
                        <div class="form-group">                
                            <?php include('inc/birdCmnH.php') ?>
                        </div>
                    </div>

                    <div id="birdcmn-az" class="">
                        <div id="subaccordion">
                            <h5>Common Name</h5>
                            <div class="form-group">                
                                <?php include('inc/birdCmnAZ.php') ?>  
                            </div>
                        </div>
                    </div>

                    <div id="birdfolk-az" class="">
                        <div id="subaccordion">
                            <h5>Folk Name</h5>
                            <div class="form-group">                
                                <?php include('inc/birdFolkAZ.php') ?> 
                            </div>
                        </div>
                    </div>         

               </div>   <!-- end of bird form group -->   
                
                
              <h5>Genre</h5>
                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox">Dance</label>
                        <label><input type="checkbox">Poetry</label>
                        <label><input type="checkbox">etc</label>
                      </div>
                    </div>

              <h5>Uses</h5>
                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox">Material culture</label>
                        <label><input type="checkbox">Foods</label>
                        <label><input type="checkbox">etc</label>
                      </div>
                    </div>
                
              <h5>Ecology</h5>
                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox">Behavoural</label>
                        <label><input type="checkbox">Conservation</label>
                        <label><input type="checkbox">etc</label>
                      </div>
                    </div>
                
              <h5>Cultural</h5>
              <div>
                <p>some search criteria</p>
              </div>
                
              <h5>Format</h5>
                    <div class="form-group">
                          <div class="checkbox">
                            <label><input type="checkbox">Audio</label>
                            <label><input type="checkbox">Image</label>
                            <label><input type="checkbox">Text</label>
                            <label><input type="checkbox">Video</label>
                          </div>
                    </div>
              <h5>Theme</h5>
              <div>
                <p>some search criteria</p>
              </div>
                
            </div>   <!-- end of filter accordian -->  
        </div>       
    </form>