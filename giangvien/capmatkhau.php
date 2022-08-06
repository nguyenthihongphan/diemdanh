<?php
session_start();
if(isset($_SESSION['id']) &&isset($_SESSION['user'])&&isset($_SESSION['pass'])&&isset($_SESSION['phanquyen']))
{
	include("./classes/login_tmdt.php");
	$q= new gvlogin;
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['phanquyen']);
	}
else
{
	header('location:login.php');
	}
include("./classes/classtmdt.php");
$p= new tmdt();
$layid=0;
if(isset($_REQUEST['id']))
{
	$layid=$_REQUEST['id'];
}
$iduser=$_SESSION['id'];
$ten=$q->luachon("select ten from giangvien where id='$iduser' limit 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
    <title>Cấp mật khẩu</title>
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">

     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-style.css">



</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
  <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">SHARK</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav  navbar-nav-first" style="font-size:17px">
                         
                         <li><a href="#courses" class="smoothScroll">Lớp giảng dạy</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Thông báo</a></li>
                         <li><a href="#contact" class="smoothScroll">Liên hệ</a></li>
                         <li><a href="" class="smoothScroll">Ngôn ngữ</a></li>
                         <li><a href="#" style="margin-left:60px">&nbsp; &nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>  <?php echo $ten ; ?> </a></li>
                          <li><a href="login.php" style="margin-left:60px">&nbsp; &nbsp;&nbsp;&nbsp;</i>  Đăng xuất</a></li>
                    </ul>
               </div>


          </div>          
     </section>

<!-- MENU -->

    <div id="main-wrapper" data-layout="vertical"  data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                       
                        <li class="p-15 m-t-10"><a href="javascript:void(0)"
                                class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                                    class=""></i> <span class="hide-menu m-l-5">Phát triển ứng dụng(10-12)T4</span> </a>
                        </li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Lớp học phần</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Điểm danh sinh viên</span></a></li>
                                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="hoatdong.php" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Hoạt động ngoại khóa</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="phatbieu.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Phát biểu</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="xembaocao.php" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">File nộp báo cáo</span></a></li>
                                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="capmatkhau.php" aria-expanded="false"><i class="mdi mdi-lock-plus"></i><span
                                    class="hide-menu">Cấp mật khẩu</span></a></li>
                       
                                  
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
     
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                
                    <div class="col-5">
                        
                       
                    </div>
                    <div class="col-7">
                        <div class="text-end upgrade-btn">
                            <a href="" class=" text-white"
                                target="_blank"></a>
                        </div>
                    </div>
              
            </div>
               <div class="main-content">
               
               
                    <br>
					<h3 style="margin-left:330px; color:#0C6">Cấp mật khẩu cho phép sinh viên truy cập ghi nhận phát biểu</h3>
					<br>
                    <br>
                  
                   <form id="form1" name="form1" method="post" action="">
  <table width="600" border="1" align="center">
    <tr>
      <td>Mật khẩu</td>
      <td align="left"><label for="txtpass"></label>
      <input name="txtpass" type="text" id="txtpass" value="<?php echo $p->chonlay("select password from matkhau where id='$layid' limit 1")?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Cập nhật" /></td>
    </tr>
  </table>
</form>
<?php
switch($_POST['nut'])
{
	case'Cập nhật':
	{
		
		$pass=$_REQUEST['txtpass'];
		
		if($pass>0)
		{
				if($p->themxoasua("INSERT INTO matkhau(password)VALUES( '$pass')")==1)
				{
					echo 'Cấp mật khẩu thành công.';
				}
				else{
					echo'Cấp mật khẩu không thành công.';
					}
				}else
				{
					echo 'Cấp mật khẩu không thành công.';
				}
		
	}break;
}

?>
<hr/>

<br>
<br>
<br>
</div>
  <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Địa chỉ</h2>
                              </div>
                              <address>
                                   <p>Nguyễn Văn Bảo phường 4 Gò Vấp</p>
                                   <p><i class=" fa fa-converlope"></i> csm@iuh.edu.vn</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/search/top?q=iuh%20-%20tr%C6%B0%E1%BB%9Dng%20%C4%91%E1%BA%A1i%20h%E1%BB%8Dc%20c%C3%B4ng%20nghi%E1%BB%87p%20tp.hcm" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Liên hệ</h2>
                              </div>
                              <address>
                                   <p>+0283.49830-0283.565678</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Phản hồi</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Email của bạn" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Gửi">
                                        </form>
                                        <span><sup>*</sup>Không spam mail</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>
  <!-- SCRIPTS -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>
    <script  src="../js/jquery.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>