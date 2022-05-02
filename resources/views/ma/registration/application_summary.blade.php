<h1>Applications Summary</h1>
<table border='1px'>
    <tr>
        <th>Designations</th>
        <th>Count</th>
        <th>Carders</th>
        <th>Vacancies</th>
    </tr>
    
    @foreach($temporary_users as $temuser)
    
    <tr>
        <td>{{$temuser->designation}}</td>
        <td>{{$temuser->application_id_count}}</td>
        <td></td>
        <td></td>
        
    </tr>
    @endforeach	

    

    

</table>
<!-- SAR approvevel button -->
<button>Approve</button>