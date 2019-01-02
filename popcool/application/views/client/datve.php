<div class="main">

<div class="Farticle">
        <h1>Đặt vé</h1><hr>
    <div style="min-height:400px;">
    <?php 
if(isset($suatchieu[0]['poster'])){
    ?>
         <img class="Fimg1" src="<?php echo base_url()?>public/uploads/<?=$suatchieu[0]['poster']?>"/>
        
        <ul class="Finfo">
            <li><b><?=$suatchieu[0]['tenphim']?></b></li>
            <li>Suất chiếu: <?=$suatchieu[0]['time']?> <?=$suatchieu[0]['date']?></li>            
            <li>Đơn giá: 90.000đ</li>
        </ul>
        <form action="bookTicket" method="post" role="form"> <!--Multipart for upload-->
            <div id="thongbao" style="">
                <label>Số lượng</label>
                <input type="number" name="num" id="numBook" min="1" value="1">
                <input type="submit" id="bookandpay" name="luu" class="btn btn-primary mb-3" value="Thanh toán">
            </div>
        </form>
        <?php
}else{
?>
  <script>
    alert('Xuất chiếu không khả dụng !');
    window.location.href='<?php echo base_url(); ?>';
  </script>
<?php
}?>
    </div>
    
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
            // Ajax post
            $(document).ready(function(){
                $('#bookandpay').click(function(event) {
                event.preventDefault();
                 var num = $("#numBook").val();
                 $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('client/booking'); ?>",
                    dataType: 'html',
                    async: 'true',
                    data: {"numBook": num},
                    success: function(data) {
                        if (data)
                            {
                                $('#thongbao').html(data);
                            }
                    }
                 });
                });
            });
    </script>
