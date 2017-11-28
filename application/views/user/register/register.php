<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Register</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Kullanıcı Adı</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Kullancı adınız">
					<p class="help-block">En az 4 Karakter, Sadece harf ve sayılar</p>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="E-mail Adresiniz">
				</div>
				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi Giriniz">
					<p class="help-block">En az 6 karakter</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Şifre Doğrulaması</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Şifrenizi Onaylayın">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Üyeliği tamamla">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->