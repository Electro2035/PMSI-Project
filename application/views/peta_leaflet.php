<?php
// application/views/peta_leaflet.php
// File ini HANYA berisi elemen peta dan skrip/CSS yang diperlukan untuk peta itu sendiri.
// Hapus semua: <!DOCTYPE html>, <html>, <head>, <body>, <nav>, <footer>, dan skrip/CSS umum.
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/dist/css/adminlte.min.css">

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/template/dist/js/demo.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets/leaflet.groupedlayercontrol.css" />
    <script src="<?= base_url() ?>assets/leaflet.groupedlayercontrol.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets/Control.MiniMap.css" />
    <script src="<?= base_url() ?>assets/Control.MiniMap.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/L.Control.ZoomBar.css" />
    <script type="text/javascript" src="<?= base_url() ?>assets/L.Control.ZoomBar.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/Leaflet.Coordinates-0.1.5.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/Leaflet.Coordinates-0.1.5.css" />

</head>

<div class="content">
    <div id="map" style="width: 100%; height: 530px; color:black;"></div>
</div>
<script>

	var fasum = new L.LayerGroup();

    var map = L.map('map', {
        center: [-6.225809370093045, 106.97848022326448],
        zoom: 15,
        zoomControl: false,
        layers: []
    });

    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 22,
        attribution: 'Latihan Web GIS'
    }).addTo(map);

	var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
	maxZoom: 16
	});

	var GoogleMaps = new 
	L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { opacity: 1.0, 
	attribution: 'Latihan Web GIS' 
	});

	var GoogleRoads = new 
	L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}',{ 
	opacity: 1.0, 
	attribution: 'Latihan Web GIS' 
	});

    var baseLayers = {
        'Google Satellite Hybrid': GoogleSatelliteHybrid,
		'Esri_NatGeoWorldMap': Esri_NatGeoWorldMap,
		'GoogleMaps' : GoogleMaps,
		'GoogleRoads' : GoogleRoads
    };

	var groupedOverlays = {
	    "Peta Dasar":{
	    'Tempat Laundry di Kranji' :fasum,
    }
	};

	L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);

    var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
    var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
    var osm2 = new L.TileLayer(osmUrl, {
        minZoom: 0,
        maxZoom: 13,
        attribution: osmAttrib
    });

    var rect1 = {
        color: "#ff1100",
        weight: 3
    };

    var rect2 = {
        color: "#0000AA",
        weight: 1,
        opacity: 0,
        fillOpacity: 0
    };

    var miniMap = new L.Control.MiniMap(osm2, {
        toggleDisplay: true,
        position: "bottomright",
        aimingRectOptions: rect1,
        shadowRectOptions: rect2
    }).addTo(map);

    L.Control.geocoder({
        position: "topleft",
        collapsed: true
    }).addTo(map);

    /* GPS enabled geolocation control set to follow the user's location */
    var locateControl = L.control.locate({
        position: "topleft",
        drawCircle: true,
        follow: true,
        setView: true,
        keepCurrentZoomLevel: true,
        markerStyle: {
            weight: 1,
            opacity: 0.8,
            fillOpacity: 0.8
        },
        circleStyle: {
            weight: 1,
            clickable: false
        },
        icon: "fa fa-location-arrow",
        metric: false,
        strings: {
            title: "My location",
            popup: "You are within {distance} {unit} from this point",
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
        },
        locateOptions: {
            maxZoom: 18,
            watch: true,
            enableHighAccuracy: true,
            maximumAge: 10000,
            timeout: 10000
        }
    }).addTo(map);

    var zoom_bar = new L.Control.ZoomBar({
        position: 'topleft'
    }).addTo(map);

    L.control.coordinates({
        position: "bottomleft",
        decimals: 2,
        decimalSeperator: ",",
        labelTemplateLat: "Latitude: {y}",
        labelTemplateLng: "Longitude: {x}"
    }).addTo(map);
    /* scala */
    L.control.scale({
        metric: true,
        position: "bottomleft"
    }).addTo(map);

    var north = L.control({
        position: "bottomleft"
    });
    north.onAdd = function(map) {
        var div = L.DomUtil.create("div", "info legend");
        div.innerHTML = '<img src="<?= base_url() ?>assets/arah-mata-angin.png"style=width:200px;>';
        return div;
    }
    north.addTo(map);

	$.getJSON("<?=base_url()?>assets/tempatlaundrykranji.geojson", function(data) {
    var ratIcon = L.icon({
        iconUrl: '<?=base_url()?>assets/marker_locationred.png',
        iconSize: [30, 15]
    });

    L.geoJson(data, {
        pointToLayer: function(feature, latlng) {
            var marker = L.marker(latlng, { icon: ratIcon });

            // Periksa apakah properti yang dibutuhkan tersedia
            var nama = feature.properties.Nama || 'Nama tidak tersedia';
            var alamat = feature.properties.Alamat || 'Alamat tidak tersedia';
            var foto = feature.properties.Foto || 'https://via.placeholder.com/150'; // Placeholder jika tidak ada gambar

            // Konten popup dengan gambar yang dapat diklik
            var popupContent = `
                <div style="text-align: center;">
                    <a href="${foto}" target="_blank" title="Klik untuk memperbesar">
                        <img src="${foto}" alt="Foto lokasi" style="width: 200px; height: auto; margin-bottom: 10px; cursor: pointer;">
                    </a>
                    <h3 style="margin: 0;">${nama}</h3>
                    <p style="margin: 5px 0;">${alamat}</p>
                </div>
            `;

            marker.bindPopup(popupContent);
            return marker;
        }
    }).addTo(fasum);
});

$.getJSON("<?=base_url()?>assets/arealaundry.geojson", function(polygonData) {
        L.geoJson(polygonData, {
            style: function(feature) {
                return {
                    color: "blue", // Warna garis poligon
                    fillColor: "yellow", // Warna isi poligon
                    fillOpacity: 0.5 // Transparansi isi poligon
                };
            },
        }).addTo(fasum); // Tambahkan poligon ke layer 'fasum'
    });

</script>

