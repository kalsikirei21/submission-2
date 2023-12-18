<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Exception;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){

        $books = Books::all();
        return view('books/index', compact(['books']));
        // $model = new Books();
        // $data = $model->select(
        //     'id',
        //     'book_name',
        //     'author',
        //     'published_at',
        // )->get()->toArray();

        // return view('books/index', compact('data'));
    }
    public function createBook(){
        return view('books/create');

    }
public function saveBook(Request $request){
    $request->validate([
        'id'=> 'required',
        'book_name'=> 'required',
        'author' => 'required',
        'published_at'=> 'required'
        ]);
//    dd($request->except(['_token','submit']));
    Books::create($request->except(['_token','submit']));
    return redirect('/books/index');
}
public function editBook($id){

    $books = Books::find($id);
    return view('/books/edit', compact(['books']));
}
public function updateBook($id, Request $request){
    $books = Books::find($id);
    $books->update($request->except(['_token','submit']));
    return redirect('/books/index');
}
 public function deleteBook(Request $request){
    $id = $request->get('id');
    $books = Books::find($id);
    $books->delete();
    return redirect('/index')->with('status', 'Delete Sukses');
 }

    // public function saveBook(Request $request){
    //     $post = $request->post();
    //     $body['id'] = $post['id'];
    //     $body['book_name'] = $post['book_name'];
    //     $body['author'] = $post['author'];

    //     $sukses = 'Data Sukses Disimpan!';
    //     $gagal = 'Data Gagal Disimpan!';

    //     if (isset($body['id'])) {
    //         $result = self::updateBook($body);
    //     } else {
    //         $result = self::createBook($body);
    //     }

    //     if ($result == true) {
    //         return redirect('books/index')->with('status', $sukses);
    //     } else {
    //         return redirect('books/index')->with('status', $gagal);
    //     }
    // }

    // private function createBook($body){

    //     $model = new Books();
    //     try{
    //         $sukses = 'Data Sukses Disimpan!';
    //         $gagal = 'Data Gagal Disimpan!';
    //         if(isset($body['book_name'])){
    //             $model->create($body);
    //             return true;
    //             // return redirect('books/index')->with('status', $sukses);
    //         } else {
    //             return false;
    //             // return redirect('books/index')->with('status', $gagal);
    //         }

    //     } catch (Exception $e) {
    //         return false;
    //     }
    // }

    // private function updateBook($body){
    //     $model = new Books();
    //     try{
    //         $sukses = 'Data Sukses Disimpan!';
    //         $gagal = 'Data Gagal Disimpan!';
    //         if(isset($body['book_name'])){
    //             $model->where('id', $body['id'])->update($body);
    //             return true;
    //             // return redirect('books/index')->with('status', $sukses);
    //         } else {
    //             return false;
    //             // return redirect('books/index')->with('status', $gagal);
    //         }

    //     } catch (Exception $e) {
    //         return false;
    //     }
    // }

    // public function deleteBook(Request $request){
    //     $id = $request->get('id');
    //     try{
    //         $model = new Books();
    //         $model->find($id)->delete();
    //         return redirect('books/index')->with('status', 'Delete Sukses');
    //     } catch(Exception $e){
    //         return redirect('books/index')->with('status', 'Delete Gagal');
    //     }
    // }
}
