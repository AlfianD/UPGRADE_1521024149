<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h1>UPGRADE</h1>
		<table border="1">
			<tr>
				<th rowspan="2">INPUT</th>
				<th colspan="5">OUTPUT</th>
			</tr>
			<tr>
				<th>A</th>
				<th>E</th>
				<th>I</th>
				<th>U</th>
				<th>O</th>
			</tr>
			<tr>
				<td>
					<?php
					$n1 = "MUHAMMAD ZEIN ZOMI HIKA PUTRA";
					echo $n1;
					?>
				</td>
				<td>
					<?php  
					$wordA = substr_count($n1, 'A');
					echo $wordA;
					?>
				</td>
				<td>
					<?php  
					$crctrE = substr_count($n1, 'E');
					echo $crctrE;
					?>
				</td>
				<td>
					<?php  
					$crctrI = substr_count($n1, "I");
					echo $crctrI;
					?>
				</td>
				<td>
					<?php  
					$crctrU = substr_count($n1, "U");
					echo $crctrU;
					?>
				</td>
				<td>
					<?php  
					$crctrO = substr_count($n1, "O");
					echo $crctrO;
					?>
				</td>
			</tr>
		</table>
</body>
</html>