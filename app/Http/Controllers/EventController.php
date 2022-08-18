<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Mail\CreateEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EventController extends Controller
{   
    public function index()
    {   
        // if (!Auth::check()) {
        //     // will redirecto to home page consist of register and log in
        //     return redirect('homepage');
        // }
        return View::make('event.index');
    }

    public function view($id){
        $event = Event::find($id);
        $data = [
            'success' => true,
            'data' => $event,
            'message' => '',
        ];

        if (empty($event)){ 
            $data = [
                'success' => false,
                'data' => array(),
                'message' => 'No Event Found!',
            ];
        }
        return View::make('event.view', compact('data'));
    }

    public function create(){
        return View::make('event.create');
    }

    public function edit($id){
        $event = Event::find($id);
        $data = [
            'success' => true,
            'data' => $event,
            'message' => '',
        ];

        if (empty($event)){ 
            $data = [
                'success' => false,
                'data' => array(),
                'message' => 'No Event Found!',
            ];
        }
        return View::make('event.edit', compact('data'));
    }
}
