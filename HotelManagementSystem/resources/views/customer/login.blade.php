<center>
    <br>
    <form action="{{route('customer.login.submit')}}" method="post">
        <div class="col-md-4">
            {{csrf_field()}}
            <h3>Login</h3>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name"><br>
            @error('name')
        <span class="text-danger">{{$message}}</span><br>
        @enderror

        <input type="password" name="password" class="form-control" placeholder="Password"><br>
        @error('password')
             <span class="text-danger">{{$message}}</span><br>
        @enderror

            <a href="" class="btn btn-primary"> Forgot Password </a>
            <input type="submit" class="btn btn-primary" value="Login">
        </div>    
    </form>
</center>