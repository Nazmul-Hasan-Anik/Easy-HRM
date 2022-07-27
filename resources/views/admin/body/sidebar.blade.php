<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('dashboard')}}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">User Management</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('all.users')}}">
                                    <span class="nav-text">Users</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>



                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Job</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.jobs')}}">
                                    <span class="nav-text">Job Title</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.pay')}}">
                                    <span class="nav-text">Pay Grades</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.status')}}">
                                    <span class="nav-text">Employment Status</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.jobscat')}}">
                                    <span class="nav-text">Job Category</span>
                                </a>
                            </li>



                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#info" aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Organization</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="info" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('gen.info')}}">
                                    <span class="nav-text">General Information</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.locations')}}">
                                    <span class="nav-text">Locations</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.dept')}}">
                                    <span class="nav-text">Department</span>
                                </a>
                            </li>



                        </div>



                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#qual" aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Qualifications</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="qual" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.skills')}}">
                                    <span class="nav-text">Skills</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.education')}}">
                                    <span class="nav-text">Education</span>
                                </a>
                            </li>



                        </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.licenses')}}">
                                    <span class="nav-text">Licenses</span>
                                </a>
                            </li>
                            </div>
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.languages')}}">
                                    <span class="nav-text">Languages</span>
                                </a>
                            </li>



                        </div>

                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.membership')}}">
                                    <span class="nav-text">Memberships</span>
                                </a>
                            </li>



                        </div>


                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#nationalities" aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Nationalities</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="nationalities" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.nationalities')}}">
                                    <span class="nav-text">Nationalities</span>
                                </a>
                            </li>



                        </div>





                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pim" aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">PIM</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pim" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="{{route('all.emp')}}">
                                    <span class="nav-text">Employees</span>
                                </a>
                            </li>



                        </div>





                    </ul>
                </li>
            </ul>
        </div>

        <hr class="separator" />


    </div>
</aside>
