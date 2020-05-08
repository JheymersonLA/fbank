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
            <div class="col d-flex justify-content-center">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-items-center">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th scope="col" data-sort="Nome">Nome</th>
                                            <th scope="col" data-sort="Saldo">Saldo</th>
                                            <th scope="col" data-sort="Transferência">DOC/TED</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="assets\images\Giu.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Giulliany Lima Bezerra</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                R$ 1000
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#modal-giu">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Transferir</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="assets\images\Jheymerson.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Jheymerson Lira Aranha</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                R$ 1000
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#modal-jheymerson">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Transferir</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="assets\images\Klederson.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Klederson Rocha Soares</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                R$ 1000
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#modal-klederson">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Transferir</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="assets\images\Carol.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Stefani Carol Almeida</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                R$ 1000
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-md btn-outline-success" data-toggle="modal" data-target="#modal-stefani">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Transferir</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-giu">
                <div class="modal-dialog modal-dialog-centered modal">
                    <div class="modal-content modal-danger">        
                        <div class="modal-header bg-gradient-success font-weight-bold">
                            <div class="mt-1 ">
                                <i class="fas fa-exchange-alt text-white"></i>
                                <span class="modal-title ml-3">Realizar tranferência</span>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body bg-white mt-0">
                            <div class="py-2 text-left">
                                <span class="font-weight-bold">De</span>
                                <div class="col">
                                    <div class="media align-items-center pt-3">
                                        <a class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="assets\images\Giu.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Giulliany Lima Bezerra</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="py-2">
                                    <span class="font-weight-bold">Para</span>
                                    <div class="media pt-3">
                                        <div class="col m-0">
                                            <div class="form-group mb-0">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Jheymerson</option>
                                                    <option>Klederson</option>
                                                    <option>Steafani</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <span class="font-weight-bold">Valor</span>
                                    <div class="media pt-3">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="number" id="valor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer pt-0 mt-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn bg-gradient-success text-white">Transferir</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-jheymerson">
                <div class="modal-dialog modal-dialog-centered modal">
                    <div class="modal-content modal-danger">        
                        <div class="modal-header bg-gradient-success font-weight-bold">
                            <div class="mt-1 ">
                                <i class="fas fa-exchange-alt text-white"></i>
                                <span class="modal-title ml-3">Realizar tranferência</span>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body bg-white mt-0">
                            <div class="py-2 text-left">
                                <span class="font-weight-bold">De</span>
                                <div class="col">
                                    <div class="media align-items-center pt-3">
                                        <a class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="assets\images\Jheymerson.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Jheymerson Lira Aranha</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="py-2">
                                    <span class="font-weight-bold">Para</span>
                                    <div class="media pt-3">
                                        <div class="col m-0">
                                            <div class="form-group mb-0">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Giu</option>
                                                    <option>Klederson</option>
                                                    <option>Steafani</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <span class="font-weight-bold">Valor</span>
                                    <div class="media pt-3">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="number" id="valor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer pt-0 mt-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn bg-gradient-success text-white">Transferir</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-klederson">
                <div class="modal-dialog modal-dialog-centered modal">
                    <div class="modal-content modal-danger">        
                        <div class="modal-header bg-gradient-success font-weight-bold">
                            <div class="mt-1 ">
                                <i class="fas fa-exchange-alt text-white"></i>
                                <span class="modal-title ml-3">Realizar tranferência</span>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body bg-white mt-0">
                            <div class="py-2 text-left">
                                <span class="font-weight-bold">De</span>
                                <div class="col">
                                    <div class="media align-items-center pt-3">
                                        <a class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="assets\images\Klederson.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Klederson Rocha Soares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="py-2">
                                    <span class="font-weight-bold">Para</span>
                                    <div class="media pt-3">
                                        <div class="col m-0">
                                            <div class="form-group mb-0">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Giu</option>
                                                    <option>Jheymerson</option>
                                                    <option>Steafani</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <span class="font-weight-bold">Valor</span>
                                    <div class="media pt-3">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="number" id="valor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer pt-0 mt-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn bg-gradient-success text-white">Transferir</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-stefani">
                <div class="modal-dialog modal-dialog-centered modal">
                    <div class="modal-content modal-danger">        
                        <div class="modal-header bg-gradient-success font-weight-bold">
                            <div class="mt-1 ">
                                <i class="fas fa-exchange-alt text-white"></i>
                                <span class="modal-title ml-3">Realizar tranferência</span>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body bg-white mt-0">
                            <div class="py-2 text-left">
                                <span class="font-weight-bold">De</span>
                                <div class="col">
                                    <div class="media align-items-center pt-3">
                                        <a class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="assets\images\Carol.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Stefani Carol Almeida</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="py-2">
                                    <span class="font-weight-bold">Para</span>
                                    <div class="media pt-3">
                                        <div class="col m-0">
                                            <div class="form-group mb-0">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Giu</option>
                                                    <option>Jheymerson</option>
                                                    <option>Klederson</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <span class="font-weight-bold">Valor</span>
                                    <div class="media pt-3">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="number" id="valor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer pt-0 mt-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn bg-gradient-success text-white">Transferir</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- JQuery 3.5.2-->
        <script src="assets\argon-dashboard\jquery\jquery-3.5.2.js"></script>

        <!-- JS BOOTSTRAP -->
        <script src="assets\argon-dashboard\bootstrap\js\bootstrap.js"></script>

        <!-- JS ARGON DASHBOARD -->
        <script src="assets\argon-dashboard\argon.js"></script>

    </body>