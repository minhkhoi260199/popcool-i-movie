<!-- Page Content -->
<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="title"><?=$title?></h1>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">STT<br/>New</th>
								<th scope="col">ID<br/>Ve</th>
                                <th scope="col">Email</th>
								<th scope="col">Ngay<br/>Chieu</th>
                                <th scope="col">Thoi Gian<br/>Chieu</th>
                                <th scope="col">Phong<br/>Chieu</th>
                                <th scope="col">Ten<br/>Phim</th>
                                <th scope="col">Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
						//for( $i=0 ; $i < count($list); $i++ ){ //Thuan thi STT=$i+1
						for( $i=0; $i < count($listve); $i++ ){
						?>
							<tr>
								<th scope="row">
								<?=$i+1?>
                                </th>

								<td>
								<?=$listve[$i]['idve']?>
                                </td>
                                <td>
								<?=$listve[$i]['email']?>
                                </td>
								<td>
								<?=$listve[$i]['date']?>
								</td>
                                <td>
								<?=$listve[$i]['time']?>
								</td>
                                <td>
								<?=$listve[$i]['idphong']?>
								</td>
                                <td>
								<?=$listve[$i]['tenphim']?>
								</td>
                                <td>
								<a href="<?php echo base_url()?>admin/deleteVe?idve=<?=$listve[$i]['idve']?>"> <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>  </a>
                                </td>

							</tr>
						<?php
						}
						?>
						</tbody>
					</table>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->