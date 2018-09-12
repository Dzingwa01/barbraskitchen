<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use DB;
use DataTables;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.menus');
    }

    public function showMenus()
    {
        $menu = Menu::all();
        return Datatables::of($menu)->addColumn('action', function ($menu) {
            $re = 'menus/' . $menu->id.'/edit';
            $sh = 'menus/' . $menu->id;
            $del = 'menu/delete/' . $menu->id;
            return '<a href=' . $sh . '><i class="glyphicon glyphicon-eye-open"></i></a> <a href=' . $re . '><i class="glyphicon glyphicon-edit"></i></a> <a href=' . $del . '><i class="glyphicon glyphicon-trash"></i></a>';
        })
            ->make(true);
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
        $input=$request->all();
//        dd($input);

        DB::beginTransaction();
        try {
            if(array_key_exists("picture",$input)) {
                $file = $input['picture'];
                $ext = $file->getClientOriginalExtension();
                $filename = md5(str_random(5)) . '.' . $ext;
                $name = 'picture_url';
                if ($file->move('img/', $filename)) {
                    $this->arr[$name] = 'img/' . $filename;
                }
                $input['picture_url'] = $this->arr[$name];
                Menu::create($input);
                DB::commit();
                return redirect('menus')->with('status',"Menu Item saved successfully");
            }else{
//                $input['picture_url'] = null;
                Menu::create($input);
                DB::commit();
                return redirect('menus')->with('status',"Menu Item saved successfully");
            }

        } catch (\Exception $e) {
            DB::rollback();
            return redirect('menus')->with('error', "An error occured, please contact system admin");
        }

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
        $menu = Menu::where('id',$id)->first();
        return view('admin.menu_view',compact('menu'));
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
        $menu = Menu::where('id',$id)->first();
        return view('admin.menu_edit',compact('menu'));
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
        $input=$request->all();
        $menu = Menu::where('id',$id)->first();

        DB::beginTransaction();
        try {
            if(array_key_exists("picture",$input)) {
                $file = $input['picture'];
                $ext = $file->getClientOriginalExtension();
                $filename = md5(str_random(5)) . '.' . $ext;
                $name = 'picture_url';
                if ($file->move('img/', $filename)) {
                    $this->arr[$name] = 'img/' . $filename;
                }
                $input['picture_url'] = $this->arr[$name];
                $menu->update($input);
                DB::commit();
                return redirect('menus')->with('status',"Menu Item saved successfully");
            }else{
                $menu->update($input);
                DB::commit();
                return redirect('menus')->with('status',"Menu Item saved successfully");
            }

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return redirect('menus')->with('error', "An error occured, please contact system admin");
        }
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
        DB::beginTransaction();

        try {
            $menu = Menu::find($id);
            $menu->delete();
            DB::commit();
            return redirect('menus')->with("status", "Menu Item deleted successfully");
        } catch (\Exception $e) {
            return redirect('menus')->with("error", "could not delete menu item, please contact system admin".$e);
        }
    }
}
