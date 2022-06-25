<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>예약</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<?
	include "dbconn.php";
?>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
	font-size: 15px;
	font-family: 'Nanum Gothic';
}

a:link {
    color: #000000;
    text-decoration: none;
}
a:visited {
    color: #000000;
    text-decoration: none;
}
a:hover {
    color: #000000;
    text-decoration: none;
}

</style>
<script type="text/javascript">
</script>
</head>
<body>
	<!-- for client to reserve-->
	<form action="reserve2.php" name="form" method="post" style="margin-top:10px;">
		<fieldset>
			<legend>미용실 예약</legend>
			<table width="280" height="220">

				<!-- cname is -->
				<tr>
					<td><b>이름</b></td>
					<td><input type="text" name="cname"></td>
				</tr>

				<!-- date is -->
				<tr>
					<td><b>날짜</b></td>
					<td><input type="date" name="date"></td>
				</tr>

				<!-- time is -->
				<tr>
					<td><b>시간</b></td>
					<td><input type="time" name="time"></td>
				</tr>

				<!-- dname is -->
				<tr>
					<td><b>디자이너</b></td>
					<td><input type="text" name="dname"></td>
				</tr>

				<!-- style is -->
				<tr>
					<td><b>스타일</b></td>
					<td><input type="text" name="style"></td>
				</tr>

				<!-- submit button -->
				<tr><td colspan="3"><center><img src="img/reservation_bt2.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
			</table>
		</fieldset>
	</form>
</body>
</html>