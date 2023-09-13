<?php foreach($dataprofile as $datapro) {} ?>
<div class="container" id="kontak">
	<div class="content-header">
		<h2 class="text-center text-white">Kontak</h2>
	</div>
	<div class="content-body">
		<div class="row">
			<div class="col-lg-7">
				<div id="map">
				
				</div>
			</div>
			<div class="col-lg-5">
				<table border="0" class="table-contact">
					<?php 
						foreach($kontak as $datakontak) {
					?>
					<tr class="text-white">
						<td width="150"><?php echo $datakontak['nm_kontak']; ?></td>
						<td>:</td>
						<td>
							<?php echo $datakontak['kontak']; ?>
						</td>
					</tr>
					<?php 
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
	<footer class="footer">
		<div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 
			  <?php
				$date = date("Y");
				$now = "2019";
				
				if($date = $now) {
					echo $date;
				}
				else {
					echo "2019 - ".$date;
				}
			  ?>
			  
			  <a href="<?php echo base_url(); ?>" class="font-weight-bold ml-1">Anugraf PS</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link">St. Aisyah</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>" class="nav-link">Beranda</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php#produk" class="nav-link">Produk</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php#kontak" class="nav-link">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
		</div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="<?php echo base_url(); ?>/assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?php echo base_url(); ?>/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?php echo base_url(); ?>/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script>
	function myMap() {
		var mapOptions = {
			center: new google.maps.LatLng(<?php echo $datapro['latitude']; ?>,<?php echo $datapro['longitude']; ?>),
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.TERRAIN
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		
		var marker=new google.maps.Marker({
			position: new google.maps.LatLng(<?php echo $datapro['latitude']; ?>,<?php echo $datapro['longitude']; ?>),
			map: map
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXBfv2JfCzAB2HjAxDOP0LSBnDHdJ17Ik&callback=myMap"></script>
  
</body>

</html>