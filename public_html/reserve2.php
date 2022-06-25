<?
    //for reserving client
    $cname = $_POST[cname];
    $date = $_POST[date];
    $time = $_POST[time];
    $datetime = $_POST[date].' '.$_POST[time].':00';
    $dname = $_POST[dname];
    $style = $_POST[style];

    //check empty
    if(!$cname){
    	echo "<script>window.alert('이름을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

   if(!$date){
    	echo "<script>window.alert('날짜를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    if(!$time){
    	echo "<script>window.alert('시간을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    if(!$dname){
    	echo "<script>window.alert('디자이너를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    if(!$style){
    	echo "<script>window.alert('스타일을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";

    //check customer list
    $sql1 = "select * from customer where name='$cname'";
    $result1 = mysqli_query($connect,$sql1);
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('고객이 명단에 없습니다.'); history.go(-1);</script>";
        exit;
    }
    //check designer list
    $sql2 = "select * from designer where name='$dname'";
    $result2 = mysqli_query($connect,$sql2);
    $num2 = mysqli_num_rows($result2);
    if($num2==0){
        echo "<script>window.alert('디자이너가 없습니다.'); history.go(-1);</script>";
        exit;
    }
    //check customer duplication
    $sql3 = "select R.cid from customer C, reservation R where C.name='$cname' and C.id=cid and datetime='$datetime'";
    $result3 = mysqli_query($connect,$sql3);
    $num3 = mysqli_num_rows($result3);
    if($num3>0){
        echo "<script>window.alert('이미 예약하셨습니다.'); history.go(-1);</script>";
        exit;
    }
    //check designer duplication
    $sql4 = "select R.cid from designer D, reservation R where D.name='$dname' and D.id=did and datetime='$datetime'";
    $result4 = mysqli_query($connect,$sql4);
    $num4 = mysqli_num_rows($result4);
    if($num4>0){
        echo "<script>window.alert('해당 시간의 예약이 마감됐습니다.'); history.go(-1);</script>";
        exit;
    }

    //insert reserve info
    $sql6 = "insert into reservation(cid, did, datetime, style_menu) select C.id, D.id, '$datetime', '$style' from customer C, designer D where C.name='$cname' and D.name='$dname'";
    mysqli_query($connect,$sql6);

    mysqli_close();

    echo "<script>alert('$cname님 $datetime에 예약되었습니다.'); window.close();</script>";
?>
