<?php

namespace App\Http\Controllers;

use App\Models\DataTarget;
use App\Models\Rekening;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MasterController extends Controller
{
    public function index()
    {
        $rek = Rekening::All();
        $data = DataTarget::All();
        return view('master-data.index', compact('data', 'rek'));
    }

    public function addNew(Request $request)
    {
        $addTransaction = DataTarget::create([
            'id_rek' => $request->id_rek,
            'target' => $request->target,
            'bulan_berlaku' => $request->bulan_berlaku,
            'tahun_berlaku' => $request->tahun_berlaku,
        ]);
        $addTransaction->save();

        if ($addTransaction) {
            return redirect('/master-data')->with("successAdd", "Data added successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    // public function autofill($id = 0)
    // {
    //     $data = Rekening::where('id_rek', $id)->first();
    //     return response()->json($data);
    // }

    public function processUpdate(Request $request, $id)
    {
        $id = base64_decode($id);
        $process = DataTarget::findOrFail($id)->update([
            'id_rek' => $request->id_rek,
            'target' => $request->target,
            'bulan_berlaku' => $request->bulan_berlaku,
            'tahun_berlaku' => $request->tahun_berlaku,
        ]);
        if ($process) {
            return redirect('/master-data')->with("successUpdate", "Data updated successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        $id = base64_decode($id);
        try {
            $process = DataTarget::findOrFail($id)->delete();
            if ($process) {
                return redirect()->back()->with("delete", "Poof! Your data has been deleted!");
            } else {
                return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
            }
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $masters = DataTarget::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $masters = DataTarget::latest()->get();
                }
            } else {
                $masters = DataTarget::latest()->get();
            }

            return response()->json([
                'masters' => $masters
            ]);
        } else {
            abort(403);
        }
    }
}
