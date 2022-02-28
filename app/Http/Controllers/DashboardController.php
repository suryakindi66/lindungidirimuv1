<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambildatacatatan = CatatanPerjalanan::where('user_id', Auth()->user()->id)->get();
        $hitungdatacatatan = CatatanPerjalanan::where('user_id', Auth()->user()->id)->count();
        return view('dashboard.dashboard', ['datacatatan'=>$ambildatacatatan, 'hitungdatacatatan'=>$hitungdatacatatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewadddata()
    {
        return view('dashboard.add-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postadddata(Request $request)
    {
        $new_catatan = new CatatanPerjalanan;
        $new_catatan->user_id = Auth()->user()->id;
        $new_catatan->tanggal_masuk = $request->tanggal_masuk;
        $new_catatan->jam_masuk = $request->jam_masuk;
        $new_catatan->jam_keluar = $request->jam_keluar;
        $new_catatan->lokasi = $request->lokasi;
        $new_catatan->suhu_tubuh = $request->suhu;
        $new_catatan->save();
        $request->session()->flash('sukses-addcatatan');
        return redirect('/user/dashboard/add-data');
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
    public function vieweditprofile($id)
    {
        return view('dashboard.profile');
    }
    public function posteditprofile(request $request, $id)
    {
        $updatepassword = User::find($id);
        if($request->password == $request->confirmpassword){
            $updatepassword->password = bcrypt($request->password);
            $updatepassword->save();
            $request->session()->flash('suksespassword');
        }else{
            $request->session()->flash('errorpassword');
        }
        return back();
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
    public function logout()
    {
       Auth::logout();
       request(session()->regenerateToken());
       return redirect('/login');
    }
    public function delete($id)
    {
      $deletedata = CatatanPerjalanan::find($id);
      $deletedata->delete();
      return redirect('/user/dashboard');
    }
}
