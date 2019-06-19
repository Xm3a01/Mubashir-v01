<?php

namespace App\Http\Controllers\Browse;
use DB;
use App\News;
use App\Team;
use App\Company;
use App\Product;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrowseController extends Controller
{
    public function home()
    {
        $products = DB::table('products')->latest()->limit(4)->get();
        $projects = DB::table('projects')->latest()->limit(4)->get();
        $teams  = DB::table('teams')->latest()->limit(4)->get();
        $news = DB::table('news')->latest()->limit(4)->get();
        $companies = DB::table('companies')->latest()->limit(1)->get();
        return view('pages.ar.index')
         ->withTeams($teams)
           ->withProjects($projects)
             ->withNews($news)
                ->withProducts($products)
                 ->withCompanies($companies);
    }

    public function about()
    {
        $companies = DB::table('companies')->latest()->limit(1)->get();

        return view('pages.ar.about')->withCompanies($companies);
    }

    public function project()
    {
        $projects = Project::all();

        return view('pages.ar.project')->withProjects($projects);
    }

    public function contact()
    {
        return view('pages.ar.contact');
    }

    public function team()
    {
        $teams = Team::all();

        return view('pages.ar.team')->withTeams($teams);
    }

    public function product()
    {
        $products = Product::all();

        return view('pages.ar.product')->withProducts($products);
    }

    public function proDesc($id)          
    {
        $product =  Product::findOrFail($id);

        return view('pages.ar.product-desc')->withProduct($product);
    }
    public function news($id)
    {
        $all = News::all();
        $new = News::findOrFail($id);

        return view('pages.ar.news')
          ->withAll($all)
           ->withNew($new);
    }

    public function ArDesc($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.ar.description')->withProject($project);
    }

    
   // English pages
    public function Enhome()
    {
        $products = DB::table('products')->latest()->limit(4)->get();
        $projects = DB::table('projects')->latest()->limit(4)->get();
        $teams  = DB::table('teams')->latest()->limit(4)->get();
        $news = DB::table('news')->latest()->limit(4)->get();
        $companies = DB::table('companies')->latest()->limit(1)->get();

        return view('pages.en.index')
         ->withTeams($teams)
           ->withProjects($projects)
             ->withNews($news)
                ->withProducts($products)
                  ->withCompanies($companies);
    }

    public function Enabout()
    {
        $companies = DB::table('companies')->latest()->limit(1)->get();

        return view('pages.en.about')->withCompanies($companies);
    }

    public function Enproject()
    {
        $projects = Project::all();

        return view('pages.en.project')->withProjects($projects);
    }

    public function Enproduct()
    {
        $products = Product::all();

        return view('pages.en.product')->withProducts($products);
    }

    public function Encontact()
    {
        return view('pages.en.contact');
    }

    public function Enteam()
    {
        $teams = Team::all();

        return view('pages.en.team')->withTeams($teams);
    }

    public function Ennews($id)
    {
        $all = News::all();
        $new = News::findOrFail($id);

        return view('pages.en.news')
          ->withAll($all)
           ->withNew($new);
    }

    public function EnDesc($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.en.description')->withProject($project);
    }


    public function proEnDesc($id)          
    {
        $product =  Product::findOrFail($id);

        return view('pages.en.product-desc')->withProduct($product);
    }

}
