<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function home()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take('4')->get();
        return view('welcome', compact('articles'));
    }

    public function searchArticles(Request $request)
    {

        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(6);
        // dd($articles, $query);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function setLanguage($lang){

        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function easteregg(){
        return view('article.easteregg');
    }
    public function dashboard(Article $article){

        $user= Auth::id();
        if(!$user) {
        return redirect()->route('login');
    }

        $userId = Auth::id();
        $articles = Article::where('is_accepted' , true)->orderBy('created_at', 'desc')->get();
        $userArticles = Article::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        return view('auth.dashboard', compact('userArticles', 'articles'));
    }
}
