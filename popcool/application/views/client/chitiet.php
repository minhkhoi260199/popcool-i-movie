<div class="main">
<div class="Farticle">
        <h1>Chi Tiết Phim</h1><hr>
        <div style="min-height:400px;">
    <?php 
if(isset($detail[0]['tenphim'])){
    ?>
         <img class="Fimg1" src="<?php echo base_url()?>public/uploads/<?=$detail[0]['poster']?>"/>
        
        <ul class="Finfo">
            <li><b><?=$detail[0]['tenphim']?></b></li>
            <li>Đạo diễn: <?=$detail[0]['daodien']?></li>
            <li>Diễn viên: <?=$detail[0]['dienvien']?></li>
            <li>Thể loại: <?=$detail[0]['theloai']?></li>
            <li>Khởi chiếu: <?=$detail[0]['khoichieu']?></li>
            <li>Thời lượng: <?=$detail[0]['thoiluong']?> phút</li>
        </ul>
        <ul class="Finfo">
        <li>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning Fbtn1 active" data-toggle="modal" data-target="#exampleModal">
                Xem trailer
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Trailer Film</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?=$detail[0]['trailer']?>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-danger Fbtn1 active" data-toggle="modal" data-target="#MiniLichChieu">
                Mua vé
              </button>

              <div class="modal fade" id="MiniLichChieu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Chọn xuất chiếu</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="dvarticle">
                          <div class="ministick">
                              <input type="submit" id="date1" class="dvbtn" value="Mon">
                              <input type="submit" id="date2" class="dvbtn" value="Tue">
                              <input type="submit" id="date3" class="dvbtn" value="Wed">
                              <input type="submit" id="date4" class="dvbtn" value="Thu">
                              <input type="submit" id="date5" class="dvbtn" value="Fri">
                              <input type="submit" id="date6" class="dvbtn" value="Sat">
                              <input type="submit" id="date7" class="dvbtn" value="Sun">
                          </div>
                          <hr>
                          <div id="suatchieu">
                          </div>
                    </div>          
                    </div> 
                      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                              <?php for($i=0; $i<8; $i++){
                              ?>
                      <script type="text/javascript">
                              // Ajax post
                              $(document).ready(function(){
                                  $('#date<?= $i?>').click(function(event) {
                                  event.preventDefault();
                                  var date = $("#date<?= $i?>").val();
                                  $.ajax({
                                      type: "POST",
                                      url: "<?php echo base_url('client/showLichChieuMini'); ?>",
                                      dataType: 'html',
                                      async: 'true',
                                      data: {"date": date},
                                      success: function(data) {
                                          if (data)
                                              {
                                                  $('#suatchieu').html(data);
                                              }
                                      }
                                  });
                                  });
                              });
                      </script>
                          <?php
                          }
                          ?>        
                  </div>
                </div>
              </div>
              
            </li>
        </ul>
        <div class="Fdetail">
            <b><center>Nội dung phim</center></b><br/>
            <?=$detail[0]['mota']?>
        </div>
<?php
}else{
?>
  <script>
    alert('Phim không khả dụng !');
    window.location.href='<?php echo base_url(); ?>';
  </script>
<?php
}?>
    </div>

</div>
