

<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 May 2021 21:12:01 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cinema</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/good-removebg-preview.png">
	<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html">
	<meta property="og:url" content="#">
	<meta name="csrf-token" content="{{csrf_token()}}"/> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	
	
<style>

.compressimg{
  width:100%;
  height:220px;

  }</style>
</head>
<body>
	<a href="/admin">Admin login</a>
	<br><br>
	@if($available_cinema != null)
	Cinema Location
		<select id="cinema_location_id" name="service_id"
		>
		<option>Select Service</option>	
@foreach($available_cinema as $row)
<option value="{{ $row->id }}">
{{ $row->cinema_location
 }}
</option>
@endforeach
</select>
@endif
<br><br>
Select Movies category
<select name="list_movies"  id="list_movies" class="form-control">
	<option>Select Cinema location first</option>
                               
							   </select>
<br><br>
Avalabile Date and Time
<select name="timeanddate"
 id="timeanddate" required="">
    <option>Select Movies  first</option>
</select>
</form>
<script>
               //ajax to select list of movies
$(document).ready( function() {
   $('#cinema_location_id').on('change', function(e) {
   e.preventDefault();
    var	cinema_location_id=  $(this).val();
 
   $.ajax({
    url:'getmovieslist/'+cinema_location_id,
    type:'GET',
    success:function(response){
		if(response)
				  {
					console.log(response);
                    $('#list_movies').empty();
                    $('#list_movies').focus;
                  // $('#name_city').append('<option value="">-- Select Shipping fee --</option>'); 
                    $.each(response, function(key, value){
                    $('select[name="list_movies"]').append('<option value="' + value.id+ '">' + value.list_movies+ '</option>');
                });
              }
    //  console.log(response);
    //  $("#list_movies").html(response);  
   }
 } );
} );
})
 </script>  
 <script>
               //ajax to see available time of movies
$(document).ready( function() {
   $('#list_movies').on('change', function(e) {
   e.preventDefault();
    var	movies_time_id=  $(this).val();
   console.log(movies_time_id);
   $.ajax({
    url:'getmoviestime/'+movies_time_id,
    type:'GET',
    success:function(response){
		if(response)
				  {
					console.log(response);
                    $('#timeanddate').empty();
                    $('#timeanddate').focus;
                  // $('#name_city').append('<option value="">-- Select Shipping fee --</option>'); 
                    $.each(response, function(key, value){
                    $('select[name="timeanddate"]').append('<option value="' + value.id+ '">' + value.date+ ' ' + value.time_from+ ' </option>');
                });
              }
    //  console.log(response);
    //  $("#movies_time").html(response);  
   }
 } );
} );
})
 </script> 
</html>
</body>