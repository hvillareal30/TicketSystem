<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SoViLe Ticket Support System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('CustomerPortal')?>">SoViLe Ticket Support System</a>
        </div>
        <ul class="nav navbar">
            <li><a href="<?php echo base_url('CustomerPortal/usermanagementindex');?>">User Management</a></li>
            <li><a href="<?php echo base_url('CustomerPortal/adminticketindex');?>">Ticket Management</a></li>
            <li><a href="<?php echo base_url('CustomerPortal/adminreports');?>">Reports</a></li>
        </ul>
    <ul class="nav navbar-nav navbar navbar-right">
        
        <li><a href="<?php echo base_url('CustomerPortal/adminlogout')?>"><span class="glyphicon glyphicon-login"></span>Logout</a></li>
    </ul>
</div>


</nav>

<div class="container">