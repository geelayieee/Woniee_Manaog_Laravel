

@section('content')
    <div class="head-title">
        <div class="left">
            <h1>Edit Record</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li class="active">Edit</li>
            </ul>
        </div>
    </div>

    <form action="{{ route('student.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="{{ $student->age }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $student->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $student->phone_number }}" required>
        </div>
        <button type="submit" class="btn update-btn">Update</button>
    </form>
@endsection
