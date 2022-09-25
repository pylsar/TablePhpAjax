<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

    <div>
        <table id="userTable" class="my-table">
        <thead>
            <tr>
               <th>Id</th>
               <th>FirstName</th>
               <th>LastName</th>
               <th>Mail</th>
               <th>Password</th>
               <th>Buttons</th>
            </tr>
         </thead>
         <tbody id="table">

        </tbody>
        </table>
    </div>
    <div>
        <form>
            <div>
                <label for="firstname">firstname</label>
                <input type="text" id="firstname" />
            </div>
            <div>
                <label for="lastname">lastname</label>
                <input type="text" id="lastname" />
            </div>
            <div>
                <label for="mail">mail</label>
                <input type="mail" id="mail" />
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" id="password" />
            </div>
            <button id="addUser">Add User</button>
        </form>
    </div>


  
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
