<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seção 05 - HTML5</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- CSS -->
    <style type="text/css">
        body {
            background-color: #efefef;
        }

        .form-control,
        .form-check-input,
        .form-select,
        textarea {
            border-color: darkgrey;
        }

        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <h1 class="display-6 p-4 border-bottom">- Formulário:</h1>
            </div>

            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 p-4">

                <form action="aula027-componentes-formularios.php" method="get">
                    <!-- Usuário -->
                    <fieldset class="mb-4">
                        <legend>Usuário</legend>

                        <div class="form-floating mb-3">
                            <input type="text" name="cad-login" id="cad-login" class="form-control" placeholder="Cadastrar usuário">
                            <label for="cad-login" class="form-label text-secondary">Cadastrar usuário</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" name="cad-senha" id="cad-senha" class="form-control" placeholder="Cadastrar senha">
                            <label for="cad-senha" class="form-label text-secondary">Cadastrar senha</label>
                        </div>
                    </fieldset>

                    <!-- Sexo -->
                    <fieldset class="mb-4">
                        <legend>Sexo:</legend>

                        <input type="radio" name="cad-sexo" value="masc" id="cad-sexo-masc" class="form-check-input">
                        <label for="cad-sexo-masc" class="form-label me-3">Masculino</label>

                        <input type="radio" name="cad-sexo" value="femi" id="cad-sexo-femi" class="form-check-input">
                        <label for="cad-sexo-femi" class="form-label">Feminino</label>
                    </fieldset>

                    <!-- Interesses -->
                    <fieldset class="mb-4">
                        <legend>Interesses</legend>

                        <input type="checkbox" name="cad-futebol" id="cad-futebol" class="form-check-input">
                        <label for="cad-futebol" class="form-label me-3">Futebol</label>

                        <input type="checkbox" name="cad-carros" id="cad-carros" class="form-check-input">
                        <label for="cad-carros" class="form-label me-3">Carros</label>

                        <input type="checkbox" name="cad-program" id="cad-program" class="form-check-input">
                        <label for="cad-program" class="form-label">Programação</label>
                    </fieldset>

                    <!-- Estado -->
                    <fieldset class="mb-4">
                        <legend>Estado</legend>

                        <select class="form-select" name="estado" id="estado">
                            <option></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </fieldset>

                    <!-- Observações -->
                    <fieldset class="mb-4">
                        <legend>Observações</legend>

                        <textarea class="form-control"></textarea>
                    </fieldset>

                    <!-- Cadastrar -->
                    <div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    </div>

</body>

</html>