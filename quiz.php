<html>
<head>
<title>Quiz:Wingtech </title>
 <?php include "head.inc"; ?>
	</head>
<body>
<?php include "nav.inc"; ?>
<p>
<hr>
<?php include "quiz_con.php";?>
<!---quiz page---->
<?php 
//$quiz=array(
//array('number'=>'1','ques'=>'what is ur name?','A'=>'A.joe','B'=>'B.sam','C'=>'C.tom','D'=>'D.jerry'),
//array('number'=>'2','ques'=>'How old are you?','A'=>'A.15', 'B'=>'B. 21',' C'=>'C. 30','D'=> 'D.None of the Above'));
 //$i=count($quiz);?>
<div class="container">
<div class="row">

<form method='post' id='quiz_form'>
<?php
//for($l=0;$l<$i;$l++)
	
				$answer=mysqli_query($conn,'SELECT * FROM quiz_info ');
			while($output=mysqli_fetch_array($answer,MYSQL_NUM))
echo'<div id="question_'. $output[0].'" class=\'questions\'>
<h2 id="question_'.$output[0].'">'.$output[0].'.'.$output[1].'</h2>
<div class=\'align\'>

<input type="radio" value="1" id=\'radio1_'.$output[0].' name='.$output[0].'>
<label id=\'ans1_'.$output[0].' for=\'1\'>'.$output[2].'</label>
<br/>

<input type="radio" value="2" id=\'radio2_'.$output[0].' name='.$output[0].'>
<label id=\'ans2_'.$output[0].' for=\'1\'>'.$output[3].'</label>
<br/>

<input type="radio" value="3" id=\'radio3_'.$output[0].' name='.$output[0].'>
<label id=\'ans3_'.$output[0].' for=\'1\'>'.$output[4].'</label>
<br/>
<input type="radio" value="4" id=\'radio4_'.$output[0].' name='.$output[0].'>
<label id=\'ans4_'.$output[0].' for=\'1\'>'.$output[5].'</label>
<br/>

</div>
<input type="button" id=\'next\''.$output[0].' value=\'next!\' />
</div>';?>
</form>




</div>
</div>

    <?php include "footer.inc"; ?>
</body>

</html>
	