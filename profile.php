<?php
include 'config.php';

$admin = new Admin();

if (!isset($_SESSION['u_id'])) {
       header("location:login.php");
       //$_SESSION is from admin loginback.php page
       //checks admin login d or not, otherwise it will redirect to login page
}
//$admin= new admin();
//$stmt=$admin->ret("SELECT * FROM `product` WHERE `ct_id`='$ctid'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>profile with data and skills - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
<div class="main-body">

<nav aria-label="breadcrumb" class="main-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Profile</li>
</ol>
</nav>

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
<div class="mt-3">
<h4><?php echo $_SESSION['u_name'];?></h4>
<p class="text-secondary mb-1">Full Stack Developer</p>
<p class="text-muted font-size-sm"><?php echo $_SESSION['u_address'];?></p>
<button class="btn btn-primary">Follow</button>
<button class="btn btn-outline-primary">Message</button>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $_SESSION['u_name'];?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197f706959736c72746c71377875"><?php echo $_SESSION['u_email'];?><!--[email&#160;protected]--></a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $_SESSION['u_phone'];?>

</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $_SESSION['u_address'];?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-info " target="__blank" href="update_profile.php">Edit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>