<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("shopkaro.login"); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("shopkaro.signup");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // isme data validation??
    //    $validated = $this->validate($request, [
    //         'type' =>'required',
    //         'name' =>'required',
    //         'email' => 'required | max:250 | email | unique:customers',
    //         'pass' => 'required | alpha_num',
    //         'cpass' => 'required',
    //     ]);

        // $this->validate($request,  [
        //     'type' =>'required',
        //     'name' =>'required|max:255',
        //     'email' => 'required|max:250|email|unique:customers',
        //     'pass' => 'required|alpha_num',
        //     'cpass' => 'required',
        // ]);
        $res = \Validator::make($request->all(), [
                    'type' =>'required',
                    'name' =>'required | string',
                    'email' => 'required | max:250 | email | unique:customers',
                    'pass' => 'required | alpha_num',
                    'cpass' => 'required',
        ]);

        // return $request->all();
        // return response()->json($res->messages());
        // if ($res->fails()) {
        //     return redirect('/shopkaro/login/create')
        //                 ->withErrors($res);
        //                 // ->withInput();
        // }

        if($res->fails())
        {
            return \Redirect::back()->withErrors($res);
        }

        $cust = new Login;
        $cust->name = $request->name;
        $cust->email = $request->email;
        // $cust->no = $request->no;
        // $cust->pass = Hash::make($request->pass);
        $cust->password = bcrypt($request->pass);
        // $cust->cpass = $request->cpass;

        if($request->pass == $request->cpass){
            $cust->save();
        }
        else{
            //return redirect('shopkaro/login/create');
        }

        // return "check 2";
    
        //     return redirect('shopkaro');
        // }
        // else{
        // // Auth::login($cust,TRUE);
        // return redirect('shopkaro/login/create');
        // }
    // return $request->all();
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
