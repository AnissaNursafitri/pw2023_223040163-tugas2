<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="sidebar">
        <div class="brand">
            <i class="fa-sharp fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>tanyadoc</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <li><i class="fa-solid fa-users"></i>&nbsp;&nbsp;<span>Pasien</span></li>
            <li><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;<span>Dokter</span></li>
            <li><i class="fa-solid fa-pills"></i>&nbsp;&nbsp;<span>Obat</span></li>
            <li><i class="fa-solid fa-hand-holding-dollar"></i></i>&nbsp;&nbsp;<span>Biaya</span></li>
            <li><i class="fa-solid fa-gear"></i>&nbsp;&nbsp;<span>Setting</span></li>
            <li><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;</i><span>Bantuan</span></li>
        </ul>
    </div>

    <div class="heading">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa fa-search" style="color:#000;"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-user-tie"></i></a>
                </div>

                <div class="content-item">

                </div>

                <section class="container-fluid doku">
                    <div class="container dash">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="container data">
                        <div class="row pemisah">
                            <div class="col pasien">
                                <h2>120</h2>
                                <p>pasien</p>
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col merah">
                                <h2>120</h2>
                                <p>Obat</p>
                                <i class="fa-solid fa-capsules"></i>
                            </div>
                        </div>
                        <div class="container kedua">
                            <div class="row part">
                                <div class="col salmon">
                                    <h2>20</h2>
                                    <p>Data Dokter</p>
                                    <i class="fa-solid fa-user-doctor"></i>
                                </div>
                                <div class="col green">
                                    <h2>34</h2>
                                    <p>Dana</p>
                                    <i class="fa-solid fa-sack-dollar"></i>
                                </div>
                            </div>
                        </div>
                </section>






                <!-- <div class="dashboard">
                    <h3><i class="fa-solid fa-gauge"></i>DASHBOARD</h3>

                    <div class="row text-white">
                        <div class="card bg-info" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h5 class="card-title">JUMLAH PASIEN</h5>
                                <div class="display-4">200</div>
                                <a href=""><p class="card-text text-white">Lihat Detail<i class="fa-sharp fa-solid fa-right-to-bracket"></i></p></a>
                            </div>
                        
                        </div>
                    </div>
                </div> -->






            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" </body>

</html >