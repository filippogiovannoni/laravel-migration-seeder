@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table vh-100">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Departure Time / Arrival</th>
                    <th scope="col">Departure Station / Arrival</th>
                    <th scope="col">Company</th>
                    <th scope="col">Train</th>
                    <th scope="col">Coaches</th>
                    <th scope="col">On-Time</th>
                    <th scope="col">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr class="align-middle">
                        <td scope="row">{{ $train->departure_time . ' ' . '>' . ' ' . $train->arrival_time }}</td>
                        <td>{{ $train->departure_station . ' ' . '->' . ' ' . $train->arrival_station }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->coaches }}</td>
                        <td>{{ $train->on_time == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $train->cancelled == 0 ? 'No' : 'Yes' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
@endsection
