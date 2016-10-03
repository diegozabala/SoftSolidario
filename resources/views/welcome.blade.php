@include ('admin.template.partials.nav')

<div class="container">
    
<div class="row" style="margin-top:40px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<form role="form">
			<fieldset>
				<h2>Iniciar Sesión</h2>
				<hr class="colorgraph">
				<div class="form-group">
                   <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                   <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Recordarme</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Olvido Su Contraseña?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6" style="margin-top:20px">
						<a href="" class="btn btn-lg btn-primary btn-block">Registrarse</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>  
@include ('admin.template.partials.footer')