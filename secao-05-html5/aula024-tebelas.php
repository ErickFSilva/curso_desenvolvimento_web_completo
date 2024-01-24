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
        .tot-prods {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-8">
                <h1 class="display-6 mb-3 pb-3 border-bottom">- Tabelas:</h1>
            </div>

            <div class="col-12 col-md-8 my-3">

                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Preço</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>001</td>
                            <td>Notebook</td>
                            <td>R$ 2.500,98</td>
                        </tr>

                        <tr>
                            <th>002</td>
                            <td>Tablet</td>
                            <td>R$ 999,98</td>
                        </tr>

                        <tr>
                            <th rowspan="2">Desconto</td>
                            <td colspan="2">Cupom<sup>(1)</sup>: R$ 10,00</td>
                        </tr>

                        <tr>
                            <td colspan="2">Cupom<sup>(1)</sup>: R$ 12,00</td>
                        </tr>

                        <tr>
                            <td>Total:</th>
                            <td colspan="2">R$ 3.500,96</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="caixa col-12 col-md-8 my-3">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">001</td>
                            <td>Notebook</td>
                            <td>R$ 2.500,98</td>
                        </tr>

                        <tr>
                            <th scope="row">002</td>
                            <td>Tablet</td>
                            <td>R$ 999,98</td>
                        </tr>

                        <tr>
                            <th scope="row" rowspan="2">Desconto</td>
                            <td colspan="2">Cupom<sup>(1)</sup>: R$ 10,00</td>
                        </tr>

                        <tr>
                            <td colspan="2">Cupom<sup>(2)</sup>: R$ 12,00</td>
                        </tr>

                        <tr>
                            <td class="bg-dark text-white">Total:</th>
                            <td colspan="2" class="bg-dark text-white tot-prods">R$ 3.500,96</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</body>

</html>