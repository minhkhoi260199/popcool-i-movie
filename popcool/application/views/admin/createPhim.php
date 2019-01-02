	<?php
	if(isset($_SESSION['error'])){
	?>
		<script>
			alert('<?php echo $_SESSION['error'] ?>');
		</script>
	<?php
	}
	?>
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
                                <form action="<?=$methodname?>" method="post" role="form" enctype="multipart/form-data"> <!--Multipart for upload-->
									<div class="form-group">
										<label>Tên phim *:</label>
										<input type="text" class="form-control" name="tenphim" value="<?php if(isset($edit)){echo $edit[0]["tenphim"];}else{echo"";} ?>" placeholder="">
									</div>
									<div class="form-group">
										<label>Thể loại *:</label>
										<input type="text" class="form-control" name="theloai" value="<?php if(isset($edit)){echo $edit[0]["theloai"];}else{echo"";} ?>" placeholder="">
                                    </div>
									<div class="form-group">
										<label>Đạo diễn:</label>
										<input type="text" class="form-control" name="daodien" value="<?php if(isset($edit)){echo $edit[0]["daodien"];}else{echo"";} ?>" placeholder="">
                                    </div>
									<div class="form-group">
										<label>Diễn viên:<span style="font-weight:200; font-style:italic;">VD: Hoài Linh, Chí Tài</span></label>
										<textarea name="dienvien" class="form-control" rows="3"><?php if(isset($edit)){echo $edit[0]["dienvien"];}else{echo"";} ?></textarea>
  									</div>                                  
									<div class="form-group">
										<label>Thời lượng *:</label>
										<input type="text" class="form-control" name="thoiluong" value="<?php if(isset($edit)){echo $edit[0]["thoiluong"];}else{echo"";} ?>" placeholder="">
                                    </div>
                                    <div class="form-group">
										<label>Mô tả:</label>
										<textarea name="mota" id="MoTa" value=""><?php if(isset($edit)){echo $edit[0]['mota'];}else{echo"";} ?></textarea>
                                    </div>
									<div class="form-group">
										<label>Link Trailer *:</label>
										<input type="text" class="form-control" name="trailer" value='<?php if(isset($edit)){echo $edit[0]['trailer'];}else{echo'';} ?>' placeholder="">
                                    </div>
                                    <div class="form-group">
									<label>Status *:</label>
									<select class="form-control" name="status">
										<?php
										if(isset($edit)){
											if($edit[0]['trangthai'] == "Đang chiếu"){
										?>
												<option>Đang chiếu</option>
												<option>Sắp chiếu</option>
												<option>Ngưng chiếu</option>
										<?php
										} else if ($edit[0]['trangthai'] == "Sắp chiếu"){
										?>
												<option>Sắp chiếu</option>
												<option>Đang chiếu</option>
												<option>Ngưng chiếu</option>
										<?php
										} else if ($edit[0]['trangthai'] == "Ngưng chiếu"){
										?>
												<option>Ngưng chiếu</option>
												<option>Đang chiếu</option>
												<option>Sắp chiếu</option>
										<?php
										}
										} else {
										?>
										<option>Đang chiếu</option>
										<option>Sắp chiếu</option>
										<option>Ngưng chiếu</option>
										<?php
										}
										?>
									</select>
  								    </div>
									  <div class="form-group">
										<label>Khởi chiếu *:</label>
										<input type="text" class="form-control" name="khoichieu" value="<?php if(isset($edit)){echo $edit[0]["khoichieu"];}else{echo"";} ?>" placeholder="">
                                    </div>
									<div style="border-bottom:2px solid black; padding-bottom:10px;" class="form-group">
										<label>Poster *: <span style="font-weight:200; font-style:italic; font-size:15px;">Yêu cầu kích thước 175x260</span></label><br/>
									<?php
									if(isset($edit)){
									?>
										<span style="font-weight:bold; font-style:italic; font-size:12px; ">Hiện tại:</span>
										<fieldset style="max-width:176px; padding-bottom:5px; border-bottom:1px solid gray;">
										<img src="<?php echo base_url()?>public/uploads/<?=$edit[0]['poster']?>">
										</fieldset>
										<input type="hidden" name="OldPoster" value="<?=$edit[0]['poster']?>">
									<?php
									}
									?>
										<span style="font-weight:bold; font-style:italic; font-size:12px;">Chọn mới:</span>
										<input type="file" name="Poster">
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