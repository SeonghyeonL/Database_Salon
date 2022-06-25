<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
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

<?
	include "../dbconn.php";
	
	$name = '김현우';

	$sql1 = "select sid, price, total_time from price, designer where did=designer.id and name='$name'";
	$result1 = mysqli_query($connect, $sql1);

  	echo "<div style='margin-bottom: 5px;'><b>$name 디자이너</b></div><br>";
	echo "<table border>";

	// 머릿글 출력
	echo "<tr>";
	while($field=mysqli_fetch_field($result1)){
		echo "<th>";
        		echo $field->name;
        		echo "</th>";
    	}
    	echo "</tr>";

   	// 데이터 출력
   	while($data=mysqli_fetch_row($result1)){
       		echo "<tr>";
        		for($i=0;$i<(count($data));$i++){
            			echo "<td>";
            			echo $data[$i];
            			echo "</td>";
       		}
        		echo "</tr>";
    	}

    	// 테이블 끝
    	echo "</table>";

?>
