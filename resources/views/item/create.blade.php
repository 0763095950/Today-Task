<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class = "container">
<form method='POST' action='/item' >
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Item Name</label>
    <input type="text" name ="item_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item Name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" name = "prise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Prise">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quntity</label>
    <input type="number" name = "Quantity" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity">
  </div>
 
  <button  class = "btn btn-primary" type="submit" >Save</button>
  <a href ="" class = "btn btn-warning" >Update </a>
  <a href ="" class = "btn btn-danger" >Delete </a>
  <a href ="" class = "btn btn-primary" >View </a>

</form>

</div>