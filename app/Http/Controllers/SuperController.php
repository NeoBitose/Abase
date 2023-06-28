<?php

namespace App\Http\Controllers;

use SweetAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SuperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambahuser.index',[
            'user' =>DB::table('users')
                        ->get(),
            'success' => false,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ],[
            'name.required' => 'Nama organisasi wajib diisi',
            'name.unique' => 'Nama sudah dipakai',
            'email.required' => 'email wajib diisi',
            'level.required' => 'level wajib diisi',
            'email.unique' => 'email sudah dipakai',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 8',
            'password_confirmation.required' => 'konfirmasi password wajib diisi',
            'password_confirmation.same' => 'konfirmasi password salah',
            'password_confirmation.min' => 'password minimal 8',
        ]);

        $savepassword = Hash::make($request->password);

        $data = ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $savepassword,
            'level' => $request->level,
            'foto' => 'admin.jpg',
        ]);

        User::create($data);

        alert()->success('Data berhasil ditambahkan', 'Berhasil!');
        
        return view('tambahuser.index',[
            'user' =>DB::table('users')
                        ->get(),
            'success' => true,
            'msg' => "user berhasil ditambah",
            
        ]);
    }

    public function edituser($id)
    {
        $data = [
            'user' => DB::table('users')
                ->where('id', '=', $id)
                ->first(),
            'success' => false,
            'msg' => "",
        ];
        return view('tambahuser.edit', $data);
    }

    public function updateuser($id)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',            
        ],[
            'name.required' => 'Nama organisasi wajib diisi',
            'email.required' => 'email wajib diisi',
            'level.required' => 'level wajib diisi',            
        ]);

        if (Request()->password <> ""){

            $savepassword = Hash::make(Request()->password);

            $data = ([
                'name' => Request()->name,
                'email' => Request()->email,
                'password' => $savepassword,
                'level' => Request()->level,
                'foto' => 'admin.jpg',
            ]);

            DB::table('users')
                ->where('id','=', $id)
                ->update($data);
        }
        
        else {

            $data = ([
                'name' => Request()->name,
                'email' => Request()->email,
                'level' => Request()->level,
                'foto' => 'admin.jpg',
            ]);

            DB::table('users')
                ->where('id','=', $id)
                ->update($data);
        }
        
        
        alert()->success('Data berhasil ditambahkan', 'Berhasil!');

        // return view('tambahuser.index',[
        //     'user' =>DB::table('users')
        //                 ->get(),
        //     'success' => true,
        //     'msg' => "user berhasil di edit",
        // ]);

        return redirect('/tambah_user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
