<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
  
   
google.maps.event.addDomListener(window,'load',intilize);
function intilize()
{
var autocomplete= new google.maps.places.Autocomplete(document.getElementById("txtautocomplete"));
google.maps.event.addListener(autocomplete,'place_changed',function()
{
var place=autocomplete.getPlace();
var location="<b>Location:</b>"+ place.formatted_address+"</br>";
location+= "<b>Latitude:</b>"+ place.geometry.location.lat()+"</br>";
location+= "<b>Longitude:</b>"+ place.geometry.location.lng()+"</br>";
  document.getElementById('lati').value = place.geometry.location.lat()
 document.getElementById('longi').value = place.geometry.location.lng()
});

};

</script>
</head>

<body>
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
                        <input type="email" name="txt_email"class="form-control" id="InputEmailFirst" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label >ADDRESS</label>
                    <div class="input-group">
                        <input name="txt_add" type="text" id="txtautocomplete" class="form-control" placeholder="enter your address" required data-validation-required-message="Please enter your Address.">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="input-group">
                  <input type="hidden" id="lati" name="lati" >
                   <input type="hidden" id="longi" name="longi">
                </div>
                <div >
                    <label for="InputEmail">USERNAME/NICKNAME</label>
                    <div class="input-group">
                        <input type="text"  name="txt_username"class="form-control" id="InputEmailSecond"  placeholder="username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div >
                    <label for="InputEmail">PASSWORD</label>
                    <div class="input-group">
                        <input type="password"  name="txt_password"class="form-control" id="InputEmailSecond" placeholder="password" required>
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
</body>
</html>

<!-- Registration form - END -->