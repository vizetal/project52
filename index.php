<?php
	require 'populator.php';
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
		<h2>Project 52</h2>
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
		
		<table>
			<tr>
				<td>Category</td><td></td>
			</tr>
		</table>
		<code>
			<strong>info:</strong><br/> 
			<?php
				//require 'bal.php';
				require 'messages.php';
				$code = isset($_GET['code']) ? $_GET['code'] : 'NOP';
				echo $message[$code];
			?>
		</code>
	</div>
</body>
</html>