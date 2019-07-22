<?php
require_once '../vendor/autoload.php';

use App\classes\Users;

$user = new Users();

$result = $user->showRegisterUsers();

$message='';
$style = 'none';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $message = $user->showDeleteUsers($id);
    $style = 'block';
}


?>


<?php
require_once 'header.php';
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Register Users Table</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                <h6 class="text-center text-danger" style="display: <?php echo $style; ?>"><?php echo $message; ?></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Gender</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SL No</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Gender</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        <?php
                        $sl = 1;
                        while ($rows = mysqli_fetch_assoc($result)) {

                            ?>

                            <tr>
                                <td><?php echo $sl; ?></td>
                                <td><?php echo $rows['user_name']; ?></td>
                                <td><?php echo $rows['user_email']; ?></td>
                                <td><?php echo $rows['user_gender']; ?></td>
                                <td><?php echo $rows['user_message']; ?></td>
                                <td>
                                    <a href="edit-user.php?id=<?php echo $rows['user_id']; ?>">Edit</a> |
                                    <a href="?id=<?php echo $rows['user_id']; ?>"
                                       onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr>

                            <?php $sl++;
                        } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php
require_once 'footer.php';
?>