<?php error_reporting(0); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php require 'logic.php'; ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>DWA - P2</title>
	</head>
	
	<body>
		<form method='POST' action='index.php'>
			Number of Words (max 9): <input type="text" name="wordCount" value=<?php if(isset($_POST['wordCount'])){ echo $_POST['wordCount']; } else{ echo '1';} ?>>
  			<br>
  			Include Numbers: <input type="checkbox" name="nums" >
  			<br>
  			Include Characters: <input type="checkbox" name="chars" >
  			<br>
  			Space Delineator: 
	  			<select name="spaceTrans" >
					<option value="dash">-</option>
					<option value="under">_</option>
					<option value="period">.</option>
					<option value="none">None</option>
				</select>
			<br>
			Case:
				<select name="caseTrans">
					<option value="allLow">All lower case</option>
					<option value="allUp">All upper case</option>
					<option value="first">First letter capitalized</option>
				</select>
			<br>
  			<input type="submit" name="Generate">
		</form>
		
		<?php echo $password.addEnd() ?>

	</body>
	
</html>