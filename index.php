<?php

require "config.php";

use App\User;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
}

$user = User::getById($_SESSION['user']['id']);

?>
<style>
    body{
        text-align: center;
        background-color: #FF895D;
    }

    h4{
        color:red; 
        font-size:50px;
    }

    .name{
        border: 16px;
        border-style: outset;
        border-radius: 10px;
        border-color: #C1E771;
        padding: -3px;
        border-spacing: 15px;
        background-color: #FFFD7E;
    }

    table{
        text-align: center;
        margin-left: auto; 
        margin-right: auto;
        margin-top: 30px;
        border-radius: 10px;
        font-size: 25px;
        border-collapse: collapse;
        border: 10px solid black;
    }

    .head1{
        font-size: 70px;
    }

    .head2{
        font-size: 60px;
    }

    .chapter{
        font-size: 30px;
        text-align: justify; 
        text-align-last: center;
    }

    button{
        font-size:25px;
        font-family: arial;
        font-weight: bold;
    }


</style>
<!DOCTYPE html>
<html>
<div class ="main">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
    </head>
    <body>
    <div class="name">
        <h1 class ="head1">Welcome <?php echo $_SESSION['user']['fullname']; ?></h1>

        <h2 class ="head2">User Information</h2>
    </div>

    <table bgcolor="gold" border="1" cellpadding="10">
        <tr>
            <td>User ID</td>
            <td>
                <strong>
                    <?php echo $user->getId();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>
                <strong>
                    <?php echo $user->getFirstName();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td>
                <strong>
                    <?php echo $user->getMiddleName();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <strong>
                    <?php echo $user->getLastName();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <strong>
                    <?php echo $user->getEmail();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Birthdate</td>
            <td>
                <strong>
                    <?php echo $user->getBirthdate();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <strong>
                    <?php echo $user->getGender();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <strong>
                    <?php echo $user->getAddress();?>
                </strong>
            </td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td>
                <strong>
                    <?php echo $user->getContactNumber();?>
                </strong>
            </td>
        </tr>
    </table>

    <div class = "chapter">
        <h4>Ecclesiastes 3:1-8</h4>
        <pre style= "color:#2D50FF">
        There is a time for everything,
            and a season for every activity under the heavens:
            a time to be born and a time to die,
            a time to plant and a time to uproot,
            a time to kill and a time to heal,
            a time to tear down and a time to build,
            a time to weep and a time to laugh,
            a time to mourn and a time to dance,
            a time to scatter stones and a time to gather them,
            a time to embrace and a time to refrain from embracing,
            a time to search and a time to give up,
            a time to keep and a time to throw away,
            a time to tear and a time to mend,
            a time to be silent and a time to speak,
            a time to love and a time to hate,
            a time for war and a time for peace.
        </pre>
    </div>
    <button onclick="window.location.href='logout.php'">LOGOUT</button>
    </body>
</div>
</html>

<hr />
<pre>
SESSION DATA

<?php
var_dump($_SESSION);
?>
</pre>