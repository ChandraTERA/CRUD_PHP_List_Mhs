<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Membuat Field Set">
    <title>LOGIN</title>
</head>
<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Username</td>
                <td>: </td>
                <td>
                    <input type="text" id="username" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: </td>
                <td>
                    <input type="password" id="password" name="password" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" onclick="return confirm('Apakah anda yakin!!!!')">Submit</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
        
        // if (isset($_POST['submit'])) {
            
        //     $username = $_POST ['username'];
        //     $password = $_POST ['password'];

        //     if ($username == 'chandra') {
        //         if ($password == 'tera' ) {
        //             echo "Berhasil Masuk";
        //         }else {
        //             echo "Gagal Masuk";
        //         }
        //     }else {
        //         echo "Username dan Password salah!";
        //     }
        // }


        // if (isset($_POST['submit'])) {
            
        //     $username = $_POST ['username'];
        //     $password = $_POST ['password'];

        //     if ($username == 'chandra') {
        //             echo "Username Betul <br>";
        //         }else {
        //             echo "Username Salah <br>";
        //         }
        //     if ($password == 'tera') {
        //             echo "Password Betul<br>";
        //         }else {
        //             echo "Password Salah";  
        //     }
        //     if ($username == 'chandra') {
        //         if ($password == 'tera') {
        //             echo "Username dan Password Betul";
        //         }else {
        //             echo "Username dan Password Salah";
        //         }
        //     }
        //     }


        if (isset($_POST ['submit'])) {
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == 'chandra' && $password == 'tera') {
                echo "Username dan Password berhasil";
            }elseif ($username == 'chandra' && $password != 'tera') {
                echo "Username benar dan Password salah";
            }elseif ($username != 'chandra' && $password == 'tera') {
                echo "Username salah dan Password benar";
            }else {
                echo "Username dan Password salah <br>";
                echo "Ulang oke jangan banyak bacot";
            }
        }

    ?>
    
</body>
</html>