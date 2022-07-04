@include('reception.layouts.boots')
<html>
<head>
	<style>
		
	</style>
</head>
<body>


    <center>
    <h3>Add Notice</h3> <br>   
    <form action="{{route('reception.addnotice.submit')}}" method="post" enctype="multipart/form-data"> 
	    <div>
            {{csrf_field()}}	
            <input type="text" name="notice" placeholder="Add your notice...."><br>
            @error('notice')
            <span>{{$message}}</span> <br><br>
            @enderror

            
            <br>
        
            <input class="btn btn-primary" type="reset" value="Reset">

            <input class="btn btn-success" type="submit" value="Submit">
        </div>
	</form>
</center>

			
</body>
</html>
