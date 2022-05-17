<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/9872ede934.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./public/css/index.css">

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); // Change image every 2 seconds
		}
		</script>
</head>

<body>
<div class="container-fluid">
    	<nav class="navbar bg-light fixed-top navbar-expand-sm navbar-light" >
      		<a class="navbar-brand ml-xl-5" href="index.html"><img src="https://shop.vinfastauto.com/on/demandware.static/Sites-app_vinfast_vn-Site/-/default/dw7cb45730/images/vfast/logo.svg"></a>
      		<ul class="navbar-nav my-xl-3 ml-xl-3">
      			 <li class="nav-item dropdown">
	          		<a class="nav-link mt-xl-2 mr-xl-5" href="#" id="navbardrop" data-toggle="dropdown"><dt> <i class="fas fa-align-left"></i> Ô Tô</dt></a>
		        <div class="dropdown-menu" id="bg8">
		            <a class="dropdown-item mr-xl-5" href="vinfastvfe34.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/Sites-app_vinfast_vn-Site/-/default/dw5414b264/images/vfe34/Hinh-anh-dat-coc-Xe-dien-VinFast-VFe34-mau-do-Mystique-Red.png" width="40%"> VF e34</dt></a>
		            <a class="dropdown-item mr-xl-5" href="vinfastpresident.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw7652ab62/images/President/hinh-anh-gia-VinFast-President-V8-mau-do-red.png" width="40%"> President</dt></a>
		            <a class="dropdown-item mr-xl-5" href="vinfastluxsa20.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw616fde5d/images/Lux-SA/hinh-anh-gia-VinFast-Lux-SA2.0-ban-tieu-chuan-base-tra-gop-mau-do-red.png" width="40%"> LUX SA2.0</dt></a>
		            <a class="dropdown-item mr-xl-5" href="vinfastluxa20.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwbdd0e76b/images/Lux-A/hinh-anh-gia-xe-VinFast-Lux-A2.0-ban-tieu-chuan-mau-do-mystique-red.png" width="40%"> LUX A2.0</dt></a>
		            <a class="dropdown-item mr-xl-5" href="vinfastfadil.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw0ca94be5/images/Fadil/Hinh-anh-Mua-xe-VinFast-Fadil-ban-nang-cao-tra-gop-mau-do-Red.png" width="40%"> Fadil</dt></a>
		        </div>
		        </li>
		       		<li class="nav-item dropdown mt-xl-2 mr-xl-5" >
		          	<a class="nav-link"  href="#" id="navbardrop" data-toggle="dropdown"><dt><i class="fas fa-align-left"></i> Xe Máy Điện</dt></a>
		        <div class="dropdown-menu" id="bg8">
		            <a class="dropdown-item" href="theon.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5b9c413d/images/theon/RES.png" width="40%"> Theon</dt></a>
		            <a class="dropdown-item" href="kalaras.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw1cd0f676/images/kara/REQ.png" width="40%"> Kalara S</dt></a>
		            <a class="dropdown-item" href="feliz.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwa91a26b0/images/feliz/RET.png" width="40%"> Feliz</dt></a>
		            <a class="dropdown-item" href="impes.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwae93e65f/images/impes/RER.png" width="40%"> Impes</dt></a>
		            <a class="dropdown-item" href="ludo.html"><dt><img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwcef50843/images/ludo/RER.png" width="40%"> Ludo</dt></a>
		        </div>
		        </li>
		        	<li class="nav-item mt-xl-2 mr-xl-5" >
		          		<a class="nav-link" href="uudai.html"><dt>Ư Đãi</dt></a>
	        		</li>
	        	<li class="nav-item dropdown mt-xl-2 mr-xl-5">
	          		<a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><dt><i class="fas fa-align-left"></i> Dịch Vụ</dt></a>
	          	<div class="dropdown-menu" id="bg8">
	            	<a class="dropdown-item" href="baoduonghaumai.html"><dt> Bảo dưỡng hậu mãi</dt></a>
	            	<a class="dropdown-item" href="dangnhapdangky.html"><dt> Đăng nhập/đăng kí</dt></a>
	          	</div>
	        	</li>
	        	<ul class="ml-auto">
		        	<li class="btn">
		        		<a href="dangkylaithu.html"><button type="submit" class="btn btn-outline-dark">ĐĂNG KÝ LÁI THỬ</button></a>
		        	</li>	
		        </ul>        
		        <div class="icon-bar mr-5 " id="textmg">
		            <ul class="social-icons">
		              <li><a class="dangnhap mt-xl-1" href="admin.html" ><i class="fas fa-user-plus"></i></a></li>
		              <li><a class="datlich mt-xl-1" href="dangnhapdangky.html"><i class="fas fa-sign-in-alt"></i></a></li>
		            </ul>
		        </div>
		        <ul class="navbar-nav mr-5">
					<form class="form-inline" action="/somepage">
					    <input class="form-control mr-sm-2" id="p" type="text" placeholder="Tìm Kiếm">
					    <button class="btn btn-danger text-center" id="p1" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</ul>
	    	</ul>
  		</div> 
	<div class="container-fluid">
		 <div class="w3-content w3-section" style="width: 100%;">
		 	<img class="mySlides" src="https://storage.googleapis.com/vinfast-data-01/KV%20CSBH%20-1280%20x%20554_1628506022.jpg" style="width:100%">
		  	<img class="mySlides" src="https://storage.googleapis.com/vinfast-data-01/KV_CSBH-1280x554_resize_1625220643.jpg" style="width:100%">
		  	<img class="mySlides" src="https://storage.googleapis.com/vinfast-data-01/vi_VFe34%20NewKV_banner_1627116002.jpg" style="width:100%">
		  	<img class="mySlides" src="https://storage.googleapis.com/vinfast-data-01/_vi_Klara_1625736876.jpg" style="width:100%">
		  	<img class="mySlides" src="https://storage.googleapis.com/vinfast-data-01/CSBHT7_ludo&impes__1626150463.jpg" style="width:100%">
		</div>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); // Change image every 2 seconds
		}
		</script>

  		<br>
	</div>
	<div class="container text-justify">
		<div class="row">
			<div class="col-md-12 text-center mb-3 mt-5">
				<dt><h1>HÀNH TRÌNH CHINH PHỤC THẾ GIỚI</h1></dt>
			</div>
			<div class="col-md-4 text-center">
				<dt>"Vinfast, thương hiệu ô tô Việt thuộc tập đoàn VinGroup là điển hình tiêu biểu của việc nhanh chóng phục hồi và có tiến bước nhanh chóng sau khi Việt Nam thành công chống dịch Covid..."</dt>
				<dt class="mt-4">-Bloomberg-</dt>
			</div>
			<div class="col-md-4 text-center">
				<dt>“Trong ngành công nghiệp xe hơi, việc thiết kế và chế tạo không chỉ một mà hai chiếc xe chỉ trong vòng 12 tháng là tốc độ không tưởng”</dt>
				<dt class="mt-5">-Top Gear-</dt>
			</div>
			<div class="col-md-4 text-center">
				<dt>"Chìa khóa để đạt thành công ngay từ khâu sản xuất của VinFast chính là các đối tác mạnh mẽ như ABB, Bosch, Magna Steyr và Siemens"</dt>
				<dt id="mt">-CNBC-</dt>
			</div>
		</div>
	</div>

	<div class=" container-fluid pt-5">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="text-justify text-center">XE Ô TÔ</h1>
				<br>
			</div>
		    <div class="col-md-4 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/president.png" alt="">
		         	<div class="hover-overlay">	
		         	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span>President
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dòng SUV</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dấu Ấn Người Thủ Lĩnh</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="vinfastpresident.html"><button type="button" class="btn btn-outline-light mt-xl-4">Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/VFe34.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span>VFe34
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dòng SUV</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Bức Phá Mọi Giới Hạn</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="vinfastvfe34.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/2LuxSA.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span>Lux SA2.0
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dong SUV</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Chinh Phục Mọi Con Đường</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="vinfastluxsa20.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-2 mb-5 mb-lg-5"></div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/LuxA_1.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span> Lux A2.0
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dòng SEDAN</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Tận Hưởng Từng Khoảng Khắc</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="vinfastluxa20.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-3 mb-lg-3">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/fadill.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0">
		            		 	<span class="font-weight-light">VinFast </span> Fadil
		            		 </h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dòng HATCHBACK</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Tối ưu Mọi Trải Nghiệm</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="vinfastfadil.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		</br>
		    <div class="col-md-2 mb-5 mb-lg-5"></div>
		    <div class="col-md-12"></div>  
		    <div class="col-md-12 text-center text-justify pt-3"> 
		    	</br> 
				<h1>XE MÁY ĐIỆN</h1>
				</br>
			</div>
			<div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/THEON_0.png" alt="">
		         	<div class="hover-overlay">	
		         	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0">
		            		 	<span class="font-weight-light">VinFast </span>THEON
		            		 </h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Công Nghệ Bức Phá, Trải Nghiệm Đỉnh Cao</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="theon.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/FELIZ_0.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span>Feliz
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Sống Xanh Thanh Lịch</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="feliz.html"><button type="button" class="btn btn-outline-light mt-xl-4">Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/KLARA_S.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0">
		            		 	<span class="font-weight-light">VinFast </span>Klara s
		            		 </h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Khởi Đầu Phong Cách Mới</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="kalaras.html"><button type="button" class="btn btn-outline-light mt-xl-4">Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-2 mb-5 mb-lg-5"></div>
		    <div class="col-md-4 mb-5 mb-lg-5">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/IMPES.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0"> 
		            			<span class="font-weight-light">VinFast </span> Impes
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Dáng Sành Điệu, Kiểu Chất Chơi</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="impes.html"><button type="button" class="btn btn-outline-light mt-xl-4" >Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		    <div class="col-md-4 mb-3 mb-lg-3">
		        <div class="hover hover-3 text-white rounded"><img src="https://storage.googleapis.com/vinfast-data-01/LUDO.png" alt="">
		          	<div class="hover-overlay">		
		          	</div>
		         		<div class="hover-3-noidung px-5 py-4">
		            		<h3 class="hover-3-tieude text-uppercase font-weight-bold mb-0">
		            			<span class="font-weight-light">VinFast </span> Ludo
		            		</h3>
		            		<p class="hover-3-trichdan font-weight-light mb-0">Tỏa Chất Riêng-Bật Cá Tính</p>
		            		<p class="hover-3-trichdan font-weight-light mb-0">
		            			<a href="ludo.html"><button type="button" class="btn btn-outline-light mt-xl-4">Xem Chi Tiết</button></a>
		            		</p>
		          		</div>
		        </div>
		    </div>
		</br>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center text-justify"> 
		    	</br> 
				<h1>VIDEO GIỚI THIỆU</h1>
				</br>
			</div>
			<div class="col-md-8">
				<video width="100%" controls>
					 <source src="./public/video/video1.mp4">
				</video>
			</div>
			<div class="col-md-4">
				<video width="100%" controls>
					 <source src="./public/video/video2.mp4">
				</video>
				<video width="100%" controls>
					 <source src="./public/video/video3.mp4">
				</video>
			</div>
		</br>
		</div>
	</div> 	
	<?php include_once './inc/footer.php'?>
</body>
</html>	