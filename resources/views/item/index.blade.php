<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<a href ="item/create" class = "btn btn-primary" >Create </a>
<table border="1">
@foreach($items as $item)
<tr>
<td>{{$item->item_name}}</td>
<td>{{$item->prise}}</td>
<td>{{$item->Quantity}}</td>

<td><a href ="{{ route('item.show',$item->id) }}" class = "btn btn-primary" >SHOW </a>
</td>
<td><button  class = "btn btn-warning" type="submit" >Edit</button></td>
<td><button  class = "btn btn-primary" type="submit" >View</button></td>
</tr>

@endforeach
</table>
