<?php
    include 'banco.php';
    $conexao = Banco::conectar();
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Painel - Gestão </title>

        <!-- Font do Google -->
        <link href="https://fonts.googleapis.com/css?family=Jost&display=swap" rel="stylesheet"> 

        <!-- CSS BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="assets\argon-dashboard\bootstrap\css\bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets\argon-dashboard\bootstrap\css\bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="assets\argon-dashboard\bootstrap\css\bootstrap-reboot.css">

        <!-- CSS ARGON DASHBOARD -->
        <link rel="stylesheet" type="text/css" href="assets\argon-dashboard\argon.css">

        <!-- CSS Customizado -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        

        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/f678e665a3.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container pt-4">
            <!-- Card - FBANK -->
            <div class="col d-flex justify-content-center">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <a class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="assets\images\Fabio.jpg">
                                </a>
                                <div class="media-body">
                                    <span class="name mb-0 font-24 font-weight-bold  text-success">$ FBANK $</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card - Contas -->
            <div class="col d-flex justify-content-center">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <!-- Tabela -->
                            <table class="table table-bordered align-items-center">
                                <!-- Cabeçalho -->
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col" data-sort="Conta">Nº da Conta</th>
                                        <th scope="col" data-sort="Nome">Nome</th>
                                        <th scope="col" data-sort="Saldo">Saldo</th>
                                        <th scope="col" data-sort="Transferência">DOC/TED</th>
                                    </tr>
                                </thead>
                                <!-- Corpo -->
                                <tbody class="list">
                                <?php
                                    $sql = 'SELECT * FROM contas';
                                    foreach($conexao->query($sql)as $row){
                                        $modal = explode(" ",$row['nome'],-2);
                                        $str = implode($modal);
                                        echo '
                                        <tr>
                                            <td class="align-items-center">
                                                <span class="name mb-0 text-sm ">'. $row['conta'] . '</span>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <div class="media align-items-center">
                                                        <a class="avatar rounded-circle mr-3">
                                                            <img alt="Image placeholder" src="'. $row['foto'] .'">
                                                        </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">'. $row['nome'] . '</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-self-center">
                                                <span>R$ ' . $row['valor'] . '</span>                 
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-md btn-outline-warning" data-toggle="modal" data-target="#depos-'. $str .'">
                                                    <i class="fas fa-arrow-right"></i>
                                                    <span>Depositar</span>
                                                </button>

                                                <button type="button" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#trans-'. $str .'">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Transferência</span>
                                                </button>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                    Banco::desconectar();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                <div class="row">
                                    <div class="media-body">
                                        <span class="name mb-0 font-24 font-weight-bold text-success">$ Calcular Rendimento $</span>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <form action="" method="post" name="rendimento">
                                        <label for="valor">Valor em dinheiro:</label>
                                        <input class="form-control" type="text" name="valor" placeholder="R$"></input>
                                        <div class="col d-flex justify-content-center">
                                            <button type="submit" class="btn bg-gradient-primary btn-block text-white m-3" name="rendimento">Calcular</button>
                                        </div>
                                    </form>
                                    <?php
                                    if(isset($_POST['rendimento'])){
                                        $valor = $_POST["valor"];
                                        $calculo = $conexao->query('SELECT rendimento('.$valor.')')->fetch(PDO::FETCH_ASSOC);
                                        $rendimento = implode(', ', $calculo);
                                        echo '<label for="rendimento-mes">Rendimento ao mês:</label>';
                                        echo '<span class="form-control mt-1" name="rendimento-mes">R$ '.$rendimento.'</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </div>
            </div>

            <?php
                $sql = 'SELECT * FROM contas';
                foreach($conexao->query($sql)as $row)
                {
                    $modal = explode(" ",$row['nome'],-2);
                    $str = implode($modal);
                    echo '
                    <form action="deposito.php" method="post">
                        <div class="modal fade" id="depos-'. $str .'">
                            <div class="modal-dialog modal-dialog-centered modal">
                                <div class="modal-content modal-danger">
                                    <!-- Modal - Cabeçalho -->   
                                    <div class="modal-header bg-gradient-warning font-weight-bold">
                                        <div class="mt-1 ">
                                            <i class="fas fa-arrow-right text-white"></i>
                                            <span class="modal-title ml-3">Depositar</span>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <!-- Modal - Corpo -->
                                    <div class="modal-body bg-white mt-0">
                                        <!-- DE -->
                                        <div class="py-2 text-left">
                                            <div class="col">
                                                <div class="media align-items-center pt-3">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="'. $row['foto'] .'">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">'. $row['nome'] .'</span>
                                                        <br>
                                                        <input type="hidden" name="conta" value="'. $row['conta'].'">
                                                        <span class="name mb-0 text-sm">Conta: '. $row['conta'] .'</span>
                                                        <br>
                                                        <input type="hidden" name="saldo" value="'. $row['valor'].'">
                                                        <span class="name mb-0 text-muted font-14"> Saldo: '. $row['valor'] .'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VALOR -->
                                        <div class="py-2">
                                            <span class="font-weight-bold">Valor</span>
                                            <div class="media pt-3">
                                                <div class="col">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control" type="number" name="valor" placeholder="R$">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botão - Depositar -->
                                    <div class="modal-footer pt-0 mt-0">
                                        <div class="col d-flex justify-content-center">
                                            <button type="submit" class="btn bg-gradient-warning text-white">Depositar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    ';
                }
                Banco::desconectar();
            ?>
            <?php
                $sql = 'SELECT * FROM contas';
                foreach($conexao->query($sql)as $row)
                {
                    $modal = explode(" ",$row['nome'],-2);
                    $str = implode($modal);
                    echo '
                    <form action="transferencia.php" method="post">
                        <div class="modal fade" id="trans-'. $str .'">
                            <div class="modal-dialog modal-dialog-centered modal">
                                <div class="modal-content modal-danger">
                                    <!-- Modal - Cabeçalho -->   
                                    <div class="modal-header bg-gradient-success font-weight-bold">
                                        <div class="mt-1 ">
                                            <i class="fas fa-exchange-alt text-white"></i>
                                            <span class="modal-title ml-3">Realizar tranferência</span>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <!-- Modal - Corpo -->
                                    <div class="modal-body bg-white mt-0">
                                        <!-- DE -->
                                        <div class="py-2 text-left">
                                            <span class="font-weight-bold">De</span>
                                            <div class="col">
                                                <div class="media align-items-center pt-3">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="'. $row['foto'] .'">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">'. $row['nome'] .'</span>
                                                        <br>
                                                        <input type="hidden" name="pagador" value="'. $row['conta'].'">
                                                        <span class="name mb-0 text-sm">Conta: '. $row['conta'] .'</span>
                                                        <br>
                                                        <span class="name mb-0 text-muted font-14"> Saldo: '. $row['valor'] .'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- PARA -->
                                            <div class="py-2">
                                                <span class="font-weight-bold">Númrero da Conta:</span>
                                                <div class="media pt-3">
                                                    <div class="col m-0">
                                                        <div class="form-group mb-0">
                                                            <input class="form-control" type="number" name="favorecido" value="000">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- VALOR -->
                                            <div class="py-2">
                                                <span class="font-weight-bold">Valor</span>
                                                <div class="media pt-3">
                                                    <div class="col">
                                                        <div class="form-group mb-0">
                                                            <input class="form-control" type="number" name="valor" placeholder="R$">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <!-- Botão - Transferir -->
                                    <div class="modal-footer pt-0 mt-0">
                                        <div class="col d-flex justify-content-center">
                                            <button type="submit" class="btn bg-gradient-success text-white">Transferir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    ';
                }
                Banco::desconectar();
            ?>
        </div>

        <!-- JQuery 3.5.2-->
        <script src="assets\argon-dashboard\jquery\jquery-3.5.2.js"></script>

        <!-- JS BOOTSTRAP -->
        <script src="assets\argon-dashboard\bootstrap\js\bootstrap.js"></script>

        <!-- JS ARGON DASHBOARD -->
        <script src="assets\argon-dashboard\argon.js"></script>

    </body>