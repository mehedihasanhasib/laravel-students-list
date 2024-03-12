<x-app-layout>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Contact No</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name . ' ' . $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->contact }}</td>
                    <td>
                        <a href="{{ route('profile', ['id' => $student->id]) }}">View Profile</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
