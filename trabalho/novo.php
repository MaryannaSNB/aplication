<h3>Novo Usuário</h3>

<form action="?page=salvar" method="post">
    <input type= "hidden" name= "acao" value= "cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="birth" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bio</label>
        <input type="text" name="bio" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="type" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="date" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Avatar</label>
        <input type="text" name="avatar" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <input type="text" name="status" class="form-control">
    </div>
    <div class="mb-3">
        <button type= "submit" class= "btn btn-primary">Enviar</button>
    </div>
</form>
