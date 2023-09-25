<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body style="margin: 20px;">
    <h2 class="text-center mb-1 mt2"> CADASTRO DE PESSOA </h2>
        <form action="processa_cadastro.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="nomeUser">Nome
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomeUser" required placeholder="Digite seu nome">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="telUser">Telefone
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="telUser" required placeholder="Digite seu telefone">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="emailUser">Email
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="emailUser" required placeholder="Digite seu email">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="senhaUser">Senha
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="senhaUser" required placeholder="Digite sua senha">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="sobrenomeUser">sobrenome
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sobrenomeUser" required placeholder="Digite seu sobrenome">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 font-weight-bold col-form-label text-right" for="nascimentoUser">Nascimento
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="nascimentoUser" required placeholder="Digite sua data de nascimento">
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 font-weight-bold col-form-label text-right" for="radiooSexo">radiooSexo
                    <div class="col-sm-10">
                        <input class="btn tn-primary" type="radio" name="generoUser" value="F">Feminino
                        <input class="btn tn-primary" type="radio" name="generoUser" value="M">Masculino
                        <input class="btn tn-primary" type="radio" name="generoUser" value="O">Prefiro não dizer
                    </div>              

            </div>
            <div class="text-right">
                <input class="btn btn-primary" type="submit" name="btnSalvar" value="Salvar">
            </div>
</form>
</body>
</html>


