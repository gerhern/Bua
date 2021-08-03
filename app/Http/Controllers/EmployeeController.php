<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

use App\Models\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('Employee.home',[
            'employees' => User::with('date')
                            ->where('id', 'LIKE', "%$request->q%")
                            ->latest()
                            ->paginate(13),
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
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $user = User::create([
            'name'       => $request->name,
            'firstName'  => $request->firstName,
            'secondName' => $request->secondName
        ]);

        $user->date()->create([
            'birthday' => $request->birthday,
            'annualInn' => $request->annualInn,
        ]);
        
        return redirect()->route('home');
    }
}
