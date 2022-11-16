<?php

namespace App\Http\Controllers;

use App\Models\DataTarget;
use App\Models\Rekening;
use Illuminate\Http\Request;

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
}
