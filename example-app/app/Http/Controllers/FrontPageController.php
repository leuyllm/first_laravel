<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //

    public function index(){
        return view('front');
    }

    public function about(){
        $data['title']="About Us";
        return view('front_about',$data);
    }

    public function service(){
        $data['title']="Services";
        return view('front_serviecs',$data);
    }
    
    public function packages(){
        $data['title']="Our Packages";
        return view('front_packages',$data);
    }

    public function destination(){
        $data['title']="Our Destination";
        return view('front_destination',$data);
    }

    public function booking(){
        $data['title']="Booking";
        return view('front_booking',$data);
    }

    public function guides(){
        $data['title']="Guides";
        return view('front_guides',$data);
    }

    public function testimonial(){
        $data['title']="Testimonial";
        return view('front_testimonial',$data);
    }

    public function contact(){
        $data['title']="Contact";
        return view('front_contact',$data);
    }

    
}
