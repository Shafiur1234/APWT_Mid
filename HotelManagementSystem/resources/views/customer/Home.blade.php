<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        #slider{
	overflow: hidden;
}
#slider figure{
	position: relative;
	width: 500%;
	margin: 0;
	Left: 0;
	animation: 20s slider infinite;
}
#slider figure img{
	float: left;
	width: 20%;
}
@keyframes slider{
	0%{
		left:0;
	}
	20%{
		left:0;
	}
	25%{
		left: -100%;
	}
	45%{
		left: -100%;
	}
	50%{
		left: -200%;
	}
	70%{
		left: -200%;
	}
	75%{
		left: -300%;
	}
	95%{
		left: -300%;
	}
	100%{
		left: -400%;
	}
}
    </style>    
</head>
<body>
    
	<table align="center" style="background-color:rgb(240, 240, 240); width:100%; height:5%;">
		<tr>
			<td>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Hotline Number:&nbsp;+88019xxxxxxxx,&nbsp;+88018yyyyyyyy</p>
			</td>
			<td>
				<p  style="font-size: 150%;"><b><i>*HOTEL BLUE OCEAN*</i></b></p>
			</td>
			<td align="right">
				&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('customer.add.submit')}}" class="btn btn-info">Sign Up</a>
			</td>
			<td align="right">
				<a href="{{route('customer.room.book.submit')}}" class="btn btn-danger">Book Now</a>
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		
	</table>
	<table align="center" style="background-color:rgb(220, 220, 220); width:100%; height:7%;">
		<tr>
			<td colspan="2" align="center">
				<a href="{{route('customer.Home')}}"><b>Home</b></a>
			</td>
			<td colspan="2" align="center">
				<a href="{{route('customer.rooms')}}"><b>Rooms</b></a>
			</td>
			<td colspan="2" align="center">
				<a href="{{route('customer.login.submit')}}"><b>Reservation</b></a>
			</td>
			<td colspan="2" align="center">
				<a href="{{route('customer.gallery')}}"><b>Gallery</b></a>
			</td>
			<td colspan="2" align="center">
				<a href="{{route('customer.event.list')}}"><b>Events</b></a>
			</td>
			<td colspan="2" align="center">
				<a href="{{route('customer.gym.add.submit')}}"><b>Gym</b></a>
			</td>
			<td colspan="2" align="right">
				<a href="{{route('customer.spa.add.submit')}}"><b>Spa</b></a>
			</td>

			<td colspan="2" align="right">
				<a href="{{route('reception.addnotice.list')}}"><b>Notices</b></a>
			</td>
			
			<td  align="center">
				<a href="/customer/review/list"><b>Reviews</b></a>
			</td>
		</tr>
	</table>
    <html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	</head>
	<body>
  
		<div id="slider">
			<figure>
				<img src="{{ URL('images/hotelNew2.jpg') }}" width="1365px" height="540px" >
				<img src="{{ URL('images/hotelNew5.jpg') }}" width="1365px" height="540px" >
				<img src="{{ URL('images/hotel Image2.jpg') }}" width="1365px" height="540px">
				<img src="{{ URL('images/hotelNew6.jpg') }}" width="1365px" height="540px">
				<img src="{{ URL('images/hotelNew1.jpg') }}" width="1365px" height="540px">
			<figure>	
		</div>
		<br>
		<br>
	<table>
		<tr>
			<td colspan="5" align="center">
				<h3 style="color:Orange"><u><i>Others</i></u></h3>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td align="center">
				<img width="600px" height="500px" src="{{ URL('images/4 beds.jpg') }}">
			</td>
			<td colspan="2">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td colspan="2" align="center">
				<h3><i>Luxurious Hotel</i></h3>
				<hr><br>
				<p> we are dedicated in making sure that your visit to Dhaka is memorable, comfortable and delightful.</p>
			</td>
		</tr>
	</table>
	</div>
	<!--<br>	
	<br>
	<div>
		<h3 align="center" style="color:Orange"><u><i>About Us</i></u></h3>
		<div style="font-size: 150%" margin="25%">
                 A global, multicultural, privately-owned company, founded in Dhaka, Bangladesh.
                  Still run every day by the four co-founders,
                  <b>Zubair Ahmed</b>  
                , <b> Kaniz Fatema Kanta </b>,
                <b> Sheikh Mahmudul Hasan Shium </b>, and,  
                <b>   Shafiur Rahman</b>.
                  XYABC hotelsoftware has been developing and selling technology and service solutions specifically for the hotel industry and
                   related sectors for more than 25 years. The consistent focus on the demands of a single industry makes protel one of the most 
                   experienced and successful providers of hospitality technology. In fact, we are a worldwide leader in hotel technology solutions.
            </div>
	</div>-->
	</body>
	<br>
<br>
<br>
<table align="center" style="background-color:rgb(0, 40, 40); width:100%; height:5%;">
		<tr>
			<td>
				<br>
				<br>
				<p  style="font-size: 150%; color:white"><b><i>*HOTEL BLUE OCEAN*</i></b></p>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="About.php" style="color:white"><i>About Us</i>
			</td>
			<td align="center">
				<br>
				<p style="color:white"><i>Contuct Us</i><br>
				<br>019xxxxxxxx&nbsp;,&nbsp;018yyyyyyyy<br>
				<br>Email: blueocean@gmail.com</p>
			</td>
		</tr>
		<tr>
			<td align="center">
				
			</td>
			<td colspan="2" align="center">
				<p  style="font-size: 110%; color:white"><b><i>---Thank You---</i></b></p>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
			</td>
		</tr>		
</table>
</html>