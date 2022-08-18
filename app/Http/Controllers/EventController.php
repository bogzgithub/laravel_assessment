<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{   
    /*
        Start For API
    */
    // show all data
    public function index(){
        return response()->json([
            'message' => 'Successfully fetch data!',
            'success' => true,
            'data' => Event::all(),
        ], 200);
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
    }
    
    // update by id
    public function update(Request $request, $id)
    {   
        $event = Event::find($id);
        if (empty($event)){ // insert
            return $this->save($request);
        }
        else { // update

            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'slug' => 'required|unique:events,slug,'.$id,
                'startAt' => 'required',
                'endAt' => 'required|date|after_or_equal:startAt',
            ]);
    
            if ($validator->fails())
            {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->getMessageBag()->toArray()
    
                ], 200);
            }
            else {
                // to convert to ready format date and time to save in table database
                $request['startAt'] = strftime('%Y-%m-%d %H:%M:%S', strtotime($request['startAt']));
                $request['endAt'] = strftime('%Y-%m-%d %H:%M:%S', strtotime($request['endAt']));
    
                if($event->update($request->all())){
                    return response()->json([
                        'message' => 'Successfully updated!',
                        'success' => true,
                        'data' => array(),
                    ], 200);
                }
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

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'slug' => 'required|unique:events',
            'startAt' => 'required',
            'endAt' => 'required|date|after_or_equal:startAt',
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ], 200);
        }
        else {
            // to convert to ready format date and time to save in table database
            $request['startAt'] = strftime('%Y-%m-%d %H:%M:%S', strtotime($request['startAt']));
            $request['endAt'] = strftime('%Y-%m-%d %H:%M:%S', strtotime($request['endAt']));

            if(Event::create($request->all())){
                return response()->json([
                    'message' => 'Successfully inserted!',
                    'success' => true,
                    'data' => array(),
                ], 200);
            }
        }
    }
    /*
        End For API
    */

    public function showAll()
    {   
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
