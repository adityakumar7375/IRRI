<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CsvImport;
use App\Models\RiceData;

class CsvImportController extends Controller
{
    public function index(Request $request)
    {
        $query = RiceData::query();
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('particulars', 'like', "%$search%")
                ->orWhere('variety_code', 'like', "%$search%")
                ->orWhere('state', 'like', "%$search%")
                ->orWhere('country', 'like', "%$search%");
        }
        $riceData = $query->paginate(100);
        return view('import.index', compact('riceData'));
    }

    public function upload(Request $request)
    {

        // Validate the file input
        $request->validate([
            'bulkData' => 'required|file|mimes:xlsx|max:10240',
        ]);

        $file = $request->file('bulkData');
        $path = $file->store('xlsx_files', 'public');
        // Optional: Save the file to storage
        // $path = $file->storeAs('xlsx_files', $file->getClientOriginalName());
        $urlFile= 'storage/app/public/' . $path;
        // $imgurl = $file->store('gallery', 'public');
       
        // Import the data from the XLSX file
        try {
            Excel::import(new CsvImport, $urlFile);

            return redirect()->back()->with('success', 'XLSX file uploaded and data processed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error uploading XLSX: ' . $e->getMessage());
        }
    }
}
