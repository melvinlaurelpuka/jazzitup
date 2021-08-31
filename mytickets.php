<!DOCTYPE html>
<html lang="en">

<?php include('head.php');
include('config.php');
  
  if(isset($_POST['btn-update-list'])) {
    $ticket_id = $_POST['ticket_id'];
    $name = $_POST['name'];
    $ktp_id = $_POST['ktp_id'];
    $email = $_POST['email'];
    $ticket_type = $_POST['ticket_type'];
    $qty = $_POST['qty'];
  
    $sql = mysqli_query($koneksi, "UPDATE tickets SET name = '$name', ktp_id = '$ktp_id', email = '$email', ticket_type = '$ticket_type', qty = '$qty' WHERE ticket_id = '$ticket_id'") or die (mysqli_error($koneksi));
  
    if($sql) {
      header("Location: mytickets.php");
      exit();
    } else {
      echo "<script> alert('Gagal memperbaharui order') </script>";
    }
  }
  
  if(isset($_GET['ticket_id'])){
    $id = $_GET['ticket_id'];
  
    $sql = mysqli_query($koneksi, "DELETE FROM tickets WHERE ticket_id = '$ticket_id'") or die (mysqli_error($koneksi));
  
    if($sql) {
      header("Location: mytickets.php");
      exit();
    } else {
      echo "<script> alert('Gagal menghapus order') </script>";
    }
  }


?>
<body background="backgroundbio.jpg">
    <div class="container">
        <?php include('navbar.php')?>

        <h3 class="header-myticket mt-4">Your tickets and their progress:</h3>

        <table class="table mt-5">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">No KTP</th>
                  <th scope="col">Email</th>
                  <th scope="col">Ticket Type</th>
                  <th scope="col">Quantity</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  $no = 1;
                  $sql = mysqli_query($koneksi, "SELECT * FROM tickets") or die(mysqli_error($koneksi));
                  while($data = mysqli_fetch_assoc($sql)) {
                    echo'
                    <tr>
                      <td>' . $no++ . '</td>
                      <td>' . $data['name'] . '</td>
                      <td>' . $data['ktp_id'] . '</td>
                      <td>' . $data['email'] . '</td>
                      <td>' . $data['ticket_type'] . '</td>
                      <td>' . $data['qty'] . '</td>
                      <td>
                          <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal' . $data['ticket_id'] . '" style="float:right">
                          + Edit Order
                        </button>
                        <a href="?ticket_id=' . $data['ticket_id'] . '" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    ';
                  ?>

                  <div class="modal fade" id="exampleModal<?= $data['ticket_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update List</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST">
                          <div class="modal-body">

                            <div class="form-group">
                              <label>Name</label>
                              <input type="hidden" name="ticket_id" value="<?= $data['ticket_id'] ?>">
                              <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>" required>
                            </div>

                            <div class="form-group">
                              <label>No KTP</label>>
                              <input type="text" name="ktp_id" class="form-control" value="<?= $data['ktp_id'] ?>" required>
                            </div>

                            <div class="form-group">
                              <label>Email</label>>
                              <input type="text" name="email" class="form-control" value="<?= $data['email'] ?>" required>
                            </div>

                            <div class="form-group">
                              <label>Ticket Type</label>>
                              <input type="text" name="ticket_type" class="form-control" value="<?= $data['ticket_type'] ?>" required>
                            </div>

                            <div class="form-group">
                              <label>Quantity</label>>
                              <input type="text" name="qty" class="form-control" value="<?= $data['qty'] ?>" required>
                            </div>

                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="btn-update-list" class="btn btn-primary">Update Order</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <?php 
                  }
                 ?>
              </tbody>
            </table>
        

    </div>
</body>
</html>