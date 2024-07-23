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
                <h2 class="h4 my-3">Colar no topo (sticky)</h2>

                <ul class="list-inline text-bg-warning sticky-top">
                    <li class="list-inline-item">Item 1</li>
                    <li class="list-inline-item">Item 2</li>
                    <li class="list-inline-item">Item 3</li>
                </ul>
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sit tempore, ad cumque minima dolorum omnis a tempora ut veritatis quibusdam dignissimos! Ea eos veritatis distinctio maxime suscipit laborum sed.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique molestias vero qui alias id tempora ipsam, dolor blanditiis amet non est beatae aliquid ullam, quidem recusandae sint, sit reiciendis nulla.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione consequatur animi provident? Totam voluptatem, magnam a eligendi rem reprehenderit, magni quia qui quidem voluptatibus, adipisci vel architecto at ipsam.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde dolorem odit laborum adipisci dignissimos maiores voluptatem est non, necessitatibus illo, harum beatae molestias minima doloremque porro sapiente voluptatum exercitationem! Doloribus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nisi ad, obcaecati sint praesentium quia omnis reprehenderit facere neque nulla rerum dolore quibusdam explicabo illum quasi commodi mollitia, esse expedita?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo odio ea, delectus distinctio inventore, consequatur soluta minus est sunt vitae culpa, nemo ullam et. Amet deserunt minima quaerat ullam pariatur!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis iure, dolor repellat est, alias distinctio aliquid, possimus laborum voluptas aliquam? Iste accusantium quaerat tempore molestiae aliquid quisquam odio iusto!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam libero minus modi molestias nobis enim, atque autem optio animi amet fugit quam assumenda vitae odio tempora et! Cum, debitis!
                </p>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Posicionamento fixo:</h2>

                <div class="row">
                    <article class="fixed-bottom col-5 ms-4 ps-5">
                        <h2>Artigo fixado na base</h2>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nam blanditiis magni! Iusto molestiae, eveniet vitae possimus a aliquid delectus expedita ipsam aspernatur, ducimus hic voluptate placeat, voluptatibus distinctio neque!
                        </p>
                    </article>
                </div>
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

        </div>
    </div>

</body>

</html>