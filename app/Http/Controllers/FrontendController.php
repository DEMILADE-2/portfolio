<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\BrandDesign;
use App\Models\NewMonth;
use App\Models\LogoFolio;
use App\Models\EventFlyer;
use App\Models\OtherDesign;
use App\Models\ClientReview;
use App\Models\Contact;
use App\Models\Footer;
class FrontendController extends Controller
{
    public function home()
    {
        $hero = Hero::where('is_active', true)->first();
        $about = About::where('is_active', true)->first();
        $brandDesigns = BrandDesign::where('is_active', true)->latest()->get();
        $newMonths = NewMonth::where('is_active', true)->latest()->get();
        $eventFlyers = EventFlyer::where('is_active', true)->latest()->get(); 
        $logoFolios = LogoFolio::where('is_active', true)->latest()->get();
        $otherDesign = OtherDesign::where('is_active', true)->latest()->get();
        $clientReview = ClientReview::where('is_active', true)->first();
        $contact = Contact::where('is_active', true)->first();
        $footer = Footer::where('is_active', true)->first();

        return view('welcome', compact(
            'hero',
            'about',
            'brandDesigns',
            'newMonths',
            'logoFolios',
             'eventFlyers',
             'otherDesign',
             'clientReview',
             'contact',
             'footer'
        ));
    }
}