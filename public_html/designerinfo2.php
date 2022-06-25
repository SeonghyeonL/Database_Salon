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

    $location = $_POST['location'];

    //check not empty
    if(!$location){
    	echo "<script>window.alert('위치를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";

    if($location=='성북구'){
	echo "<script>location.href='sb.php'</script>";
    }
    if($location=='동대문구'){
	echo "<script>location.href='dd.php'</script>";
    }
    if($location=='종로구'){
	echo "<script>location.href='jr.php'</script>";
    }
    if($location=='중구'){
	echo "<script>location.href='jg.php'</script>";
    }
    if($location=='노원구'){
	echo "<script>location.href='nw.php'</script>";
    }
    
?>
