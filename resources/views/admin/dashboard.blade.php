@extends('layouts.admin')
@section('title', 'Dashboard')
@section('css_link')
    <link rel="stylesheet" href="{{ asset('Admin/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('Admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
        <div class="me-auto  d-lg-block mb-3">
            <h2 class="text-black mb-0 font-w700">Dashboard</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet </p>
        </div>
        <div class="dropdown custom-dropdown mb-3">
            <div class="btn btn-sm date-ds-btn btn-rounded d-flex align-items-center svg-btn me-3"
                data-bs-toggle="dropdown">
                <svg class="primary-icon" width="28" height="28" viewBox="0 0 28 28" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.1669 5.83362H21.0003V3.50028C21.0003 3.19087 20.8773 2.89412 20.6585 2.67533C20.4398 2.45653 20.143 2.33362 19.8336 2.33362C19.5242 2.33362 19.2274 2.45653 19.0086 2.67533C18.7898 2.89412 18.6669 3.19087 18.6669 3.50028V5.83362H9.33359V3.50028C9.33359 3.19087 9.21067 2.89412 8.99188 2.67533C8.77309 2.45653 8.47634 2.33362 8.16692 2.33362C7.8575 2.33362 7.56076 2.45653 7.34196 2.67533C7.12317 2.89412 7.00025 3.19087 7.00025 3.50028V5.83362H5.83359C4.90533 5.83362 4.01509 6.20237 3.35871 6.85874C2.70234 7.51512 2.33359 8.40536 2.33359 9.33362V10.5003H25.6669V9.33362C25.6669 8.40536 25.2982 7.51512 24.6418 6.85874C23.9854 6.20237 23.0952 5.83362 22.1669 5.83362Z"
                        fill="#1E33F2" />
                    <path
                        d="M2.33359 22.1669C2.33359 23.0952 2.70234 23.9854 3.35871 24.6418C4.01509 25.2982 4.90533 25.6669 5.83359 25.6669H22.1669C23.0952 25.6669 23.9854 25.2982 24.6418 24.6418C25.2982 23.9854 25.6669 23.0952 25.6669 22.1669V12.8336H2.33359V22.1669Z"
                        fill="#1E33F2" />
                </svg>
                <div class="text-start ms-3">
                    <span class="d-block font-w700">Change period</span>
                    <small class="d-block">August 28th - October 28th, 2021</small>
                </div>
                <i class="fa fa-caret-down scale5 ms-3"></i>
            </div>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">October 29th - November 29th, 2021</a>
                <a class="dropdown-item" href="#">July 27th - Auguts 27th, 2021</a>
            </div>
        </div>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addOrderModal"
            class="btn btn-primary btn-rounded mb-3"><i class="fa fa-user-plus me-3"></i>New Admission</a>
        <!-- Add Order -->
        <div class="modal fade" id="addOrderModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Dadeline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card card-bx">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body me-3">
                            <h2 class="text-black font-w700">9,825</h2>
                            <p class="mb-0 text-black font-w600">total Students</p>
                            <span><b class="text-success me-1">+0,5%</b>than last month</span>
                        </div>
                        <div class="d-inline-block">
                            <svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M57.4998 47.5001C57.4998 48.1631 57.2364 48.799 56.7676 49.2678C56.2987 49.7367 55.6629 50.0001 54.9998 50.0001H24.9998C24.3368 50.0001 23.7009 49.7367 23.2321 49.2678C22.7632 48.799 22.4998 48.1631 22.4998 47.5001C22.4998 43.5218 24.0802 39.7065 26.8932 36.8935C29.7063 34.0804 33.5216 32.5001 37.4998 32.5001H42.4998C46.4781 32.5001 50.2934 34.0804 53.1064 36.8935C55.9195 39.7065 57.4998 43.5218 57.4998 47.5001ZM39.9998 10.0001C38.022 10.0001 36.0886 10.5866 34.4441 11.6854C32.7996 12.7842 31.5179 14.346 30.761 16.1732C30.0041 18.0005 29.8061 20.0112 30.192 21.951C30.5778 23.8908 31.5302 25.6726 32.9288 27.0711C34.3273 28.4697 36.1091 29.4221 38.0489 29.8079C39.9887 30.1938 41.9994 29.9957 43.8267 29.2389C45.6539 28.482 47.2157 27.2003 48.3145 25.5558C49.4133 23.9113 49.9998 21.9779 49.9998 20.0001C49.9998 17.3479 48.9463 14.8044 47.0709 12.929C45.1955 11.0536 42.652 10.0001 39.9998 10.0001ZM17.4998 10.0001C15.522 10.0001 13.5886 10.5866 11.9441 11.6854C10.2996 12.7842 9.0179 14.346 8.26102 16.1732C7.50415 18.0005 7.30611 20.0112 7.69197 21.951C8.07782 23.8908 9.03022 25.6726 10.4287 27.0711C11.8273 28.4697 13.6091 29.4221 15.5489 29.8079C17.4887 30.1938 19.4994 29.9957 21.3267 29.2389C23.1539 28.482 24.7157 27.2003 25.8145 25.5558C26.9133 23.9113 27.4998 21.9779 27.4998 20.0001C27.4998 17.3479 26.4463 14.8044 24.5709 12.929C22.6955 11.0536 20.152 10.0001 17.4998 10.0001ZM17.4998 47.5001C17.4961 44.8741 18.0135 42.2735 19.0219 39.8489C20.0304 37.4242 21.5099 35.2238 23.3748 33.3751C21.8487 32.7989 20.2311 32.5025 18.5998 32.5001H16.3998C12.7153 32.5067 9.18366 33.9733 6.57833 36.5786C3.97301 39.1839 2.50643 42.7156 2.49982 46.4001V47.5001C2.49982 48.1631 2.76321 48.799 3.23205 49.2678C3.70089 49.7367 4.33678 50.0001 4.99982 50.0001H17.9498C17.6588 49.1984 17.5066 48.3529 17.4998 47.5001Z"
                                    fill="#1E33F2" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card card-bx">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body me-3">
                            <h2 class="text-black font-w700">653</h2>
                            <p class="mb-0 text-black font-w600">total Teachers</p>
                            <span><b class="text-danger me-1">-2%</b>than last month</span>
                        </div>
                        <div class="d-inline-block">
                            <svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M59.0284 17.8807L30.7862 3.81817C30.2918 3.57103 29.7082 3.57103 29.2138 3.81817L0.971602 17.8807C0.375938 18.1794 0 18.787 0 19.4531C0 20.1192 0.375938 20.7268 0.971602 21.0255L29.2138 35.088C29.4609 35.2116 29.7305 35.2734 30 35.2734C30.2695 35.2734 30.5391 35.2116 30.7862 35.088L59.0284 21.0255C59.6241 20.7268 60 20.1192 60 19.4531C60 18.787 59.6241 18.1794 59.0284 17.8807Z"
                                    fill="#1E33F2" />
                                <path
                                    d="M56.4844 46.1441V26.2285L52.9688 27.9863V46.1441C50.9271 46.8722 49.4531 48.805 49.4531 51.0937V54.6093C49.4531 55.5809 50.2393 56.3671 51.2109 56.3671H58.2422C59.2138 56.3671 60 55.5809 60 54.6093V51.0937C60 48.805 58.526 46.8722 56.4844 46.1441Z"
                                    fill="#1E33F2" />
                                <path
                                    d="M32.3586 38.2329C31.6308 38.5967 30.8154 38.789 30 38.789C29.1846 38.789 28.3692 38.5967 27.6414 38.2329L10.5469 29.7441V33.5156C10.5469 40.4147 19.1578 45.8203 30 45.8203C40.8422 45.8203 49.4531 40.4147 49.4531 33.5156V29.7441L32.3586 38.2329Z"
                                    fill="#1E33F2" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="d-inline-block position-relative donut-chart-sale me-4">
                            <span class="donut2"
                                data-peity='{ "fill": ["rgb(246, 67, 67, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 45, "radius": 10}'>5/8</span>
                            <small class="text-black">62%</small>
                        </div>
                        <div class="media-body ">
                            <h2 class="fs-36 text-black font-w700">887</h2>
                            <p class="fs-18 mb-0 text-black font-w500">Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="d-inline-block position-relative donut-chart-sale me-4">
                            <span class="donut2"
                                data-peity='{ "fill": ["rgb(30, 51, 242, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 45, "radius": 10}'>3/8</span>
                            <small class="text-black">38%</small>
                        </div>
                        <div class="media-body me-3">
                            <h2 class="fs-36 text-black font-w700">175</h2>
                            <p class="fs-18 mb-0 text-black font-w500">Foods</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div class="me-auto pe-3">
                                <h4 class="text-black fs-24 font-w700">School Finance</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <select class="form-control style-1 default-select me-3">
                                    <option>Daily</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                </select>
                                <div class="dropdown c-pointer ">
                                    <div class="btn-link" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">View
                                            Detail</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pb-0">
                            <div class="d-flex flex-wrap">
                                <div class="media  align-items-center mb-3">
                                    <div class="d-inline-block position-relative me-sm-3 me-2">
                                        <svg class="circle-svg-ico" width="56" height="56" viewBox="0 0 56 56"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M56 28C56 43.464 43.464 56 28 56C12.536 56 0 43.464 0 28C0 12.536 12.536 0 28 0C43.464 0 56 12.536 56 28ZM8.4 28C8.4 38.8248 17.1752 47.6 28 47.6C38.8248 47.6 47.6 38.8248 47.6 28C47.6 17.1752 38.8248 8.4 28 8.4C17.1752 8.4 8.4 17.1752 8.4 28Z"
                                                fill="#F5F5F5" />
                                            <path class="primary-svg-path"
                                                d="M28 0C32.6046 5.49096e-08 37.1382 1.1356 41.1991 3.3062C45.26 5.47681 48.723 8.61542 51.2811 12.444C53.8393 16.2726 55.4138 20.6731 55.8652 25.2555C56.3165 29.838 55.6307 34.461 53.8686 38.7151C52.1065 42.9693 49.3224 46.7231 45.763 49.6443C42.2036 52.5654 37.9787 54.5637 33.4625 55.462C28.9464 56.3603 24.2784 56.131 19.872 54.7943C15.4657 53.4577 11.457 51.055 8.20102 47.799L14.1407 41.8593C16.4199 44.1385 19.226 45.8204 22.3104 46.756C25.3949 47.6917 28.6625 47.8522 31.8238 47.2234C34.9851 46.5946 37.9425 45.1958 40.4341 43.151C42.9257 41.1062 44.8746 38.4785 46.108 35.5006C47.3415 32.5227 47.8216 29.2866 47.5056 26.0789C47.1897 22.8711 46.0875 19.7908 44.2968 17.1108C42.5061 14.4308 40.082 12.2338 37.2394 10.7143C34.3967 9.19492 31.2232 8.4 28 8.4V0Z"
                                                fill="#1E33F2" />
                                        </svg>
                                    </div>
                                    <div class="media-body me-sm-4 me-3">
                                        <h2 class="fs-24 text-black font-w700 mb-0">$23,445</h2>
                                        <p class="fs-16 mb-0 text-black font-w400">total Income</p>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-3">
                                    <div class="d-inline-block position-relative me-sm-3 me-2">
                                        <svg class="circle-svg-ico" width="56" height="56" viewBox="0 0 56 56"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M56 28C56 43.464 43.464 56 28 56C12.536 56 0 43.464 0 28C0 12.536 12.536 0 28 0C43.464 0 56 12.536 56 28ZM8.4 28C8.4 38.8248 17.1752 47.6 28 47.6C38.8248 47.6 47.6 38.8248 47.6 28C47.6 17.1752 38.8248 8.4 28 8.4C17.1752 8.4 8.4 17.1752 8.4 28Z"
                                                fill="#F5F5F5" />
                                            <path
                                                d="M28 0C32.6373 5.52994e-08 37.202 1.15177 41.2842 3.35188C45.3664 5.55199 48.8382 8.73155 51.3879 12.605C53.9376 16.4785 55.4853 20.9246 55.8921 25.544C56.2988 30.1635 55.5519 34.8116 53.7183 39.071L46.0028 35.7497C47.2863 32.7681 47.8092 29.5144 47.5245 26.2808C47.2397 23.0472 46.1563 19.9349 44.3715 17.2235C42.5868 14.5121 40.1565 12.2864 37.2989 10.7463C34.4414 9.20624 31.2461 8.4 28 8.4L28 0Z"
                                                fill="#FF5045" />
                                        </svg>

                                    </div>
                                    <div class="media-body me-sm-4 me-0">
                                        <h2 class="fs-24 text-black font-w700 mb-0">$1,564</h2>
                                        <p class="fs-16 mb-0 text-black font-w400">total Expense</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chartBarRunning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0 pb-0 header-cal">
                    <div class="me-auto pe-3">
                        <h4 class="text-black font-w700">School Performance</h4>
                        <p class="mb-0">You have <strong>245</strong> contacts</p>
                    </div>
                </div>
                <div class="card-body text-center event-calender pb-2">
                    <input type='text' class="form-control d-none" id='datetimepicker1'>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card widget-media">
                        <div class="card-header border-0 pb-0 ">
                            <h4 class="text-black fs-24 font-w700">School Performance</h4>
                            <div class="dropdown ms-auto text-end c-pointer">
                                <div class="btn-link" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="12" cy="5" r="2">
                                            </circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2">
                                            </circle>
                                            <circle fill="#000000" cx="12" cy="19" r="2">
                                            </circle>
                                        </g>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="activityLine" class="area-theme"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="card widget-media">
                        <div class="card-header border-0 pb-3 ">
                            <div class="me-auto pe-3">
                                <h4 class="text-black font-w700 fs-24">Unpaid Student Intuition</h4>
                                <p class="fs-16 mb-0 ">You have <strong>456</strong> contacts</p>
                            </div>
                            <div class="dropdown ms-auto text-end">
                                <div class="btn-link" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#A5A5A5" cx="12" cy="5" r="2">
                                            </circle>
                                            <circle fill="#A5A5A5" cx="12" cy="12" r="2">
                                            </circle>
                                            <circle fill="#A5A5A5" cx="12" cy="19" r="2">
                                            </circle>
                                        </g>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 p-0">
                            <div class="table-responsive intuition-table">
                                <table class="table card-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic1.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black" href="events.html">Dawud
                                                                Khan</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary font-w700 text-nowrap">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$15,21</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic2.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black"
                                                                href="events.html">Helena Khan</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary font-w700 text-nowrap">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$56,34</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic3.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black" href="events.html">Peter
                                                                Jim</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary font-w700 text-nowrap">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$54</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic4.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black"
                                                                href="events.html">Melinda Truth</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary text-nowrap font-w700">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$24,78</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic5.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black"
                                                                href="events.html">Hawkins Jr.</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary text-nowrap font-w700">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$56,3</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center intuition-profile">
                                                    <div class="me-sm-4 me-2">
                                                        <img src="images/profile/small/pic6.jpg" class="rounded-circle"
                                                            alt="" width="64">
                                                    </div>
                                                    <div class="info">
                                                        <h5 class=" mb-0"><a class="text-black"
                                                                href="events.html">Louis</a></h5>
                                                        <span class="">ID 12314125</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start">
                                                    <svg class="me-1 me-sm-2 mt-2 primary-icon" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z"
                                                            fill="#1E33F2" />
                                                        <path
                                                            d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z"
                                                            fill="#1E33F2" />
                                                    </svg>
                                                    <div class="info-2">
                                                        <h4 class="mb-0 text-primary text-nowrap font-w700">
                                                            VII-A</h4>
                                                        <span class="">Class</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end price">
                                                <h4 class="font-w700">$56,3</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <div>
                                <h4 class="text-black fs-24 mb-0 font-w700">Curent Food Menu</h4>
                                <p class="fs-14 mb-0"> Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="loadmore-content height800 dz-scroll" id="DietMenusContent">
                            <div class="card-body border-bottom">
                                <div class="media mb-3">
                                    <img class="rounded" src="images/card/pic11.jpg" style="width:100%;" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="text-black mb-3"><a href="ecom-product-detail.html"
                                            class="text-black">Spinach with Roasted Crab</a></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="font-w600 fs-16 mb-0 text-primary text-uppercase">For
                                            Breakfast</h4>
                                        <div class="d-flex align-items-center">
                                            <svg class="me-2 primary-icon" width="21" height="18"
                                                viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="2.95455" height="18" rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="5.90918" y="4.90906" width="2.95455" height="13.0909"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="11.8184" y="12.2728" width="2.95455" height="5.72727"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="17.7275" y="2.45459" width="2.95455" height="15.5455"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                            </svg>
                                            <h6 class="text-black mb-0">6,723</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <div class="media mb-3">
                                    <img class="rounded" src="images/card/pic12.jpg" style="width:100%;" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="text-black mb-3"><a href="ecom-product-detail.html"
                                            class="text-black">Chicken Teriyaki Khas Haji Muhidin
                                            Malang</a></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="font-w600 mb-0 fs-16 text-primary text-uppercase">For
                                            Breakfast</h4>

                                        <div class="d-flex align-items-center">
                                            <svg class="me-2 primary-icon" width="21" height="18"
                                                viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="2.95455" height="18" rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="5.90918" y="4.90906" width="2.95455" height="13.0909"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="11.8184" y="12.2728" width="2.95455" height="5.72727"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="17.7275" y="2.45459" width="2.95455" height="15.5455"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                            </svg>
                                            <h6 class="text-black mb-0">6,723</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <div class="media mb-3">
                                    <img class="rounded" src="images/card/pic11.jpg" style="width:100%;" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="text-black mb-3"><a href="ecom-product-detail.html"
                                            class="text-black">Fried Chicken Roll Extra Spiciy with
                                            Mozarella</a></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="font-w600 mb-0 fs-16 text-primary text-uppercase">For
                                            Breakfast</h4>

                                        <div class="d-flex align-items-center">
                                            <svg class="me-2 primary-icon" width="21" height="18"
                                                viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="2.95455" height="18" rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="5.90918" y="4.90906" width="2.95455" height="13.0909"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="11.8184" y="12.2728" width="2.95455" height="5.72727"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                                <rect x="17.7275" y="2.45459" width="2.95455" height="15.5455"
                                                    rx="1.47727" fill="#1E33F2">
                                                </rect>
                                            </svg>
                                            <h6 class="text-black mb-0">6,723</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer style-1 text-center border-0 pt-0 pb-5">
                            <a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus"
                                href="javascript:void(0);" rel="ajax/food-menu-list.html">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header d-sm-flex d-block border-0">
                                    <div class="me-auto pe-3">
                                        <h4 class="text-black text-black fs-24 font-w700">Recent Students
                                        </h4>
                                        <p class="fs-13 mb-0">You have 245 clients</p>
                                    </div>
                                </div>
                                <div class="card-body loadmore-content  dz-scroll height pb-4 pt-0"
                                    id="recentActivitiesContent">
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class=" me-3">
                                            <img src="images/student/pic1.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class=" me-3">
                                            <img src="images/student/pic2.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class="me-3">
                                            <img src="images/student/pic3.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class="me-3">
                                            <img src="images/student/pic4.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class="me-3">
                                            <img src="images/student/pic5.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class="me-3">
                                            <img src="images/student/pic3.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                    <div class="d-flex py-sm-3 py-1 align-items-center">
                                        <span class="me-3">
                                            <img src="images/student/pic5.jpg" alt="" class="rounded-circle"
                                                width="50">
                                        </span>
                                        <div>
                                            <h6 class="font-w600 fs-18 mb-0"><a href="student.html"
                                                    class="text-black">Melinda Moss</a></h6>
                                            <span class="fs-14">VII-AB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer  border-0 pt-0 text-center">
                                    <a href="javascript:void(0);" class=" btn-block btn-primary btn ">View
                                        240 More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_link')
    <script src="{{ asset('Admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('Admin/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('Admin/js/dashboard/dashboard-1.js') }}"></script>
@endsection