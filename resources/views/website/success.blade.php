@extends('layouts.website')

@section('content')
    <div class="p-3 text-center">
        <div class="icon mt-2">
            <img src="{{ asset('website/images/check.png') }}" alt="Check" width="80">
        </div>
        <div class="my-4">
            <h4>Thank you!</h4>
            <p>Your application has been submitted!</p>
        </div>
    </div>
@endsection