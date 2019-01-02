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
								<th scope="col">Email<br/>thành viên</th>
								<th scope="col">Mật khẩu</th>
								<th scope="col">Tên<br/>thành viên</th>
								<th scope="col">Điện<br/>thoại</th>
								<th scope="col">Loại<br/>thành viên</th>
								<th scope="col">Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
						//for( $i=0 ; $i < count($list); $i++ ){ //Thuan thi STT=$i+1
						for( $i=0; $i < count($list); $i++ ){
						?>
							<tr>
								<th scope="row">
								<?=$i+1?>
                                </th>

								<td>
								<?=$list[$i]['email']?>
                                </td>
								<td>
								<?=$list[$i]['password']?>
                                </td>
								<td>
								<?=$list[$i]['uname']?>
                                </td>
								<td>
								<?=$list[$i]['phone']?>
                                </td>
								<td>
								<?=$list[$i]['type']?>
                                </td>
								<td>
								<a href="<?php echo base_url()?>admin/updateTV?email=<?=$list[$i]['email']?>"> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button>  </a>
								<a href="<?php echo base_url()?>admin/deleteTV?email=<?=$list[$i]['email']?>"> <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>  </a>
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