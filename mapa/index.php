<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js" type="text/javascript"></script>
<!--MAPS-->
	<!-- AIzaSyDkuh_V3NRZAMllUac9-mLmSbUQi8LbNgc -->
	<!-- AIzaSyARCaMQLSnHxhMIqqBXWSEnjQnT70xt1TQ -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyARCaMQLSnHxhMIqqBXWSEnjQnT70xt1TQ&&sensor=false"></script>
	<script type="text/javascript">
			function initialize() {
				if($(window).width() > 600) {
					var latlng = new google.maps.LatLng(20.973573, -101.280503);
                } else {
					var latlng = new google.maps.LatLng(20.973330, -101.279725);
			    };
				var settings = {
					zoom: 18,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					styles: []
					};
					
				var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
				
				var contentString = '<div class="content-map">'+
					'<h2>Estacionamiento</h2>'+
					'<p>Entrada por Juventino Rosas</p>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('img/estacionamiento_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);
				var companyPos = new google.maps.LatLng(20.973149, -101.280360);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					title:'Estacionamiento',
					zIndex: 3});
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
				
				/* */
				var contentString1 = '<div class="content-map">'+
					'<h2>Amezcua</h2>'+
					'<p>Asesoría Jurídica e Inmobiliaria</p>'+
					'</div>';
				var infowindow1 = new google.maps.InfoWindow({
					content: contentString1
				});
				
				var companyImage1 = new google.maps.MarkerImage('img/amezcua_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);

				var companyPos1 = new google.maps.LatLng(20.973295, -101.280035);

				var companyMarker1 = new google.maps.Marker({
					position: companyPos1,
					map: map,
					icon: companyImage1,
					title:'Amezcua',
					zIndex: 6});
				
				google.maps.event.addListener(companyMarker1, 'click', function() {
					infowindow1.open(map,companyMarker1);
				});
				
				/* */
				var contentString3 = '<div class="content-map">'+
					'<h2>Alaïa Centro Comercial</h2>'+
					'<p>Carr. Guanajuato - Juventino Rosas 139, Sin Nombre, 36000 Guanajuato, Gto., México</p>'+
					'</div>';
				var infowindow3 = new google.maps.InfoWindow({
					content: contentString3
				});
				
				var companyImage3 = new google.maps.MarkerImage('img/plaza_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);

				var companyPos3 = new google.maps.LatLng(20.9737038,-101.2792175);

				var companyMarker3 = new google.maps.Marker({
					position: companyPos3,
					map: map,
					icon: companyImage3,
					title:'Alaïa Centro Comercial',
					zIndex: 3});
				
				google.maps.event.addListener(companyMarker3, 'click', function() {
					infowindow3.open(map,companyMarker3);
				});
		 				
				//lines
				var lineSymbol = {
					path: 'M 0,-1 0,1',
                    strokeOpacity: 1,
                    scale: 2,
					strokeColor: 'rgb(28,58,77)',
                };
				
				const line = new google.maps.Polyline({
					path: [
						{ lat: 20.973162, lng: -101.280300 },
						{ lat: 20.973058, lng: -101.280271 },
						{ lat: 20.973138, lng: -101.279812 },
					],
					map: map,
				});

				
 			}
		</script>