<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIBookController extends Controller
{
    public function DeleteAPI(Request $request){
        $BookDelete = Book::find($request->id);
        $BookDelete->delete();
        return response()->json([
            'message' => 'Data Berhasil Dihapus',
            'data' => $BookDelete
        ]);
    }

    public function showFormAPI(Request $request){
        // Query Builder
        // Elonguent
        // dd($request);
        $book = Book::create([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'user_id' => 1,
            'image' => $request->image
        ]);
        // dd($request->category);
        $category = Category::whereIn('category_name', $request->category)->get();
        $book->category()->attach($category);
        return response()->json([
            'message' => 'Data Berhasil Dibuat',
            'data' => $book
        ]);
    }

    public function ViewAllAPI(){
        $books = Book::all();
        return response()->json([
            'data' => $books
        ]);
    }

    public function ShowUpdateFormAPI(Request $request, $id){
        $BookUpdate = Book::where('id', '=', $id)->first();

        $BookUpdate->update([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        return response()->json([
            'message' => 'Data Berhasil Diubah',
            'data' => $BookUpdate
        ]);
    }
}
