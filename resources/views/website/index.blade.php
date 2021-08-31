@extends('layouts.website')

@section('content')
    <form action="{{ route('appointment.make') }}" method="POST" class="contact100-form validate-form" >
        @csrf

        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Full Name:</span>
            <input class="input100" type="text" name="name" placeholder="Enter full name" required>
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Email:</span>
            <input class="input100" type="text" name="email" placeholder="Enter email addess">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Phone is required">
            <span class="label-input100">Phone:</span>
            <input class="input100" type="text" name="phone" placeholder="Enter phone number" required>
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Gender is required">
            <span class="label-input100">Gender:</span>
            <select name="gender" id="gender" class="input100" required>
                <option value="male" selected>Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <span class="focus-input100"></span>
        </div>

        <div class="goals">
            <div class="mb-2">
                <strong>What are your goals?</strong>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Fat Loss">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Fat Loss</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Muscle Building">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Muscle Building</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Fitness Improvement">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Fitness Improvement</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Injury Rehab/Recovery">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Injury Rehab/Recovery</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Strength Building">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Strength Building</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Body Transformation">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Body Transformation</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Event Specific">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Event Specific</span>
                  </label>
            </div>
            <div>
                <label class="checkbox">
                    <span class="checkbox__input">
                      <input type="checkbox" name="goals[]" value="Other" id="other">
                      <span class="checkbox__control">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                          <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                      </span>
                    </span>
                    <span class="radio__label">Other</span>
                  </label>
            </div>
        </div>

        <div class="wrap-input100" id="otherWrapper">
            <span class="label-input100">Other:</span>
            <input class="input100" type="text" name="other" placeholder="Please specify other">
            <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn mt-2">
            <button class="contact100-form-btn text-uppercase small">
                <span>
                    Start my transformation now
                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                </span>
            </button>
        </div>
    </form>
@endsection