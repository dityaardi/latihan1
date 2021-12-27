<!DOCTYPE html>
<html>
    <head>
        <title>Masuk</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>

    <body class="body">
        <div class="header">

            <div class="content">
                <h1>MASUK</h1><br>
                <center>
                <form method="post" action="aksilogin.php">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="pengguna" placeholder="Masukkan Username"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="Password" name="password" placeholder="Masukkan Password"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="masuk" value="Masuk"></td>
                        </tr>
                    </table>
                </form><br><br><br><br>
                <h5>Belum memiliki akun? <a href="daftar.php">Daftar</a></h5>
            </div>
            
        </div>
    </body>
</html>