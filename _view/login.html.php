<h1><?php echo t($contr->pageTitle) ?></h1>

<?php if ( !empty($view->error) ): ?>
<p class="message error"><?php echo $view->error ?></p>
<?php endif ?>

<?php if ( !empty($view->notice) ): ?>
<p class="message notice"><?php echo $view->notice ?></p>
<?php endif ?>

<form id="formLogin" method="post" action="./<?php echo !empty($model->GET_raw['ref']) ? '?ref=' . rawurlencode($model->GET_raw['ref']) : '' ?>">
	<fieldset>
		<dl>
			<dt><label for="username"><?php echo t('Username') ?></label></dt>
			<dd>
				<input type="text" class="text" name="username" id="username" value="<?php echo $model->POST_html_safe['username'] ?>"/>
			</dd>
		</dl>
		<dl>
			<dt><label for="password"><?php echo t('Password') ?></label></dt>
			<dd>
				<input type="password" class="password" name="password" id="password" value=""/>
			</dd>
		</dl>
	</fieldset>
	<fieldset>
		<dl>
			<dt><br/></dt>
			<dd>
				<input type="hidden" name="auth_token" value="<?php echo $model->authToken ?>"/>

				<input type="submit" class="button" name="form-submit" id="form-submit" value="<?php echo t('Login') ?>"/>
			</dd>
		</dl>
	</fieldset>
</form>

<script type="text/javascript">
	<!-- /* <![CDATA[ */
	// Focus the username field
	$(function() {
		$('#username').focus();
	});
	/* ]]> */ -->
</script>