<h3>Editar Usuário</h3>

<?php

$sql = "select * from users where id=" .$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar" method="post">
    <input type= "hidden" name= "acao" value= "editar">
    <input type= "hidden" name= "id" value= "<?php
    print $row->id; ?>">


    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" requered>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="birth" value="<?php print $row->birth; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Bio</label>
        <input type="text" name="bio" value="<?php print $row->bio; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="type" value="<?php print $row->type; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="date" value="<?php print $row->date; ?>"class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Avatar</label>
        <input type="text" name="avatar" value="<?php print $row->avatar; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <input type="text" name="status" value="<?php print $row->status; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <button type= "submit" class= "btn btn-primary">Enviar</button>
    </div>

</form>
