<?php include "config.php";?>
<html>
<head>
<title>WINGTECH QUIZ</title>
<meta charset='utf-8'>

 <link href="assets/css/homepage.css" rel="stylesheet">
</head>
<body>
	<?php $response=mysql_query("select * from questions");
	if (!$response) { // add this check.
    die('Invalid query: ' . mysql_error());
}?>
		<div>
			<center>
				<h1>Quiz</h1>
			</center>
		</div>
	<form method='post' id='quiz_form'>
	<table>
	<?php while($result=mysql_fetch_array($response)){ ?>
		<tr>
		<div class="questions">
		<?php echo $result['id'].".".$result['question_name'];?>
		</div>	
		<br>
		<div class="options">
			<input type="radio" name="option" value="A">
			<?php echo $result['answer1'];?>
			<br>
			<input type="radio" name="option" value="B">
			<?php echo $result['answer2'];?>
			<br>
			<input type="radio" name="option" value="C">
			<?php echo $result['answer3'];?>
			<br>
			<input type="radio" name="option" value="D">
			<?php echo $result['answer4'];?>
		</div>
		<br>
		<input type="button" value='next' name='submit' class='button'/>
		</tr>
	<?php }?>
	</table>
	</form>
	</body>
	</html>