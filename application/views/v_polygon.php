<div id="map" style="height: 500px;"></div>


<script>
var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

    var map = L.map('map', {
    center: [-7.309672695034329, 112.72908789673706],
    zoom: 14,
    layers: [peta1]
    });

    var baseMaps = {
    "Light": peta1,
    "Satelite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };

    L.control.layers(baseMaps).addTo(map);

var polygon = L.polygon([
    [-7.305881583415603, 112.73443187149492],
    [-7.305900206884289, 112.73508901232505],
    [-7.306168910164932, 112.73544574614657],
    [-7.306740903035239, 112.73503000389552],
    [-7.306591918540436, 112.73431117117445]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Islam Surabaya</br>(Jl. Achmad Yani No.2-4, Wonokromo, Kec. Wonokromo, Kota SBY, Jawa Timur 60243)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.304391936217327, 112.7082947466834],
    [-7.304381872813158, 112.7081201232754],
    [-7.303059375540153, 112.7076573508826],
    [-7.302993532757979, 112.70885411060779],
    [-7.304445834170015, 112.70879531576924]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Marinir Gunung Sari</br>(Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.26615279363955, 112.69053297930174],
    [-7.266269860490715, 112.69179361722593],
    [-7.26745651853223, 112.69162195847868]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Mitra Keluarga</br>(II Darmo Satelit, Jl. Satelit Indah II, Tanjungsari, Kec. Sukomanunggal, Kota SBY, Jawa Timur 60187)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.265942425113058, 112.75681844122062],
    [-7.265980370829756, 112.75966365837583],
    [-7.268005387014501, 112.75961263656306],
    [-7.26834711145256, 112.7591788359738],
    [-7.270448064033733, 112.75911506160249],
    [-7.270473383563676, 112.75652499863129]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSUD Dr. Sutomo</br>(Jl. Mayjen Prof. Dr. Moestopo No.6-8, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.291388040386435, 112.74086864350588],
    [-7.291483818793951, 112.74113418250873],
    [-7.291720605184083, 112.74105371648488],
    [-7.291627487185109, 112.74079085959498]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Lanu Surabaya</br>(Jl. Serayu No.17, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.264369878991474, 112.75609397646946],
    [-7.2644593719603705, 112.7565270252916],
    [-7.265425909901717, 112.75629697019349],
    [-7.265260346252375, 112.75587294249522]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Husada Utama</br>(Jl. Mayjen Prof. Dr. Moestopo No.31-35, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60131)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.242411387245416, 112.7517538386506],
    [-7.242516749020883, 112.75211798813815],
    [-7.243036037040845, 112.75189418903713],
    [-7.242889282573687, 112.75137451737214],
    [-7.243036037698896, 112.7513024463383],
    [-7.243043563682383, 112.75109761249108],
    [-7.24257319485754, 112.75122658167902],
    [-7.2427312383748585, 112.75161728320222]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Adi Husada Kapasari</br>(Jl. Kapasari No.97-101, Kapasan, Kec. Simokerto, Kota SBY, Jawa Timur 60141)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.286444293857309, 112.73708463621921],
    [-7.286811300071449, 112.7393174317217],
    [-7.288278006075791, 112.73911192170368],
    [-7.288083894603934, 112.73699135860562]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Darmo</br>(Jl. Raya Darmo No.90, DR. Soetomo, Kec. Tegalsari, Kota SBY, Jawa Timur 60264)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.251396035759624, 112.74576523412657],
    [-7.251503617093237, 112.74648929760914],
    [-7.252187083158846, 112.74635533158299],
    [-7.25191179888134, 112.74543350517878]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Adi Husada Undaan Wetan</br>(Jl. Undaan Wetan No.40-44, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.290680471279853, 112.73663701309337],
    [-7.290389388733193, 112.73759392415214],
    [-7.29177518393981, 112.73795755798463],
    [-7.291965020560602, 112.73726219952262]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS William Booth</br>(Jl. Diponegoro No.34, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.291612727425073, 112.73490988047881],
    [-7.290928134225864, 112.73618647079752],
    [-7.291389001203673, 112.73645261719845],
    [-7.292243033248812, 112.73686080462862],
    [-7.29333595392753, 112.73536056744217],
    [-7.2922824453385005, 112.73413156534886]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Katolik St Vincentius A Paulo</br>(Jl. Diponegoro No.51, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.3039560397594725, 112.7645806564332],
    [-7.303980496346203, 112.766205538403],
    [-7.3055554477879205, 112.76465957805303]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Surabaya Internasional</br>(Jl. Nginden Intan Barat No.B, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2823130906234965, 112.77931456572817],
    [-7.282245970500851, 112.7802077272349],
    [-7.284434015917868, 112.77985587933966],
    [-7.284344525515524, 112.77907548735068]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSU Haji</br>(Jl. Manyar Kertoadi, Klampis Ngasem, Kec. Sukolilo, Kota SBY, Jawa Timur 60116)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.30702049225143, 112.78668097008605],
    [-7.306749123973152, 112.78836003550106],
    [-7.307004525377769, 112.78836540097093],
    [-7.307105623768917, 112.78782359272813],
    [-7.3080527098992905, 112.78791479830011],
    [-7.308249582489084, 112.7872388794253],
    [-7.307360999396462, 112.78716377615126],
    [-7.307448792331424, 112.78675073928859]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Gotong Royong</br>(Jl. Medokan Semampir Indah No.97, Medokan Semampir, Kec. Sukolilo, Kota SBY, Jawa Timur 60119)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.273544094300753, 112.74621181115229],
    [-7.273902062042859, 112.74690649573526],
    [-7.274313728030403, 112.74673057059856],
    [-7.27408552366269, 112.74600882049282]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Siloam Gleneagles</br>(Jl. Raya Gubeng No.70, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.24536215698262, 112.75784335639295],
    [-7.24552470497167, 112.75840289398953],
    [-7.246550832665215, 112.75814291853563],
    [-7.2464312435477565, 112.75754995114521]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSUD Muh. Soewandi</br>(Jl. Tambak Rejo No.45-47, Tambakrejo, Kec. Simokerto, Kota SBY, Jawa Timur 60142)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.254103680329629, 112.75438370273096],
    [-7.254155564632826, 112.75454061204503],
    [-7.25440966537942, 112.75447221586471],
    [-7.254364432869662, 112.75428311997545]
],{
    color: 'green',
    fillColor: '#008000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSB St Melania</br>(Jl. Tambaksari No.7, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.282983737708838, 112.75250220183118],
    [-7.283017296654941, 112.75295554925604],
    [-7.283475935333277, 112.7529239728185],
    [-7.283473698072566, 112.75248641361242]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Pura Raharja</br>(Jl. Pucang Adi No.12-14, Kertajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60282)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.289542254678311, 112.78265284952029],
    [-7.28957235514186, 112.78290320178708],
    [-7.292307000964908, 112.78269142027953],
    [-7.292259111712141, 112.78235882637945]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Putri</br>(Jl. Arief Rahman Hakim No.122, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60117)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2853697709546115, 112.76111515757954],
    [-7.285166590880624, 112.7623972646428],
    [-7.287198387474999, 112.76289796917636],
    [-7.287213437785772, 112.76156275708684]
],{
    color: 'maroon',
    fillColor: '#800000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSJ Menur</br>(Jl. Raya Menur No.127, Manyar Sabrangan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60116)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.258864600853361, 112.75660654244759],
    [-7.25903204609991, 112.75692517259533],
    [-7.25925969627893, 112.7567867202097],
    [-7.259060267202729, 112.75637705287691]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSA & B Siti Aisyah</br>(Jl. Pacar Keling No.15, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60131)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.248907943776636, 112.76451825169423],
    [-7.249102180019109, 112.76517807505596],
    [-7.249370917695897, 112.7651217486714],
    [-7.249213932339822, 112.76444046763939]
],{
    color: 'green',
    fillColor: '#008000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSB Adi Guna</br>(Lap. Putro Agung, Nomor 1-3 Alun-Alun Rangkah Kelurahan Rangkah Kecamatan Tambaksari Area Gang SPBU Kapaskrampung-SMPN09 Area Sentra PKL, Rangkah, Kec. Tambaksari, Kota SBY, Jawa Timur 60135)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.227941690311299, 112.74021751563507],
    [-7.2279470121006435, 112.7407432285574],
    [-7.228114648432781, 112.74075663960134],
    [-7.22811997022009, 112.74019069354718]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit AL Pal</br>(Jl. KH Mas Mansyur No.210-214, Nyamplungan, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60162)b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.211782226184403, 112.72393306048257],
    [-7.211571890161164, 112.72479464613578],
    [-7.212122343802456, 112.72511492143096],
    [-7.212520639109333, 112.72425333577775]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSAL Tanjung Perak</br>(Jalan Laksda M Nasir No. 56, Perak Barat, Krembangan, Perak Utara, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60177)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.229574102931365, 112.74085320468996],
    [-7.229574102931365, 112.74141140251791],
    [-7.230088308450524, 112.74142416132543],
    [-7.230097801469995, 112.7408723429012]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Muhammadiyah</br>(Jl. KH Mas Mansyur No.180 - 182, Nyamplungan, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60162)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.323342002417665, 112.7295037005353],
    [-7.323506513866442, 112.73054992275001],
    [-7.32416455905446, 112.73037129944505],
    [-7.3245378268594274, 112.73185615261553],
    [-7.32513370642797, 112.73168453569698],
    [-7.324537794699477, 112.72881993654124]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Bhayangkara</br>(Jl. Ahmad Yani No.116, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.296500770683749, 112.72271570665552],
    [-7.296988282797559, 112.72344057265015],
    [-7.297857519213418, 112.72276235018927],
    [-7.297513268946144, 112.72222380479555]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSAD</br>(Jl. Kesatriyan No.17, Sawunggaling, Kec. Wonokromo, Kota SBY, Jawa Timur 60242)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.307622281719147, 112.7363036968538],
    [-7.308365011583276, 112.73996656364402],
    [-7.31002943787259, 112.73965079926849],
    [-7.30925986519783, 112.73591575779803]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RSAL. Dr. Ramelan</br>(Jagir, Kec. Wonokromo, Kota SBY, Jawa Timur)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.311571389702609, 112.72256209663324],
    [-7.311653862072642, 112.72314413597348],
    [-7.311893297899372, 112.72309585621254],
    [-7.311797523584092, 112.72254063896169]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Bhakti Rahayu</br>(Jl. Ketintang Madya I No.16, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60232)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.323231245124757, 112.7394382406886],
    [-7.322071293395188, 112.73881056225252],
    [-7.3215605084601885, 112.7395723095884],
    [-7.321736090847592, 112.73995318325632],
    [-7.322965165623488, 112.74073102384577],
    [-7.323390818435659, 112.73996730756912]
],{
    color: 'red',
    fillColor: '#FF0000',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Islam Surabaya</br>(Jl. Raya Jemursari No.51-57, Jemur Wonosari, Kec. Wonocolo, Kota SBY, Jawa Timur 60237)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.253881517364644, 112.74348696197728],
    [-7.2542879057262635, 112.7438302480489],
    [-7.254532491137413, 112.74348885858542],
    [-7.254182545815882, 112.74319298771707]
],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>RS Mata Undaan</br>(Peneleh, Kec. Genteng, Kota SBY, Jawa Timur)</b></h5>").addTo(map);

var polygon = L.polygon([
    [-7.2698985112127135, 112.78425300831209],
    [-7.269318478275116, 112.78433614827084],
    [-7.269126932808978, 112.78499592318684],
    [-7.269154869651262, 112.78509784713007],
    [-7.269520462619379, 112.78557843445006],
    [-7.270073878773024, 112.78547060211707]
],{
    color: 'yellow',
    fillColor: '#FFFF00',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Rumah Sakit Universitas Airlangga (RS UNAIR)</br>(Jl. Dharmahusada Permai, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115)</b></h5>").addTo(map);

</script>