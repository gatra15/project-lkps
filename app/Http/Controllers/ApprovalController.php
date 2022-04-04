<?php

namespace App\Http\Controllers;

use App\Models\IdentitasPengusul;
use App\Models\LembarEvaluasiDiri;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function approve_identitas($id)
    {
        $data = LembarEvaluasiDiri::find($id);
        $data->is_approved = true;
        $data->comment = 'Data telah disetujui';
        $data->update();

        return back()->with('success', 'Data telah disetujui');
    }
    public function tolak_identitas(Request $request, $id)
    {
        $data = LembarEvaluasiDiri::find($id);
        $data->is_approved = false;
        $data->comment = $request->alasan;
        $data->update();

        return back()->with('success', 'Data telah disetujui');
    }
}
