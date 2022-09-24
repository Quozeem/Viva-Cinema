
 @include('layouts.adminside')

 <form method="post" action="{{url('cinema_location')}}">
	@csrf

Add Cinema Location
<input type="text" name="cinema_location"  required=""/>
<br><br>
<input type="submit" value="Submit">
</form>

</html>
</body>