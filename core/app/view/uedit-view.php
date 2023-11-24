<?php
    if(!isset($_SESSION['user_id'])) Core::redir("./");

    if(isset($_GET["opt"]) && $_GET["opt"] == "update"){
        $user = UserData::getById($_GET['id']);
        ?>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Editar usuario</h1>
                    <form class="form-horizontal" method="post"action="./?action=users&opt=update" role="form">

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-md-6">
                            <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="nombre" placeholder="<?php echo $user->nombre; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
                            <div class="col-md-6">
                            <input type="text" name="apellido" required class="form-control" id="apellido" aria-describedby="apellido" placeholder="<?php echo $user->apellido; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
                            <div class="col-md-6">
                            <input type="text" name="username" required class="form-control" id="username" aria-describedby="username" placeholder="<?php echo $user->username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Contraseña</label>
                            <div class="col-md-6">
                            <input type="password" name="password" required class="form-control" id="password" aria-describedby="password" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                            <div class="col-md-6">
                            <input type="text" name="email" required class="form-control" id="email" aria-describedby="email" placeholder="<?php echo $user->email; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Editar usuario</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
      



<?php
        }
?> 