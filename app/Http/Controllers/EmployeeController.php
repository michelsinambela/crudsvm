<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Employee;
use App\Imports\DataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){

            $data = Employee::where('gender','LIKE','%' .$request->search.'%')->paginate(5);
        }
        else {
        $data = Employee::paginate(5);
        }
        // dd($data);
        return view('dpstroke', compact('data'));
    }
    // menampilkan form tpstroke
    public function tpstroke(){
        return view('tpstroke');
    }
    // insert data
    public function insertdata(Request $request){
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pstroke')->with('success','Success');
    }
    // tdpstroke
    public function tdpstroke($id){
        $data = Employee::find($id);
        // dd($data);
        return view('tdpstroke',compact('data'));
    }
    // udpstroke
    public function udpstroke(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pstroke')->with('success','Update Success');
    }
    // hpstroke
    public function hpstroke($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pstroke')->with('success','Delete Success');
    }

    // export pdf
    public function exportpdf(){
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('dpstroke-pdf');
        return  $pdf->download('datastroke.pdf');
    }

    // import excel
    public function importexcel(Request $request){
        Excel::import(new DataImport, $request->file, null, \Maatwebsite\Excel\Excel::XLSX);
        return "Import Data Successfully";
    }

}
