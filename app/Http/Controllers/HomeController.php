<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;
use App\Models\Director;
use App\Models\Business;
use App\Models\Company;
use App\Models\ImpactStat;
use App\Models\TimelineItem;
use App\Models\NewsItem;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'stats' => Stat::all(),
            'news' => NewsItem::latest()->take(3)->get()
        ]);
    }

    public function board()
    {
        return view('board', [
            'directors' => Director::all()
        ]);
    }

    public function businesses()
    {
        return view('businesses', [
            'businesses' => Business::orderBy('order')->get()
        ]);
    }

    public function companies()
    {
        return view('companies', [
            'companies' => Company::all()
        ]);
    }

    public function impact()
    {
        return view('impact', [
            'impactStats' => ImpactStat::all()
        ]);
    }

    public function timeline()
    {
        return view('timeline', [
            'timeline' => TimelineItem::all()
        ]);
    }

    public function media()
    {
        return view('media', [
            'news' => NewsItem::latest()->get()
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
