<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						<?= $title ?>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-17">
					<div class="panel-heading">

					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
                                <form action="<?=$methodname?>" method="post" role="form"> <!--Multipart for upload-->
									<div class="form-group">
										<label>Date:<span style="font-weight:200; font-style:italic;"> Yêu cầu 1 ngày: Mon, Tue, Wed, Thu, Fri, Sat, Sun</span></label>
										<input type="text" class="form-control" name="date" value="<?php if(isset($edit)){echo $edit[0]["date"];}else{echo"";} ?>" placeholder="">
                                    </div>
									<div class="form-group">
										<label>Time:</label>
										<input type="text" class="form-control" name="time" value="<?php if(isset($edit)){echo $edit[0]["time"];}else{echo"";} ?>" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <lable>Id Phong:</lable>
                                    <select  class="form-control" name="idphong">
                                    <?php for($i=0; $i < count($listidphong); $i++){
										if(isset($edit)){
											if($listidphong[$i]['idphong']==$edit[0]['idphong']){?>
										
										<option selected><?php echo $edit[0]['idphong']?></option>
												
									<?php }}
									else{?>
										<option><?php echo $listidphong[$i]['idphong']?></option>
									<?php }
									}?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <lable>Ten Phim:</lable>
                                    <select  class="form-control" name="tenphim">
                                    <?php for($i=0; $i < count($listtenphim); $i++){
										if(isset($listphim)){
											if($listtenphim[$i]['tenphim']==$listphim[0]['tenphim']){?>
										
										<option selected><?php echo $listtenphim[$i]['tenphim']?></option>
									 <?php }else
									  	   {?>    
										<option><?php echo $listtenphim[$i]['tenphim']?></option>
									<?php }
										}else
										{?>
										<option><?php echo $listtenphim[$i]['tenphim']?></option>
									<?php }}?>
                                    </select>
                                    </div>
									<button type="submit" name="luu" class="btn btn-primary mb-3">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->