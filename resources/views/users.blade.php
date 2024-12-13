<div>
    <h1>Users Page</h1>
    <!-- <h2>{{print_r($users)}}</h2> -->

    <!-- without model  -->
    <table border="1" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email  }}</td>
        </tr>
        @endforeach
    </table>
</div>
