<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="fa-brands fa-linux"></i> Hacks Tools for Linux 
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="../index.php" class="nav__link">Home</a></li>


                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Github <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> Owner
                                </a>
                            </li>

                            <li>
                                <a href="https://github.com/topics/kali-linux-tools?o=desc&s=forks" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Hackstools Git
                                </a>
                            </li>

                            <!--=============== DROPDOWN SUBMENU ===============-->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-file-list-line"></i> Documents
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-cash-line"></i> Payments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-refund-2-line"></i> Refunds
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="https://www.kali.org/get-kali/#kali-platforms" target="_blank" class="nav__link">Kali Linux Download</a></li>

                    <!--=============== DROPDOWN 2 ===============-->


                    <li><a href="views/contactos.php" class="nav__link">Form</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card bg-dark text-center text-white">
                        <h3>Form </h3>
                    </div>
                    <form action="../php/registro.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1">Name</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Digite Primer Nombre" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre2">email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite Segundo Nombre">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido1">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite Primer Apellido" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre2">Age</label>
                                        <input type="text" class="form-control" name="age" id="age" placeholder="Digite Segundo Nombre">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido1">Direction</label>
                                        <input type="text" class="form-control" name="user" id="user" placeholder="Digite Primer Apellido" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">Hacking Tools</label>
                                        <select class="form-select" name="tool" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Nmap</option>
                                            <option value="2">DNSenum</option>
                                            <option value="3">Whois</option>
                                            <option value="4">OpenVAS</option>
                                            <option value="5">Nikto</option>
                                            <option value="6">Metasploit</option>
                                            <option value="7">John the Ripper
                                            </option>
                                            <option value="8">Hashcat</option>
                                            <option value="9">Aircrack-ng
                                            </option>
                                            <option value="10">Hydra</option>
                                            <option value="11">Kismet</option>
                                            <option value="12">Wifite</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="documento">Linux Distribution</label>
                                        <select class="form-select" name="linux" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Kali linux</option>
                                            <option value="2">ubuntu</option>
                                            <option value="3">Linux Mint</option>
                                            <option value="4">Debian</option>
                                            <option value="5">Arch Linux</option>
                                        </select>                                   
                                     </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-dark btn-lg">Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
<hr>



        <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>distribution Linux</th>
                                <th>Hakcs tools</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                    include '../php/conexion.php';

                    $sql =$conexion->query("SELECT  f.nombre, d.distribucion, t.tool
                    FROM form f
                    INNER JOIN distribucion d ON f.id_linux = d.id_linux
                    INNER JOIN tools t ON f.id_tools = t.id_tool ORDER BY f.feha_creacion asc;");
                    while($row = $sql ->fetch_object()) {
                    ?>
                            <tr>

                                <td><?php echo $row->nombre?></td>
                                <td><?php echo $row->distribucion ?></td>
                                <td><?php echo $row->tool?></td>
                            </tr>
                            <?php 
                        }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        
</section>

<br>
<br>



    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; TecnoInnova2024</div>
                <div class="col-lg-4 my-3 my-lg-0">
                  <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/tecnoinnova2024?igsh=MXE1eXFsYzV5enhsZQ==" target="_blank" aria-label="Facebook"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/TecnoInnova-Web" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-github"></i></a>
                </div>
               
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../assets/js/scripts2.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>