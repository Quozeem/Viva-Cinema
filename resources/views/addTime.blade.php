
 @include('layouts.adminside')

<form method="post" action="{{route('insert_timeMovies')}}" >
   @csrf
   Cinema Location
       <select id="cinema_location_id" 
       >
       <option>Select Service</option>	
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
Add Movies category
<select name="list_movies_id"
 id="list_movies" required="">
    <option>Select Cinema Location first</option>
</select>
<br><br>
Date
<input type="date" name="date" min=<?php
$today_date=date('Y-m-d');
 echo $today_date;?>   max=<?php
$max_date=date_create(date('Y-m-d'));
date_add($max_date,date_interval_create_from_date_string("90 days"));
echo date_format($max_date,"Y-m-d");
?> required="">
<br><br>
Time From
<input type="time" name="time_from" required="">
<br><br>
Time To
<input type="time" name="time_to" required="">
<br><br>
<input type="submit" value="Submit" required="">
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
                    $('select[name="list_movies_id"]').append('<option value="' + value.id+ '">' + value.list_movies+ '</option>');
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
// $(document).ready(function(){
   
//    $('#but_fetchall').click(function(e){ 
//        e.preventDefault();
//        $.ajax({
//            type:"GET",
//            url:"/",
//            success:function(response) {
//            console.log(response);
//           }
//        })
//    })
// }) 
   
   </script>
   <script>
//         $(document).ready(function(){
//        $.ajaxSetup({
//                                                                            headers:{
//            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//                                                                            }
//                                                                        });
//    //   $('#body').click(function(e){
//    // 	e.preventDefault();
//        $.ajax({
//             type:"get",
           
            
//             success:function(res){
//             console.log(res);
//             $("#all_service_message").html(res);
//            // console.log(response.data.services)
//            // $("#all_service_data").html(response.data.service.display_name);
       
//             }
//         });
//      });
     

       </script>
</html>
</body>