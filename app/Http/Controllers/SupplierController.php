<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    public function allSupplier()
    {
        $allSupplier = Supplier::get();
        return view('all-supplier', ['allSupplier' => $allSupplier]);
    }
    public function controlSupplier()
    {
        $controlSupplier = Supplier::get();
        return view('control-supplier', ['controlSupplier' => $controlSupplier]);
    }
    public function createSupplier()
    {
        return view('create-supplier');
    }
    public function storeSupplier(Request $request)
    {
        $newName = '';
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama_supplier . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('image/gambar-supplier', $newName);
        }
        $request['gambar_sayur'] = $newName;

        $messages = [
            'nama_supplier.required' => 'nama supplier tidak boleh kosong!',
            'nama_supplier.max' => 'nama supplier maksimal :max karakter!',
            'email_supplier.required' => 'email supplier tidak boleh kosong!',
            'email_supplier.max' => 'email supplier maksimal :max karakter!',
            'alamat_supplier.required' => 'alamat supplier tidak boleh kosong!',
            'alamat_supplier.max' => 'alamat supplier maksimal :max karakter!',
            'nohp_supplier.required' => 'no hp supplier tidak boleh kosong!',
            'nohp_supplier.max' => 'no hp supplier maksimal :max karakter!',
            // 'gambar_sayur.image' => 'file yang diunggah harus gambar!',
            // 'gambar_sayur.mimes' => 'file yang diunggah harus berupa format JPEG, PNG, atau JPG',
        ];

        $this->validate($request, [
            'nama_supplier' => 'required|max:50',
            'email_supplier' => 'required|max:60',
            'alamat_supplier' => 'required|max:50',
            'nohp_supplier' => 'required|max:15',
        ], $messages);

        $supplier = Supplier::create($request->all());
        if ($supplier) {
            Session::flash('status-supplier-created', 'success');
            Session::flash('message-supplier-created', 'Supplier berhasil ditambahkan!');
        }
        return redirect('/control-supplier');
    }
    public function destroySupplier($id)
    {
        $deletedSupplier = Supplier::findOrFail($id);
        $deletedSupplier->delete();
        if ($deletedSupplier) {
            Session::flash('status-supplier-deleted', 'success');
            Session::flash('message-supplier-deleted', 'Supplier berhasil dihapuskan!');
        }
        return redirect('/control-supplier');
    }
    public function editSupplier($id)
    {
        $editSupplier = Supplier::findOrFail($id);
        return view('edit-supplier', compact('editSupplier'));
    }
    public function updateSupplier(Request $request, $id)
    {
        $newName = '';
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->nama_supplier . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('image/gambar-supplier', $newName);
        }
        $request['gambar_sayur'] = $newName;

        $messages = [
            'nama_supplier.required' => 'nama supplier tidak boleh kosong!',
            'nama_supplier.max' => 'nama supplier maksimal :max karakter!',
            'email_supplier.required' => 'email supplier tidak boleh kosong!',
            'email_supplier.max' => 'email supplier maksimal :max karakter!',
            'alamat_supplier.required' => 'alamat supplier tidak boleh kosong!',
            'alamat_supplier.max' => 'alamat supplier maksimal :max karakter!',
            'nohp_supplier.required' => 'no hp supplier tidak boleh kosong!',
            'nohp_supplier.max' => 'no hp supplier maksimal :max karakter!',
            // 'gambar_sayur.image' => 'file yang diunggah harus gambar!',
            // 'gambar_sayur.mimes' => 'file yang diunggah harus berupa format JPEG, PNG, atau JPG',
        ];

        $this->validate($request, [
            'nama_supplier' => 'required|max:50',
            'email_supplier' => 'required|max:60',
            'alamat_supplier' => 'required|max:50',
            'nohp_supplier' => 'required|max:15',
        ], $messages);

        $updateSupplier = Supplier::findOrFail($id);
        $updateSupplier->update($request->all());
        if ($updateSupplier) {
            Session::flash('status-supplier-updated', 'success');
            Session::flash('message-supplier-updated', 'Supplier berhasil diupdate!');
        }
        return redirect('/control-supplier');
    }
}
