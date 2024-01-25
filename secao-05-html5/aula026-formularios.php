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

    </style>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 offset-md-2">
                <h1 class="display-6 mb-3 pb-3 border-bottom">- Formulários:</h1>
            </div>

            <div class="col-12 col-md-4 offset-md-4 my-3">

                <form action="#">
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" name="login" id="login" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>

                    <div>
                        <input type="submit" value="Logar" class="btn btn-primary">
                    </div>
                </form>

            </div>

        </div>
    </div>

</body>

</html>