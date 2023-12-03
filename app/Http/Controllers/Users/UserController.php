<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function getDataUser(Request $request) {
        // $nama = $request->get('nama');
        // $email = $request->get('email');

        // $arrNama = [
        //     'nama' => $nama,
        //     'email' => $email
        // ];

        // return json_encode($arrNama);
        public function index (){
        $data = [
[
            'nama'=> 'kalsi',
            'email' => 'kalsikirei21@gmail.com',
            'telp' => '0886378293',
            'alamat' => [
                'street' => 'jl kopo',
                'postcode' => '2200'
            ]
]
            ];
$data2 =[
    [
            'nama'=> 'cici',
            'email' => 'cici123@gmail.com',
            'telp' => '0886378293',
            'alamat' => [
            'street' => 'jl korea',
                    'postcode' => '123'
            ]
    ]
    ];
$data = array_merge($data, $data2);

        $id ='111';
        return view ('users/user', compact('data', 'id'));
        }

        public function create()
    {
        return view('users/create');
    }

        public function edit()
        {
            return view('users/edit');
        }
}




    // public function post(){

        // if (data['nama']== 'kalsi'){
        //     string = 'Nama Terdaftar';
        // } else {
        //     $string = 'test'
        // if (isset($data)){
        //     return view ('users/user', compact('data'));

        // } else {
        //    return null;
        // }
        // return view ('users/user', compact('data'));

    // }

//     public function createDataUser(Request $request) {
//         $post = $request->post();
//         $arr = [];
//         $arr['username'] = $request->post('username');
//         $arr['email'] = $request->post('email');
//         $arr['no_telp'] = $request->post('no_telp');

//         $isValid = self::cekUser($arr['username']);
//         if ($isValid){
//             $res['status'] = true;
//             $res['message'] = 'Username Valid!';
//             $code = 200;
//         } else {
//             $res['status'] = false;
//             $res['message'] = 'Username Tidak Valid!';
//             $code = 401;
//         }

//         //Contoh response json
//         return response()->json($res, $code);
//     }

//     private static function cekUser($username) {
//         if ($username == 'ilman') {
//             return true;
//         } else {
//             return false;
//         }
//     }

//     public function updateDataUser(Request $request) {
//         $post = $request->post();
//         $arr = [];
//         $arr['username'] = $request->post('username');
//         $arr['email'] = $request->post('email');
//         $arr['no_telp'] = $request->post('no_telp');

//         //Buat response seperti ketika insert, silahkan improve sendiri

//         return response()->json($arr, 200);
//     }

//     public function deleteDataUser(Request $request) {
//         $arr = [];
//         $arr['username'] = $request->get('username');

//         $isValid = self::cekUser($arr['username']);
//         if ($isValid){
//             $res['status'] = true;
//             $res['message'] = 'Data berhasil dihapus!';
//             $code = 200;
//         } else {
//             $res['status'] = false;
//             $res['message'] = 'Data tidak ditemukan / username tidak valid!';
//             $code = 401;
//         }

//         return response()->json($res, $code);
//     }
