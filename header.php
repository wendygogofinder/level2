<?php
include_once "base.php";

$today=date("Y-m-d");
$chkdate=nums("total",["date"=>$today]);
if(empty($_SESSION['total'])){


if($chkdate>0){
        $total=find("total",["date"=>$today]);

        $total['total']=$total['total']+1;
        $_SESSION['total']=$total['total'];
        save("total",$total);
}else{
        $total=["date"=>$today,"total"=>1];
        $_SESSION['total']=1;
        save("total",$total);
        }
}

$sum=q("select sum(`total`) from `total`")[0][0];
?>
<div id="title">                                   
       <?=date(" m 月 d 號 l");?> | 今日瀏覽:<?=find("total",["date"=>$today])["total"];?> | 累積瀏覽: <?=$sum;?>   
       <a href="index.php" style="float:right">回首頁</a>   
</div>
        <div id="title2">
              <a href="index.php"><img src="./images/02B01.jpg" alt="健康促進網-回首頁" title="健康促進網-回首頁"></a>
        </div>