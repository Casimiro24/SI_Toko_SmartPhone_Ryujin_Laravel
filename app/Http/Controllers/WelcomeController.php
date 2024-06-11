<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WelcomeController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function CreateTransaction(Request $request)
    {
        

        Transaction::create([
            'nama' => $request->input('detail-nama'),
            'nomorhp' => $request->input('detail-nomor'),
            'alamat' => $request->input('detail-alamat'),
            'category_id' => $request->input('id_categories'),
            'harga' => $request->input('detail-harga'),
            'status' => $request->input('status'),
        ]);

        return redirect('/');
    }
}
