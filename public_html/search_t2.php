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

    $date = $_POST['date'];

    //check not empty
    if(!$date){
    	echo "<script>window.alert('날짜를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";

    //get designer information and check telephone_number
    $sql1 = "select * from reservation where datetime like '$date%'";
    $result1 = mysqli_query($connect, $sql1);
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);
    $row1 = mysqli_fetch_array($result1);

    //get designer reservation information 
    $sql2 = "select distinct mid(datetime, 12, 5) as time, C.name as customer, D.name as designer, style_menu from reservation R, designer D, customer C where datetime like '$date%' and cid=C.id and did=D.id";
    $result2 = mysqli_query($connect,$sql2);
    $num2 = mysqli_num_rows($result2);
    $total_count = 0;

    echo "<div style='margin-bottom: 5px;'>해당 날짜의 예약된 결과 입니다.</div>";
    echo "<div style='margin-bottom: 5px;'>$num2 개의 예약 정보가 있습니다.</div>";

    echo "<table border>";

    // 머릿글 출력
    echo "<tr>";
    while($field=mysqli_fetch_field ($result2)){
        echo "<th>";
        //print_r($field);
        echo $field->name;
        echo "</th>";
    }
    echo "</tr>";

    // 데이터 출력
    while($data=mysqli_fetch_row($result2)){
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
