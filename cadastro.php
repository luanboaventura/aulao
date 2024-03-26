<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Cadastre-se</h1>
            
<form action="cad.php" method="post">

  <div class="mb-3">
    <label for="nome" class="form-label">Nome completo</label>
    <input type="text" class="form-control" name="nome">

    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco">

    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone">

    <label for="data" class="form-label">Data de nascimento</label>
    <input type="date" class="form-control" name="data">

    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="email">

    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">

    <p></P>

    <input type="submit" class="btn btn-success">

            </div>  

        </form>
        <a href="index.php" class="btn btn-info">Voltar a tela inicial</a>

        </div>
    </div>
 </div>
    



























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>