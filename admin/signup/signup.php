
<!---start of signup form--->
<style>
#sign_up
{ margin-top:50px;
margin-left:-20px;
	
	}
		h1
		{
			
			color:blue;}
</style>

<div id="sign_up">

<div class="container text-center">
<div class="well " style="margin-left:20px;">
    <div class="row">
        <form action="signup/insert_action.php" method="post" enctype="multipart/form-data" role="form">
            <div class="col-lg-6 col-md-offset-3">
              
               <h1>SIGN UP FORM</h1>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_name" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" name="txt_email"class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label >ADDRESS</label>
                    <div class="input-group">
                        <input type="text"  name="txt_address"class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div >
                    <label for="InputEmail">USERNAME/NICKNAME</label>
                    <div class="input-group">
                        <input type="text"  name="txt_username"class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div >
                    <label for="InputEmail">PASSWORD</label>
                    <div class="input-group">
                        <input type="text"  name="txt_password"class="form-control" id="InputEmailSecond" placeholder="password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="row"><!---start of row---->
                <div class="col-md-6">
                <div class="well">
                <div class="form-group">
                <div class="input-group">
                <label for="file">upload  Image</label>
                   
    <input type="file" name="file" /><br/>
                </div>
                </div>
                </div>
                </div>
                
                
                     <div class="col-md-4 col-md-offset-2" >
                <div class="well"style="background-color:white;">
                <div class="form-group">
                <div class="input-group">
                <label for="file">GENDER</label>
                   <div class="radio">
  <label><input type="radio" name="txt_gender" value="male">male</label>
</div>
<div class="radio">
  &nbsp;&nbsp;<label><input type="radio" name="txt_gender" value="female">female</label>
</div>
    
                </div>
                </div>
                </div>
                </div>
                </div><!---end of row--->
                
                <div class="form-group">
                    <label for="InputMessage">Enter Message</label>
                    <div class="input-group">
                        <textarea name="txt_area"  class="form-control" rows="5" ></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="btn_submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
       </div><!--end of well--> 
</div>
</div>

<!-- Registration form - END -->