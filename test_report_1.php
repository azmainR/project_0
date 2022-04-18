<?php
ob_start();
include('header.php');


// session();

if (isset($_GET['mid'])) { //isset--checks for if a variable is set to something and if that is not null 
    /* $manager_id = $_GET['mid']; */

    /* echo $manager_id; */
}


require_once('./tcpdf/tcpdf.php');
class MYPDF extends TCPDF
{

    public function Header()
    {
    }
    public function Footer()
    {
        $this->setPrintFooter(true);
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', '', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'C');
    }
}

function fetch_data()
{
    $output = '';
    include('dbconn.php');

    $manager_id = $_GET['mid'];

    $sql = "select e.employee_id , e.first_name || ' ' || e.last_name employee_name,
    d.department_name, e.commission_pct, e.email || ', ' || e.phone_number 
    contact_info, e.hire_date, j.job_title, e.salary, 
    d.department_name, l.city || ', ' || l.state_province 
    || ', ' || c.country_name || ', ' || r.region_name address 
    from employees e, (select * from employees) f, departments d, 
    jobs j, locations l, countries c, regions r
    where e.manager_id = f.employee_id and f.department_id=d.department_id
    and e.job_id=j.job_id and d.location_id=l.location_id 
    and l.country_id=c.country_id and c.region_id=r.region_id
    and e.manager_id= '$manager_id' ";

    $stid = oci_parse($conn, $sql);
    oci_execute($stid);
    while (($row = oci_fetch_assoc($stid))) {

        $output .= '<tr nobr="true" style="text-align:center;">
         
             
            <td>' . $row["EMPLOYEE_ID"] . '</td>  
            <td>' . $row["EMPLOYEE_NAME"] . '</td>
            <td>' . $row["CONTACT_INFO"] . '</td>
            <td>' . $row["HIRE_DATE"] . '</td>
            <td>' . $row["JOB_TITLE"] . '</td>
            <td>' . $row["SALARY"] . '</td>  
            <td>' . $row["COMMISSION_PCT"] . '</td>
            <td>' . $row["DEPARTMENT_NAME"] . '</td>
            <td>' . $row["ADDRESS"] . '</td>
            </tr>  
        ';
    }

    return $output;
}
if (isset($_POST["create_pdf"])) {
    $obj_pdf = new MYPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    /* ob_start(); */
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Sample data to PDF using TCPDF in PHP");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');


    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    /* $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT); */
    $obj_pdf->SetMargins(10, 15, 10);
    //Definition: SetMargins(Left,Top,Right)
    $obj_pdf->setPrintHeader(false);
    /* $obj_pdf->setPrintFooter(true); */

    $obj_pdf->SetAutoPageBreak(TRUE, 20);
    $obj_pdf->SetFont('helvetica', '', 9);
    /* $obj_pdf->getPage(); */
    $obj_pdf->AddPage();
    $content = '';
    $content .= ' 
      <h3 align="center">Test Report_PDF</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="1" width="100%">  
           <tr style="text-align:center;">  
           <th>Employee ID</th>
           <th>Employee Name</th>
           <th>Contact INFO</th>
           <th>Hired Date</th>
           <th>Job Title</th>
           <th>Salary</th>
           <th>% Commission</th>
           <th>Department</th>
           <th>Location Info</th>
           </tr>  
      ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    ob_end_clean();
    $obj_pdf->Output('sample.pdf', 'I'); //I-opens in PDF Viewer; D-gives download panel
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Report Uno</title>
    <link rel="stylesheet" href="form_style.css">

    <script>
        /* Excel Import */

        function exportToExcel(tableID, filename = '') {
            var downloadurl;
            var dataFileType = 'application/vnd.ms-excel';
            /* var dataFileType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'; */
            var tableSelect = document.getElementById(tableID);
            var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'report.xls';

            // Create download link element
            downloadurl = document.createElement("a");

            document.body.appendChild(downloadurl);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTMLData], {
                    type: dataFileType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

                // Setting the file name
                downloadurl.download = filename;

                //triggering the function
                downloadurl.click();
            }
        }
        /* DataTable Activation */
        $(document).ready(function() {
            $('#tblData').DataTable({
                /* dom: 'lBfrtip',
                buttons: [
                    'csv','pdf'
                ], */
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                exportOptions: {
                    columns: ':visible'
                    /* modifier: {
                        order: 'current',
                        page: 'all',
                        selected: true,
                    } */
                }
            });
        });
    </script>



</head>

<body>
    <div id="report_card" class="card" style="max-width:90%; margin: 1px auto;">

        <div class="card-header " style="background-color: #d9f2e6;">
            <div class="float-left"><b> Product Information</b></div>
            <div class="float-right">
                <form method="post">
                    <input type="text" style="display: none;" name='emp1' value=<?php $_POST['emp1'] ?> />
                    <input type="text" style="display: none;" name='emp2' value=<?php $_POST['emp2'] ?> />
                    <a class="btn btn-primary btn-sm btn-rounded btn-icon left-icon" href="javascript:location.reload(true)"><i class="fas fa-redo"></i>&nbsp;Refresh</a>
                    <button class="btn btn-success btn-sm btn-rounded btn-icon left-icon" onclick="exportToExcel('tblData')"> <i class="far fa-file-excel"></i>&nbsp;Excel</button>
                    <button type="submit" name="create_pdf" class="btn btn-sm btn-danger"><i class="far fa-file-pdf"></i>&nbsp;PDF</button>
                </form>
            </div>

        </div>

        <!-- style="max-width:100%" -->
        <table id="tblData" class="table table-md table-responsive
  table-hover table-bordered table-striped">
            <thead>
                <tr style="text-align:center;">
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Contact INFO</th>
                    <th>Hired Date</th>
                    <th>Job Title</th>
                    <th>Salary</th>
                    <th>% Commission</th>
                    <th>Department</th>
                    <th>Location Info</th>
                </tr>
            </thead>
            <tbody>

                <?php
                echo fetch_data();
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>