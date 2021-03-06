<?php

namespace App\Http\Controllers;

use App\Mail\BussinessContactRequest;
use App\Mail\ContactRequest;
use App\Mail\CouponRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Torann\GeoIP\Facades\GeoIP;
use Validator;

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

    public function index()
    {

        $data = geoip($_SERVER['REMOTE_ADDR']);
        $countryCode = strtolower($data->iso_code);

        if (isset($countryCode)) {
            if ($countryCode == 'de' || $countryCode == 'at') {

                app()->setLocale('de');
            }
            elseif ($countryCode == 'us') {
                app()->setLocale('us');
            }
            /*elseif ($countryCode == 'fr') {
                app()->setLocale('fr');
            }elseif ($countryCode == 'nl') {
                app()->setLocale('nl');
            }*/
            else {
                app()->setLocale('uk');
            }

        }
        $locale = app()->getLocale();

        return redirect('/' . $locale);
    }

    /**
     * Home page
     */
    public function home($locale)
    {

        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        //dd($locale);
        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = true;
        session()->put('locale', $locale);
        $phones = [
            'LYNX',
            'LEO',
            'WALRUS',
            'ONYX'
        ];
        // the specs section rows names are cached using the CsvFilesController
        $specs_section_rows_names = Cache::get('specs_section_rows_names');
        return view('pages.home.index')->with([
            'onHomePage' => $onHomePage,
            'popup' => true,
            'specs_section_rows_names' => $specs_section_rows_names,
            'phones' => $phones
        ]);
    }

    /**
     * Onyx page
     */
    public function onyx($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        session()->put('locale', $locale);
        $phones = [
            'ONYX',
            'LYNX',
            'WALRUS',
            'LEO'
        ];
        $specs_section_rows_names = Cache::get('specs_section_rows_names');
        return view('pages.onyx.index')->with([
            'onHomePage' => $onHomePage,
            'popup' => true,
            'specs_section_rows_names' => $specs_section_rows_names,
            'phones' => $phones
        ]);
    }

    /**
     * Contact page
     */
    public function contact($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
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
    public function compatibility($locale )
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        };

        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.compatibility.index')->with(['locale' => app()->getLocale(), 'onHomePage' => $onHomePage]);
    }

    /**
     * Shipping page
     */
    public function shipping($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        };
        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.shipping.index_' . app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Cookies page
     */
    public function cookies($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }

        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.cookies.index_' . app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Warranty page
     */
    public function warranty($locale = nul)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }

        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.warranty.index_' . app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Legal page
     */
    public function legal($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }

        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        return view('pages.informational.legal.index_' . app()->getLocale())->with('onHomePage', $onHomePage);
    }

    /**
     * Leo page
     */
    public function leo($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        // We want to auto change some links in the nav depending if
        // we are on the home page or not
        $onHomePage = false;
        session()->put('locale', $locale);
        $phones = [
            'ONYX',
            'LYNX',
            'WALRUS',
            'LEO'
        ];
        $specs_section_rows_names = Cache::get('specs_section_rows_names');
        $images = [
            'camera_1',
            'camera_2',
            'camera_3',
            'camera_4',
            'camera_5',
            'camera_6',
            'camera_7',
            'camera_8',
            'camera_9',
            'camera_10',
            'camera_11',
            'camera_12',
        ];
        return view('pages.leo.index')->with([
            'onHomePage' => $onHomePage,
            'popup' => true,
            'specs_section_rows_names' => $specs_section_rows_names,
            'phones' => $phones,
            'images' => $images
        ]);
    }

    public function leoImage($locale, $image)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        $onHomePage = false;
        return view('pages.leo.image')->with([
            'onHomePage' => $onHomePage,
            'image' => $image
        ]);
    }

    public function test($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('pages.test.index')->with([
                'onHomePage' => false,
            ]
        );
    }
    public function lock($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('pages.lock.index')->with([
                'onHomePage' => false,
            ]
        );
    }
    public function lockPost(Request $request,$locale)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessageBag()]);
        } else {

            $request['page'] = 'Lock';
            Mail::to('getnordforms@gmail.com')
                ->send(new BussinessContactRequest($request));
            if (!Mail::failures()) {
                // we add the user to mailchimp
                Newsletter::subscribe($request->input('email'),
                    ['FNAME' => $request->input('name'),
                        'LNAME' => $request->input('last-name'),
                        'PHONE' => $request->input('phone-number'),
                        'COMPANY' => $request->input('company'),
                        'BUSINESS' => $request->input('business'),
                    ],
                    'getnord_lock');
                return response()->json(['success' => Lang::get('contact.email_sent')]);
            }
        };
    }
    public function activeTrackPost(Request $request,$locale)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessageBag()]);
        } else {

            $request['page'] = 'Security';
            Mail::to('getnordforms@gmail.com')
                ->send(new BussinessContactRequest($request));
            if (!Mail::failures()) {
                // we add the user to mailchimp
                Newsletter::subscribe($request->input('email'),
                    ['FNAME' => $request->input('name'),
                        'LNAME' => $request->input('last-name'),
                        'PHONE' => $request->input('phone-number'),
                        'COMPANY' => $request->input('company'),
                        'BUSINESS' => $request->input('business'),
                    ],
                    'getnord_track');
                return response()->json(['success' => Lang::get('contact.email_sent')]);
            }
        };
    }
    public function couponSubscribe($locale,Request $request){
        $loc = '';
        $data = geoip($_SERVER['REMOTE_ADDR']);
        $countryCode = strtolower($data->iso_code);


        if ($countryCode === 'be' && $locale === 'nl'){
            $loc = 'nl_be';
        }else{
            $loc = $locale ;
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessageBag()]);
        } else {

            Mail::to('getnordforms@gmail.com')
                ->send(new CouponRequest($request));

            if (!Mail::failures()) {
                // we add the user to mailchimp
                Newsletter::subscribe($request->input('email'), [], 'coupon_' .$loc);
                return response()->json(['success' => __('contact.email_sent')]);
            }
        };
    }

    public function discount($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('pages.coupon.index')->with([
                'onHomePage' => false,
            ]
        );
    }
    public function activeTrack($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('pages.active_track.index')->with([
                'onHomePage' => false,
            ]
        );
    }
    public function agriculture($locale)
    {
        if (isset($locale)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('uk');
            $locale = 'uk';
        }
        return view('pages.agriculture.index')->with([
                'onHomePage' => false,
            ]
        );
    }
    public function agriculturePost(Request $request,$locale)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessageBag()]);
        } else {
        $request['page'] = 'Agriculture';
            Mail::to('getnordforms@gmail.com')
                ->send(new BussinessContactRequest($request));
            if (!Mail::failures()) {
                // we add the user to mailchimp
                Newsletter::subscribe($request->input('email'),
                    ['FNAME' => $request->input('name'),
                        'LNAME' => $request->input('last-name'),
                        'PHONE' => $request->input('phone-number'),
                        'COMPANY' => $request->input('company'),
                        'BUSINESS' => $request->input('business'),
                    ],
                    'getnord_agriculture');
                return response()->json(['success' => Lang::get('contact.email_sent')]);
            }
        };
    }
}
