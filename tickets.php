<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>


<body background= "backgroundbio.jpg">
    <div class="container">
        <?php include('navbar.php') ?>

        <div class="title-name mt-4">
            <h1>Tickets Available</h1>
        </div>

        <div class="row mt-5">
              <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card" >
                    <img src="1day.png" class="card-img-top" alt="Can't load">
                    <div class="card-body">
                      <h5 class="card-title">One Day Pass</h5>
                      <p class="card-text">Ticket for one day (Friday, Saturday or Sunday).</p>
                      <p> Rp. 150.000,00 </p>
                      <a href="ticket-form.php" class="btn btn-primary">Buy Tickets</a>
                    </div>
                  </div>
              </div>

              <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card" >
                    <div class="card-body">
                    <img src="3day.png" class="card-img-top" alt="Can't load" style="margin-bottom: 40px;">
                      <h5 class="card-title">3 Day Pass</h5>
                      <p class="card-text">Ticket for 3 days of the event (Friday, Saturday and Sunday).</p>
                      <p> Rp. 400.000,00 </p>
                      <a href="ticket-form.php" class="btn btn-primary">Buy Tickets</a>
                    </div>
                  </div>
              </div>

              <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card" >
                    <div class="card-body">
                    <img src="snarky.jpg" class="card-img-top" alt="Can't load" style="margin-bottom: 55px; margin-top: 50px;">
                      <h5 class="card-title">Special Show</h5>
                      <p class="card-text">Additional ticket for special show: Snarky Puppy.</p>
                      <p> Rp. 100.000,00 </p>
                      <a href="ticket-form.php" class="btn btn-primary">Buy Tickets</a>
                    </div>
                  </div>
              </div>
          </div>

    </div>
    
</body>
</html>