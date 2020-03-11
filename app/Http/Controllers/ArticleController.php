<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Coment;
use App\user;
use App\Category;
// use App\User;
class ArticleController extends Controller
{
  public function index(Request $request)
    {
        $articles = Article::all();
        $vac = compact('articles',);
        return view('escritor.article.index',$vac);
    }

  public function show($id)
    {
      $coments = Coment::all();
      $articulo = Article::findOrFail($id);
      $users = user::all();
      $vac = compact('articulo', 'coments', 'users');
      return view('escritor.article.show', $vac);
    }

  public function create(){
$categories = Category::all() ;
$vac = compact('categories');
   return view('escritor.article.create', ['articulo'=>new Article],$vac);
  }

  public function store(Request $rq)
      {

        $article = new Article();
        $article->title = $rq['title'];
        $article->excerpt = $rq['excerpt'];
        $article->description = $rq['description'];
        $article->category_id = $rq['category'];
        $article->user_id = $rq['user_id'];
        // if ($rq->hasFile('img')) {
        //       $articulo->image = $rq->file('img')->store('public/product');
        //     }
        $article->save();

        return redirect('/home');
      }


      public function destroy(Request $request, $id)
    {

        $articulo = Article::findOrFail($id);
        $articulo->delete();

        return redirect('/home');
    }



    public function del()
        {

            $articulos = Article::all();
            $vac = compact('articulos');
            return view('escritor.article.delete', $vac);

        }
    public function edit($id)
     {
      $categories = Category::all();
      $articulo = Article::findOrFail($id);
      $vac = compact('articulo', 'categories');
       return view('escritor.article.edit',$vac);
     }
     public function update(Request $request, $id)
         {
             $articulo = Article::findOrFail($id);
             $articulo->update($request->all());
             return redirect('article/show/' . $id);
         }
}
