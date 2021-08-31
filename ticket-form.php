<!DOCTYPE html>
<html lang="en">

<?php include('head.php');
include('config.php');

if(isset($_POST["btn-add-new-order"])) {
    $name = $_POST['name'];
    $ktp_id = $_POST['ktp_id'];
    $email = $_POST['email'];
    $ticket_type = $_POST['ticket_type'];
    $qty = $_POST['qty'];
  
    $sql = mysqli_query($koneksi, "INSERT INTO tickets (name, ktp_id, email, ticket_type, qty) VALUES('$name', '$ktp_id', '$email', '$ticket_type', '$qty')") or die (mysqli_error($koneksi));
  
    if($sql) {
    //     echo "<script> alert('Berhasil') </script>";

    // } else{
    //     echo "<script> alert('Gagal') </script>"; }

      header("Location:ticket-form.php");
      exit();
    } else {
      echo "<script> alert('Gagal membeli tiket') </script>";
    }
  }

?>

<body background="backgroundbio.jpg">
    
    <div class="container">
    <?php include('navbar.php') ?>

    <h1 class="header-form mt-3">Buy Tickets</h1>
            <form>

                <div class="form-group mt-5">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>KTP ID</label>
                    <input type="text" name="ktp_id" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label for="inputState">Choose ticket</label>
                    <select id="inputState" class="form-control" name="ticket_type">
                        <option selected>One day pass (Friday)</option>
                        <option>One day pass (Saturday)</option>
                        <option>One day pass (Sunday)</option>
                        <option>Three day pass</option>
                        <option>Special Show</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>

             <button type="submit" name="btn-add-new-order" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>