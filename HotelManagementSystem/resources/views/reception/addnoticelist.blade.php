


<br>
<br>

<br>
<table align="center" border="3">
    <tr align="center">
        <td align="center" style="color:blue">Notices</td>
    </tr>

    
    @foreach($notice as $r)
        <tr align="center">
            <td>{{$r->notice}}</td>
        </tr>    
    @endforeach
</table>    