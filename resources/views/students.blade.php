<div>
    <h1>Students Data</h1>

    <table border="1" cellpadding="10">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach ($students as $index=> $student)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>
