<div class="container">
    <div class="row">
        <div class="col">
            <!-- Modal -->
            <div class="modal fade text-azul-osc" id="modalTest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formulario" action="index.php" method="post">
                                <div class=" h-l">
                                    <label for="exampleInputEmail1">Correo electrónico</label>
                                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!-- <small id="emailHelp" class="form-text text-muted">Ingrese su correo.</small> -->
                                </div>
                                <div class="h-l">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                    <!-- <small id="emailHelp" class="form-text text-muted">Ingrese su contraseña.</small> -->
                                </div>
                                <div class="form-check h-l">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                </div>
                                <button type="submit" class="btn btn-azul text-light">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>