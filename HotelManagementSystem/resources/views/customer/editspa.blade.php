@include('layouts.boots')
<br><br>
    
<center>   
    <h3>Edit Spa Schedule</h3> 
    <form action="{{route('customer.spa.edit.submit')}}" method="post">
        <div class="col-md-4">
                {{csrf_field()}}
                <input type="hidden" name="id" class="form-control" value="{{$spa->id}}"><br>
             
                <input type="text" id="schedule" name="schedule"  value="{{$spa->schedule}}"><br>
                <br>
                <input type="reset" class="btn btn-primary" value="Reset">&nbsp;&nbsp;
                <input type="submit" class="btn btn-success" value="Update">
        </div>    
    </form>
</center>    