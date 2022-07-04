@include('layouts.boots')
<html>
<head>
	<style>
		
	</style>
</head>
<body>
    <center>
    <h1>Email Sending </h1> <br>   
    <form action="{{route('mail.submit')}}" method="post"> 
	    <div>
            {{csrf_field()}}	
            <input type="email" name="to" placeholder="to"><br>
         

            <br>
            <input type="text" name="e_sub" placeholder="Subject"> <br>
         

            <br>
            <textarea id="Message" name="e_body" height="300px" placeholder="Email Body"></textarea><br><br>
           <!-- <input type="textarea" height="100px" name="e_body" placeholder="Body"> <br><br>  -->
      

            <input class="btn btn-primary" type="submit" value="Send">
            <br>            
        </div>
	</form>
</center>
			
</body>
</html>
