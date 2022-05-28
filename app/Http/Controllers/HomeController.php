<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use Session;
use Config;
use DB;
use Mail;
use App\Product;
use App\ProductDetail;

class HomeController extends Controller {

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAction() {
        $locale = Session::get('locale', Config::get('app.locale'));
        $products = Product::where('status', 1)->where('display_home_page', 1)
            ->select('id', 'sku', 'home_page_image as image', 'name_'.$locale.' AS title', 'desc_'.$locale.' AS desc')
            ->orderBy('sort', 'ASC')
            ->get();    
        return view('index', ['products'=> $products]);
    }
    
    public function aboutUsAction() {
        return view('about-us');
    }
    
    public function contactAction(Request $request) {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            $email = 'aakashrathod31@gmail.com';
            try{
                // echo "<pre>";print_r($input);exit;
                Mail::send('emails.contactUs', ['phone' => $input['phone'],'name' => $input['name'],'email' => $input['email'],'details' => $input['message']], function($message) use ($postdata, $email) {
                   $message->from($email, 'Gopi Anand');
                   $message->to($email, 'New Inquiry - Gopi Anand')->subject('New Inquiry - Gopi Anand');
                });
                return back()->with('success', 'Your Inquiry Send Successfully');  
            } catch(\Exception $e){
                return back()->with('error', 'something went wrong try again');
            }

        }else{
            return view('contact-us');
        }        
    }
    
    public function change_language(Request $request){
        $request->session()->put('locale', $request->selected_language);
    }
    
    public function galleryAction() {
        return view('gallery');
    }

    public function beadWorkAction() {
		$locale = Session::get('locale', Config::get('app.locale'));
        $products = Product::where('status', 1)
            ->select('id', 'sku', 'image', 'name_'.$locale.' AS title')
            ->orderBy('sort', 'ASC')
            ->get();
        return view('bead-work', ['products' => $products]);
    }

    public function awardsAction() {
        return view('awards');
    }

    public function beadWorkDetailsAction($sku) {
        $locale = Session::get('locale', Config::get('app.locale'));
        $productDetails = Product::join('product_details as PD', 'PD.product_id', '=', 'products.id')
            ->where('products.status', 1)
            ->where('products.sku', $sku)
            ->select('product_id', 'sku', 'PD.image', 'PD.image2', 'PD.title_'.$locale.' AS char', 'products.name_'.$locale.' AS title',
            'PD.details_'.$locale.' AS details', 'PD.other_details_'.$locale.' AS other_details', 'order_n')
            ->orderBy('order_n', 'ASC')
            ->get();
        $title = !empty($productDetails[0]) ? $productDetails[0]->title : "Bead Work Details";
        return view('bead-work-details', ['productDetails' => $productDetails, "title" => $title]);
    }
}
