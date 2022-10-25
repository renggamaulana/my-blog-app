<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display the admin homepage
     *
     * @return  [type]  [return description]
     */
    public function index() {
        echo "Hello Admin";
    }

    /**
     * Display view for create a new resource
     *
     * @return View
     */
    public function create() {
        echo "Welcome to Create Page!";
    }

    /**
     * store the record to database
     *
     * @param   Request  $request  
     * 
     * @return  View
     */
    public function store(Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    /**
     * Display for a specific record
     *
     * @param INT $id
     * 
     * @return  App\Models
     */
    public function show($id) { 

    }

    /**
     * Display an edit view 
     *
     * @return  INT $id
     */
    public function edit($id) {

    }

    /**
     * update a spefic record from database
     *
     * @return  Request $request
     */
    public function update(Request $request) {

    }

    /**
     * Destroy / Delete  a specific record on database
     *
     * @return  INT $d
     */
    public function destroy($id) {

    }
}
