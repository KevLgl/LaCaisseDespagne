
    <?php include 'template/nav.php';
          include 'template/header.php';
          require_once 'acounts.php';
          
    if(isset($_GET["id"])){
      $id = htmlspecialchars($_GET["id"]);
      $account = get_accounts()[$id];
    }
    
    ?>

    <h2 class="text-center">Ton compte</h2>
    <main>
    <!-- Create container of acount informations -->
      <div id="info-container">
        <div class="jumbotron bg-danger">
            <h1 class="display-4"> <?php echo $account['name'] ?> </h1>
            <p class="lead">Numéro de compte: <?php echo $account['number'] ?></p>
            <p>Propriétaire: <?php echo $account['owner'] ?></p>
            <hr class="my-4">
            <p><?php echo $account['amount'] ?> </p>
            <p>Derniere opération: <?php $account['last_operation'] ?> </p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div>
    </main>
    <?php include 'template/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/acount.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>