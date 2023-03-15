<?php

namespace App\Exports;

use App\Models\candidate;
use Illuminate\Contracts\View\View;
 use Maatwebsite\Excel\Concerns\FromView;
 use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;

class CandidateDetailsExport  implements FromCollection
{
    
    // use Exportable;
    
    //  protected $candidates;
    // public function __construct() {
    //     $this->candidates = $candidates;
    //  }
    //  public function view(): View
    // {  
    //      return view('dash/loadreportdata',['candidates'=>$candidates]);
    //  }

    // public function map(){
    public function collection()
    {
        return candidate::all();
    }
}
