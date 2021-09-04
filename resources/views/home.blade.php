@extends('layouts.app')

@section('content')
    <style>
        .select2-container {
            height: calc(1.5em + .75rem + 2px) !important;
        }
    </style>
    <div class="container">
        <div class="row justify-content-end text-right mb-3">
            <div class="col">
                
                  <div class="dropdown">
                    <form id="exportForm" action="{{ route('export') }}" method="post">
                        @csrf
                        <input type="hidden" name="export_search" value="{{ $search }}">
                        <input type="hidden" name="export_gender" value="{{ $gender }}">
                        <input type="hidden" name="export_goals[]" value="{{ is_array($goals) ? implode(',', $goals) : $goals }}">
                        <input type="hidden" name="export_limit" value="{{ $limit }}">

                    </form>
                    <a class="dropdown-toggle btn btn-success" data-toggle="dropdown" href="#">Export</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
                      <li><input type="submit" name="exportType" form="exportForm" class="dropdown-item" value="Current data"/></li>
                      <li><input type="submit" name="exportType" form="exportForm" class="dropdown-item" value="Full export"/></li>
                    </ul>
                  </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Appointment responses</div>

                    <div class="card-body">
                        @if ($appointments)
                            <form id="filter" action="" method="get">
                            </form>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <input form="filter" type="search" name="q" id="search" class="form-control"
                                        placeholder="Search..." value="{{ old('q', $search) }}">
                                </div>
                                <div class="col-md-3">
                                    <select form="filter" name="goals[]" id="goals" multiple class="form-control select2" data-placeholder="Select goals">
                                        <option value="">Select goals</option>
                                        <option {{ $goals && in_array('Fat Loss', $goals) ? 'selected' : null }} value="Fat Loss">Fat Loss</option>
                                        <option {{ $goals && in_array('Muscle Building', $goals) ? 'selected' : null }} value="Muscle Building">Muscle Building</option>
                                        <option {{ $goals && in_array('Fitness Improvement', $goals) ? 'selected' : null }} value="Fitness Improvement">Fitness Improvement</option>
                                        
                                        {{-- <option {{ $goals && in_array('Injury Rehab/Recovery">', $goals) ? 'selected' : null }} value="Injury Rehab/Recovery">Injury Rehab/Recovery</option>
                                        <option {{ $goals && in_array('Strength Building', $goals) ? 'selected' : null }} value="Strength Building">Strength Building</option>
                                        <option {{ $goals && in_array('Body Transformation', $goals) ? 'selected' : null }} value="Body Transformation">Body Transformation</option>
                                        <option {{ $goals && in_array('Event Specific', $goals) ? 'selected' : null }} value="Event Specific">Event Specific</option> --}}

                                        <option {{ $goals && in_array('Other', $goals)  ? 'selected' : null}} value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select form="filter" name="gender" id="gender" class="form-control">
                                        <option value="">Select a gender</option>
                                        <option {{ $gender && $gender === 'Male' ? 'selected' : null  }} value="Male">Male</option>
                                        <option {{ $gender && $gender === 'Female' ? 'selected' : null  }} value="Female">Female</option>
                                        <option {{ $gender && $gender === 'Other' ? 'selected' : null  }} value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input form="filter" type="number" name="limit" id="limit" placeholder="Limit" value="{{ old('limit', $limit) }}" class="form-control" min="1">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary" form="filter">Apply</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table hover border">
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
                                        @foreach ($appointments as $key => $appointment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $appointment->name }}</td>
                                                <td>{{ $appointment->phone }}</td>
                                                <td>{{ $appointment->email }}</td>
                                                <td>{{ $appointment->gender }}</td>
                                                <td>
                                                    @if ($appointment->goals && is_array($appointment->goals))
                                                        @foreach ($appointment->goals as $goal)
                                                            @if ($goal == 'Other')
                                                                <span class="badge badge-info text-white">Other:
                                                                    {{ $appointment->other }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-info text-white">{{ $goal }}</span>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $appointment->created_at->format('d/m/Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>No data found!</p>
                        @endif

                        @if ($appointments && $appointments->hasPages())
                            <div class="justify-content-center d-flex mt-3">
                                {{ $appointments->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    $(function(){
        const placeholder = $('.select2').data('placeholder')
        $('.select2').select2({
            placeholder,
        });
    })
</script>
@endpush