<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\State;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function delete($id,$table){
        try {
            // Use DB facade to dynamically target the table
            $deleted = DB::table($table)->where('id', $id)->update(['is_status'=>false]);

            if ($deleted) {
                return redirect()->back()->with('success', "Data deleted successfully.");
            } else {
                return redirect()->back()->with('error', "Record not found.");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "An error occurred while deleting the data. Please try again. " );
        }
    }
    public function update($id,$table,$status){
        try {
            $status=$status=='true'?true:false;

            // Use DB facade to dynamically target the table
            $deleted = DB::table($table)->where('id', $id)->update(['status'=>$status]);

            if ($deleted) {
                return redirect()->back()->with('success', "Status Update successfully.");
            } else {
                return redirect()->back()->with('error', "Record not found.");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "An error occurred while deleting the data. Please try again. " );
        }
    }
    // get filter
    public function getStates($country_id)
    {
        $states = State::where('country', $country_id)->where('is_status',true)->get();
        return response()->json($states);
    }
}
