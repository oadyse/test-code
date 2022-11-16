<?php

namespace App\Http\Controllers;

use App\Models\Rekening;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DailyTransactionController extends Controller
{
    public function index()
    {
        $data = Transaksi::All();
        $rek = Rekening::All();
        return view('daily-transaction.index', compact('data', 'rek'));
    }

    public function addNew(Request $request)
    {
        $addTransaction = Transaksi::create([
            'id_rek' => $request->id_rek,
            'id_pajak' => 1,
            'via_bayar' => $request->via_bayar,
            'tgl_setor' => $request->tgl_setor,
        ]);
        $addTransaction->save();

        if ($addTransaction) {
            return redirect('/daily-transaction')->with("successAdd", "Data added successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function processUpdate(Request $request, $id)
    {
        $id = base64_decode($id);
        $process = Transaksi::findOrFail($id)->update([
            'id_rek' => $request->id_rek,
            'id_pajak' => 1,
            'via_bayar' => $request->via_bayar,
            'tgl_setor' => $request->tgl_setor,
        ]);
        if ($process) {
            return redirect('/daily-transaction')->with("successUpdate", "Data updated successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        $id = base64_decode($id);
        try {
            $process = Transaksi::findOrFail($id)->delete();
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
