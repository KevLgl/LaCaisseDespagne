
    <?php include 'template/nav.php';
          include 'template/header.php'; ?>
    <h2 class="text-center">Creer ton nouveau compte:</h2>
    <main>
    <form class="w-75 text-center" method="post" action="">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ton nom</label>
            <div class="col-sm-10">
            <input name="name" type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Somme à deposer</label>
            <div class="col-sm-10">
            <input name="somme" type="text" class="form-control" id="inputSomme" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Type de compte: </label>
            <div class="col-sm-10">
            <input name="type" type="text" class="form-control" id="inputType" placeholder="">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="w-25 mx-auto">
                <input name="new_account" type="submit" class="form-control" value="créer">
            </div>
        </div>
        </form>

        <?php if(!empty($_POST) && isset($_POST["new_account"])): ?>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST["somme"];?></h6>
                <p class="card-text"><?php echo $_POST["type"]; ?> </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning">Merci de remplir le formulaire pour creer un compte</div>
        <?php endif; ?>
        <?php var_dump($_POST); ?>
        

       
           
           
            
    </main>
    <?php include 'template/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/info.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>