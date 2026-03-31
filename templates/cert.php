<?php
$c=get_query_var('mgc');
$q=new WP_Query(['post_type'=>'mg_cert','meta_query'=>[['key'=>'serial','value'=>$c]]]);

if(!$q->have_posts()){echo "شهادة غير موجودة"; exit;}
$q->the_post();

$name=get_post_meta(get_the_ID(),'name',true);
$course=get_post_meta(get_the_ID(),'course',true);
$hours=get_post_meta(get_the_ID(),'hours',true);
$date=get_post_meta(get_the_ID(),'date',true);

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
<style>
body{background:#1d3b2f;font-family:Cairo;text-align:center}
.cert{
 width:95%;
 max-width:1100px;
 margin:40px auto;
 background:#fff;
 padding:50px;
 border-radius:20px;
 position:relative;
}
.title{font-size:40px;font-weight:bold}
.name{font-size:30px;margin-top:20px}
.course{font-size:22px;margin-top:10px}
.meta{margin-top:15px}
.qr{position:absolute;bottom:30px;left:30px}
.serial{position:absolute;bottom:30px;right:30px}
</style>
</head>

<body>

<div class="cert">

<div class="title">شهادة حضور</div>

<div class="name"><?=$name?></div>

<div class="course"><?=$course?></div>

<div class="meta">
<p>عدد الساعات: <?=$hours?></p>
<p>التاريخ: <?=$date?></p>
</div>

<img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?=site_url('/certificate/'.$c)?>">
<div class="serial"><?=$c?></div>

</div>

</body>
</html>
