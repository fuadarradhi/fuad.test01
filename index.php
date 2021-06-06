<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niagahoster | Hosting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row header-1">
            <div class="col-md-6">
                <img src="assets/images/top.png" width="30" class="mr-2" style="margin-top: 2px;" />
                Gratis Ebook 9 Cara
                Cerdas
                Menggunakan Domain [x]
            </div>
            <div class="col-md-6 text-md-right">
                <div class="d-flex justify-content-end">
                    <div>
                        <i class="fa fa-phone-alt"></i>
                        <span>0274-5305505</span>
                    </div>
                    <div class="ml-3">
                        <a href="#" class="text-decoration-none text-reset">
                            <i class="fa fa-comments"></i>
                            <span>Live Chat</span>
                        </a>
                    </div>
                    <div class="ml-3">
                        <a href="#" class="text-decoration-none text-reset">
                            <i class="fa fa-user-circle"></i>
                            <span>Member Area</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mb-0">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Niagahoster" width="230" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Afiliasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pr-0" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <hr class="mt-0">

    <div class="container rows-1 my-5">
        <div class="row">
            <div class="col-md-6">
                <h1>PHP Hosting</h1>
                <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                <p>
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Solusi PHP untuk performa query yang lebih cepat.
                </p>
                <p>
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Konsumsi memori yang lebih rendah.
                </p>
                <p>
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                </p>
                <p>
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Fitur enkripsi IonCube dan Zend Guard Loaders
                </p>
            </div>
            <div class="col-md-6 text-right">
                <img src="assets/svg/illustration banner PHP hosting-01.svg" alt="Banner PHP Hosting" width="90%">
            </div>
        </div>
    </div>
    <hr>

    <div class="container rows-2 mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <div class="icon-wrapper">
                    <img src="assets/images/h201.png" alt="Zendguard" class="img-fluid">
                </div>
                <p>PHP Zend Guard Loader</p>
            </div>
            <div class="col-md-3">
                <div class="icon-wrapper">
                    <img src="assets/images/h202.png" alt="Composer" class="img-fluid">
                </div>
                <p>PHP Composer</p>
            </div>
            <div class="col-md-3">
                <div class="icon-wrapper">
                    <img src="assets/images/h203.png" alt="IonCube" class="img-fluid">
                </div>
                <p>PHP IonCube Loader</p>
            </div>
        </div>
    </div>

    <?php
        $price = json_decode(file_get_contents("price.json"), true);
    ?>

    <div class="container rows-3 mt-5 text-center">
        <h2>Paket Hosting Singapura yang Tepat</h2>
        <h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="bayi">
                    <h4 class="title"><?= $price[0]['hosting']; ?></h4>
                    <div class="price">
                        <p class="old-price"><?= $price[0]['old_price']; ?></p>
                        <h4 class="new-price">
                            <sup class="sup1">Rp</sup>
                            <span><?= explode('.',$price[0]['new_price'])[0]; ?></span><sup class="sup2">.<?= explode('.',$price[0]['new_price'])[1]; ?></sup><sup class="sup3">/bln</sup>
                        </h4>
                    </div>
                    <div class="users">
                        <span class="bold">938</span> Pengguna Terdaftar
                    </div>
                    <div class="description">
                        <ul>
                            <li><span class="bold">0.5X RESOURE POWER</span></li>
                            <li><span class="bold">500 MB</span> Disk Space</li>
                            <li><span class="bold">Unlimited</span> Bandwith</li>
                            <li><span class="bold">Unlimited</span> Databases</li>
                            <li><span class="bold">1</span> Domain</li>
                            <li><span class="bold">Instant</span> Backup</li>
                            <li><span class="bold">Unlimited SSL</span> Unlimited SSL Gratis Selamanya</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Pilih Sekarang</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pelajar">
                    <h4 class="title"><?= $price[1]['hosting']; ?></h4>
                    <div class="price">
                        <p class="old-price">Rp <?= $price[1]['old_price']; ?></p>
                        <h4 class="new-price">
                            <sup class="sup1">Rp</sup>
                            <span><?= explode('.',$price[1]['new_price'])[0]; ?></span><sup class="sup2">.<?= explode('.',$price[1]['new_price'])[1]; ?></sup><sup class="sup3">/bln</sup>
                        </h4>
                    </div>
                    <div class="users">
                        <span class="bold">4.168</span> Pengguna Terdaftar
                    </div>
                    <div class="description">
                        <ul>
                            <li><span class="bold">1X RESOURE POWER</span></li>
                            <li><span class="bold">Unlimited</span> Disk Space</li>
                            <li><span class="bold">Unlimited</span> Bandwith</li>
                            <li><span class="bold">Unlimited</span> POP3 Email</li>
                            <li><span class="bold">Unlimited</span> Databases</li>
                            <li><span class="bold">10</span> Addon Domains</li>
                            <li><span class="bold">Instant</span> Backup</li>
                            <li><span class="bold">Domain Gratis</span> Selamanya</li>
                            <li><span class="bold">Unlimited SSL</span> Unlimited SSL Gratis Selamanya</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Pilih Sekarang</a>
                </div>
            </div>
            <div class="col-md-3 best-seller">
                <div class="personal">
                    <div class="wrap">
                        <span class="ribbon">Best Seller!</span>
                    </div>
                    <h4 class="title"><?= $price[2]['hosting']; ?></h4>
                    <div class="price">
                        <p class="old-price">Rp <?= $price[2]['old_price']; ?></p>
                        <h4 class="new-price">
                            <sup class="sup1">Rp</sup>
                            <span><?= explode('.',$price[2]['new_price'])[0]; ?></span><sup class="sup2">.<?= explode('.',$price[2]['new_price'])[1]; ?></sup><sup class="sup3">/bln</sup>
                        </h4>
                    </div>
                    <div class="users">
                        <span class="bold">10.017</span> Pengguna Terdaftar
                    </div>
                    <div class="description">
                        <ul>
                            <li><span class="bold">2X RESOURE POWER</span></li>
                            <li><span class="bold">Unlimited</span> Disk Space</li>
                            <li><span class="bold">Unlimited</span> Bandwith</li>
                            <li><span class="bold">Unlimited</span> POP3 Email</li>
                            <li><span class="bold">Unlimited</span> Databases</li>
                            <li><span class="bold">Unlimited</span> Addon Domains</li>
                            <li><span class="bold">Instant</span> Backup</li>
                            <li><span class="bold">Domain Gratis</span> Selamanya</li>
                            <li><span class="bold">Unlimited SSL</span> Unlimited SSL Gratis Selamanya</li>
                            <li><span class="bold">Private</span> Name Server</li>
                            <li><span class="bold">SpamAssassin</span> Pro Mail Protection</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">Pilih Sekarang</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bisnis">
                    <h4 class="title"><?= $price[3]['hosting']; ?></h4>
                    <div class="price">
                        <p class="old-price">Rp <?= $price[3]['old_price']; ?></p>
                        <h4 class="new-price">
                            <sup class="sup1">Rp</sup>
                            <span><?= explode('.',$price[3]['new_price'])[0]; ?></span><sup class="sup2">.<?= explode('.',$price[3]['new_price'])[1]; ?></sup><sup class="sup3">/bln</sup>
                        </h4>
                    </div>
                    <div class="users">
                        <span class="bold">3.552</span> Pengguna Terdaftar
                    </div>
                    <div class="description">
                        <ul>
                            <li><span class="bold">3X RESOURE POWER</span></li>
                            <li><span class="bold">Unlimited</span> Disk Space</li>
                            <li><span class="bold">Unlimited</span> Bandwith</li>
                            <li><span class="bold">Unlimited</span> POP3 Email</li>
                            <li><span class="bold">Unlimited</span> Databases</li>
                            <li><span class="bold">Unlimited</span> Addon Domains</li>
                            <li><span class="bold">Magic Auto</span> Backup & Restore</li>
                            <li><span class="bold">Domain Gratis</span> Selamanya</li>
                            <li><span class="bold">Unlimited SSL</span> Unlimited SSL Gratis Selamanya</li>
                            <li><span class="bold">Private</span> Name Server</li>
                            <li><span class="bold">Prioritas</span> Layanan Support
                                <div class="text-center mt-2">
                                    <i class="fas fa-star text-primary" aria-hidden="true"></i>
                                    <i class="fas fa-star text-primary" aria-hidden="true"></i>
                                    <i class="fas fa-star text-primary" aria-hidden="true"></i>
                                    <i class="fas fa-star text-primary" aria-hidden="true"></i>
                                    <i class="fas fa-star text-primary" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li><span class="bold">SpamExpert</span> Pro Mail Protection</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Pilih Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container rows-4 mt-5 text-center">
        <h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>max execution time 300s</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>max execution time 300s</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>php memory limit 1024 MB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>post max size 128 MB</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>upload max filesize 128 MB</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i></td>
                            <td>max input vars 2500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="line"></div>
    </div>

    <div class="container rows-5 text-center mt-5">
        <h2>Semua Paket Hosting Sudah Termasuk</h2>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>PHP Semua Versi</h4>
                <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
            </div>
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_My SQL.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>MySQL Versi 5.6</h4>
                <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_CPanel.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>Panel Hosting cPanel</h4>
                <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
            </div>
        </div>
        <div class="row mt-md-5">
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>Garansi Uptime 99.9%</h4>
                <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_InnoDB.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>Database InnoDB Unlimited</h4>
                <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" class="img-fluid" alt="Icon" width="70" />
                <h4>Wildcard Remote MySQL</h4>
                <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
            </div>
        </div>
        <div class="line" style="margin-top: 10px;"></div>
    </div>

    <div class="container rows-6 mt-5">
        <h2 class="mb-5 text-center">Mendukung Penuh Framework Laravel</h2>
        <div class="row">
            <div class="col-md-6">
                <p class="first-p">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting
                    murah kami mendukung penuh framework favorit Anda.</p>
                <p class="p-list">
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Install Laravel <span class="bold">1 klik</span> dengan Softaculous Installer.
                </p>
                <p class="p-list">
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Mendukung ekstensi <span class="bold">PHP MCrypt, phar, mbstring, json</span> dan <span
                        class="bold">fileinfo</span>.
                </p>
                <p class="p-list">
                    <i class="fa fa-check-circle text-success mr-1" aria-hidden="true"></i>
                    Tersedia <span class="bold">Composer</span> dan <span class="bold">SSH</span> untuk menginstal
                    packages pilihan Anda.
                </p>
                <p class="p-small">
                    <small>Nb: Composer dan SSH hanya tersedia pada paket Personal dan Bisnis.</small>
                </p>
                <a href="#" class="btn btn-primary">Pilih Hosting Anda</a>
            </div>
            <div class="col-md-6 text-right">
                <img src="assets/svg/illustration banner support laravel hosting.svg" alt="Picture" class="img-fluid"
                    width="90%">
            </div>
        </div>
    </div>
    <hr class="mt-0">

    <div class="container rows-7 mt-5">
        <h2 class="text-center">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 col-6 mb-3">
                        <ul>
                            <li>IcePHP</li>
                            <li>apc</li>
                            <li>apcu</li>
                            <li>apm</li>
                            <li>ares</li>
                            <li>bcmath</li>
                            <li>bcompiler</li>
                            <li>big_int</li>
                            <li>bitset</li>
                            <li>bloomy</li>
                            <li>bz2_filter</li>
                            <li>clamav</li>
                            <li>coin_acceptor</li>
                            <li>crack</li>
                            <li>dba</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <ul>
                            <li>http</li>
                            <li>huffman</li>
                            <li>idn</li>
                            <li>igbinary</li>
                            <li>imagick</li>
                            <li>imap</li>
                            <li>inclued</li>
                            <li>inotify</li>
                            <li>interbase</li>
                            <li>intl</li>
                            <li>ioncube_loader</li>
                            <li>ioncube_loader_4</li>
                            <li>jsmin</li>
                            <li>json</li>
                            <li>idap</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <ul>
                            <li>nd_pdo_mysql</li>
                            <li>oauth</li>
                            <li>oci8</li>
                            <li>odbc</li>
                            <li>opcache</li>
                            <li>pdf</li>
                            <li>pdo</li>
                            <li>pdo_dblib</li>
                            <li>pdo_firebird</li>
                            <li>pdo_mysql</li>
                            <li>pdo_odbc</li>
                            <li>pdo_pgsql</li>
                            <li>pdo_sqlite</li>
                            <li>pgsql</li>
                            <li>phalcon</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <ul>
                            <li>stats</li>
                            <li>stem</li>
                            <li>stomp</li>
                            <li>suhosin</li>
                            <li>sybase_ct</li>
                            <li>sysvmsg</li>
                            <li>sysvsem</li>
                            <li>sysvshm</li>
                            <li>tidy</li>
                            <li>timezonedb</li>
                            <li>trader</li>
                            <li>translit</li>
                            <li>uploadprogress</li>
                            <li>uri_template</li>
                            <li>uuid</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="text-center">
            <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
        </div>
        <br><br>
    </div>

    <div class="container rows-8 mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Linux Hosting yang Stabil dengan Teknologi LVE</h2>
                <p>SuperMicro <span class="bold">Intel Xeon 24-cores</span> server dengan RAM 128GB dan teknologi <span
                        class="bold">LVE CloudLinux</span> untuk stabilitas server Anda. Dilengkapi dengan <span
                        class="bold">SSD</span> untuk kecepatan MySQL dan caching. Apache load balancer berbasis
                    LiteSpeed Technologies, <span class="bold">CageFS</span> security, <span class="bold">Raid-10</span>
                    protection dan auto backup untuk keamanan website PHP Anda.</p>
                <a href="#" class="btn btn-primary">Pilih Hosting Anda</a>
            </div>
            <div class="col-md-6 img-wrapper">
                <img src="assets/images/Image support.png" alt="Image Support" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="rows-9">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>Bagikan jika Anda menyukai halaman ini.</p>
                </div>
                <div class="col-md-5">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com/" class="text-reset" target="blank"><i
                                    class="fab fa-facebook-square"></i></a>
                            <div class="likes">80k</div>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/twitter?lang=id" class="text-reset" target="blank"><i
                                    class="fab fa-twitter-square"></i></a>
                            <div class="likes">450</div>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.google.com/" class="text-reset" target="blank"><i
                                    class="fab fa-google-plus-square"></i></a>
                            <div class="likes">1900</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="rows-10">
        <div class="container">
            <h2>
                Perlu <span class="bold">BANTUAN?</span> Hubungi Kami : <span class="bold">0274-5305505</span>
            </h2>
            <div class="pipeline"></div>
            <button class="btn btn-outline-secondary"><i class="fas fa-comments"></i> Live Chat</button>
        </div>
    </div>

    <div class="rows-11">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-5">
                    <h4>HUBUNGI KAMI</h4>
                    <p>0274-5305505</p>
                    <p>Senin - Minggu</p>
                    <p>24 Jam Nonstop</p>
                    <br>
                    <p>
                        Jl. Selokan Mataraman Monjali Karangjati MT I/304<br> Sinduadi, Mlati, Sleman<br> Yogyakarta
                        55284
                    </p>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <h4>LAYANAN</h4>
                    <ul>
                        <li><a href="#">Domain</a></li>
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">Cloud VPS Hosting</a></li>
                        <li><a href="#">Managed VPS Hosting</a></li>
                        <li><a href="#">Web Builder</a></li>
                        <li><a href="#">Keamanan SSL/HTTPS</a></li>
                        <li><a href="#">Jasa Pembuatan Website</a></li>
                        <li><a href="#">Program Afiliasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <h4>SERVICE HOSTING</h4>
                    <ul>
                        <li><a href="#">Hosting Murah</a></li>
                        <li><a href="#">Hosting Indonesia</a></li>
                        <li><a href="#">Hosting Singapura SG</a></li>
                        <li><a href="#">Hosting PHP</a></li>
                        <li><a href="#">Hosting Wordpress</a></li>
                        <li><a href="#">Hosting Laravel</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <h4>TUTORIAL</h4>
                    <ul>
                        <li><a href="#">Knowledgebase</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cara Pembayaran</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 col-6 mb-5">
                    <h4>TENTANG KAMI</h4>
                    <ul>
                        <li><a href="#">Tim Niagahoster</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Penawaran & Promo Spesial</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <h4>KENAPA PILIH NIAGAHOSTER?</h4>
                    <ul>
                        <li><a href="#">Support Terbaik</a></li>
                        <li><a href="#">Garansi Harga Termurah</a></li>
                        <li><a href="#">Domain Gratis Selamanya</a></li>
                        <li><a href="#">Datacenter Hosting Terbaik</a></li>
                        <li><a href="#">Review Pelanggan</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <h4>NEWSLETTER</h4>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                    <button class="btn btn-primary" type="button">Berlangganan</button>
                                </span>
                            </div>
                        </div>
                        <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 mb-5">
                    <h4></h4>
                    <ul class="socmed">
                        <li><a href="#" class="text-reset">
                                <div><i class="fab fa-facebook-f"></i></div>
                            </a></li>
                        <li><a href="#" class="text-reset">
                                <div><i class="fab fa-twitter"></i></div>
                            </a></li>
                        <li><a href="#" class="text-reset">
                                <div><i class="fab fa-google-plus-g"></i></div>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h4>PEMBAYARAN</h4>
                    <img src="assets/images/pembayaran.png" height="50px" />
                    <p class="ket-payment">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
                </div>
            </div>
            <hr>
            <div class="row footer">
                <div class="col-sm-9">
                    <p>Copyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC
                        Biznet Technovillage Jakarta</p>
                    <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD dan cloud computing technology</p>
                </div>
                <div class="col-sm-3">
                    <p>Syarat dan Ketentuan | Kebijakan Privasi</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
