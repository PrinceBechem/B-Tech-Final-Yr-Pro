<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>

<?php
include('./constant/connect');
$user = $_SESSION['userId'];
$sql = "SELECT order_id, order_date, client_name, client_contact, paid, due FROM orders WHERE due > 0 AND user_id = '$user'";
$result = $connect->query($sql);


//echo $sql;exit;

    //echo $itemCountRow;exit; 
?>
       <div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">View Debts</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Debts</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Date</th>
                                <th>Customer Name</th>
                                <th>Contact</th>
                                <th>Paid</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['order_id']; ?></td>
                                <td><?php echo $row['order_date']; ?></td>
                                <td><?php echo $row['client_name']; ?></td>
                                <td><?php echo $row['client_contact']; ?></td>
                                <td><?php echo $row['paid']; ?></td>
                                <td><?php echo $row['due']; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./constant/layout/footer.php');?>


