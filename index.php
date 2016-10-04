<?php
	require 'config.php';
	require 'populator.php';
	require 'messages.php';

	$categories = get_category_list($config);


?>
<html>
<head>
<title>Project 52</title>
<link rel="stylesheet" href="layout.css"/>
<script src="jquery-3.1.1.js"></script>
<script src="script.js"></script>
</head>
<body>
	<div class="container">
	<code>
		<h2>Project 52</h2>
	
		
		[<a href="index.php">Categories</a>] 
		[<a href="index.php">Products</a>] 
		</code>

		<hr>
		<form action = "bal.php" method = "post"/>
		<table>
			<tr>
				<td><strong>Category:</strong></td>
				<td><input type="text" name="data[category]" placeholder="Category name..."/></td>
			</tr>
			<tr>
				<td><strong>Parent Category:</strong></td>
				<td>
					<select name="data[parent_category_id]">
						<option value='0'>null</option>

					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="ctr">
				<input type="hidden" name="op" value="create_category"/>
					<input type="submit" value="create" name="add_new_category"/>
				</td>
			</tr>
		</table>
		</form>
		
		<table class='display'>
			<tr>
				<td><strong>Category</strong></td><td></td>
			</tr>
			<?php
				$tbody ='';
				
				foreach ($categories as $key => $value) {
						
						$tbody .= '<tr>';
						$tbody .= '<td>' . $value['category_name'] . '</td>';
						$tbody .= '<td></td>';
						$tbody .= '</tr>';
				
				}

				echo $tbody;

			?>
		</table>
		<br />
		<!-- category level 2 begins-->
			<table class='display'>
			<tr>
				<td><strong>Sub Category # level 2</strong></td><td></td>
			</tr>
			<?php
			/*	$tbody ='';
				
				foreach ($categories as $key => $value) {
						
						$tbody .= '<tr>';
						$tbody .= '<td>' . $value['category_name'] . '</td>';
						$tbody .= '<td></td>';
						$tbody .= '</tr>';
				
				}

				echo $tbody;
			*/
			?>
		</table>
		<br />
		<!-- category level 2 ends-->

		<!-- category level 3 begins-->
			<table class='display'>
			<tr>
				<td><strong>Sub Category # level 3</strong></td><td></td>
			</tr>
			<?php
			/*	$tbody ='';
				
				foreach ($categories as $key => $value) {
						
						$tbody .= '<tr>';
						$tbody .= '<td>' . $value['category_name'] . '</td>';
						$tbody .= '<td></td>';
						$tbody .= '</tr>';
				
				}

				echo $tbody;
			*/
			?>
		</table>
		<!-- category level 3 ends-->
		

		<br />
		<code>
			<strong>info:</strong>( <a href="index.php">clear</a> ) <br /> 
			<?php
				$code = isset($_GET['code']) ? $_GET['code'] : 'NOP';
				echo $message[$code];
			?>
			<br />
			
		</code>
	</div>
</body>
</html>