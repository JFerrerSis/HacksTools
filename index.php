<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacks tools</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/style.css" rel="stylesheet" />

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
                    <li><a href="index.html" class="nav__link">Home</a></li>


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


                    <li><a href="views/contactos.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>







    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Infomation</h2>
                <h3 class="section-subheading text-muted">Kali Linux ethical hacking tools are a vast collection of
                    software applications specifically designed for penetration testing and security auditing. These
                    tools are pre-installed in the Kali Linux operating system and provide a comprehensive suite for
                    cybersecurity professionals to identify vulnerabilities, assess system security, and simulate
                    real-world attacks in a controlled environment. They encompass a wide range of capabilities,
                    including network scanning, vulnerability assessment, exploitation, password cracking, and forensic
                    analysis. By using these tools ethically and responsibly, cybersecurity experts can help
                    organizations strengthen their security posture and prevent malicious attacks. 
                    
                </h3>
               
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/nmap.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Nmap</div>
                            <div class="portfolio-caption-subheading text-muted">Network mapper for discovering hosts and services on a network.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/DNSenum.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">DNSenum</div>
                            <div class="portfolio-caption-subheading text-muted">Enumerates DNS information for a target domain.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/whois.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Whois</div>
                            <div class="portfolio-caption-subheading text-muted">Retrieves public domain information.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/OpenVAS.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">OpenVAS</div>
                            <div class="portfolio-caption-subheading text-muted">Vulnerability scanner and management system.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Nikto.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Nikto</div>
                            <div class="portfolio-caption-subheading text-muted">Web server scanner.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Metasploit.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Metasploit</div>
                            <div class="portfolio-caption-subheading text-muted">Framework for developing and executing exploits.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/John the Ripper.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">John the Ripper</div>
                            <div class="portfolio-caption-subheading text-muted">Password cracker.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 8-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/hashcat.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hashcat</div>
                            <div class="portfolio-caption-subheading text-muted">High-performance password recovery tool.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 9-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Wifi-logo.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Aircrack-ng</div>
                            <div class="portfolio-caption-subheading text-muted">Suite of tools for cracking Wi-Fi networks.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 10-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Hydra.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hydra</div>
                            <div class="portfolio-caption-subheading text-muted">Login cracker.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 11-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Kismet.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Kismet</div>
                            <div class="portfolio-caption-subheading text-muted">Wireless network detector.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 12-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Wifite.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Wifite</div>
                            <div class="portfolio-caption-subheading text-muted">Automated wireless attacks.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->

























   
    <!-- Footer-->
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
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nmap</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/nmap.jpeg" alt="..." />
                                <p><strong>Nmap</strong>, short for Network Mapper, is a powerful open-source utility used for network discovery and security auditing. Originally created by Gordon Lyon, Nmap allows network administrators and security professionals to discover hosts on a network, identify open ports and services, determine operating systems and version information, and map network topology. By sending custom packets to target machines and analyzing the responses, Nmap provides detailed information about a network. This versatility makes Nmap an indispensable tool for network administration, vulnerability scanning, incident response, and security assessment. Nmap offers a wide range of scanning techniques, from simple port scans to comprehensive operating system fingerprinting and vulnerability detection. Its highly customizable command-line interface allows users to tailor Nmap to their specific needs.</p>
                                
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">DNSenum</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/DNSenum.png" alt="..." />
                                <p><strong>DNSenum</strong> is a command-line tool designed to enumerate information about a domain. By performing DNS queries, DNSenum can discover subdomains, name servers, MX records (email), TXT records, and more. This information is invaluable during the initial phases of a security assessment, as it provides an overview of a domain's infrastructure. DNSenum utilizes techniques such as brute-forcing against custom wordlists to uncover hidden subdomains and can be a powerful tool for mapping the attack surface of a target. However, it's important to use DNSenum responsibly and ethically, as misuse can violate an organization's security policies.</p>
                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Whois</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/whois.jpeg" alt="..." />
                                <p><strong>Whois</strong> is an internet database query service that returns information about a domain name. This information can include the domain name's registrant, administrative contact, technical contact, name servers, creation date, and expiration date. Whois is often used to find out who owns a particular domain, to verify ownership of a domain, or to gather information about a website's owner. While Whois databases were once publicly accessible, privacy concerns have led many registrars to implement privacy protections that mask some or all of the registrant's information. However, even with these protections, Whois can still provide valuable insights into a domain's history and ownership.</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">OpenVAS</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/OpenVAS.png" alt="..." />
                                <p><strong>OpenVAS</strong>, short for Open Vulnerability Assessment System, is a free and open-source vulnerability scanning framework. It provides comprehensive security testing capabilities by identifying vulnerabilities in computer systems and networks. OpenVAS offers a wide range of features, including network discovery, port scanning, vulnerability detection, and compliance checking. By utilizing a vast database of known vulnerabilities, OpenVAS can help organizations identify and mitigate potential security risks. It is widely used by security professionals to conduct vulnerability assessments and ensure the overall security of their IT infrastructure. OpenVAS is often integrated with other security tools, such as intrusion detection systems, to provide a comprehensive security solution.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nikto</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/Nikto.jpg" alt="..." />
                                <p><strong>Nikto</strong> is an Open Source web server scanner which performs comprehensive tests against web servers, looking for common items such as outdated server software, insecure HTTP servers, outdated software on the server, and potentially dangerous files/programs. Nikto also includes a number of checks for specific server items such as those found on various versions of Apache, IIS, and other server software.</p>

                              
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Metasploit</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/Metasploit.png" alt="..." />
                                <p><strong>Metasploit</strong> is a powerful penetration testing platform that provides a wide range of tools and exploits for security assessments. It allows security professionals to simulate real-world attacks and identify vulnerabilities in systems and networks. Metasploit offers a modular architecture, enabling users to create and customize their own exploits. With its extensive database of exploits and modules, Metasploit is a valuable asset for both novice and experienced penetration testers. It is used to discover vulnerabilities, assess the impact of attacks, and develop mitigation strategies.</p>

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">John the Ripper</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/John the Ripper.jpg" alt="..." />
                                <p><strong>John the Ripper</strong> is a high-performance password cracking utility. Originally developed for Unix systems, it can run on various platforms. Its primary purpose is to recover lost passwords by attempting to crack encrypted password hashes. John the Ripper supports a wide range of hash types and can use various attack modes, including dictionary attacks, brute-force attacks, and hybrid attacks. It is commonly used by security professionals to assess password strength and by hackers to gain unauthorized access to systems. However, it's important to use this tool ethically and responsibly.</p>

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><</div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Hashcat</h2>
                             
                                <img class="img-fluid d-block mx-auto" src="assets/img/hashcat.png" alt="..." />
                                <p><strong>Hashcat</strong> is a high-performance password recovery utility. It's designed to recover lost passwords by cracking encrypted hashes. Hashcat supports a wide variety of hash types, including those used by various operating systems, network protocols, and software applications. It employs a number of techniques to crack passwords, such as brute-force, dictionary attacks, and hybrid attacks. Hashcat is often used by security professionals and penetration testers to assess password strength and by individuals to recover lost passwords. It's known for its speed and efficiency, making it a popular choice among password crackers.</p>

                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Aircrack-ng</h2>
                             
                                <img class="img-fluid d-block mx-auto" src="assets/img/Aircrack-ng-new-logo.jpg" alt="..." />
                                <p><strong>Aircrack-ng</strong> is a network software suite focused on penetration testing of wireless LANs. It's designed to detect weaknesses in wireless networks and recover wireless network keys. The suite includes tools for capturing packets, cracking WEP and WPA/WPA2-PSK keys, and performing various attacks on wireless networks. Aircrack-ng is widely used by security professionals and researchers to assess the security of wireless networks and identify potential vulnerabilities.</p>

                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Hydra</h2>
                             
                                <img class="img-fluid d-block mx-auto" src="assets/img/Hydra.jpeg" alt="..." />
                                <p><strong>Hydra</strong> is a versatile password cracking tool capable of testing multiple logins and passwords against a variety of network services. While often used in general password cracking, it's also applicable in wireless network security. By targeting network devices like routers and access points, Hydra can attempt to brute-force passwords, gaining unauthorized access. This makes it a complementary tool to wireless cracking suites like Aircrack-ng, as it can be used to attack authentication services directly.</p>

                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Kismet</h2>
                             
                                <img class="img-fluid d-block mx-auto" src="assets/img/Kismet.png" alt="..." />
                                <p><strong>Kismet</strong> is an open-source wireless network detector, designed to discover and monitor wireless networks in your area. Unlike other tools, Kismet does not require packet injection to operate, making it ideal for passive network discovery.</p>
                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Wifite</h2>
                             
                                <img class="img-fluid d-block mx-auto" src="assets/img/Wifite.png" alt="..." />
                                <p><strong>Wifite</strong> is a versatile automated wireless network auditing tool designed to streamline the process of discovering and attacking wireless networks. It combines several tools and techniques into a single, user-friendly interface.</p>                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts2.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>