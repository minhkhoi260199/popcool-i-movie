<!-- Page Content -->
<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12" id="ChangePage">
					<h1 class="title">Danh mục phim</h1>
					<form action="indexPhim" method="post" style="margin-right=10px; float: right;">
					<label>Số hàng hiển thị:</label>
					<input type="number" id="numRow" name="numRow" value="<?php if(isset($_SESSION['numRow'])){ echo $_SESSION['numRow'];} else { echo 2;}?>" min="1" max="20">
					<button type="submit" name="luu" class="btn btn-primary mb-3">Go</button>
					</form>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">STT<br/>New</th>
								<th scope="col">Mã<br/>phim</th>
								<th scope="col">Tên phim</th>
								<th scope="col">Thể loại</th>
								<th scope="col">Thời<br/>lượng</th>
								<th scope="col">Đạo diễn</th>
								<th scope="col">Diễn<br/>viên</th>
								<th scope="col">Khởi<br/>chiếu</th>
								<th scope="col">Status</th>
								<th scope="col">Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
						//for( $i=(count($list)-1), $c=1 ; $i >= 0; $i-- , $c++ ){ // câu select 0 có DESC
						for( $i=0, $c=$page*$rowPerPage ; $i < count($list); $i++, $c++ ){ 
						?>
							<tr>
								<th scope="row">
								<?=$c+1?>
                                </th>

								<td>
								<?=$list[$i]['idphim']?>
                                </td>
								<td style="max-width:180px;">
								<?=$list[$i]['tenphim']?>
                                </td>
								<td style="max-width:100px;">
								<?=$list[$i]['theloai']?>
                                </td>
								<td>
								<?=$list[$i]['thoiluong']?>
                                </td>
								<td style="max-width:80px;">
								<?=$list[$i]['daodien']?>
                                </td>
								<td>
									<p>
										<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dienvien<?=$i?>" aria-expanded="false" aria-controls="collapseExample">
												V
										</button>
									</p>
									<div class="collapse" id="dienvien<?=$i?>">
										<div class="card card-body">
										<textarea class="form-control" rows="5" ><?=$list[$i]['dienvien']?></textarea>
										</div>
									</div>
                                </td>
								<td>
								<?=$list[$i]['khoichieu']?>
                                </td>
								<td>
								<?=$list[$i]['trangthai']?>
                                </td>


								<td>
								<a href="<?php echo base_url()?>admin/updatePhim?idPhim=<?=$list[$i]['idphim']?>"> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button>  </a>
								<a href="<?php echo base_url()?>admin/deletePhim?idPhim=<?=$list[$i]['idphim']?>"> <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>  </a>
                                </td>

							</tr>
						<?php
						}
						?>
						</tbody>
					</table>
					<?php if (isset($links)) { ?>
                	<?php echo $links ?>
            		<?php } ?>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->