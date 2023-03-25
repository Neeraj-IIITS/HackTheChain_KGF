<?php
include "header.php";

if (!isset($_SESSION)) {session_start();}
include "dbconnection.php";
if (!isset($_SESSION['adminid'])) {
    echo "<script>window.location='adminloginpanel.php'; </script>";
}
if(isset($_SESSION['adminid']))
{
	$sql = "SELECT * FROM admin WHERE admin_id='$_SESSION[adminid]'";
	$qsql = mysqli_query($con,$sql);
	$rsdisp = mysqli_fetch_array($qsql);
}
?>




<main id="main">

    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center" data-aos="zoom-in">
                <br><br>
                <h3>College Dashboard</h3>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="info mt-4">
                    <form method="post" action="" name="frmcstview">
                        <table class="table table-striped table-bordered" style="width:100%" class="datatable">
                            <tbody>
                                <tr>
                                    <th width="236" height="34" align="right"><strong>Your Name:</strong></th>
                                    <td width="874"><?php echo $rsdisp['admin_name']; ?></td>
                                </tr>
                                    <th height="39" align="left"><strong>Email ID:</strong></th>
                                    <td><?php echo $rsdisp['login_id']; ?></td>
                                </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="info mt-4">
                </div>
            </div>
        </div>
    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
include("footer.php");
?>
<script>
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>