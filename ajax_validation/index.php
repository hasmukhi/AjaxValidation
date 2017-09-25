<html>
    <head>
        
        <script src="script.js"></script>
    </head>
    <body>

       
                <center><h2>Form Validation Using AJAX</h2></center>
                <!-- Required div starts here -->
                <form action='#' method='post' id="myForm">
                    <center><h3>Fill Your Information!</h3></center>
                    <table align="center">
                        <tr>
                            <td>Username</td>
                            <td><input type='text' name='username' id='username1' onblur="validate('username', this.value)"></td>
                            <td><div id='username'></div></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type='password' name='password' id='password1' onblur="validate('password', this.value)"></td>
                            <td><div id='password'></div></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type='text' name='email' id='email1' onblur="validate('email', this.value)"></td>
                            <td><div id='email'></div></td>
                        </tr>
                        <tr>
                            <td>website</td>
                            <td><input type='text' name='website' id='website1' onblur="validate('website', this.value)"></td>
                            <td><div id='website'></div></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type='button' onclick="checkForm()" value='Submit'></td>
                        </tr>
                    </table>
                </form>
           
    </body>
</html>