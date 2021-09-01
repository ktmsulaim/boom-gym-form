<?php

namespace App\Exports;

use App\Models\Appointment;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AppointmentsExport implements FromView, ShouldAutoSize
{
    protected $mode;
    protected $data;

    public function __construct($mode, $data = null) {
        $this->mode = $mode;
        $this->data = $data;
    }

    public function view(): View
    {
        return view('exports.appointments', [
            'appointments' => $this->mode == 'Full export' ? Appointment::all() : $this->data,
        ]);
    }
}
