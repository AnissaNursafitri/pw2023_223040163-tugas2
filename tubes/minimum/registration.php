 <?php 

$user = 'root';
$password = '';
$db = 'tanyadoc';

session_start();

    $conn = mysqli_connect('localhost', $user, $password, $db);

    mysqli_select_db($conn, 'tanyadoc');

    $pengguna = $_POST['user'];
    $nama = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['passwd'];

    $s = "select * from usertable where username = '$pengguna'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        Print '<script>alert("Username has been taken!");</script>';
        Print '<script>window.location.assign("regist.php");</script>';
    }else {
        $reg = "insert into usertable( username , nama , email , password) values ('$pengguna' ,
        
        mysqli_query($conn, $reg)";
        Print '<script>alert("successfully registered!");</script>';
        Print '<script>window.location.assign("login.php");</script>';
    }
   
?>
