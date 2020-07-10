<?php

namespace App\Http\Controllers\API;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class ArticlesController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllArticles()
    {
        $articles = Articles::get(['id','name', 'price', 'quantity', 'country_of_origin']);

        if(!$articles)
        {
            return response()->json(['message' => 'Whoops something went wrong while trying to fetch records.'], 404);
        }

        return response()->json($articles);
    }

    public function getAllArticles2()
    {
        $articles = Articles::get(['id','name', 'price', 'quantity', 'country_of_origin']);

        if(!$articles)
        {
            return response()->json(['message' => 'Whoops something went wrong while trying to fetch records.'], 404);
        }

        return response()->json($articles);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getArticle($id, Request $request)
    {
        $article = Articles::where('id', $id)->get(['name', 'price', 'quantity', 'country_of_origin']);

        if(!$article)
        {
            return response()->json(['message' => 'Whoops something went wrong while trying to fetch records.'], 404);
        }

        return response()->json($article);

    }

    public function getArticle2($id, Request $request)
    {
        $article = Articles::where('id', $id)->get(['name', 'price', 'quantity', 'country_of_origin']);

        if(!$article)
        {
            return response()->json(['message' => 'Whoops something went wrong while trying to fetch records.'], 404);
        }

        return response()->json($article);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function insert(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $task = Articles::create($request->all());

        if(!$task)
            return response()->json(['message'=>'Inserting article resulted error'], 400);

        return response()->json(['message'=>'Article inserted.'],200);
    }


    public function update($id, Request $request)
    {

        $article = Articles::findOrFail($id);

        $article->fill($request->all());

        $check = $article->save();

        return response()->json(['message' => 'Article updated.'], 200);

    }

    public function delete($id, Request $request)
    {

        $article = Articles::findOrFail($id);

        $check = $article->delete();

        if(!$check)
            return response()->json(['message' => 'Article not deleted.'], 400);

        return response()->json(['message' => 'Article deleted.'], 200);

    }

}
