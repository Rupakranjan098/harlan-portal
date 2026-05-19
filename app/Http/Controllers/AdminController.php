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

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.stats');
    }

    public function stats()
    {
        return view('admin.stats', ['stats' => Stat::all()]);
    }

    public function directors()
    {
        return view('admin.directors', ['directors' => Director::all()]);
    }

    public function businesses()
    {
        return view('admin.businesses', ['businesses' => Business::orderBy('order')->get()]);
    }

    public function companies()
    {
        return view('admin.companies', ['companies' => Company::all()]);
    }

    public function impact()
    {
        return view('admin.impact', ['impactStats' => ImpactStat::all()]);
    }

    public function settings()
    {
        return view('admin.settings', ['settings' => Setting::all()]);
    }

    public function updateStat(Request $request, Stat $stat)
    {
        $stat->update($request->all());
        return back()->with('success', 'Stat updated successfully');
    }

    public function updateDirector(Request $request, Director $director)
    {
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $data['image'] = 'assets/images/' . $filename;
        }
        $director->update($data);
        return back()->with('success', 'Director updated successfully');
    }

    public function updateBusiness(Request $request, Business $business)
    {
        $data = $request->all();
        if (!isset($data['icon'])) $data['icon'] = $business->icon ?? 'fas fa-briefcase';
        if (!isset($data['projects'])) $data['projects'] = $business->projects ?? '0';
        if (!isset($data['revenue'])) $data['revenue'] = $business->revenue ?? '$0';
        
        $business->update($data);
        return back()->with('success', 'Business updated successfully');
    }

    public function updateCompany(Request $request, Company $company)
    {
        $data = $request->all();
        if (!isset($data['sector'])) $data['sector'] = $company->sector ?? 'Technology';
        if (!isset($data['founded'])) $data['founded'] = $company->founded ?? '2024';
        if (!isset($data['stake'])) $data['stake'] = $company->stake ?? '100%';
        
        $company->update($data);
        return back()->with('success', 'Company updated successfully');
    }

    public function updateNews(Request $request, NewsItem $news)
    {
        $news->update($request->all());
        return back()->with('success', 'News updated successfully');
    }

    public function updateSetting(Request $request, Setting $setting)
    {
        $setting->update($request->all());
        return back()->with('success', 'Setting updated successfully');
    }

    public function uploadLogo(Request $request)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file->move(public_path('assets/images'), 'logo.png');
            return back()->with('success', 'Logo uploaded successfully');
        }
        return back()->with('error', 'No logo file provided');
    }

    public function updateImpact(Request $request, ImpactStat $impactStat)
    {
        $impactStat->update($request->all());
        return back()->with('success', 'Impact updated successfully');
    }

    public function storeStat(Request $request)
    {
        Stat::create($request->all());
        return back()->with('success', 'Stat created successfully');
    }

    public function storeDirector(Request $request)
    {
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $data['image'] = 'assets/images/' . $filename;
        }
        Director::create($data);
        return back()->with('success', 'Director created successfully');
    }

    public function storeBusiness(Request $request)
    {
        $data = $request->all();
        if (!isset($data['icon'])) $data['icon'] = 'fas fa-briefcase';
        if (!isset($data['projects'])) $data['projects'] = '0';
        if (!isset($data['revenue'])) $data['revenue'] = '$0';
        
        Business::create($data);
        return back()->with('success', 'Business created successfully');
    }

    public function storeCompany(Request $request)
    {
        $data = $request->all();
        if (!isset($data['sector'])) $data['sector'] = 'Technology';
        if (!isset($data['founded'])) $data['founded'] = '2024';
        if (!isset($data['stake'])) $data['stake'] = '100%';
        
        Company::create($data);
        return back()->with('success', 'Company created successfully');
    }

    public function storeNews(Request $request)
    {
        NewsItem::create($request->all());
        return back()->with('success', 'News created successfully');
    }

    public function storeSetting(Request $request)
    {
        Setting::create($request->all());
        return back()->with('success', 'Setting created successfully');
    }

    public function storeImpact(Request $request)
    {
        ImpactStat::create($request->all());
        return back()->with('success', 'Impact created successfully');
    }
}
