<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('companies.index') }}">
                            <i data-feather="monitor"></i>
                            <span>Companies</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('employees.index') }}">
                            <i data-feather="monitor"></i>
                            <span>Employees</span>
                        </a>
                    </li>
                   
                   
                </ul>

                <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            <img src="../images/svg-icon/color-svg/custom-16.svg" class="sideimg p-25" alt="">
                            <h3 class="title-bx text-primary">Find Your Best</h3>
                            <a href="#" class="py-10 fs-16 mb-0 text-primary">
                                Buy or Rent Best Property here <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-center m-25">
                        <p><strong class="d-block">WebkitX Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>