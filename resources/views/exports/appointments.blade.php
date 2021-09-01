<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Goals</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @if ($appointments && count($appointments))
            @foreach ($appointments as $key => $appointment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->gender }}</td>
                    <td>
                        @if ($appointment->goals && is_array($appointment->goals))
                            @foreach ($appointment->goals as $goalKey => $goal)
                                @if ($goal == 'Other')
                                    <span>Other:
                                        {{ $appointment->other }}</span>
                                @else
                                    <span>{{ $goal }}</span>
                                @endif

                                {!! ($goalKey + 1) < count($appointments) ? '<span>, &nbsp;</span>' : null !!}
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $appointment->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">No data!</td>
            </tr>
        @endif
    </tbody>
</table>
