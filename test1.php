<img src="Img_1447769196_350_4.emf" height="300" width="300">
<?php 
echo "abcsdfsdafsdafsdfasfasfasf";
echo "aman";
echo "lakhbir";
<<<<<<< HEAD
=======
echo "aman branch";
>>>>>>> 554ecb23dd0ba67f3e8334b5646c5fa6a97a0561
exit;
$firstarray = array('sss'=>'abc','ddd'=>'bcd','bbb'=>'ced');
$secondarray = array('sss'=>'45','bbb'=>'54','ddd'=>'54');
echo count($firstarray);
exit;
echo "<pre>";
print_r($firstarray);
print_r($secondarray);
echo "</pre>";

$thirdarray = array();
$thirdarray = array_merge($secondarray,$firstarray);
echo "<pre>";
print_r($thirdarray);
echo "</pre>";
exit;
exit;

?>


<script type="text/javascript">
$('#collapseMap').on('shown.bs.collapse', function(e){
    if($('#tic_loc').val()) {
    var ticket_locations = $.parseJSON($('#tic_loc').val());
    }
    var center_latitude = 'default';
    var center_longitude = 'default';
    if($('#center_latitude').length)
    {
        center_latitude = $('#center_latitude').val();
    }    
    if($('#center_longitude').length)
    {    
        center_longitude = $('#center_longitude').val();
    }    

   alert(center_latitude);
   alert(center_longitude);

    if(center_latitude == '' || center_longitude == ''){
        alert('if');
        var center_latitude = 48.865633;
        var center_longitude = 2.321236;
    }
    
	(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],markersData;
                if(ticket_locations)
                { 
                    markersData = ticket_locations;	
                } else { 
                    markersData = {
			'Single_hotel': [
			{
				name: 'Hotel Mariott',
				location_latitude: 48.873792, 
				location_longitude: 2.295028,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Hotel Mariott',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard.',
				/*url_point: 'single_hotel.html'*/
			}
			],
			'Sightseeing': [
			{
				name: 'Open Bus',
				location_latitude: 48.865633, 
				location_longitude: 2.321236,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Open Bus',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'Senna River Tour',
				location_latitude: 48.854183,
				location_longitude: 2.354808,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Senna River Tour',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			],
			'Museums': [
			{
				name: 'Louvre',
				location_latitude: 48.863893, 
				location_longitude: 2.342348,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Louvre',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'Pompidou ',
				location_latitude: 48.860642,
				location_longitude: 2.352245,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Pompidou',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			],
			'Skyline': [
			{
				name: 'Tour Eiffel',
				location_latitude: 48.858370, 
				location_longitude: 2.294481,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Tour Eiffel',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'Montparnasse',
				location_latitude: 48.837273,
				location_longitude: 2.335387,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Montparnasse',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			],
			'Eat_drink': [
			{
				name: 'Beaubourg',
				location_latitude: 48.860819, 
				location_longitude: 2.354507,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Beaubourg',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'St. Germain des Prés',
				location_latitude: 48.853798,
				location_longitude: 2.333328,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'St. Germain des Prés',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			],
			'Walking': [
			{
				name: 'Trocadero',
				location_latitude: 48.862880, 
				location_longitude: 2.287205,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Trocadero',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'Champs-Élysées',
				location_latitude: 48.865784,
				location_longitude: 2.307314,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Champs-Élysées',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			],
			'Churches': [
			{
				name: 'Notre Dame',
				location_latitude: 48.852729, 
				location_longitude: 2.350564,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Notre Dame',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			},
			{
				name: 'Madeleine',
				location_latitude: 48.870587, 
				location_longitude: 2.318943,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Madeleine',
				description_point: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
				/*url_point: 'single_tour.html'*/
			}
			]

		};
                }

			var mapOptions = {
				zoom: 13,
				center: new google.maps.LatLng(center_latitude, center_longitude),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [/*map styles*/]
			};
                      
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						//icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
						icon: 'http://onecityticket.com/qrcodes/citytours/img/location-icons-1.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					

                                          });
	
		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info ticket-map" id="marker_info">' +
				'<span>'+ item.description_point +'</span>' +
				'</div>',
				disableAutoPan: true,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(60, -190),
				closeBoxMargin: '5px -20px 2px 2px',
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				isHidden: false,
				pane: 'floatPane',
				enableEventPropagation: true
			});


		};

    });
    </script>