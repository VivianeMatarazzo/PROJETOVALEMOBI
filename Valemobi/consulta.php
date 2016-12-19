
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" Viviane"">
    <link rel="icon" href="../../favicon.ico">
    </br>
   
    <title>Consulta de Mercadorias</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 </head>

<body role="document">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Negociação de mercadorias</a>
            </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="homepage.php">Voltar </a></li>
                    </ul>
                </div>
      </div>
    </nav>
    
        <div class= "container theme-showcase" role="main"> 
        <div class="page-header"><h1>Consulta</h1></div>
        <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Codigo Mercadoria</th>
                <th>Mercadoria</th>
                <th>Tipo de Mercadoria</th>
                <th>Quantidade</th>
                <th>Preço R$</th>
                <th>Negocio</th>                
              </tr>
            </thead>
     
       <form name="serachform" method="post" action="consultando.php">
   
         <div class="form-group">
               <div class="col-sm-offset-0 col-sm-12">
                <button type="submit" class="btn btn-success">CONSULTAR</button>
               </div>
         </div> </br> </br> 
 
           <div class="form-group">
               <label for="inputEmail3" class="col-sm-0 control-label"></label>
               <div class="col-sm-5">
                <input type="text" class="form-control" name="buscar" placeholder="Digite o nome da mercadoria">
               </div>
           </div></br> </br>    
       </form>
</body>
        <tbody>
        </tbody>
           </body>
          </table>
        </div>
      </div>

 </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>    

</html>
