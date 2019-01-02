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
										<label>Email:</label>
										<input type="email" class="form-control" name="email" value="<?php if(isset($edit)){echo $edit[0]["email"];}else{echo"";} ?>" placeholder="">
									</div>
									<div class="form-group">
										<label>Password:</label>
										<input type="password" class="form-control" name="password" value="<?php if(isset($edit)){echo $edit[0]["password"];}else{echo"";} ?>" placeholder="">
                                    </div>
									<div class="form-group">
										<label>Ten nguoi dung:</label>
										<input type="text" class="form-control" name="uname" value="<?php if(isset($edit)){echo $edit[0]["uname"];}else{echo"";} ?>" placeholder="">
                                    </div>                              
									<div class="form-group">
										<label>Dien thoai:</label>
										<input type="text" class="form-control" name="phone" value="<?php if(isset($edit)){echo $edit[0]["phone"];}else{echo"";} ?>" placeholder="">
                                    </div>
								
                                    <div class="form-group">
									<label>Type:</label>
									<select class="form-control" name="type">
										<?php
										if(isset($edit)){
											if($edit[0]['type'] == ""){
										?>
												<option selected><?php echo $edit[0]["type"];?></option>
										<?php
											}
										} else {
										?>
											<option></option>
										<?php
										}
										?>
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