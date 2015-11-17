<?php
$result = [
	'23/10/2015' => [
						['name' => 'Dang Duy Khuong', 'game1' => 121, 'game2' => 100],
						['name' => 'Vo Quoc Dat', 'game1' => 115, 'game2' => 75],
						['name' => 'Phan Anh Thu', 'game1' => 88, 'game2' => 84],
						['name' => 'Nguyen Bao Hung', 'game1' => 95, 'game2' => 91],
						['name' => 'Nguyen Phuc Loc', 'game1' => 80, 'game2' => 58],
						['name' => 'Ueno', 'game1' => 69, 'game2' =>109, 'total' => 178],
						['name' => 'Yuki Adachi', 'game1' =>108, 'game2' => 119],
						['name' => 'Nguyen Khac Xuan', 'game1' => 46, 'game2' => 72],
						['name' => 'Nguyen Truong Vinh', 'game1' => 87, 'game2' => 86],
						['name' => 'Tran Trung Hieu', 'game1' => '', 'game2' => ''],
	],
	'13/11/2015' => [
						['name' => 'Dang Duy Khuong', 'game1' => 89, 'game2' => 78],
						['name' => 'Vo Quoc Dat', 'game1' => 82, 'game2' => 90],
						['name' => 'Phan Anh Thu', 'game1' => 84, 'game2' => 86],
						['name' => 'Nguyen Bao Hung', 'game1' => 84, 'game2' => 74],
						['name' => 'Nguyen Phuc Loc', 'game1' => 98, 'game2' => 81],
						['name' => 'Ueno', 'game1' => 91, 'game2' => 86],
						['name' => 'Yuki Adachi', 'game1' =>108, 'game2' => 104],
						['name' => 'Nguyen Khac Xuan', 'game1' => 62, 'game2' => 80],
						['name' => 'Nguyen Truong Vinh', 'game1' => 94, 'game2' => 104],
						['name' => 'Tran Trung Hieu', 'game1' => 110, 'game2' => 102],
	],
];
$bwl = array();
foreach($result as $date => $records){
	foreach($records as $r){
		$bwl[$r['name']][$date] = $r['game1'] + $r['game2'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fabrica Bowling League</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.datatables.css">
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<!-- <link rel='shortcut icon' type='image/x-icon' href='favicon.png' /> -->
	<script src='js/jquery-1.10.2.min.js'></script>
	<script src='js/bootstrap.js'></script>
	
	<script src='js/jquery.datatables.min.js'></script>
	<script type="text/javascript">
		$(function(){
			$('.table').dataTable({
				"sPaginationType": "full_numbers",
				"aaSorting": [[ 3, "desc" ]]
			});
		})
	</script>
</head>
<body>

	<h2>Fabrica bowling League (<?php echo date('d/m/Y')?>)</h2>
	<h3 class="text-info">Table Ranking</h3>
		<table class="table table-responsive table-hover table-bordered">
			<thead>
				<tr>
					<th>Player Name</th>
					<th>Match1 (23/10/2015)</th>
					<th>Match2 (13/11/2015)</th>
					<th>Total Points</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($bwl as $name => $records):?>
				<tr>
					<td><b><?php echo $name?></b></td>
					<?php foreach($records as $r):?>
						<td><?php echo $r ?></td>
					<?php endforeach?>
					<td><?php echo array_sum($records)?></td>
				</tr>
				<?php endforeach?>
			</tbody>
		</table>
</body>
</html>