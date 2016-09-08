@include ('admin.template.partials.nav')

    <section class="section-login">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-tittle">Iniciar Sesion</h3>
        </div>

            <div class="panel-registro">
                <form class="form-horizontal" role="form" method="POST"
                      action="">
                    {!! csrf_field() !!}
                <div class="form-group" >
                    <label for="nombre">Username</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Introduce la Nombre">
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" placeholder="Introduce la Contraseña">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary  has-spinner" class="btn btn-success">Insertar</button>
                    <button type="submit" class="btn btn-primary  has-spinner" class="btn btn-success">Cancelar</button>
                </div>
            </form>
            </div>

        </div>
    </section>

@include ('admin.template.partials.footer')

</body>
</html>