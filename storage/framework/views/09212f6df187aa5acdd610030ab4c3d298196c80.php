<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href=" <?php echo e(asset('css/style.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <div class="row">
    <div class="col-md-4 col-md-offset-2">
        <h2>Tasks</h2>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="kotak_login">
                <div class="card-header "><?php echo e(__('Login here')); ?></div>

                <div class="card-body">
 
		<form>
			<div class="form-group row">
			<label for="username">Username</label>
			<input type="text" name="username" class="form_login" id="username" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

 			    <div class="form-group row ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('RememberMe')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

			<input type="submit" class="tombol_login" value="LOGIN">
 		
			<br/>
			<br/>
			<center>
				<a class="link" href="#">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>