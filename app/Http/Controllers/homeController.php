<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;

use Redirect;
use Auth;
use Input;
use IlluminateSupportFacadesValidator;
use IlluminateFoundationBusDispatchesJobs;
use IlluminateRoutingController as BaseController;
use IlluminateFoundationValidationValidatesRequests;
use IlluminateFoundationAuthAccessAuthorizesRequests;
use IlluminateFoundationAuthAccessAuthorizesResources;
use IlluminateHtmlHtmlServiceProvider;


class homeController extends Controller
{
    public function index()
    {
        $book = Book::paginate(5);  
        $cat = Category::all();  
		return view('home.index', compact('cat','book'));
        //return $cat;

       
    }

    public function view($id)
    {
        $book= Book::find($id); 
        $cat = Category::all();   
		return view('home.view', compact('cat','book'));
    
    }
    public function preview($id)
    {
        $book= Book::find($id); 
        $cat = Category::all();   
		return view('home.preview', compact('cat','book'));
    
    }
    public function signin()
    {

        return view('home.signin');
    }
    public function login()
    {

        return view('home.login');
    }
    public function contact()
    {

        return view('home.contact');
    }
    public function about()
    {

        return view('home.about');
    }
    public function tac()
    {

        return view('home.tac');
    }
    public function store(Request $request)
    {
        $con = new Contact();  
        $con->conname = $request->get('conname');  
        $con->conemail= $request->get('conemail');
        $con->contact= $request->get('contact');
        $con->message= $request->get('message');
        $con->save();
		
		return ("Successfully Submitted");
    }

    public function catview($id)
    {
        $book= Book::paginate(10);
        $categoryid = $id;

        $cat = Category::all();   
        //return $book;
        return view('home.catview', compact('cat','book','categoryid'));
    }
     
    public function buy()
    {
        return view('home.buy');

    }

    

    public function feedback()
    {
        return view('home.feedback');
    }
}
