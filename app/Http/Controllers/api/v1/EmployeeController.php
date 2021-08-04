<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiRequest;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\User;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EmployeeCollection(User::with('date')->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApiRequest $request)
    {
        //
        //Almacena un empleado nuevo mediante api

        $date = explode('/', $request->birthday);
        $formatDate = Carbon::create($date[2],$date[1], $date[0]);
        
        $user = User::create([
            'name'       => $request->name,
            'firstName'  => $request->firstName,
            'secondName' => $request->secondName
        ]);

        $user->date()->create([
            'birthday' => $formatDate,
            'annualInn' => $request->annualInn,
        ]);

        return response('Recurso creado Correctamente',201);

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
        return new EmployeeResource(User::find($id));
    }
}
