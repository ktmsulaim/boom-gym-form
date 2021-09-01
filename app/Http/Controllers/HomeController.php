<?php

namespace App\Http\Controllers;

use App\Exports\AppointmentsExport;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $search = $request->get('q');
        $gender = $request->get('gender');
        $goals = $request->get('goals');
        $limit = $request->get('limit');

        $appointments = $this->getData($search, $gender, $goals, $limit, 'paginate');

        return view('home', [
            'appointments' => $appointments,
            'search' => $search,
            'gender' => $gender,
            'goals' => $goals ? $goals : [],
            'limit' => $limit,
        ]);
    }

    public function export(Request $request)
    {
        $type = $request->get('exportType');
        $search = $request->get('export_search');
        $gender = $request->get('export_gender');
        $goals = $request->get('export_goals');
        
        if(!$type) {
            return back();
        }

        return Excel::download(new AppointmentsExport($type, $this->getData($search, $gender, $goals, 20, 'get')), 'Appointments.xlsx');
    }

    private function getData($search = null, $gender = null, $goals = [], $limit = 20, $mode = 'paginate') {
        $appointments = Appointment::latest();

        if($search) {
            $appointments->where(function($q) use($search){
                $q->where("name", 'like', "%$search%");
                $q->orWhere("email", 'like', "%$search%");
                $q->orWhere("phone", 'like', "%$search%");
            });
        }

        if($gender) {
            $appointments->where('gender', $gender);
        }

        if($goals && count($goals)) {
            $goals = collect($goals)->filter(fn($value) => $value != null);

            if(count($goals) >= 1 && !is_null($goals[0])) {
                $appointments->whereJsonContains('goals', $goals);
            }
        }

        if($mode === 'paginate') {
            return $appointments->paginate($limit ?: 20)->withQueryString();
        } else {
            return $appointments->get();
        }
    }

}
