<?php
    include "connection.php";
?>    

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
                        <li><a href="consulta.php">Voltar </a></li>
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
                <th>Editar</th>
              </tr>
            </thead> 
            </div>
      </div>
            <tbody>
                
 <?php       
    $buscar = $_POST['buscar'];
    $sql = mysql_query("SELECT * FROM produto WHERE mercadoria LIKE '%".$buscar."%'");   
    $row =mysql_num_rows($sql);
        If($row>0){
            while($linha = mysql_fetch_array($sql)){
                $idmercadoria   = $linha ['idmercadoria'];
                $mercadoria   = $linha ['mercadoria'];
                $tpmercadoria = $linha ['tpmercadoria'];
                $quantidade   = $linha ['quantidade'];
                $preco        = $linha ['preco'];
                $negocio      = $linha ['negocio'];
                    
                echo"<tr>";    
                   echo "<td>".@$idmercadoria;
                   echo "<td>".@$mercadoria;
                   echo "<td>".@$tpmercadoria;
                   echo "<td>".@$quantidade;
                   echo "<td>".@$preco;
                   echo "<td>".@$negocio;
                   echo "<td><a href=altera.php?id=$idmercadoria>Editar</a>";
                     "</tr>";
                }
                
        }else {
                          
                echo  "<strong><h2>PRODUTO NÃO ENCONTRADO!</h2></strong></br></br>";
                
        }
                ?>       
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
