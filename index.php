<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pizzaria</title>
  </head>
  <body>
    <h1>Maak je eigein pizza</h1>

    <form>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="bodemformaat">
      <option>20</option>
      <option>25</option>
      <option>30</option>
      <option>35</option>
      <option>40</option>
    </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="saus">
      <option>Tomatensaus</option>
      <option>Extra tomatensaus</option>
      <option>Spicy tomatensaus</option>
      <option>BBQ saus</option>
      <option>Crème fraiche</option>
    </select>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="Pizzatoppings" id="pizzatoppings" value="option1" checked>
        <label class="form-check-label" for="pizzatoppings1">
        vegan
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="Pizzatoppings" id="pizzatoppings" value="option2">
        <label class="form-check-label" for="pizzatoppings2">
        vegetarisch
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="Pizzatoppings" id="pizzatoppings" value="option3">
        <label class="form-check-label" for="pizzatoppings3">
        vlees
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="kruiden">
        <label class="form-check-label" for="kruiden1">
        Peterselie
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="kruiden">
        <label class="form-check-label" for="kruiden2">
        Oregano
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="kruiden">
        <label class="form-check-label" for="kruiden3">
        Chili flakes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="kruiden">
        <label class="form-check-label" for="kruiden4">
        Zwarte peper
        </label>
    </div>
  <a type="submit" class="btn btn-primary" href="create.php">Submit</a>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>