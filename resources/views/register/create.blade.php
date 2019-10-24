


<html>
    <body><head>
        <title>Add New Registeration</title>
        </head> 
        <div class="row">
            <form action="register/store" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <table>
                    <tr>
                        <td>User Name</td>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Enter User Name" name="name"></td>
                        <td><input type="email" placeholder="Enter User Email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Register Role</td>
                        <td>Phone Number</td>
                    </tr>
                    <tr>
                        <td>
                        <select class="custom-select" name="role">
                                <option selected>Select...</option>
                                <option value="1">Administrator</option>
                                <option value="2">Car Owner</option>
                            </select>
                        </td>
                        <td><input type="integer" name="ph" value="95"</td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>Confirm Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                        <td><input type="password" name="confirmpassword"></td>
                    </tr>

                    <tr><td>
                <input type="submit" value="Create"></td>
                    </tr>

                </table>
            </form>
        </div>
        
    </body>
        </html>

