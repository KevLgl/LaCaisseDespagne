
    <?php include 'template/nav.php' ?>
    <?php include 'template/header.php' ?>
    <?php require_once 'acounts.php'  ?>


    <main>
      <h2 class="text-center mb-5">VOS COMPTES</h2>
      <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <div class="row" id="cardContainer" >
            
         
          <?php 
          $accounts = get_accounts();
          foreach ($accounts as $key => $value) {
          ?>
            <a href="acount.php?
            name=<?php echo $value['name']?>&
            number=<?php echo $value['number']?>&
            owner=<?php echo $value['owner']?>&
            amount=<?php echo $value['amount']?>&
            last_operation=<?php echo $value['last_operation']?>&
            " >
            

              <div class="card col-3">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $value['name'] .  "<br>"; ?>
                  </h5>
                  <p class="card-text">
                    <?php echo "N° compte: " . $value['number'] .  "<br>";  ?>
                  </p>
                  <p class="card-text">
                    <?php echo $value['owner'] .  "<br>"; ?>
                  </p>
                  <p class="card-text">
                    <?php echo $value['amount'] . "€" . "<br>"; ?>
                  </p>
                  <p class="card-text">
                    <?php echo "derniere opération: " . $value['last_operation'] .  "<br>"; ?>
                  </p>
                  <a href="#" class="card-link">Depot</a>
                  <a href="#" class="card-link">Retrait</a>
                  <a href="#" class="card-link">Supprimer</a>
                </div>
              </div>    
            </a>
          <?php } ?> 

               
      
          </div>
        </div>
      </div> 
    </main>
    <?php include 'template/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>