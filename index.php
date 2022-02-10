<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>maak je eigen pizza</h1>

<div class="container">
    <form>
    
        <div class="form-row">
        <form action="./create.php" method="POST">
          <div class="form-group">
            <label for="Bodemformaat">State</label>
            <select id="Bodemformaat" class="form-control"  name="Bodemformaat">
              <option selected>20</option>
              <option selected>25</option>
              <option selected>30</option>
              <option selected>35</option>
              <option selected>40</option>
            </select>
            <div class="form-group">
                <label for="Saus">State</label>
                <select id="Saus" class="form-control" name="Saus" >
                  <option selected>tomatensaus</option>
                  <option selected> extra tomatensaus</option>
                  <option selected>spicy tomatensaus</option>
                  <option selected>bbq saus</option>
                  <option selected>creme fraiche</option>
               
                </select>

                <fieldset class="form-group">
                   
                    <div class="row">
                 
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Vegan" id="Vegan" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                           vegan
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Vegetarisch" id="Vegetarisch" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            vegetarisch
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Vlees" id="Vlees" value="option3">
                            <label class="form-check-label" for="gridRadios2">
                             vlees
                            </label>
                          </div>
                          
                        
                      </div>
                    </div>
                  </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Peterselie">
                        <label class="form-check-label" for="Peterselie">
                         Peterselie
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Oregano">
                        <label class="form-check-label" for="Oregano">
                         Oregano
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Chili">
                        <label class="form-check-label" for="Chili">
                        Chili flakes
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Peper">
                      <label class="form-check-label" for="Peper">
                       Zwarte peper
                      </label>
                    </div>
                  </div>
                </div>
         
    
      </form>
   
      <button href="create.php" type="submit" class="btn btn-primary" >Bestellen</button>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>