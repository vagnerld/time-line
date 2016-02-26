<?php 

	$json = array(
		'title' => 'Camping e Voo de parapente em Castelo',
		'cover' => 'https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-xfa1/t31.0-0/q84/p600x600/12764635_1733067016979787_3758092923834279552_o.jpg',
		'date' => '29 de abril',
		'location' => array(
			'latitude' => -20.5381407,
			'longitude' => -41.3565485,
			'location' => 'Rampa De Voo Livre Ubá-Castelo',
			'city' => 'Castelo',
			'state' => 'Espírito Santo'
		)
	);



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> 
	<link rel="stylesheet" type="text/css" href="./assets/css/skeleton.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<header></header>

	<div class="line"></div>

	<div class="day">
		<div class="date-line"> hoje </div>

		<div class="event right link" style="margin-top: 0px;">
			<div class="hour">15h</div>
			<div class="arrow-right"></div>
			<div class="cover" style="background-image: url('<?php echo $json['cover'] ?>');"></div>
			<h2><?php echo $json['title']; ?></h2>
			<p>
				<i class="material-icons">schedule</i><?php echo $json['date']; ?>
			</p>
		</div>

		<div class="event left link">
			<div class="hour">20h</div>
			<div class="arrow-left"></div>
			<div class="cover" style="background-image: url('https://scontent-gru2-1.xx.fbcdn.net/hphotos-xpl1/t31.0-8/q83/p843x403/12711223_962263053859687_818654039642847693_o.jpg');"></div>
			<h2>Vitória DUB CLUB#3 > Hotel Imperial - roots dub reggae</h2>
			<p>
				<i class="material-icons">schedule</i><?php echo $json['date']; ?>
			</p>
		</div>

		<div class="event right link">
			<div class="hour">21h</div>
			<div class="arrow-right"></div>
			<div class="cover" style="background-image: url('https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-0/p526x296/12742851_580797125431791_1912888106917961764_n.jpg?oh=b1a856da2240571c06470b077156c841&oe=576D94EC&__gda__=1466012380_73710f86076aa347c981f7f201f6fafe');"></div>
			<h2>Baile Abre Aulas UVV - Sábado, 27/02 - Ilha Shows</h2>
			<p>
				<i class="material-icons">schedule</i><?php echo $json['date']; ?>
			</p>
		</div>

		<div class="event left link">
			<div class="hour">00h</div>
			<div class="arrow-left"></div>
			<div class="cover" style="background-image: url('https://scontent-gru2-1.xx.fbcdn.net/hphotos-xtp1/v/t1.0-9/12733978_182741135430252_8801866841699424482_n.jpg?oh=6d914bd36743a065e8250fe2300ce10a&oe=57719575');"></div>
			<h2>Luau do Grupo FIT AVENTURA</h2>
			<p>
				<i class="material-icons">schedule</i><?php echo $json['date']; ?>
			</p>
		</div>



	</div>


</body>
</html>