

@section('content')
    <div class="head-title">
        <div class="left">
            <h1>Student Records</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li class="active">Students</li>
            </ul>
        </div>
        <div class="right">
            <a href="{{ route('student.create') }}" class="btn create-btn">Add Record</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student) }}" class="btn edit-btn">Edit</a>
                        <form action="{{ route('student.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
