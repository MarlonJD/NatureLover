<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
	  	<?php if ($_GET['a'] == 0 ) { ?>
				  M.toast({html: 'Zaten kayıtlısın, bazen abartmıyo musun?!', classes: 'rounded', displayLength: 3000});
          M.toast({html: 'Zaten kayıtlısın, bazen abartmıyo musun?!', classes: 'rounded', displayLength: 4000});
          M.toast({html: '??!', classes: 'rounded', displayLength: 5000});
          M.toast({html: '?!', classes: 'rounded', displayLength: 4000});

			<?php } elseif ($_GET['a'] == 1) { ?>
          M.toast({html: 'Kaydını aldık, ponçik. Biz seni ararız', classes: 'rounded'});
      <?php } ?>
</script>
<footer class="page-footer white">
    <div class="container">
      <div class="row">
        <div class="col l6 s12 center">
          <h5 class="black-text">Doğaktif</h5>
          <p class="black-text text-lighten-4">
          DOĞAYA DAİR HERŞEY <br />
          TÜM HAKLARI SAKLIDIR. <br />
          KAR AMACI GÜTMEYEN BİR TOPLULUKTUR. <br />
          KARABÜK/TÜRKİYE <br />        
        </p>
        </div>
        <div class="col l6 s12 center">
			<img class="responsive-img" style="max-height: 200px;" src="<?php echo base_url('assets/img/logo.png');?>">
        </div>
      </div>
    </div>
    <div class="footer-copyright light-blue lighten-1">
      <div class="container">
      Doğaktif 0.58 Beta, Kodlama ve Tasarım <a class="orange-text text-lighten-3" href="http://www.mburakkarahan.com">Burak Karahan</a>
      </div>
    </div>
  </footer>

	<!-- js -->

	<!-- js -->


  </body>
  </html>