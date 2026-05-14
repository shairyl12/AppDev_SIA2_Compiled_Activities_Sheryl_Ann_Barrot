<!DOCTYPE html>
<html>
<head>
    <title>Fitness Workout Log System</title>

    <!-- 📍 BOOTSTRAP DESIGN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2>Fitness Workout Log Form</h2>

    <!-- 📍 SUCCESS MESSAGE -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- 📍 DISPLAY ALL ERRORS -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 📍 FORM START -->
    <form method="POST" action="/form" class="p-4 bg-white shadow rounded">
        @csrf

        <!-- 📍 NAME -->
        <div class="mb-3">
            <label>Client Name</label>
            <input type="text" name="client_name" class="form-control" value="{{ old('client_name') }}">
            @error('client_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- 📍 EMAIL -->
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- 📍 WORKOUT TYPE -->
        <div class="mb-3">
            <label>Workout Type</label>
            <select name="workout_type" class="form-control">
                <option value="">Select Workout</option>
                <option value="Cardio">Cardio</option>
                <option value="Strength Training">Strength Training</option>
                <option value="Flexibility">Flexibility</option>
            </select>
            @error('workout_type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- 📍 DURATION -->
        <div class="mb-3">
            <label>Duration (minutes)</label>
            <input type="number" name="duration" class="form-control" value="{{ old('duration') }}">
            @error('duration')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- 📍 INTENSITY -->
        <div class="mb-3">
            <label>Intensity Level</label>
            <select name="intensity" class="form-control">
                <option value="">Select Intensity</option>
                <option value="Low">Low</option>
                <option value="Moderate">Moderate</option>
                <option value="High">High</option>
            </select>
            @error('intensity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- 📍 SUBMIT BUTTON -->
        <button type="submit" class="btn btn-success">Submit Workout Log</button>

    </form>

</div>

</body>
</html>