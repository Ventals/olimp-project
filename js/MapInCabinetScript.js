function VNZSelected() {
				
			}
			function backToMap() {
				document.getElementById("dialog").hidden = true;
				document.getElementById("map").hidden = false;
				document.getElementById("title").textContent = "Оберіть ВНЗ";
			}	

			
			function initMap() {
				
				
				var VNZes = [
					{
						name: "1",
						description: "1st VNZ",
						coord: {
							lat: 49,
							lng: 31
						},
						imageSrc: "images/btn1.jpg",
						id: 1
					},
					{
						name: "2",
						description: "2nd VNZ",
						coord: {
							lat: 50,
							lng: 29
						},
						imageSrc: "images/btn1a.jpg",
						id: 2
					},
					{
						name: "3",
						description: "3rd VNZ",
						coord: {
							lat: 48,
							lng: 30
						},
						imageSrc: "images/btn1h.jpg",
						id: 3
					}
				];
				
				
				var center = {
					lat: 49.0275,
					lng: 31.482778
				};
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 7,
					center,
					minZoom: 7,
					maxZoom: 10,
					streetViewControl: false,
					mapTypeControl: false
				});
				var ua = new google.maps.LatLngBounds({
					lat: 53,
					lng: 22
				}, {
					lat: 44,
					lng: 41
				});
				map.addListener("center_changed", function() {
					map.panToBounds(ua);
				});
				for (var i = 0; i < VNZes.length; i++) {
					let marker = new google.maps.Marker({
						position: VNZes[i].coord,
						map: map,
						title: VNZes[i].name
					});
					marker.VNZName = VNZes[i].name;
					marker.VNZDescription = VNZes[i].description;
					marker.VNZImageSrc = VNZes[i].imageSrc;
					marker.VNZID = VNZes[i].id;
					marker.addListener("click", function(){
						document.getElementById("name").value = this.VNZName;
						document.getElementById("image").setAttribute("src", this.VNZImageSrc);
						document.getElementById("description").value = this.VNZDescription;
						document.getElementById("dialog").hidden = false;
						document.getElementById("map").hidden = true;
						document.getElementById("title").textContent = "Ви вибрали:";
					});
				}
			}