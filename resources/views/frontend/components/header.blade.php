<style>
    .header-left {
        display: flex;
        align-items: center;
        justify-items: center;
    }
    .header-heading{
        font-weight: 500;
    }
</style>
<!-- Header Area Start Here -->
 <header id="header_1">
    <div class="header-menu-area header-menu-layout1">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-2 col-md-2  d-flex align-content-center">
                    <div class="header-left row ">
                        <a href="#" class="logo " >
                            <img src="{{asset('frontend/img/new logo web.png')}}" alt="logo" style="height: 70px; width: 100%">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 possition-static">
                    <div class="template-main-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="#home">Home</a>

                                </li>
                                <li>
                                    <a href="#about">About</a>

                                </li>
                                <li>
                                    <a href="#department">Departments</a>

                                </li>
                                <li>
                                    <a href="#team">Team</a>

                                </li>

                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
{{--                <div class="col-lg-3 col-md-3">--}}
{{--                    <div class="header-action-items-layout1">--}}
{{--                        <ul>--}}
{{--                            <li class="d-none d-xl-block">--}}
{{--                                <form id="top-search-form" class="header-search-dark">--}}
{{--                                    <input type="text" class="search-input" placeholder="Search...." required="">--}}
{{--                                    <button class="search-button">--}}
{{--                                        <i class="flaticon-search"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                               <a href="#" class="action-items-primary-btn ">Log in<i class="fas fa-chevron-right"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->
