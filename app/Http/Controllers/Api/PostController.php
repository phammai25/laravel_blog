<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\PostResource;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function __construct(){

        return $this->middleware('auth:api');

    }
    public function index(Request $request)
    {
        // $limit = $request->input('limit')?$request->input('limit'):5;
        // $post = Post::orderBy('id','asc')
        // ->select(
        //     'id',
        //     'user_id',
        //     'tag',
        //     'catalog',
        //     'content',
        //     'created_at',
        //     'updated_at'
        // )

        // ->paginate($limit);
         $post=request()->user()->post;
        return PostResource::collection($post);
        // return response()->json($this->transformCollection($post),200);
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
         $post=$request->user()->post()->create($request->all());

        return new PostResource($post);
        // $user_id = $request->user_id;
        // $tag = $request->tag;
        // $catalog = $request->catalog;
        // $content = $request->content;
        // Post::create([
        //         'user_id'=>$user_id,
        //         'tag'=>$tag,
        //         'catalog'=>$catalog,
        //         'content'=>$content
        //     ]);
        // return response()->json([
        //     'message'=>'Successfull'
        //     ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return new PostResource($post);
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
    public function update(Request $request, Post $post)
    { 
         if($request->user()->id !== $post->user_id){
            return response()->json(['error'=>'Unauthorized action'],401);
        }

          $post->update($request->all());   

        return new PostResource($post);

        // $this->ProductUserCheck($product);
        // $request['detail'] = $request->description;
        // unset($request['description']);
        // $product->update($request->all());
        // return response([
        //     'data' => new ProductResource($product)
        // ],Response::HTTP_CREATED);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         if(request()->user()->id !== $post->user_id){
            return response()->json(['error'=>'Unauthorized action'],401);
        }

         $post=$post->delete();

         return response()->json(null,200);   
        // $this->ProductUserCheck($post);
        // $post->delete();
        // return response(null,Response::HTTP_NO_CONTENT);
    }
    public function login(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        $data = DB::select('select ');
    }
    public function ProductUserCheck($post)
    {
        die(auth()->user()->id);
        if (auth()->user()->id!== $post->user_id) {
            throw new ProductNotBelongsToUser;
        }
    }
    public function transformCollectionID($post){
        $postToArray = $post->toArray();
        return [  
            'status' => 0,
            'messages' => 'Return success!',
            'data' => array_map([$this,'transformData'],$postToArray)
        ];
    }
    public function transformCollection($post) {
        $postToArray = $post->toArray();
        return [    
            'current_page' => $postToArray['current_page'],
            'first_page_url' => $postToArray['first_page_url'],
            'last_page_url' => $postToArray['last_page_url'],
            'next_page_url' => $postToArray['next_page_url'],
            'prev_page_url' => $postToArray['prev_page_url'],
            'per_page' => $postToArray['per_page'],
            'from' => $postToArray['from'],
            'to' => $postToArray['to'],
            'total' => $postToArray['total'],
            'status' => 0,
            'messages' => 'Return success!',
            'data' => array_map([$this,'transformData'],$postToArray['data'])

        ];
    }
    public function transformData($post) {
      //  $show = json_decode(json_encode($post));
        return [
            'id' => $post['id'],
            'user_id' => $post['user_id'],
            'tag' => $post['tag'],
            'catalog' => $post['catalog'],
            'content' => $post['content'],
            'created_at' => $post['created_at'],
            'updated_at' => $post['updated_at']

        ];
    }
}
