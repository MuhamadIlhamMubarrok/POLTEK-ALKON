<?php

    namespace App\Http\Controllers\BackendController;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Daftar;
    use PDF;

    class POController extends Controller
    {

        public function index()
        {
            $user = auth()->user();
            return view('admin/dashboard', compact('user'));
        }

        public function daftar() {
            $daftars = Daftar::all();
            $user = auth()->user();
            return view('admin.daftar', compact('daftars', 'user'));
        }
        
        public function detil($id) {
            $daftar = Daftar::findOrFail($id);
            return view('admin.detil', compact('daftar'));
        }

        public function hapus($id)
        {
            try {
                Daftar::findOrFail($id)->delete();
                return redirect()->route('admin.daftar')->with('success', 'Data berhasil dihapus.');
            } catch (\Exception $e) {
                return redirect()->route('admin.daftar')->with('error', 'Data gagal dihapus.');
            }
        }

        public function cetak()
        {
            $daftars = Daftar::all();

            $pdf = PDF::loadView('admin.cetak', compact('daftars'));
            return $pdf->download('laporan_pendaftar.pdf');
        }


    }
