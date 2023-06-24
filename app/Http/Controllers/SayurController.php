<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SayurController extends Controller
{
    public function allSayur()
    {
        $sayur = Sayur::all();
        return view('all-sayur', ['sayur' => $sayur]);
    }
    public function controlSayur()
    {
        $sayur = Sayur::get();
        return view('control-sayur', ['sayur' => $sayur]);
    }
    public function createSayur()
    {
        return view('create-sayur');
    }
    public function storeSayur(Request $request)
    {
        $newName = '';
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama_sayur . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('image/gambar-sayur', $newName);
        }
        $request['gambar_sayur'] = $newName;

        $messages = [
            'nama_sayur.required' => 'nama sayur tidak boleh kosong!',
            'nama_sayur.max' => 'nama sayur maksimal :max karakter!',
            'harga_sayur.required' => 'harga sayur tidak boleh kosong!',
            'harga_sayur.max' => 'harga sayur maksimal :max digit angka!',
            'gambar_sayur.required' => 'gambar sayur tidak boleh kosong!',
            // 'gambar_sayur.image' => 'file yang diunggah harus gambar!',
            // 'gambar_sayur.mimes' => 'file yang diunggah harus berupa format JPEG, PNG, atau JPG',
        ];

        $this->validate($request, [
            'nama_sayur' => 'required|max:50',
            'harga_sayur' => 'required|max:20',
            'gambar_sayur' => 'required',
        ], $messages);

        $sayur = sayur::create($request->all());
        if ($sayur) {
            Session::flash('status-sayur-created', 'success');
            Session::flash('message-sayur-created', 'Sayur berhasil ditambahkan!');
        }
        return redirect('/control-sayur');
    }
    public function destroySayur($id)
    {
        $deletedSayur = Sayur::findOrFail($id);
        $deletedSayur->delete();
        if ($deletedSayur) {
            Session::flash('status-sayur-deleted', 'success');
            Session::flash('message-sayur-deleted', 'Sayur berhasil dihapus!');
        }
        return redirect('/control-sayur');
    }
    public function editSayur($id)
    {
        $editSayur = Sayur::findOrFail($id);
        return view('edit-sayur', compact('editSayur'));
    }
    public function updateSayur(Request $request, $id)
    {
        $newName = '';
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama_sayur . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('image/gambar-sayur', $newName);
        }
        $request['gambar_sayur'] = $newName;

        $messages = [
            'nama_sayur.required' => 'nama sayur tidak boleh kosong!',
            'nama_sayur.max' => 'nama sayur maksimal :max karakter!',
            'harga_sayur.required' => 'harga sayur tidak boleh kosong!',
            'harga_sayur.max' => 'harga sayur maksimal :max digit angka!',
            'gambar_sayur.required' => 'gambar sayur tidak boleh kosong!',
            // 'gambar_sayur.image' => 'file yang diunggah harus gambar!',
            // 'gambar_sayur.mimes' => 'file yang diunggah harus berupa format JPEG, PNG, atau JPG',
        ];

        $this->validate($request, [
            'nama_sayur' => 'required|max:50',
            'harga_sayur' => 'required|max:20',
            'gambar_sayur' => 'required',
        ], $messages);

        $updateSayur = Sayur::findOrFail($id);
        $updateSayur->update($request->all());
        if ($updateSayur) {
            Session::flash('status-sayur-updated', 'success');
            Session::flash('message-sayur-updated', 'Sayur berhasil diupdate!');
        }
        return redirect('/control-sayur');
    }
}
