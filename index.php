<?php 
    require 'function.php';
    require 'login-check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insurance APP</title>
    
    <!-- Floatting Label -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- style for datepicker  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon rotate-n-5">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MHD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-thin fa-car"></i>
                    <span>Insurance Unit</span>
                </a>
            </li>
            <li class="nav-item">
                <a hidden class="nav-link" href="job-site.php">
                    <i class="fas fa-thin fa-sitemap"></i>
                    <span>Job Site</span>
                </a>
            </li>

            <!-- Divider -->
            <hr hidden class="sidebar-divider">

            <!-- Heading -->
            <div hidden class="sidebar-heading">
                Action
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a hidden class="nav-link" href="settings.php">
                    <i class="fas fa-thin fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h1 class="h3 mb-0 text-gray-800">UNIT INSURANCE</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                Counter - Alerts
                                <?php
                                    $getAllAlert = mysqli_query($conn, "SELECT * FROM alert WHERE status = 1");
                                    $count = mysqli_num_rows($getAllAlert);
                                    if($count > 9){
                                        $count = "9+";
                                    }
                                ?>
                                    <span class="badge badge-danger badge-counter"><?=$count;?></span>
                            </a>
                            Dropdown - Alerts
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    ALLERTS STATUS
                                </h6>
                                <?php                                                   
                                    $getAllExistAlert= mysqli_query($conn, "SELECT * FROM alert WHERE status = 1");
                                    while ($alert = mysqli_fetch_array($getAllExistAlert)){
                                        $message = $alert['message'];
                                        $idInsurance = $alert['idInsurance'];
                                        $status = $alert['status'];
                                        $date = $alert['date'];
                                        // $newDate = date("M d, Y", strtotime($date))
                                ?>
                                        <a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#edit<?=$idInsurance?>">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-warning">
                                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500"><?=$date;?></div>
                                                <span class="font-weight-bold"><?=$message;?></span>
                                            </div>
                                        </a>
                                        
                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="show-all-alert.php">Show All Alerts</a> 
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"src="img/Company.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a hidden class="dropdown-item" href="settings.php" >
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div hidden class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#myModal">New Insurance</a>
                        </div> -->
                        <div class="card-body">
                            <div class="faa py-3">

                                <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#myModal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">New Insurance</span>
                                </a>
                                <a href="report-insurance.php" class="btn btn-primary btn-icon-split" >
                                    <span class="icon text-white-50">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span class="text">Generate Report</span>
                                </a>

                            </div>
                            <?php
                                $getAllExistAlert= mysqli_query($conn, "SELECT * FROM alert WHERE status = 1");
                                while ($alert = mysqli_fetch_array($getAllExistAlert)){
                                    $message = $alert['message'];
                                    $idInsurance = $alert['idInsurance'];
                                    $status = $alert['status'];
                                    $date = $alert['date'];
                            ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <a data-toggle="modal" data-target="#edit<?=$idInsurance?>">
                                        <strong>Perhatian!</strong> ID Insurance <?=$idInsurance;?> dengan Tanggal <?=$date;?> sudah mendekati tgl periode.
                                    </a>
                                </div>
                                
                            <?php } ?>

                            <div class="table-responsive">
                                <table id="dataTable"  class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Job site</th>
                                            <th>Unit Type</th>
                                            <!-- <th>Chassis</th> -->
                                            <th>Engine</th>
                                            <th>Years</th>
                                            <!-- <th>Door No</th> -->
                                            <th>Ins/Un-Ins</th>
                                            <!-- <th>Polis No</th> -->
                                            <!-- <th>Currency type</th> -->
                                            <!-- <th>Sum Insured</th> -->
                                            <!-- <th>Rate</th> -->
                                            <th>startPeriode</th>
                                            <th>endPeriode</th>
                                            <!-- <th>Amount</th> -->
                                            <!-- <th>Comments</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $getAllInsuranceUnit = mysqli_query($conn, 'SELECT * FROM insuranceUnit i, JobSite j WHERE i.idJobSite = j.idJobSite');
                                            $i = 1;
                                            while ($insuranceUnit = mysqli_fetch_array($getAllInsuranceUnit)){
                                                $idInsurance = $insuranceUnit['idInsurance'];
                                                $jobSiteName = $insuranceUnit['jobSiteName'];
                                                $unitType = $insuranceUnit['unitType'];
                                                $chassis = $insuranceUnit['chassis'];
                                                $engine = $insuranceUnit['engine'];
                                                $years = $insuranceUnit['years'];
                                                $doorNo = $insuranceUnit['doorNo'];
                                                $insOrUnIns = $insuranceUnit['insOrUnIns'];
                                                $polisNo = $insuranceUnit['polisNo'];
                                                $currency = $insuranceUnit['currency'];
                                                $sumInsured = $insuranceUnit['sumInsured'];
                                                $rate = $insuranceUnit['rate'];
                                                $startPeriode = $insuranceUnit['startPeriode'];
                                                $endPeriode = $insuranceUnit['endPeriode'];
                                                $amount = $insuranceUnit['amount'];
                                                $comments = $insuranceUnit['comments'];
                                                $idJobSite = $insuranceUnit['idJobSite'];

                                        ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$jobSiteName;?></td>
                                                    <td><?=$unitType;?></td>
                                                    <!-- <td><?=$chassis;?></td> -->
                                                    <td><?=$engine;?></td>
                                                    <td><?=$years;?></td>
                                                    <!-- <td><?=$doorNo;?></td> -->
                                                    <td><?=$insOrUnIns;?></td>
                                                    <!-- <td><?=$polisNo;?></td> -->
                                                    <!-- <td><?=$currency;?></td> -->
                                                    <!-- <td><?=$sumInsured;?></td> -->
                                                    <!-- <td><?=$rate;?></td> -->
                                                    <td><?=$startPeriode;?></td>
                                                    <td><?=$endPeriode;?></td>
                                                    <!-- <td><?=$amount;?></td> -->
                                                    <!-- <td><?=$comments;?></td> -->

                                                    <td>
                                                        <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                            <!-- <a type="button" class="btn btn-info"  href="detail.php?idInsurance=<?=$idInsurance?>" name= "view">
                                                                View
                                                            </a> -->
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#view<?=$idInsurance?>">
                                                                View
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?=$idInsurance?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete<?=$idInsurance?>">
                                                                Delete
                                                            </button>
                                                        <!-- </div> -->
                                                    </td>
                                                </tr>
                                                

                                                <!-- View Modal -->
                                                <div class="modal fade" id="view<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Details Insuracne</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->                                                                
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Job Site Name</label>
                                                                            <label class="form-floating col-md-8">: <?=$jobSiteName;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Unit Type</label>
                                                                            <label class="form-floating col-md-8">: <?=$unitType;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Chassis</label>
                                                                            <label class="form-floating col-md-8">: <?=$chassis;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Engine</label>
                                                                            <label class="form-floating col-md-8">: <?=$engine;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Years</label>
                                                                            <label class="form-floating col-md-8">: <?=$years;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Door No</label>
                                                                            <label class="form-floating col-md-8">: <?=$doorNo;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">ins or UnIns</label>
                                                                            <label class="form-floating col-md-8">: <?=$insOrUnIns;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Polis No</label>
                                                                            <label class="form-floating col-md-8">: <?=$polisNo;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Currency</label>
                                                                            <label class="form-floating col-md-8">: <?=$currency;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Sum Insured</label>
                                                                            <label class="form-floating col-md-8">: <?=$sumInsured;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Rate</label>
                                                                            <label class="form-floating col-md-8">: <?=$rate;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Start Periode</label>
                                                                            <label class="form-floating col-md-8">: <?=$startPeriode;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">End Periode</label>
                                                                            <label class="form-floating col-md-8">: <?=$endPeriode;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Amount</label>
                                                                            <label class="form-floating col-md-8">: <?=$amount;?></label>
                                                                        </div> 
                                                                        <div class="form-row">
                                                                            <label class="form-floating col-md-4">Comments</label>
                                                                            <label class="form-floating col-md-8">: <?=$comments;?></label>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Edit    Modal -->
                                                <div class="modal fade" id="edit<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <div class="container">
                                                                    <h4><span class="label label-default">Update Insurance</span></h4>
                                                                    <h6>Site : <span class="label label-default"><?=$jobSiteName;?></span></h6>
                                                                    <h6>Unit Type : <span class="label label-default"><?=$unitType;?></span></h6>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <div class="form-floating mb-3">
                                                                            <select  name="jobSite" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                                <option value="<?=$idJobSite;?>"><?=$jobSiteName;?></option> 
                                                                                <?php
                                                                                    $getJobSite = mysqli_query($conn, "SELECT * FROM JobSite") or die("Could not search!");
                                                                                    while($jobSiteArray = mysqli_fetch_array($getJobSite)){
                                                                                        $idJobSite2 = $jobSiteArray['idJobSite'];
                                                                                        $jobSiteName = $jobSiteArray['jobSiteName'];
                                                                                        if($idJobSite2 != $idJobSite){
                                                                                            ?>
                                                                                                <option value="<?=$idJobSite2;?>"><?=$jobSiteName;?></option> 
                                                                                            <?php
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </select>
                                                                            <!-- <label for="floatingInput">Job Site</label> -->
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-floating mb-3">
                                                                        <input type="hidden" name="unitType" placeholder="Unit Type" class="form-control" id="floatingInput" value = "<?=$unitType;?>" required>
                                                                        <!-- <label for="floatingInput">Unit Type</label> -->
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="hidden" name="chassis" placeholder="Chassis" class="form-control" id="floatingInput" value = "<?=$chassis;?>" required>
                                                                        <!-- <label for="floatingInput">Chassis</label> -->
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-floating col-md-5">
                                                                            <input type="hidden" name="engine" placeholder="Engine" class="form-control" id="floatingInput" value = "<?=$engine;?>" required>
                                                                            <!-- <label for="floatingInput">Engine</label> -->
                                                                        </div>
                                                                        <div class="form-floating col-md-4">
                                                                            <input type="hidden" name="doorNo" placeholder="Door No" class="form-control" id="floatingInput" value = "<?=$doorNo;?>" required>
                                                                            <!-- <label for="floatingInput">Door No</label> -->
                                                                        </div>
                                                                        <div class="form-floating col-md-3">
                                                                            <input type="hidden" name="years" placeholder="Year" id="datepicker" class="form-control"  value = "<?=$years;?>" required>
                                                                            <!-- <label class="control-label" for="datepicker">Year</label> -->
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-4">
                                                                                <select name="insOrUnIns" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                                                    <?php if($insOrUnIns == "unInsurance"){ ?>
                                                                                        <option value="insurance" >Insurance</option>
                                                                                        <option value="unInsurance" Selected>UnInsurance</option>   
                                                                                    <?php }else{ ?>                                  
                                                                                        <option value="insurance" Selected>Insurance</option> 
                                                                                        <option value="unInsurance">UnInsurance</option> 
                                                                                    <?php } ?> 

                                                                                </select>
                                                                                <label for="inlineFormCustomSelect">ins or UnIns</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-8">
                                                                                <input type="text" name="polisNo" placeholder="Polis No" class="form-control" id="floatingInput" value = "<?=$polisNo;?>" required>
                                                                                <label for="floatingInput">Polis No</label>
                                                                            </div>
                                                                        </div>                                                                                                                       
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-3">
                                                                                <select name="currency" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                                                    <?php if($currency == "usd"){ ?>
                                                                                        <option value="rp" >Rp</option>
                                                                                        <option value="usd" Selected>USD</option>   
                                                                                    <?php }else{ ?>
                                                                                        <option value="rp" Selected>Rp</option>
                                                                                        <option value="usd">USD</option>  
                                                                                    <?php } ?>
                                                                                </select>
                                                                                
                                                                                <label for="inlineFormCustomSelect">Currency</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-5">
                                                                                <input type="text" name="sumInsured" placeholder="Sum Insured" class="form-control" id="floatingInput" value = "<?=$sumInsured;?>" required>
                                                                                <label for="floatingInput">Sum Insured</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-4">
                                                                                <input type="text" name="rate" placeholder="Rate" class="form-control" id="floatingInput" value = "<?=$rate;?>" required>
                                                                                <label for="floatingInput">Rate</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-4">
                                                                                <input type="text" name="startPeriode" placeholder="Start Periode" class="form-control" id="floatingInput" value = "<?=$startPeriode;?>" data-sb-validations="required" autocomplete="off">
                                                                                <label for="periode">Start Periode</label>
                                                                                <div class="invalid-feedback" data-sb-feedback="periode:required">A Start Periode is required.</div>
                                                                            </div>
                                                                            <div class="form-floating col-md-4">
                                                                                <input type="text" name="endPeriode" placeholder="End Periode" class="form-control" id="floatingInput" value = "<?=$endPeriode;?>" data-sb-validations="required" autocomplete="off">
                                                                                <label for="periode">End Periode</label>
                                                                                <div class="invalid-feedback" data-sb-feedback="periode:required">A End Periode is required.</div>
                                                                            </div>
                                                                            <div class="form-floating col-md-4">
                                                                                <input type="text" name="amount" placeholder="Amount" class="form-control" id="floatingInput" value = "<?=$amount;?>" required>
                                                                                <label for="floatingInput">Amount</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px"><?=$comments;?></textarea>
                                                                            <label for="floatingTextarea2">Comments</label>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="idInsurance" value="<?=$idInsurance?>" class="form-control">
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" name="updateInsurance" class="btn btn-warning">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Delete Insuracne</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="container">                                   
                                                                        <h4><span class="label label-default">Are you sure to delete </span></h4>
                                                                        <h6>Site : <span class="label label-default"><?=$jobSiteName;?></span></h6>
                                                                        <h6>Unit Type : <span class="label label-default"><?=$unitType;?></span></h6>
                                                                    </div>                                                                 <div class="form-floating mb-3">
                                                                    <input type="hidden" name="idInsurance" value="<?=$idInsurance?>" class="form-control">
                                                                    <input type="hidden" name="endPeriode" value="<?=$endPeriode?>" class="form-control">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="DeleteInsurance" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->



            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto bg-white">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <span>Copyright &copy; MHD 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->  
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <!-- Insert New Insurance Modal -->
     <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Insert New Insurance</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <select name="jobSite" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect floatingInput" placeholder="Unit Type" required>
                                <?php
                                    // Select rows froms Jobsite table
                                    $getJobSite = mysqli_query($conn, "SELECT * FROM JobSite");
                                    while($jobSiteArray = mysqli_fetch_array($getJobSite)){
                                        $idJobSite = $jobSiteArray['idJobSite'];
                                        $jobSiteName = $jobSiteArray['jobSiteName'];
                                        ?>
                                            <option value="<?=$idJobSite;?>"><?=$jobSiteName;?></option> 
                                        <?php
                                    } 
                                ?>
                            </select>
                             <!-- to show floating lable -->
                            <label for="floatingInput">Job Site</label>
                        </div>
                        <div class="form-floating mb-3">
                            <!-- for required input use tag required instead -->
                            <input type="text" name="unitType" placeholder="Unit Type" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Unit Type</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="chassis" placeholder="Chassis" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Chassis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-5">
                                    <input type="number" name="engine" placeholder="Engine" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Engine</label>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="number" name="doorNo" placeholder="Door No" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Door No</label>
                                </div>
                                <div class="form-floating col-md-3">
                                    <!-- autocomplete="off" for disable input text autocomplete  -->
                                    <input type="text" name="years" placeholder="Year" id="datepicker" class="form-control" required autocomplete="off">
                                    <label class="control-label" for="datepicker">Year</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-4">
                                    <select name="insOrUnIns" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option value="insurance" Selected>Insurance</option> 
                                        <option value="unInsurance">UnInsurance</option> 
                                    </select>
                                    <label for="inlineFormCustomSelect">Ins or UnIns</label>
                                </div>
                                <div class="form-floating col-md-8">
                                    <input type="text" name="polisNo" placeholder="Polis No" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Polis No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-3">
                                    <select name="currency" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option value="rp" Selected>Rp</option> 
                                        <option value="usd">USD</option> 
                                    </select>
                                    <label for="inlineFormCustomSelect">Currency</label>
                                </div>
                                <div class="form-floating col-md-5">
                                    <input type="number" name="sumInsured" placeholder="Sum Insured" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Sum Insured</label>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="text" name="rate" placeholder="Rate" class="form-control" id="floatingInput" data-sb-validations="required" >
                                    <label for="floatingInput">Rate</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-4">
                                    <input type="text" name="startPeriode" placeholder="Start Periode" class="form-control" id="floatingInput" data-sb-validations="required" autocomplete="off">
                                    <label for="periode">Start Periode</label>
                                    <div class="invalid-feedback" data-sb-feedback="periode:required">A Start Periode is required.</div>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="text" name="endPeriode" placeholder="End Periode" class="form-control" id="floatingInput" data-sb-validations="required" autocomplete="off">
                                    <label for="periode">End Periode</label>
                                    <div class="invalid-feedback" data-sb-feedback="periode:required">A End Periode is required.</div>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="number" name="amount" placeholder="Amount" class="form-control" id="floatingInput" data-sb-validations="required" >
                                    <label for="floatingInput">Amount</label>
                                    <div class="invalid-feedback" data-sb-feedback="floatingInput:required">A Amount is required.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="addNewInsurance" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

</body>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
        
    <!-- script for all datepicker  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>


    <script>
        $(document).ready( function() {
            $('#dataTable').DataTable( {
                "bDestroy": true,
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]]
            });     
            // Format tanggal untuk tahun saja
            $('input[name="years"]').datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years",
                autoclose:true
            });   
            // Format tanggal startPeriode dan endPeriode
            $('input[name="startPeriode"], input[name="endPeriode"]').datepicker({
                showOn: "both",
                format: "yyyy-mm-dd"
            });
            // Mengatur jarak antara startDate dan endDate
            $('input[name="startPeriode"]').on('changeDate', function(selected) {
                var startDate = new Date(selected.date.valueOf());
                $('input[name="endPeriode"]').datepicker('setStartDate', startDate);
                if($('input[name="startPeriode"]').val() > $('input[name="endPeriode"]').val()){
                    $('input[name="endPeriode"]').val($('input[name="startPeriode"]').val());
                }
            });
            // Insert Persentage to rate input
            $("input[name='rate']").on('input', function() {
                $(this).val(function(i, v) {     
                    const n = v.replace('%','');
                    if ( n >= 0 && n <= 100 ) {
                        return v.replace('%','') + '%'     
                    } else {
                        return n.slice(0, -1) + '%'  
                    }
                });  
            });
		
        });

        // Setting Popup Date Mengikuti Modal
        var t ;
        $( document ).on(
            'DOMMouseScroll mousewheel scroll',
            '#myModal', 
            function(){       
                window.clearTimeout( t );
                t = window.setTimeout( function(){$('input[name="years"],input[name="startPeriode"], input[name="endPeriode"]').datepicker('place')
                }, 100 );        
            }
        );
  
    </script>

</html>