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
								<th scope="col">ID<br/>Suat Chieu</th>
                                <th scope="col">Date</th>
								<th scope="col">Time</th>
								<th scope="col">ID<br/>Phong</th>
                                <th scope="col">ID<br/>Phim</th>
                                <th scope="col">Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
						//for( $i=0 ; $i < count($list); $i++ ){ //Thuan thi STT=$i+1
						for( $i=0; $i < count($listsuatchieu); $i++ ){
						?>
							<tr>
								<th scope="row">
								<?=$i+1?>
                                </th>

								<td>
								<?=$listsuatchieu[$i]['id_sc']?>
                                </td>
								<td>
								<?=$listsuatchieu[$i]['date']?>
                                </td>
								<td>
								<?=$listsuatchieu[$i]['time']?>
                                </td>
                                <td>
								<?=$listsuatchieu[$i]['idphong']?>
                                </td>
                                <td>
								<?=$listsuatchieu[$i]['tenphim']?>
                                </td>
								<td>
								<a href="<?php echo base_url()?>admin/updateSC?id_sc=<?=$listsuatchieu[$i]['id_sc']?>"> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button>  </a>
								<a href="<?php echo base_url()?>admin/xoaSC?id_sc=<?=$listsuatchieu[$i]['id_sc']?>"> <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>  </a>
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