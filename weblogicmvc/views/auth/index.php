<div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">

            <div class="login-logo" style="align-content: center;">
                <img src="public/img/logo-black.png" width="210px" height="65px">
            </div>

            <form action="index.php?c=auth&a=login" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4" style="float: right;">
                    <button type="submit" class="btn btn-primary btn-block" >Iniciar Sessão</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.login-card-body -->
</div>