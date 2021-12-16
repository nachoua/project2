<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DB_Project;
use App\Http\Redirect;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\Input;


class projectController extends Controller
{
    //



    public function store(Request $request)
    {

        $BD=new DB_Project();

        $BD->first_name = request('first_name');
        $BD->last_name=request('last_name');
        $BD->gender=request('gender');
        $BD->email=request('email');
        $BD->telephone=request('telephone');
        $BD->image=request('image');
        $BD->save();

        return Redirect('slid');
    }
    public function destroy($id)
    {

        $bdp = DB_Project::findOrFail($id);
        $bdp->delete();
        // return '<script type="text/javascript">alert("successful delete");</script>';
        return Redirect('slid');
        //    return"<script>
        // alert('There are no fields to generate a report');
        // window.location.href='Redirect('slid')';
        // </script>";

    }
    public function show($id)
    {

         $bd_show=DB_Project::where('id', $id)->get();
         return view('show', ['bd_show'=>$bd_show,]);

    }
//     public function update($id)
//     {
// //         $flight = DB_Project::find(1);

// // $flight->name = 'New Flight Name';

// // $flight->save(
//         // $bd_update=DB_Project::where('id', 3)->update(['first_name'=>'oulaya', 'last_name'=>'Haidar']);
//         // return view('pagee',['bd_update'=>$bd_update,]);
//         // $bd_update=DB_Project::where('id', $id)->update(['first_name'=>'oulaya', 'last_name'=>'Haidar']);
//         //  return view('pagee',['bd_update'=>$bd_update,]);
//         $update = DB_Project::findOrFail($id);
//         // $update=DB_Project::where('id', $id)->update(Input::all());
//         $update->update(DB_Project::all());
//       $update->save();
//       return '<script type="text/javascript">alert("successful update");</script>';
//     }
    public function index()
    {
     $BD_all = DB_Project:: all();
    return view('slid', ['BD_all'=>$BD_all]);
    }

   public function edit($id)
   {

       $BD_edit=DB_Project::find($id);
    //   dd( $BD_edit);
       return view('edit', ['BD_edit'=> $BD_edit]);

   }
   public function update(Request $request, $id)
   {


    $update=DB_Project::find($id);

      $update->first_name=request('first_name');
      $update->last_name=request('last_name');
      $update->gender=request('gender');
      $update->email=request('email');
      $update->telephone=request('telephone');
      $update->image=request('image');
      $update->save();

    //   return "<script type='text/javascript'>alert('the update operation successful');</script>";
     return Redirect('slid');


   }
   public function search(Request $request)
   {

       $s=$request->input("query");
    $data=DB_Project::where('first_name', 'LIKE', '%'.$request->input("query").'%')->get();
   $count=$data->count();


    if($count==0)
    {

    //    return "<script type='text/javascript'>alert('the update operation successful');
    //    window.location.href=Redirect('slid');
    //    </script>";
       return Redirect('slid');
    }
    else {
        return view('search', ['data'=> $data]);

    }

        // return "<script type='text/javascript'>window.location.href='{{Route('indexp')}}';</script>";

       // return  abort_unless($data, 404, 'Project not found');


   }
}
