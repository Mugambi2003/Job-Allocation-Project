<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;


class HomeController extends Controller
{
    public function index(){

        $job_categories = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->take(9)->get();
        $all_job_categories = JobCategory::orderBy('name','asc')->get();
        $all_job_locations = JobLocation::orderBy('name','asc')->get();
        $featured_jobs = Job::with('rCompany','rJobCategory','rJobLocation','rJobType','rJobExperience','rJobGender','rJobSalaryRange')->orderBy('id','desc')->where('is_featured',1)->get();
        return view('front.home',compact('job_categories','all_job_categories','all_job_locations','featured_jobs')); 
    }
}
