<!-- <?php

// namespace App\Http\Controllers;

// use\App\Model\Pegawai;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

// class PegawaiController extends Controller -->
// {
//     public function getDataPegawai(Request $request)
//     {
//         public function index()
//         {
//         }

//         $id = $request->get('id');
//         $nama_pegawai = $request->get('nama_pegawai');
//         $no_telp = $request->get('no_telp');
//         $email = $request->get('email');
//         $nik = $request->get('nik');
//         $sort = $request->get('sort');
//         $isPage = $request->get('is_page');

//         try {
//             $model = new Pegawai();
//             $query = $model->select(
//                 'id',
//                 'nama_pegawai',
//                 'no_telp',
//                 'email',
//                 'nik',
//                 'alamat',
//                 'is_active'
//             );
//             if (isset($id)) {
//                 $query->where('id', $id);
//             }

//             $query = $query->get();
//             return ResponseHelpers::success(ConstantsHelper::STATUS_SUCCESS, ConstantsHelper::MSG_SUCCESS_GET, $query);

//         } catch (\Exception $e) {
//             return ResponseHelpers::error(ConstantsHelper::STATUS_ERR_SERVER, ConstantsHelper::MSG_ERR_SERVER, $e);
//         }
//     }

//     public function saveDataPegawai(Request $request) {

//         $id = $request->post('id');
//         $nama_pegawai = $request->post('nama_pegawai');
//         $no_telp = $request->post('no_telp');
//         $email = $request->post('email');
//         $nik = $request->post('nik');
//         $tgl_lahir = $request->post('tgl_lahir');
//         $alamat = $request->post('alamat');

//         try{
//             $model = new Pegawai();
//             $model->id = $id;
//             $model->nama_pegawai = $nama_pegawai;
//             $model->no_telp = $no_telp;
//             $model->email = $email;
//             $model->nik = $nik;
//             $model->tgl_lahir = $tgl_lahir;
//             $model->alamat = $alamat;
//             if(isset($model->id)){
//                 $query = $model->find($id);
//                 if($query == null){
//                     return ResponseHelpers::error(ConstantsHelper::STATUS_ERR_VALIDATION, ConstantsHelper::MSG_ERR_SAVE, false);
//                 }
//             }

//             if ($model->save(['id' => $id])) {
//                 return ResponseHelpers::success(ConstantsHelper::STATUS_SUCCESS, ConstantsHelper::MSG_SUCCESS_SAVE, true);
//             } else {
//                 return ResponseHelpers::error(ConstantsHelper::STATUS_ERR_VALIDATION, ConstantsHelper::MSG_ERR_SAVE, false);
//             }
//         } catch (\Exception $e) {
//             return ResponseHelpers::error(ConstantsHelper::STATUS_ERR_SERVER, ConstantsHelper::MSG_ERR_SERVER, $e);
//         }

//     }

//     public function deleteDataPegawai(Request $request){

//     }
// }
