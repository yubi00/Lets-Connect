<div class="donate">
<div class="container">
<div class="panel-group" style="margin-top:50px;">
<div class="panel panel-primary">
      <div class="panel-heading text-center">POST OR DONATE ITEMS</div>
      <div class="panel-body">
      <p>items details</p>
      
      
      <!-- Registration form - START -->
      <div class="col-md-5">
<form  action="donate/insert_donate.php" method="post" enctype="multipart/form-data" role="form">
          <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" name="txt_code" id="sel1">
          <option>books</option>
          <option>electronics</option>
          <option>clothes</option>
          <option>jewellery</option>
        </select>
      </div>
           
               <!-- <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
                    <label for="InputName">Enter name of items</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_name" id="InputName" placeholder="Enter Name of items" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="InputName">Price</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_price" id="price" placeholder="Enter price" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="InputName">Contact Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_contact" id="InputName" placeholder="Enter contact" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 </div><!---this is an extra div for making anothercolumn-->
                <div class="form-group">
                    <label for="file">upload</label>
                 
                     <input type="file" name="file" /><br/>
                       
                    </div>
            
      
                
                <div class="form-group">
                    <label for="InputMessage">Desription</label>
                    <div class="input-group">
                        <textarea name="txt_area" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                
              
        
             
                
                
                <input type="submit" name="btn_submit" id="submit" value="Submit" class="btn btn-info pull-right">
            
        </form>
        </div><!--end of col-md-5-->
        
        

<!-- Registration form - END -->


      
      
      
      </div>
    </div>
    </div>
</div><!--end of container-->
</div><!--end of donate-->