<!-- Page Content -->
<div class="main">
<!-- Now Showing -->
<?php if(isset($listShowing)){
?>
           <!-- ........................... -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="section-headline text-center">
			<h2 style="margin-top:40px; margin-bottom:20px;"><?=$header1?></h2>
		</div>
	</div>
</div>

<ul class="container-fluid">
<?php
for( $i=0 ; $i < count($listShowing); $i++ ){ 
?>
	<li class="bd">
		<div class="SP">
		<a class="item" href="<?php echo base_url() ?>client/showDetail?idCTiet=<?=$listShowing[$i]['idphim']?>">
			<div><img src="<?php echo base_url() ?>public/uploads/<?=$listShowing[$i]['poster']?>" class="ha"></div>
			<div class="text">
				<div class="td">
					<b class="ind"><?=$listShowing[$i]['tenphim']?></b>
				</div>
				<div class="smc">
					<div class="tl ">
						<span class="ind">Thể loại: </span>
						<span><?=$listShowing[$i]['theloai']?></span>
					</div>

					<div class="time ">
						<span class="ind">Thời lượng: </span>
						<span><?=$listShowing[$i]['thoiluong']?> phút</span>
					</div>

					<div class="date ">
						<span class="ind">Khởi chiếu: </span>
						<span><?=$listShowing[$i]['khoichieu']?></span>
					</div>
				</div>
			</div>
		</a>
		</div>
	</li>
<?php
}
?>
</ul>
	<div style="margin-bottom:30px;" class="container-fluid">
		<center>
	<a href="<?php echo base_url() ?>client/nowShowing" target="" class="btn1">
		Show More
	</a></center>
	</div>
<hr>
<?php
} 
if(isset($listComing)){
?>
<!-- Coming Soon -->
           <!-- ........................... -->
<hr>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="section-headline text-center">
				<h2 style="margin-top:40px; margin-bottom:20px;"><?=$header2?></h2>
			</div>
		</div>
	</div>
<ul class="container-fluid">
<?php
for( $i=0 ; $i < count($listComing); $i++ ){ 
?>
	<li class="bd">
		<div class="SP">
		<a class="item" href="<?php echo base_url() ?>client/showDetail?idCTiet=<?=$listComing[$i]['idphim']?>">
			<div><img src="<?php echo base_url() ?>public/uploads/<?=$listComing[$i]['poster']?>" class="ha"></div>
			<div class="text">
				<div class="td">
					<b class="ind"><?=$listComing[$i]['tenphim']?></b>
				</div>
				<div class="smc">
					<div class="tl ">
						<span class="ind">Thể loại: </span>
						<span><?=$listComing[$i]['theloai']?></span>
					</div>

					<div class="time ">
						<span class="ind">Thời lượng: </span>
						<span><?=$listComing[$i]['thoiluong']?> phút</span>
					</div>

					<div class="date ">
						<span class="ind">Khởi chiếu: </span>
						<span><?=$listComing[$i]['khoichieu']?></span>
					</div>
				</div>
			</div>
		</a>
		</div>
	</li>
<?php
}
?>
</ul>
	<div style="margin-bottom:30px;" class="container-fluid">
		<center>
	<a href="<?php echo base_url() ?>client/comingSoon" target="" class="btn1">
		Show More
	</a></center>
	</div>
<?php
} 
?>

<!-- /End body -->

<!-- /.container -->
