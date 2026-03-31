<?php

add_action('init', function(){

 register_post_type('mg_cert',[
  'label'=>'الشهادات',
  'public'=>true,
  'menu_icon'=>'dashicons-awards',
  'supports'=>['title']
 ]);

 register_taxonomy('mg_cat','mg_cert',[
  'label'=>'تصنيفات الشهادات',
  'hierarchical'=>true
 ]);

 add_rewrite_rule('^certificate/([^/]*)/?','index.php?mgc=$matches[1]','top');

});

add_filter('query_vars',function($v){$v[]='mgc'; return $v;});

// Meta Box
add_action('add_meta_boxes',function(){
 add_meta_box('mg_box','بيانات الشهادة','mg_box_html','mg_cert');
});

function mg_box_html($post){

$name=get_post_meta($post->ID,'name',true);
$course=get_post_meta($post->ID,'course',true);
$hours=get_post_meta($post->ID,'hours',true);
$date=get_post_meta($post->ID,'date',true);
$serial=get_post_meta($post->ID,'serial',true);

?>

<p>اسم المتدرب</p>
<input name="name" value="<?=$name?>" style="width:100%"><br><br>

<p>اسم الدورة</p>
<input name="course" value="<?=$course?>" style="width:100%"><br><br>

<p>عدد الساعات</p>
<input name="hours" value="<?=$hours?>" style="width:100%"><br><br>

<p>التاريخ</p>
<input name="date" value="<?=$date?>" style="width:100%"><br><br>

<p>السيريال</p>
<input value="<?=$serial?>" readonly style="width:100%">

<?php if($serial): ?>
<br><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?=site_url('/certificate/'.$serial)?>">
<?php endif; ?>

<?php }

add_action('save_post',function($id){
 if(isset($_POST['name'])){
  update_post_meta($id,'name',sanitize_text_field($_POST['name']));
  update_post_meta($id,'course',sanitize_text_field($_POST['course']));
  update_post_meta($id,'hours',sanitize_text_field($_POST['hours']));
  update_post_meta($id,'date',sanitize_text_field($_POST['date']));

  if(!get_post_meta($id,'serial',true)){
   update_post_meta($id,'serial','MG-'.date('Y').'-'.rand(10000,99999));
  }
 }
});

// عرض الشهادة
add_action('template_redirect',function(){
 $c=get_query_var('mgc');
 if($c){
  include __DIR__.'/../templates/cert.php';
  exit;
 }
});

// صفحة التحقق
add_shortcode('mg_verify',function(){

ob_start();
$code=$_GET['code']??'';

?>

<div style="max-width:500px;margin:50px auto;text-align:center">

<h2>التحقق من الشهادة</h2>

<form>
<input name="code" placeholder="ادخل رقم الشهادة" style="width:100%;padding:10px">
<br><br>
<button style="padding:10px 30px;background:#1d3b2f;color:#fff;border:none">تحقق</button>
</form>

<?php

if($code){

$q=new WP_Query(['post_type'=>'mg_cert','meta_query'=>[['key'=>'serial','value'=>$code]]]);

if($q->have_posts()){
$q->the_post();
$name=get_post_meta(get_the_ID(),'name',true);
echo "<h3 style='color:green'>شهادة صحيحة</h3>";
echo "<p>$name</p>";
echo "<a href='".site_url('/certificate/'.$code)."'>عرض الشهادة</a>";
}else{
echo "<h3 style='color:red'>شهادة غير صحيحة</h3>";
}

}

?>

</div>

<?php
return ob_get_clean();

});
