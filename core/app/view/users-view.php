<?php 

if(!isset($_SESSION['user_id'])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "all"){
	$listaUsuarios = UserData::getAllbyKind();
	//var_dump($listaUsuarios);
}
?>
<div>
    <a href="./?view=add&opt=add" class="btn btn-primary">Agregar usuario</a>
</div>
<?php 
	if(count($listaUsuarios)>0){
 ?>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">Nombre</td>
                <td scope="col">Username</td>
                <td scope="col">Email</td>
            </tr>
            </thead>
            <tbody>

            	<?php 
            	foreach($listaUsuarios as $key => $row){
            	 ?>
            	 <tr>
            	    <td><?php echo $row->id; ?></td>
            	    <td><?php echo $row->nombre; ?></td>
					<td><?php echo $row->apellido; ?></td>
            	    <td><?php echo $row->username; ?></td>
            	    <td><?php echo $row->email; ?></td>
					<td><a href="./?view=uedit&opt=update&id=<?php echo $row->id; ?>" class="btn btn-warning">Editar</a></td>
            	</tr>
            	<?php 
            	}
            	 ?>
            	
            </tbody>
        </table>
    </div>

<?php
}
 ?>