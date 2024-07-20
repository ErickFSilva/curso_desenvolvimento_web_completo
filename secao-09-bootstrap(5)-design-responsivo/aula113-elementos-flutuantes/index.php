<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap-4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Bootstrap-5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 mb-3">
                <h1 class="display-4 text-center border-bottom text-bg-primary">Elementos Flutuantes</h1>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Elementos flutuantes:</h2>

                <div class="clearfix">
                    <div class="float-left text-bg-danger">Float left</div>
                    <div class="float-right text-bg-success">Float right</div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et repellat vero rem earum, harum soluta saepe temporibus perferendis consequatur nesciunt ducimus blanditiis quasi deleniti unde voluptate assumenda reprehenderit fugiat ad.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempore qui totam debitis placeat molestiae officia cupiditate pariatur, beatae neque tenetur similique suscipit inventore error doloremque nemo soluta, fuga minus?
                </p>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Posicionamento fixo:</h2>

                <article class="fixed-bottom">
                    <h2>Artigo fixadona base</h2>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nam blanditiis magni! Iusto molestiae, eveniet vitae possimus a aliquid delectus expedita ipsam aspernatur, ducimus hic voluptate placeat, voluptatibus distinctio neque!
                    </p>
                </article>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Float responsivo:</h2>

                <div class="clearfix">
                    <p class="float-sm-right">Tela &gt;= 576px (small)</p>
                </div>
                <div class="clearfix">
                    <p class="float-md-right">Tela &gt;=768px (Medium)</p>
                </div>
                <div class="clearfix">
                    <p class="float-lg-right">Tela &gt;=992px (Large)</p>
                </div>
                <div class="clearfix">
                    <p class="float-xl-right">Tela &gt;=1200px (Extra Large)</p>
                </div>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Colar no topo (sticky)</h2>

                <ul class="list-inline text-bg-warning sticky-top">
                    <li class="list-inline-item">Item 1</li>
                    <li class="list-inline-item">Item 2</li>
                    <li class="list-inline-item">Item 3</li>
                </ul>
            </div>

        </div>
    </div>

</body>

</html>