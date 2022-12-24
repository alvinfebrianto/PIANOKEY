<!DOCTYPE html>
<head>
    <title>PIANOKEY</title>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="icon" type="image/png" href="icon/pianokey.svg">
</head>
<body>
    <div class="container">
            <div class="login-container">
                    <input id="item-1" type="radio" name="item" class="sign-in" checked><label for="item-1" class="item">Sign In</label>
                    <input id="item-2" type="radio" name="item" class="sign-up"><label for="item-2" class="item">Sign Up</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                        <form method="POST" action="login_proses.php">
                            <div class="group">
                                <input id="temail" name="temail" type="email" placeholder="Email"  class="input">
                            </div>
                            <div class="group">
                                <input id="tpass" name="tpass" type="password" placeholder="Password" class="input">
                            </div>
        
                            <div class="group">
                                <input type="submit" name="submit" class="button" value="Sign In">
                            </div>
                        </form>
                        </div>
                
                        <div class="sign-up-htm">
                        <form method="POST" action="daftar_proses.php">
                            <div class="group">
                                <input id="tnama" name="tnama" placeholder="Nama" type="text" class="input">
                            </div>
        
                            <div class="group">
                                <input id="temail" name="temail" placeholder="Email" type="text" class="input">
                            </div>
        
                            <div class="group">
                            <input  id="tpass" name="tpass" type="password" placeholder="Password" class="input">
                            </div>
                            <div class="group">
                                <input placeholder="Repeat password" id="tpass2" name="tpass2" type="password" class="input">
                            </div>
        
                            <div class="group">
                                <input type="submit" name="submit" class="button" value="Sign Up">
                            </div>
                            <div class="hr"></div>
                            <div class="footer">
                                <label for="item-1">Already have an account?</label>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
</body>
</html>
