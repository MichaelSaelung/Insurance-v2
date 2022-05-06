<?php
    require 'function.php';
    require 'login-check.php';    
?>
<html>
<head>
    <title>Unit Insurance</title>


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    

</head>

<body>
    <br>
    <h2>Insurance</h2>
    <h2>PT MANDIRI HERINDO ADIPERKASA</h2>
    <br><br>
        <div class="data-tables datatable-dark">
            <table id="dataTable" class="table table-bordered" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Job site</th>
                        <th>Unit Type</th>
                        <th>Chassis</th>
                        <th>Engine</th>
                        <th>years</th>
                        <th>Door No</th>
                        <th>Ins/Un-Ins</th>
                        <th>Polis No</th>
                        <th>Currency</th>
                        <th>Sum Insured</th>
                        <th>Rate</th>
                        <th>Start Periode</th>
                        <th>End Periode</th>
                        <th>Amount</th>
                        <th>Comments</th>
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
                                <td><?php echo $i++;?></td>
                                <td><?php echo $jobSiteName;?></td>
                                <td><?php echo $unitType;?></td>
                                <td><?php echo $chassis;?></td>
                                <td><?php echo $engine;?></td>
                                <td><?php echo $years;?></td>
                                <td><?php echo $doorNo;?></td>
                                <td><?php echo $insOrUnIns;?></td>
                                <td><?php echo $polisNo++;?></td>
                                <td><?php echo $currency;?></td>
                                <td><?php echo $sumInsured;?></td>
                                <td><?php echo $rate;?></td>
                                <td><?php echo $startPeriode;?></td>
                                <td><?php echo $endPeriode;?></td>
                                <td><?php echo $amount;?></td>
                                <td><?php echo $comments;?></td>                     
                            </tr>
                    <?php
                        }
                    ?>


                </tbody>
            </table>
         
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


<script>
$(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        "bDestroy": true,
        "lengthMenu": [[5, 10, 15, 25, -1], [5, 10, 15, 25, "All"]],
        buttons: [
            {
                text: 'Back',
                className: 'btn btn-danger',
                action: function ( e, dt, button, config ) {
                    window.location = 'index.php';
                }
            },
            // 'copy','csv',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                className: 'btn btn-danger'
            },
            // {
            //     extend: 'pdf',
            //     title: 'Customized PDF Title',
            //     filename: 'customized_pdf_file_name',
            //     className: 'btn btn-danger'
            // }, 
            {
                extend: 'excel',
                title: 'Customized EXCEL Title',
                filename: 'customized_excel_file_name',
                className: 'btn btn-danger'
            }, 
            {
                extend: 'print',
                text: 'Print current page',
                title: 'Customized EXCEL Title',
                filename: 'customized_excel_file_name',
                autoPrint: true,
                className: 'btn btn-danger',
                exportOptions: {
                    columns: ':visible',
                },
                customize: function (win) {
                    $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                    $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                        $(this).css('background-color','#D0D0D0');
                    });
                    $(win.document.body).find('h1').css('text-align','center');
                }
            }
        ]
        
    } );

} );

</script>
	

</body>

</html>