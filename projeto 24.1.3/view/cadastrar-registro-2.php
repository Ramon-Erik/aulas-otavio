<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
    <meta name="description" content="Website Builder Description">
    <title>Cadastrar-Registro</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>

<body>
    <section class="menu cid-u6mG0V4yGt" once="menu" id="menu1-1a">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://mobirise.co">
                            <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.co">Salaberga</a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu"><span class="mbri-upload mbr-iconfont mbr-iconfont-btn"></span>

                            Cadastrar</a>
                        <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="https://mobirise.co">Usuarios<br>Alunos<br>Registros</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Relatorio</a>
                        <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="https://mobirise.co">Usuarios<br>Alunos<br>Registro</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.co">
                        </a></li>
                </ul>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="https://mobirise.co">
                        <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                        Try It Now!
                    </a>
                </div>
            </div>
        </nav>
    </section>

    <section class="engine"><a href="https://mobirise.info/v">free html templates</a></section>
    <section class="header15 cid-u6mHjaHCC6 mbr-fullscreen mbr-parallax-background" id="header15-1b">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

        <div class="container align-right">
            <div class="row">
                <div class="mbr-white col-lg-8 col-md-7 content-container">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Registro de atraso</h1>
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">Todos os itens de formulário ao lado sao obrigatórios e devem ser preenchidos.Caso seu nome não conste na lista de alunos de sua turma, entre em contato com o adiministrador do sistema.</p>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container">
                        <!---Formbuilder Form--->
                        <form action="../control/controle-registro.php" method="POST">
                            <div class="dragArea row">
                                <div class="col-md-12 form-group">
                                    <select name="id_aluno" class="form-control">
                                        <?php
                                        require('../model/Aluno.Class.php');
                                        $aluno = new Aluno();
                                        $aluno->listar_alunos();
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <select name="motivo" class="form-control">
                                        <option>banheiro</option>
                                        <option>pessoal</option>
                                        <option>consulta</option>
                                        <option>lanche</option>
                                        <option>transporte</option>
                                        <option>projeto</option>
                                        <option>alinhamento</option>
                                    </select>
                                </div>
                                <div class="col-md-12 input-group-btn">
                                    <input type="submit" class="btn btn-form btn-primary display-4" name="cadastro_atraso" value="registrar">
                                </div>
                            </div>
                        </form><!---Formbuilder Form--->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="section-table cid-u6mHtAmWFL" id="table1-1d">



        <div class="container container-table">
            <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Relatório de Registro do Dia&nbsp;</h2>
            <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">Logo abaixo você poderá conferir os registros de atrasos confirmados até o momento.</h3>
            <div class="table-wrapper">
                <div class="container">
                    <div class="row search">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="dataTables_filter">
                                <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                                <input class="form-control input-sm" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container scroll">
                    <table class="table isSearch" cellspacing="0" data-empty="No matching records found">
                        <thead>
                            <tr class="table-heads ">
                                <th class="head-item mbr-fonts-style display-7">
                                    Nome</th>
                                <th class="head-item mbr-fonts-style display-7">Ano</th>
                                <th class="head-item mbr-fonts-style display-7">Turma</th>
                                <th class="head-item mbr-fonts-style display-7">Data</th>
                                <th class="head-item mbr-fonts-style display-7">Motivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                                <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                                <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                                <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                                <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container table-info-container">
                    <div class="row info">
                        <div class="col-md-6">
                            <div class="dataTables_info mbr-fonts-style display-7">
                                <span class="infoBefore">Showing</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoAfter">entries</span>
                                <span class="infoFilteredBefore">(filtered from</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoFilteredAfter"> total entries)</span>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cid-u6mHoWGbGr" id="footer2-1c">
        <div class="container">
            <div class="media-container-row content mbr-white">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text">
                        <strong>Address</strong>
                        <br>
                        <br>1234 Street Name
                        <br>City, AA 99999
                        <br>
                        <br>
                        <br><strong>Contacts</strong>
                        <br>
                        <br>Email: support@mobirise.com
                        <br>Phone: +1 (0) 000 0000 001
                        <br>Fax: +1 (0) 000 0000 002
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text">
                        <strong>Links</strong>
                        <br>
                        <br><a class="text-primary" href="https://mobirise.co/">Website builder</a>
                        <br><a class="text-primary" href="https://mobirise.co/">Download for Windows</a>
                        <br><a class="text-primary" href="https://mobirise.co/">Download for Mac</a>
                        <br>
                        <br><strong>Feedback</strong>
                        <br>
                        <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="google-map"></div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright 2020 Mobirise - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                    <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/Mobirise" target="_blank">
                                    <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/datatables/jquery.data-tables.min.js"></script>
    <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>