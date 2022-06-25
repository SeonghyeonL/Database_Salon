<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>

<?
	include "dbconn.php";
	$sql1 = "select introduction from designer where name='박성우'";
	$result1 = mysqli_query($connect, $sql1);
?>
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
}

.show_train{
    font-size: 13px;
    border-style: solid;
    border-width: 2px;
    border-color: #000000;
}

.show_train th{
    padding: 3px;
    background-color:  #f2f2f2;
    border-bottom: solid 1px #aaa;
    border-right: solid 1px #aaa;
}

.show_train td{
    text-align: center;
    padding: 10px;
    border-bottom: solid 1px #aaa;
    border-right: solid 1px #aaa;
}

.ktx{
    text-decoration: underline;
    background-color: #FFD4DF;
    color: #FF5675;
}

.mugunghwa{
    text-decoration: underline;
    background-color: #FAFAAA;
    color: #FFA500;
}

.saemaeul{
    text-decoration: underline;
    background-color: #D2FFD2;
    color: #46B4B4;
}
</style>

<legend><b>디자이너 선택</b></legend>
<hr style="border: dashed 1px">
<center>
<form  action="designer/psw.php" name="form" method="post" style="margin-top:10px;">
	<button style="margin-top:10px;" action="document.form.submit();">
	박성우
	</button>
	<br><br>
	<?php echo mysqli_fetch_array($result1)['introduction']; ?>
	<br><br>
</form>
<hr>
</center>