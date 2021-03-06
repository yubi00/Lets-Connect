<?php include('include/link.php');?>
<?php include('include/menu.php');?>
<?php include('db_connection.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-7">
<div class="well">

<script src="https://maps.googleapis.com/maps/api/js"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng( -37.814107 , 144.963280),
        zoom: 8,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("xmlfile.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon,
			animation: google.maps.Animation.BOUNCE
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>


<body onload="load()">
  
    <div  class="img-responsive" id="map" style="width:800px; height:600px"></div>
   
  </body>

<!------------------------------>
</div>
</div>

<div class="col-md-5">
<div class="well">
	
<?php 
	$query  = "select s.username,s.image, count(d.donate_id) as noOfItems from signup1 s left join donate1 d on s.id = d.user_id
  group by s.id";
	
	$result = mysql_query($query);
	
	if(!$result)
	{
		die("query failed");
	}

	while($row = mysql_fetch_assoc($result))
	{
		$user_id = $row['id'];
		$client_name = $row['username'];
		echo "<h2>".$client_name."</h1>"."<br/>";
		echo '<img height="200" width="200" src="signup/img/'.$row['image'].'">';
		echo "<br/><br/>";
		
		echo "<br/>";
		$noItems = $row['noOfItems'];
		
		if($noItems > 0)
		{
		echo "<a href=\"user_profile.php?username=$client_name\">";
		echo "<Button >View Items</Button>";
		echo "</a>";
		echo "<br/><br/>";
		echo "<hr/>";
		}
		else
		{
		
			echo "<Button >View Items</Button>";
			echo "<br/><br/>";
				echo "<hr/>";
		}
		
	}



?>
</div>
</div>
</div><!--end of row-->
</div><!--end of container--->
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>