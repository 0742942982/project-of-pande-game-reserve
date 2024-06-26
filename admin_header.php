<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <style>
      *{
            margin: 0;
            padding: 0;
        }
        /* **** nav *****/
        nav{
            background-color:darkorange;
            width: 100%;
            height: 70px;
            position: fixed;
            top: 0;
            z-index: -1;
        }
    
        .dashboard-text{
            line-height: 58px;
            width: 40px;
            color: #fff;
            margin-left: 253px;
            display: inline-flex;
        }
   
        .admin-profile{
            position: relative;
            float: right;
            display: inline-flex;
            padding-right: 5px;
            padding-top: 6px;
        }
        .profile-img{
            border-radius: 50%;
            vertical-align: middle;
            width: 50px;
            height: 50px;
        }
         /* ******** ./nav ********* */

        /*-----sidebar-----------*/
        aside{
            background-color:darkslategrey;
            width: 250px;
            height: 100vh;
            position: fixed;
        }
        .sidebar-list{
            display: block;
            float: left;
            margin-left: 10px;
            padding: 10px;

        }
        ul li{
            list-style-type: none;
            padding: 10px;
        }

        ul li a{
            text-decoration: none;
            font-size: 18px;
            color: #fff;
        }
        .dashboard-profile{
            padding-left: 7px;
            padding-top: 6px;
            line-height: 20px;
        }
        .dashboard-heading{
            float: right;
            line-height: 60px;
            font-size: 20px;
            color: #fff;
           
            margin-right: 78px;
        }
        hr{
            width: 249px;
            margin-top: 10px;
            background-color: #fff;

        }
        
        /* **********   container*****  */
  
        /* ******** ./container******* */
        
    </style>
</head>

    