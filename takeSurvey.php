<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >

    <title>take our Survey</title>
  </head>
  <body>
  <h4 class="setspace">Take Survey</h4>
  <label  class="setspace space-bottom formTitle col-sm-2 col-form-label">Personal Details :</label>

  <!-- survey form-->
  <form class="row g-3" action="processSurvey.php" method="POST">
        <div class="mb-3 row  text-center">
          <label for="surname" class="col-sm-2 col-form-label">Surname</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="surname" required>
          </div>
        </div>
        
        <div class="mb-3 row  text-center">
          <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="firstName"  required>
          </div>
        </div>

        <div class="mb-3 row  text-center">
          <label for="contactNumber" class="col-sm-2 col-form-label">Conact Number</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="contactNumber" required>
          </div>
        </div>

        <div class="mb-3 row  text-center">
          <label for="date" class="col-sm-2 col-form-label">Date</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="date" required>
          </div>
        </div>
        
        <div class="mb-3 row  text-center">
          <label for="age" class="col-sm-2 col-form-label">Age</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" name="age" required>
          </div>
        </div>

        <!-- checkboxes -->
        <div class="checkBox">
            <a>What is your favourite food? (You can choose more than 1 answer)</a>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Pizza" name="foodName">
              <label class="form-check-label" for="pizza">
                Pizza
              </label>
              </div>

              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Pasta" name="foodName">
              <label class="form-check-label" for="pasta">
                Pasta
              </label>
              </div>

              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Pap and wors" name="foodName">
              <label class="form-check-label" for="papAndWors">
                Pap and Wors
              </label>
              </div>

              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Chicken stir fry" name="foodName">
              <label class="form-check-label" for="chickenStir">
                Chicken stir fry
              </label>
              </div>

              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Beef stir fry" name="foodName">
              <label class="form-check-label" for="beefStir">
                Beef stir fry
              </label>
              </div>

              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Other" name="foodName   ">
              <label class="form-check-label" for="other">
                Other
              </label>
              </div>

          </div>
          
          <div class="container">
        
              <table class="table">
              <p class="checkBox">On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree </p>
                  <thead>
                  <tr class="table-dark">
                      <th>   </th>
                      <th>Strongly Agree(1)</th>
                      <th>Agree(2)</th>
                      <th>Neutral(3)</th>
                      <th>Disagree(4)</th>
                      <th>Strongly disagree(5)</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>I like to eat out</td>
                      <td><input class="form-check-input" type="radio" name="out" value="1" id="out"></td>
                      <td><input class="form-check-input" type="radio" name="out" value="2" id="out"></td>
                      <td><input class="form-check-input" type="radio" name="out" value="3" id="out"></td>
                      <td><input class="form-check-input" type="radio" name="out" value="4" id="out"></td>
                      <td><input class="form-check-input" type="radio" name="out" value="5" id="out"></td>
                  </tr>      
                  <tr class="">
                  <td>I like to watch movies</td>
                      <td><input class="form-check-input" type="radio" name="movies" value="1" id="movies"></td>
                      <td><input class="form-check-input" type="radio" name="movies" value="2" id="movies"></td>
                      <td><input class="form-check-input" type="radio" name="movies" value="3" id="movies"></td>
                      <td><input class="form-check-input" type="radio" name="movies" value="4" id="movies"></td>
                      <td><input class="form-check-input" type="radio" name="movies" value="5" id="movies"></td>
                  </tr>

                  <tr class="">
                  <td>I like to watch TV</td>
                      <td><input class="form-check-input" type="radio"  name="TV" value="1" id="TV"></td>
                      <td><input class="form-check-input" type="radio" name="TV"  value="2" id="TV"></td>
                      <td><input class="form-check-input" type="radio" name="TV"  value="3" id="TV"></td>
                      <td><input class="form-check-input" type="radio" name="TV"  value="4" id="TV"></td>
                      <td><input class="form-check-input" type="radio" name="TV"  value="5" id="TV"></td>
                  </tr>
                  <tr class="">
                  <td>I like to listen to the radio</td>
                      <td><input class="form-check-input" type="radio" name="radio" value="1" id="radio"></td>
                      <td><input class="form-check-input" type="radio" name="radio" value="2" id="radio"></td>
                      <td><input class="form-check-input" type="radio" name="radio" value="3" id="radio"></td>
                      <td><input class="form-check-input" type="radio" name="radio" value="4" id="radio"></td>
                      <td><input class="form-check-input" type="radio" name="radio" value="5" id="radio"></td>
                  </tr>
                  
                  </tbody>
        </table>
      </div>
          

        <!--my Submit button -->
       
       <br><br>
        <input class="d-grid col-1 mx-auto btn btn-secondary center" type="submit">
   
        

                
</form>
<br>
<br>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>