<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit')?$request->input('limit'):5;
        $user = User::orderBy('id','asc')
        ->select(
            'id',
            'name',
            'email',
            'password',
            'created_at', 
            'updated_at'
        )
        ->paginate($limit);
        return response()->json($this->transformCollection($user),200);
    }
     public function transformCollectionID($user){
        $userToArray = $user->toArray();
        return [  
            'status' => 0,
            'messages' => 'Return success!',
            'data' => array_map([$this,'transformData'],$userToArray)
        ];
    }
    public function transformCollection($user) {
        $userToArray = $user->toArray();
        return [    
            'current_page' => $userToArray['current_page'],
            'first_page_url' => $userToArray['first_page_url'],
            'last_page_url' => $userToArray['last_page_url'],
            'next_page_url' => $userToArray['next_page_url'],
            'prev_page_url' => $userToArray['prev_page_url'],
            'per_page' => $userToArray['per_page'],
            'from' => $userToArray['from'],
            'to' => $userToArray['to'],
            'total' => $userToArray['total'],
            'status' => 0,
            'messages' => 'Return success!',
            'data' => array_map([$this,'transformData'],$userToArray['data'])

        ];
    }
    public function transformData($user) {
      //  $show = json_decode(json_encode($user));
        return [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
           // 'password'=>$user['password'],
            'created_at' => $user['created_at'],
            'updated_at' => $user['updated_at']

        ];
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
        $request ->validate([
            'email'=>'required|email|unique:users',
            'name'=>'required',
            'password'=>'required|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $created_at = $request->created_at;
        $user->save();
        
        $http = new Client;
            $response = $http->post('http://localhost:8080/TT%20PHP/demo/public/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'xHwTEeS9n6BiYzfKyGtOAeMKvI6JTG93hF6POho7',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
        ],
    ]);
        return response()->json([
             'message'=>'Successfull'
             ]);

    return response(['data'=>json_decode((string) $response->getBody(), true)]) ;
    //     User::create([
    //             'name'=>$name,
    //             'email'=>$email,
    //             'password'=>Hash::make($password),
    //             'created_at'=>date('Y-m-d H:i:s'),
    //         ]);

    //     return response()->json([
    //         'message'=>'Successfull'
    //         ]);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){

        $request ->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response(['status'=>'error','message'=>'User not found']);
        }
        if(Hash::check($request->password,$user->password)){
            $http = new Client;
            $response = $http->post('http://localhost:8080/TT%20PHP/demo/public/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'xHwTEeS9n6BiYzfKyGtOAeMKvI6JTG93hF6POho7',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
        ],
    ]);
                 return response(['data'=>json_decode((string) $response->getBody(), true)]) ;
        }
    }
 
    public function show($id)
    {
          $user = User::where('id',$id)->get();
          return response()->json($this->transformCollectionID($user),200);
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
