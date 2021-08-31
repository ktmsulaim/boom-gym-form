<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function success()
    {
        if(!session()->has('success')) {
            return redirect()->route('welcome');
        }

        return view('website.success');
    }

    public function makeAppointment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'gender' => 'required',
            'goals' => 'required'
        ]);

        $appointment = Appointment::create($request->all());

        if($appointment) {
            return redirect()->route('appointment.success')->with('success', 'The form was submitted');
        }

        return redirect()->back();
    }
}
