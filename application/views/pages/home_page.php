<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <style>
        *{
                margin: 0;
               height: auto;
               width: auto;
               
        }

        .head{
            height:60px;
            width: 100%;
            position: relative;
            background-color: slategray;
            color:aliceblue;
            padding: 20px 30px;
            margin: 0;
            display: flex;
            justify-content: space-evenly;
            align-items: center;

        }
      
        .box{
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 200px;
            margin-right: 200px;
            border-radius: 50px;
            box-sizing: border-box;
            position: relative;
            background-color: beige;
            align-items: center;
            display: inline-flex;
            padding:30px;
            height:180px;
            width:350px;
            text-align: center;
            justify-content: center;



        }
        .container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 200px;
            margin-bottom: 300px;
            margin-left: 100px;
            margin-right: 100px;


        }

        .select{

            display:flex;
            padding: 10px;
            width: 200px;
            justify-content: center;
            
           
            
        }
        h1{
            
            color: black;
            justify-content: center;
            align-items: center;
           
        }
        .drop-down select{
            font-size:18px;
        }

        .admin, .client{
            margin-bottom: 20px;
        }

        .button a{
            text-decoration: none;
            background-color: lightcoral;
            color:aliceblue;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
        }

        .button a:hover{
            background-color: crimson;
        }


    </style>
</head>

<body>
    
    <div class="wrapper">
        <div class="head">
          <h1>Welcome</h1>
            <div class="drop-down">
                <select class="select" onchange="window.location.href=this.value;">
                    <option>Select</option>
                    <option value="<?php echo site_url('pages/admin_login')?>">Admin_page</option>     
                    <option value="<?php echo site_url('pages/client_login')?>">Client_page</option>
                    <option value="<?php echo site_url('#')?>">Login</option>
                    <option value="<?php echo site_url('#')?>">Signup</option>
                   
                   
                </select>
            </div>
        </div>

        <div class="container">
            <div class="box">
                <div class="admin">
                    <h3>Admin Login</h3>
                    <div class="button">
                        <a href="<?php echo site_url('root/admin_login'); ?>">
                           <span class="link">Click here</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box">
            <div class="client">
                    <h3>Client Login</h3>
                    <div class="button">
                        <a href="<?php echo site_url('root/client_login'); ?>">
                            <span class="link">Click here</span>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>