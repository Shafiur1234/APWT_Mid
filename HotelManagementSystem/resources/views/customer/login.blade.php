@include('layouts.boots')
<center>
    <br>
    <form action="{{route('customer.login.submit')}}" method="post">
        <div class="col-md-4">
            {{csrf_field()}}
            <h2 style="color:blue" >Login</h2><br>
            <td><img width="300px" heigth="200px" src="{{ URL('images/log.jpg') }}"/></td><br><br>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Name"><br>
            @error('name')
        <span class="text-danger">{{$message}}</span><br>
        @enderror

        <input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
        @error('password')
             <span class="text-danger">{{$message}}</span><br>
        @enderror

            <a href="" class="btn btn-primary"> Forgot Password </a>
            <input type="submit" class="btn btn-primary" id="login" value="Login">
        </div>    
    </form>
    <div><a  class="btn btn-success" href="{{route('customer.add.submit')}}">Sign Up</a><div>
</center>