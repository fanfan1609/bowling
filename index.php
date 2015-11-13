<?php
$result = [
	['name' => 'Dang Duy Khuong', 'game1' => 121, 'game2' => 100],
	['name' => 'Vo Quoc Dat', 'game1' => 115 , 'game2' => 75 ],
	['name' => 'Phan Anh Thu', 'game1' => 88 , 'game2' => 84],
	['name' => 'Nguyen Bao Hung', 'game1' => 95 , 'game2' => 91],
	['name' => 'Nguyen Phuc Loc', 'game1' => 80 , 'game2' => 58],
	['name' => 'Ueno', 'game1' => 69, 'game2' =>109 ],
	['name' => 'Yuki Adachi', 'game1' =>108 , 'game2' => 119],
	['name' => 'Nguyen Khac Xuan', 'game1' => 46 , 'game2' => 72],
	['name' => 'Nguyen Truong Vinh', 'game1' => 87 , 'game2' => 86],
];
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
			$('table').dataTable({
				"sPaginationType": "full_numbers",
				"aaSorting": [[ 3, "desc" ]]
			});
		})
	</script>
</head>
<body>

	<h2>Fabrica bowling League (30/10/2015)</h2>

	<h3 class="text-info">Table Ranking</h3>
	<table class="table table-responsive table-hover table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Game1</th>
				<th>Game2</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($result as $r):?>
			<tr>
				<td><b><?php echo $r['name'] ?></b></td>
				<td><?php echo $r['game1'] ?></td>
				<td><?php echo $r['game2'] ?></td>
				<td><b><?php echo $r['game1'] + $r['game2'] ?></b></td>
			</tr>
		<?php endforeach?>
		</tbody>
	</table>
</body>
</html>