<?php error_reporting(0); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php require 'logic.php'; ?>
		<link rel='stylesheet' href='style.css'/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>DWA - P2</title>
	</head>
	
	<body>
		<div class="center">
			<div class="row-lg">
				<div class="title">
					xkcd Password Generator
				</div>
				
				<div class = "blurb">
					Tired of having to recall weird complicated passwords you never had to type out until your cookies got deleted?
					<br>Then use these randomly generated passwords instead!  They're easier to remember and much more secure.  
					<br><a href = "http://xkcd.com/936/"> Someone did the math! </a>  
				</div>
			
				<div class="panel panel-primary">
					<div class="password">
						<?php echo $password.addEnd() ?>
					</div>
				</div>
			
				<div class="forms">
					<form method='POST' action='index.php'>
						Number of Words (max 9): <input type="text" size="1" style="color: #000000;" name="wordCount" value=<?php if(isset($_POST['wordCount'])){ echo $_POST['wordCount']; } else{ echo '1';} ?>>
			  			<br>
			  			Include Numbers: <input type="checkbox" name="nums" <?php if(isset($_POST['nums'])){ echo "checked"; } ?>>
			  			<br>
			  			Include Characters: <input type="checkbox" name="chars" <?php if(isset($_POST['chars'])){ echo "checked"; } ?>>
			  			<br>
			  			Space Delineator: 
				  			<select name="spaceTrans" style="color: #000000;">
								<option value="dash">-</option>
								<option value="under">_</option>
								<option value="period">.</option>
								<option value="none">None</option>
							</select>
						<br>
						Case:
							<select name="caseTrans" style="color: #000000;">
								<option value="allLow">All lower case</option>
								<option value="allUp">All upper case</option>
								<option value="first">First letter capitalized</option>
							</select>
						<br>
			  			<input type="submit" class="btn btn-danger btn-lg" name="Generate">
					</form>
				</div>
			</div>
		</div>

	</body>
	
</html>