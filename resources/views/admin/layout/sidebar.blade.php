<div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{route('admin_home')}}">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{route('admin_home')}}"></a>
                </div>

                <ul class="sidebar-menu">

                    <li class="active"><a class="nav-link" href="{{route('admin_home')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page Settings</span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="nav-link" href="{{route('admin_home_page')}}"><i class="fas fa-angle-right"></i>Home</a></li>
                            <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Terms</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active {{ Request::is('admin/job-category/*')||Request::is('admin/job-location/*')||Request::is('admin/job-type/*')||Request::is('admin/job-experience/*')||Request::is('admin/job-gender/*')||Request::is('admin/job-salary-range/*') ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Job Section</span></a>
                        <ul class="dropdown-menu">
                        <li class="{{ Request::is('admin/job-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i> Job Category</a></li>
                        <li class="{{ Request::is('admin/job-location/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_location') }}"><i class="fas fa-angle-right"></i> Job Location</a></li>
                        <li class="{{ Request::is('admin/job-type/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_type') }}"><i class="fas fa-angle-right"></i> Job type</a></li>
                        <li class="{{ Request::is('admin/job-experience/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_experience') }}"><i class="fas fa-angle-right"></i> Job Experience</a></li>
                        <li class="{{ Request::is('admin/job-gender/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_gender') }}"><i class="fas fa-angle-right"></i> Job Gender</a></li>
                        <li class="{{ Request::is('admin/job-salary-range/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_job_salary_range') }}"><i class="fas fa-angle-right"></i> Job Salary Range</a></li>

                        </ul>
                    </li>



                    <li class="nav-item dropdown active {{ Request::is('admin/company-location/*')||Request::is('admin/company-industry/*')||Request::is('admin/company-size/*') ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Company Section</span></a>
                        <ul class="dropdown-menu">
                        <li class="{{ Request::is('admin/company-location/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_location') }}"><i class="fas fa-angle-right"></i> Company Location</a></li>
                        <li class="{{ Request::is('admin/company-industry/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_industry') }}"><i class="fas fa-angle-right"></i> Company Industry</a></li>
                        <li class="{{ Request::is('admin/company-size/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_company_size') }}"><i class="fas fa-angle-right"></i> Company Size</a></li>

                        </ul>
                    </li>



                    <li class="{{Request::is('admin/post/*') ? 'active': '' }}">
                        <a class="nav-link" href="{{route('admin_post')}}" data-bs-toogle="tooltip" data-bs-placement="right" data-bs-title="Posts"><i class="fas fa-hand-point-right"></i><span>Post</span></a>
                        
                    </li>

                    <li class="{{Request::is('admin/other-page') ? 'active': '' }}">
                        <a class="nav-link" href="{{route('admin_other_page')}}" data-bs-toogle="tooltip" data-bs-placement="right" data-bs-title="Posts"><i class="fas fa-hand-point-right"></i><span>Credentials</span></a>
                        
                    </li>


                    <li class="{{ Request::is('admin/companies')||Request::is('admin/companies-detail/*')||Request::is('admin/companies-jobs/*')||Request::is('admin/companies-applicants/*')||Request::is('admin/companies-applicant-resume/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_companies') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Company Profile"><i class="fas fa-hand-point-right"></i> <span>Company Profile</span></a></li>

                    <li class="{{ Request::is('admin/candidates')||Request::is('admin/candidates-detail/*')||Request::is('admin/candidates-applied-jobs/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_candidates') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Candidate Profile"><i class="fas fa-hand-point-right"></i> <span>Candidate Profile</span></a></li>


                    



                </ul>
            </aside>
        </div>