<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<link rel="shortcut icon" href="../web/favicon.ico" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | FPT POLYTECHNIC | WWW.POLY.EDU.VN </title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
	
	<div class="row">
		
		<center><img src="../web/img/1.jpg"> </center>  
		
		</div>
		
		
		
		
	  <div class="row">
		
	  
	  
      <nav class="navbar navbar-inverse" 
	  style="border-radius:0px !important;background-color:#005b7f !important">
	  
         <div class="col-sm-1">
			&nbsp;
	  </div>
	  
	   <div class="col-sm-10">
      <ul class="nav navbar-nav">
	 
	  
        <li><a href="../web/index.php?r=site/index">TRANG CHỦ</a></li>
		 
        <li><a href="../web/index.php?r=site/about">GIỚI THIỆU</a></li>
        <li><a href="#">TUYỂN SINH</a></li>
        <li><a href="#">CHƯƠNG TRÌNH ĐÀO TẠO</a></li>
         <li><a href="#">THÔNG TIN DOANH NGHIỆP</a></li>
		 
          <li><a href="#">LIÊN HỆ</a></li>
		  <li><a href="../web/index.php?r=site/login">ĐĂNG NHẬP</a></li>
		   <li><a href="#">KHÁC</a></li>
        
      </ul>
	 </div>
	 
	   <div class="col-sm-1">
	  </div>
	  
             
</nav>
 


</div>
<style>
.navbar-nav a{color:white !important;padding-right:20px !important;padding-left:20px !important;text-align:center !important;}
.navbar-nav a:hover{background-color:#f7941d !important;}
#yii-debug-toolbar{display:none !important;}
</style>
		
		

        <div class="container">
            
            <?= $content ?>
        </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	

    <footer>
       
           <div class="row" style="background-color:#363636;color:white ">
		   
		   <br/><br/>
		   <div class="col-sm-1"></div>
		   <div class="col-sm-2">
		   <center>
		   <img src="../web/img/2.jpg"><br/>
		   			Lưu Quang Tiến - FPT Polytechnic Hà Nội
					</center>
		   </div>
		   
		   <div class="col-sm-3" style="background-image:url(../web/img/27.jpg);color:#005b7f;text-align:justify;padding:20px;">
			 Ở FPT Polytechnic, mình được dạy thật - học thật và làm
		   thật. Giảng viên tận tình truyền đạt kiến thức và giúp đỡ
		   mình khi gặp khó khăn, thắc mắc cần giải đáp trong quá
		   trình học tập.
		   </div>
		   
		   
		   <div class="col-sm-2" >
		     <center>
		   <img src="../web/img/3.jpg"><br/>
		   Lê Thị Phương Thảo- FPT Polytechnic Hà Nội
		   </center>
		   
		   </div>
		   
		   <div class="col-sm-3" style="background-image:url(../web/img/27.jpg);color:#005b7f;text-align:justify;padding:20px;">
		 Không giống những trường khác là có học lý thuyết nhiều, FPT Polytechnic tạo điều kiện cho mình tự học
		  và học lý thuyết đi đôi với thực hành.
		   </div> 
		  
			
		   
		   
		  <div class="col-sm-1"></div>
		  
		  
		   
		   
		   </div>
		   
		   
			 <div class="row" style="background-color:#363636;color:white;font-weight:Bold;">
			 <br/>
		  
				<div class="col-sm-6" style="text-align:right !important"><</div>
			
			 <div class="col-sm-6">></div>
			 <br/><br/>
			 </div>
			 
		 
		  <div class="row" style="background-color:#005b7f;color:white;">
			 <br/>
			  <div class="col-sm-1">
			
			 </div>
			 <div class="col-sm-3">
			 <img src="../web/img/6.jpg">
			 </div>
		  
				
			 <div class="col-sm-2">
			 <span style="color:#019fb4">Liên hệ <br/>với chúng tôi</span>
			 <br/><br/>
			 Hà Nội<br/>
			 Đà Nẵng <br/>
			 Tây Nguyên <br/>
			 Hồ Chí Minh <br/>
			 <br/>
			 
			 Facebook <br/>
			 Google Plus <br/>
			 Youtube <br/>
			 
			 </div>
			 
			 
			 
			  <div class="col-sm-2">
			<span style="color:#019fb4">Chuyên ngành <br/>đào tạo</span>
			 <br/><br/>
			 Thiết kế Website<br/>
			 Ứng dụng phần mềm <br/>
			 Lập trình máy tính<br/>
			 Thiết kế đồ họa<br/>
			 Kế toán doanh nghiệp<br/>
			 
			 Quản trị doanh nghiệp<br/>
			 Tiếng Anh - Top Notch<br/>
			 Trắc nghiệm nghề nghiệp<br/>
			 
			 </div>
			 
			 
			  
			  <div class="col-sm-2" style="color:#019fb4">
			Sinh viên
			 <br/>
			 Phụ huynh<br/>
			 Đối tác<br/>
			 Tài nguyên<br/><br/>
			 Giới thiệu<br/>
			 Chương trình đào tạo<br/>
			 
			 Tuyển sinh<br/>
			 Thông tin doanh nghiệp<br/>
			Liên hệ<br/>
			  <br/> <br/>
			 </div>
			 
			 
			 
		 
		 
		
			
    </footer>
	
	
	
	
	
	
	
	
	
	
	

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
