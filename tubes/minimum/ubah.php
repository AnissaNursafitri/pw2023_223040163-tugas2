<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data table_janji berdasarakan id
$psn = query("SELECT * FROM table_janji WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'backend.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'janji.php';
            </script
            ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: aliceblue;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

/* .icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
} */

.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* 800px */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<!--NAVBAR START-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ADMIN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php"><i class="fa-solid fa-house"></i></a></li>
        <li class="active"><a href="backend.php"><i class="fa-solid fa-users"></i></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--END NAVBAR-->

<!--CONTAINER START-->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $psn["gambar"]; ?>">
        <div class="row">
          <div class="col-50">
            <h3>Update Data</h3>
            <label for="name"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="nama" placeholder="masukan nama"required value="<?= $psn["nama"]; ?>" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="masukan email" required value="<?= $psn["email"]; ?>">
            <label for="nik"><i class="fa fa-address-card-o"></i> NIK</label>
            <input type="text" id="nik" name="nik" placeholder="masukan nik" required value="<?= $psn["NIK"]; ?>">
            <label for="spesialis"><i class="fa-sharp fa-solid fa-stethoscope"></i> spesialis</label>
            <input type="text" id="spesialis" name="spesialis" placeholder="spesialis" required value="<?= $psn["spesialis"]; ?>">
            <label for="waktu"><i class="fa-solid fa-business-time"></i> waktu</label>
            <input type="text" id="waktu" name="waktu" placeholder="waktu" required value="<?= $psn["waktu"]; ?>">









            
            <div class="row">
              <div class="col-50">
                <!-- <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"> -->
              <!-- </div>
              <div class="col-50"> -->
                <!-- <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001"> -->
              </div>
            </div>
          </div>

          <div class="col-50">
            <label for ="gambar">Pilih Foto Anda </label>
              <img src="img/<?= $psn['gambar']; ?>" width="500"><br>
              <br>
              <input type = "file" name ="gambar" id="gambar"><br>
              <button type="submit" name="submit" class="btn bg-primary">Ubah Data</a></button>
</form>
</div>
</div>
                             
            <!-- <label for="fname">Accepted Cards</label> -->
            <div class="icon-container">
              <!-- <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i> -->
            <!-- </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label> -->
            <!-- <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label> -->
            <!-- <input type="text" id="expmonth" name="expmonth" placeholder="September"> -->
            <div class="row">
              <div class="col-50">
                <!-- <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018"> -->
              </div>
              <div class="col-50">
                <!-- <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"> -->
              </div>
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> klik jika yakin ingin mengupdate
        </label>
        <button type="file" name="submit" class="btn bg-primary"><a class="link active bg-primary" style="color: white;">Submit</a></button> -->
      </form>
    </div>
  </div>
  <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div> -->

</body>
</html>

