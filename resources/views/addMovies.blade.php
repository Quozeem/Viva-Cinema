
 @include('layouts.adminside')

<form method="post" action="{{route('insert-movies')}}" >
   @csrf

   Cinema Location
       <select id="cinema_location_id" 
       required=""    name="cinema_location_id[]" multiple="multiple"
       >
       <option>Select Location</option>	
       @if($available_cinema != null)
@foreach($available_cinema as $row)
<option value="{{ $row->id }}">
{{ $row->cinema_location
}}
</option>
@endforeach
@else
{"Currently not available"} 
@endif
</select>

<br><br>
Add Movies 
<input type="text" name="list_movies"  required=""/>
<br><br>
<input type="submit" value="Submit">
</form>
</html>
</body>