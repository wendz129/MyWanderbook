<html>
    <head>

        <title>Mybook | Signup</title>
    </head>

    <style>
        /* CSS */
        #bar  {
            height:100px;
            background-color: rgb(59,89,152);
            color: #d9dfeb;
            padding: 4px;
        }

        #signup_button{

            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding:4px;
            border-radius: 4px;
            float: right;
        }

        #bar2 {
            background-color: white;
            width:800px;
            margin:auto;
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text {
            
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #aaa;
            padding: 4px;
            font-size: 14px;
        }

        #button {

            width: 300px;
            height: 40px;
            border-radius: 4px;
            border: none;
            background-color: rgb(59,89,152);
            color: white;
        }

    </style>

    <body style="font-family: tahoma;background-color:#e9ebee;">

        <div id="bar">

            <div style="font-size: 40px;">MyWanderbook</div>
            <div id="signup_button">Login</div>
            
        </div>

        <div id="bar2">

            Sign up to Mybook<br><br>

            <input type="text" id="text" placeholder="First name"><br><br>
            <input type="text" id="text" placeholder="Last name"><br><br>

           <span style="font-weight: normal;">Gender:</span><br>
            <select id="text">
                
                <option>Male</option>
                <option>Female</option>

            </select>
            <br><br>
            <input type="email" id="text" placeholder="Email"><br><br>

            <input type="password" id="text" placeholder="Password"><br><br>
            <input type="password" id="text" placeholder="Retype Password"><br><br>

            <input type="submit" id="button" value="Sign up">
            <br><br><br>

        </div>

    </body>

    <!-- this is scratch with database OOP PHP with MySQL Database -->

<!-- 
   

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {

        
    }
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

<html>
    <head>
        <title>Mybook | Signup</title>
    </head>
    <style>

        #bar {
            height: 100px;
            background-color: rgb(59, 89, 152);
            color: #d9dfeb;
            padding: 4px;
        }

        #signup_button {
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
        }

        #bar2 {
            background-color: white;
            width: 800px;
            margin: auto;
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #aaa;
            padding: 4px;
            font-size: 14px;
        }

        #button {
            width: 300px;
            height: 40px;
            border-radius: 4px;
            border: none;
            background-color: rgb(59, 89, 152);
            color: white;
        }
        
    </style>

    <body style="font-family: tahoma; background-color:#e9ebee;">

        <div id="bar">
            
            <div style="font-size: 40px;">Mybook</div>
            <div id="signup_button">Login</div>
            
        </div>

        <div id="bar2">

            Sign up to Mybook<br><br>

            <form method="post" action="">

            <input name="first_name" type="text" id="text" placeholder="First name"><br><br>
            <input name="last_name" type="text" id="text" placeholder="Last name"><br><br>
            
            <span style="font-weight: normal;">Gender</span><br>
            <select id="text" name="gender">

                <option>Male</option>
                <option>Female</option>

            </select>
            <br><br>
            <input name="email" type="email" id="text" placeholder="Email"><br><br>

            <input name="password" type="password" id="text" placeholder="Password"><br><br>
            <input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>

            <input type="submit" id="button" value="Signup">
            <br><br><br>

        </form>

        </div>
    </body>

</html> -->
    

</html>

