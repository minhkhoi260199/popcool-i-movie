<div class="main">
<!-- Page Content -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="section-headline text-center">
			<h2 style="margin-top:100px; margin-bottom:20px;"><?=$header?></h2>
		</div>
	</div>
</div>

<!-- Body -->
           <!-- ........................... -->
<ul class="container-fluid">
<?php
for( $i=0 ; $i < count($list); $i++ ){ 
?>
	<li class="bd">
		<div class="SP">
		<a class="item" href="<?php echo base_url() ?>client/showDetail?idCTiet=<?=$list[$i]['idphim']?>">
			<div><img src="<?php echo base_url() ?>public/uploads/<?=$list[$i]['poster']?>" class="ha"></div>
			<div class="text">
				<div class="td">
					<b class="ind"><?=$list[$i]['tenphim']?></b>
				</div>
				<div class="smc">
					<div class="tl ">
						<span class="ind">Thể loại: </span>
						<span><?=$list[$i]['theloai']?></span>
					</div>

					<div class="time ">
						<span class="ind">Thời lượng: </span>
						<span><?=$list[$i]['thoiluong']?> phút</span>
					</div>

					<div class="date ">
						<span class="ind">Khởi chiếu: </span>
						<span><?=$list[$i]['khoichieu']?></span>
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
<!-- /End body -->

<!-- /.container -->
