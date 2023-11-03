@extends('website.layouts.tutor')

@section('content')
    <h1>Extra Activity</h1>

    <table class="activity-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Type of Activity</th>
                <th>Comments</th>
            </tr>
        </thead>

    </table>
    information with be generated and auto uploaded by the tutor

    <style>
        .activity-table {
            width: 100%;
            border-collapse: collapse;
        }

        .activity-table th,
        .activity-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .activity-table th {
            background-color: #f2f2f2;
        }
    </style>
@endsection
