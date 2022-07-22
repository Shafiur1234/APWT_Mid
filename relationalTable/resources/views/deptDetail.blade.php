<div>
    <h2>Department: {{$d->d_name}}</h2>
</div>
@if(count($d->students)>0)
<h3>Department All Students</h3>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    @foreach($d->students as $s)
    <tr>
        <td>{{$s->s_id}}</td>
        <td>{{$s->s_name}}</td>
    </tr>
    @endforeach
</table>
@else
<span>No Student found </span>
@endif

<h2>Offered Course & Details</h2>
<hr>
@if(count($d->courses)>0)
    @foreach($d->courses as $c)
        <h2>Course Name: {{$c->c_name}}</h2>
        <h3>Course Faculty: </h3>
        @if(count($c->techCourse)>0)
            @php($i=1)
            @foreach ($c->techCourse as $t)
                @foreach ($t->teachers as $t1)
                    <h3>{{$i.". ".$t1->t_name}}</h3>
                    @php($i++)
                @endforeach
            @endforeach
        @else
            <span>Faculty Not Found</span>
        @endif
        <h3>Studet List:</h3>
        
        @if(count($c->stCourse)>0)
            @php($i=1)
            @foreach ($c->stCourse as $s)
                @foreach ($s->students as $s1)
                    <h3>{{$i.". ".$s1->s_name}}</h3>
                    @php($i++)
                @endforeach
            @endforeach
        @else
            <span>Student Not Found</span>
        @endif
    @endforeach

@else
    <span>Course Not Found</span>
@endif


