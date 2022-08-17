<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    // show all data
    public function index()
    {
        return Event::all();
    }

    // show only active if current datetime is between startAt and endAt
    public function active(){
        $currentDateTime = date('Y-m-d H:i:s');

        return Event::whereDate('startAt', '<=', $currentDateTime)
                    ->whereDate('endAt', '>=', $currentDateTime)
                    ->get();
    }

    // show by id
    public function show($id)
    {
        return Event::find($id);
    }

    // create/insert event data
    public function store(Request $request)
    {    
        return $this->save($request);
        // this will reserve for validation
    }
    
    // update by id
    public function update(Request $request, $id)
    {   
        $event = Event::find($id);
        if (empty($event)){ // insert
            return $this->save($request);
        }
        else { // update
            if($event->update($request->all())){
                return response()->json([
                    'message' => 'Successfully updated!',
                    'success' => true,
                    'data' => array(),
                ], 200);
            }
        }

        // this will reserve for validation
    }

    // update specific field
    public function updateSpecific(Request $request, $id)
    {   
        
        $event = Event::findOrFail($id);
        $updateData = [
            $request->field => $request->value,
        ];

       if ($event->update($updateData)){
            return response()->json([
                'message' => 'Successfully updated!',
                'success' => true,
                'data' => array(),
            ], 200);
       }

       // this will reseve for validation
    }
    
    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if ($event->delete()){
            return response()->json([
                'message' => 'Successfully deleted!',
                'success' => true,
                'data' => array(),
            ], 200);
        }
    }

    private function save(Request $request){
        if(Event::create($request->all())){
            return response()->json([
                'message' => 'Successfully inserted!',
                'success' => true,
                'data' => array(),
            ], 200);
        }
    }
}
