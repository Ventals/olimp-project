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
			cite: "https://webconf.pu.if.ua/",
			id: 1
		},
		{
			name: "2",
			description: "2nd VNZ",
			coord: {
				lat: 50,
				lng: 29
			},
			cite: "https://webconf.pu.if.ua/",
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
			cite: "https://webconf.pu.if.ua/",
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
		marker.VNZCite = VNZes[i].cite;
		marker.VNZID = VNZes[i].id;
		marker.addListener("click", function() {
			document.getElementById("name").value = this.VNZName;
			document.getElementById("image").setAttribute("src", this.VNZImageSrc);
			document.getElementById("description").value = this.VNZDescription;
			document.getElementById("dialog").hidden = false;
			document.getElementById("VNZCiteButton").href = this.VNZCite;
			document.getElementById("map").hidden = true;
			document.getElementById("title").textContent = "Ви вибрали:";
		});
	}
}

						name: "«Київський політехнічний інститут імені Ігоря Сікорського»",
						description: "На сьогодні це найбільший університет України за кількістю студентів з широким спектром спеціальностей і спеціалізацій для підготовки фахівців з технічних і гуманітарних наук. В університеті працюють 19 факультетів, 9 навчально-наукових інститутів, декілька науково-дослідних інститутів і наукових центрів. Будівлі інститутів і факультетів КПІ ім. Ігоря Сікорського та університетські гуртожитки розкинулися на площі близько 120 гектарів. Це справжнє місто в місті. Університет має власний Центр культури та мистецтв, сучасний спортивний комплекс, поліклініку. Його науково-технічна бібліотека – одна з кращих у країні. КПІ входить до 4% кращих університетів світу за версією міжнародних рейтингів QS і Webometrics",
						coord: {
							lat: 50.4,
							lng: 30.6
						},
						imageSrc: "images/kpi.jpg",
						id: 1
						name: "Київський національний університет імені Тараса Шевченка",
						description: "Київський національний університет імені Тараса Шевченка сьогодні - це класичний університет дослідницького типу, провідний сучаснийнауково-навчальний центр України. Підготовка та перепідготовка фахівцівздійснюється за 14 спеціальностями ОКР “Молодший спеціаліст”, 55 напрямамиОКР “Бакалавр”, 49 спеціальностями ОКР “Спеціаліст” та 98 спеціальностями ОКР “МагістрДля проживання студентів створено студентське містечко з комфортабельнимигуртожитками, комп'ютерними клубами, спортивним комплексом, їдальнями, кафе,танцювальними залами. Для оздоровлення університет утримуєсанаторій-профілакторій, оздоровчо-спортивний комплекс на березі річки Дніпро.",
						coord: {
							lat: 50.4,
							lng: 30.5
						},
						imageSrc: "images/knu.jpg",
						id: 2
						name: "Чернівецький національний університет ім. Юрія Федьковича",
						description: "Чернівецький національний університет імені Юрія Федьковича — один із найстаріших класичних університетів в Україні. Сьогодні в Університеті функціонує 16 факультетів: географічний, економічний,інженерно-технічний, іноземних мов, історії, політології та міжнародних відносин,комп'ютерних наук, образотворчого і декоративно-прикладного мистецтва, педагогіки,психології та соціальної роботи, прикладної математики, фізичний, філологічний,філософсько-теологічний, факультет біології, екології та біотехнологій, факультет фізичної культури та здоров'я людини, хімічний, юридичний і загально-університетська кафедра архітектури та будівництва.Університет має 14 навчальних корпусів, 7 гуртожитків, спорткомплекс, дослідне господарство, ботанічний сад, зоологічний, геологічний та етнографічниймузеї, видавництво «Рута», бібліотеку з книжковим фондом майже 3 млн. примірників.",
						coord: {
							lat: 48.3,
							lng: 25.95
						},
						imageSrc: "images/cnu.jpg",
						id: 3
					}
