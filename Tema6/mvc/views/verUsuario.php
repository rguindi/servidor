<p class="text-bg-danger text-center ">

    Bienvenidos a la pagina Ver USsuario
</p>

<?php
if(isset($sms)){
    echo $sms;
}

?>
<p>CodUsuario: <?php echo $_SESSION['usuario']->codUsuario?></p>
<p>DescUsuario: <?php echo $_SESSION['usuario']->descUsuario?></p>
<p>Perfil: <?php echo $_SESSION['usuario']->perfil?></p>
<p>FechaUltimaConexion: <?php echo $_SESSION['usuario']->fechaUltimaConexion?></p>

<form action="" method="post">
    <input type="submit" name="userEditar" value="editar">
    <input type="submit" name="cambiapass" value="Cambiar contraseña">
</form>
