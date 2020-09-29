
    <?php include "template/nav.php"?>
    <?php include 'template/header.php' ?>
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
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Creer</button>
            </div>
        </div>
        </form>

        <?php 
        echo $_POST["name"];
        echo $_POST["somme"];
        echo $_POST["type"];

        
        ?>
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