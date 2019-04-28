<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('localize');
    }

    /**
     * Home page
     */
    public function home($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }
        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = true;
        session()->put('locale', $locale);
        return view('pages.home.index')->with('onHomePage', $onHomePage);
    }

    /**
     * Onyx page
     */
    public function onyx($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }
        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        session()->put('locale', $locale);
        return view('pages.onyx.index')->with('onHomePage', $onHomePage);
    }

    /**
     * Contact page
     */
    public function contact($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }
        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        session()->put('locale', $locale);
        return view('pages.contact.index')->with('onHomePage', $onHomePage);
    }

    /**
     * Compatibility page
     */
    public function compatibility($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        };

        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.compatibility.index')->with(['locale' => app()->getLocale(), 'onHomePage' => $onHomePage]);
    }

    /**
     * Shipping page
     */
    public function shipping($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        };
        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.shipping.index_'.app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Cookies page
     */
    public function cookies($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }

        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.cookies.index_'.app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Warranty page
     */
    public function warranty($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }

        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.warranty.index_'.app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Legal page
     */
    public function legal($locale = null) {
        if(isset($locale)) {
            app()->setLocale($locale);
        }
        else {
            app()->setLocale('us');
        }

        // We want to auto change some links in the nav depending if 
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.legal.index_'.app()->getLocale())->with('onHomePage', $onHomePage);
    }
}
