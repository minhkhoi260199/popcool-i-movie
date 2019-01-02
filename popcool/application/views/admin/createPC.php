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
										<label>Id Phong:</label>
										<input type="text" class="form-control" name="idphong" value="<?php if(isset($edit)){echo $edit[0]["idphong"];}else{echo"";} ?>" placeholder="">
									</div>
									<div class="form-group">
										<label>So Ghe:</label>
										<input type="number" class="form-control" name="soghe" value="<?php if(isset($edit)){echo $edit[0]["soghe"];}else{echo"";} ?>" min="1" max="30" placeholder="">
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