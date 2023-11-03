

@extends('website.layouts.tutor')

@section('content')
    <div class="timetable-section">
        <h2>Timetable</h2>
        <button class="show-timetable-button" onclick="showTimetable()">Click to Show</button>
        <img src="{{ asset('images/h.jpg') }}" alt="Timetable" class="timetable-image" style="display: none;">
    </div>

    <script>
        function showTimetable() {
            var timetableImage = document.querySelector('.timetable-image');
            timetableImage.style.display = 'block';
        }
    </script>
@endsection
