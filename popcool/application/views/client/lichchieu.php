<div class="main">

  <!-- End Slider Area -->
      <!-- Page Content -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="TieuDe">LỊCH CHIẾU</h1><hr>
        </div>
      </div>

    <!-- Body -->
   
    <div class="article">
        <div class="stick">
            <input type="submit" id="date1" class="btn2 active-btn" value="Mon">
            <input type="submit" id="date2" class="btn2" value="Tue">
            <input type="submit" id="date3" class="btn2" value="Wed">
            <input type="submit" id="date4" class="btn2" value="Thu">
            <input type="submit" id="date5" class="btn2" value="Fri">
            <input type="submit" id="date6" class="btn2" value="Sat">
            <input type="submit" id="date7" class="btn2" value="Sun">
        </div>
        <div id="suatchieu" style="min-height:400px;">
            <?= $firstSee ?>
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
                    url: "<?php echo base_url('client/showLichChieu'); ?>",
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
<!-- /End body -->
