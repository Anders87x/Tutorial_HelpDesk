<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>AnderCode</>::Detalle Ticket</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
            <section class="activity-line">

				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Tuesday<br/>
						sep 9
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="img/photo-64-2.jpg" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Tim Colins</div>
							<div class="activity-line-item-user-status">Developer, Palo Alto</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Uploaded 3 Images to Daily UI Album</p>
									<ul class="previews">
										<li>
											<a class="fancybox" rel="gall-1" href="img/pic.jpg">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="img/pic.jpg">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="img/pic.jpg">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="img/pic.jpg">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
										<li>
											<a class="fancybox" rel="gall-1" href="img/pic.jpg">																	<img src="http://placehold.it/120x80" alt=""/>
											</a>
										</li>
									</ul>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Left a comment to <a href="#">Olga Gozha’s</a> Image</p>
									<div class="tbl img-comment">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-img">
												<img src="http://placehold.it/120x80" alt=""/>
											</div>
											<div class="tbl-cell tbl-cell-txt">
												«Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller»
											</div>
										</div>
									</div>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Uploaded 3 files</p>
									<ul class="attach-list">
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">example.avi</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">activity.psd</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">example.psd</a>
										</li>
									</ul>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
					</div><!--.activity-line-action-list-->
				</article>

				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Monday<br/>
						sep 8
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="img/photo-64-2.jpg" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Tim Colins</div>
							<div class="activity-line-item-user-status">Developer, Palo Alto</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Started nes UI migration</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="dot"></div>
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller, Mark Taylor</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">5 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Had a meeting about shopping cart experience, with Isobel Patterson, Josh Weller, Mark Taylor</p>
									<ul class="meta">
										<li><a href="#">5 Comments</a></li>
										<li><a href="#">1 Likes</a></li>
									</ul>
								</div>
							</div>
						</section><!--.activity-line-action-->
					</div><!--.activity-line-action-list-->
				</article>

			</section>
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="detalleticket.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>