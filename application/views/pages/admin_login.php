
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_login</title>
</head>
<style>
    *{
        margin: 0;
        height: auto;
        width: auto;
    }

    h1{
        display: inline-flex;
        color: black;

    }
    body{
        align-items: center;
        justify-content: center;
        
    }
    .form{
        height: 500px;
        width: 900px;
        align-self: center;
        align-content: center;
        display: flex;
        position: relative;
        justify-content: space-around;
        align-items: center;
        padding: 30px;
        border: 50px;
        margin-top: 150px;
        margin-bottom: 300px;
        margin-left: 150px;
        margin-right: 150px;
        border-radius: 40px;
        background-color: cornflowerblue;
        color: aliceblue;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

    }

    .label{
        size:30px;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: space-between;
        position: relative;
        display: flex;

    }

    .input{
        color:black;
        justify-content: space-evenly;
        position: relative;
        display: flex;
        align-items: center;
        size:40px;
        padding: 10px;
        border-radius: 20px;
        margin-top: 25px;
        width: 250px;


    }
    .input:hover {
        background-color:cornflowerblue;
    }

    .submit{
        
        background-color: palegreen;
        color:black;
        justify-content: space-evenly;
        position: relative;
        display: inline-block;
        align-items: center;
        size:40px;
        padding:10px 20PX;
        border-radius: 20px;
        margin-top: 25px;
        width: 275px;

    }

    .submit:hover{
        background-color:green;
    }
    
</style>
<body>
    <div class="form">
        <h1>Welcome Back Admin</h1>
    <?php echo form_open('root/validate_admin',['class'=>'openform']); ?>
    <?php echo form_label('Username','uname',['class'=>'label']); ?>
    <?php echo form_input(['name'=>'uname','class'=>'input','placeholder'=>'Username','value'=>set_value('uname')]); ?>
    <?php echo form_label('Password','pass',['class'=>'label']); ?>
    <?php echo form_input(['class'=>'input','name'=>'pass','placeholder'=>'Password','value'=>set_value('pass')]); ?>
    <?php echo form_submit(['name'=>'submit','class'=>'submit','placeholder'=>'Submit','value'=>'submit']);?>
    <?php echo form_close(); ?>
    </div>
   
</body>
</html>
