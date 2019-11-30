<div class="pbs-social-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="text-left pbs-social-icons">
                    <a href="https://www.linkedin.com/company/parker-building-supplies-ltd" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="https://www.facebook.com/helpmebuildit/" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="https://twitter.com/helpmebuildit" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="text-right">
                    <a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount" class="d-inline-block"><i class="fas fa-sign-in-alt fa-fw"></i> Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header section -->
<div class="navbar-expand-md navbar-light">

    <!-- main header -->
    <header class="pbs-header">
        <div class="container-fluid">

            <div class="row">

                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_bloginfo('template_directory') . '/images/core/logo.png'; ?>" alt="Logo" class="pbs-logo">
                    </a>
                </div>

                <div class="col d-none d-md-block pl-0">

                    <div class="row">
                        <div class="col-auto">
                            <img src="<?php echo get_bloginfo('template_directory') . '/images/core/slogan.png'; ?>" alt="Slogan" class="pbs-slogan">
                        </div>
                        <div class="col">
                            <div class="float-right">
                                <div class="pbs-dropdown">
                                    <button onclick="myFunction()" class="btn btn-primary dropbtn">Account Menu <i class="fas fa-chevron-down fa-fw"></i></button>
                                    <div id="myDropdown" class="pbs-dropdown-content">
                                        <a href="https://secure.parkerbs.com" target="_blank">Pay Account</a>
                                        <a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount">My Account</a>
                                        <a href="<?php echo site_url() . '/account-application'; ?>">Account Application</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <input id="gadgetAddress" type="text" class="form-control" placeholder="Find your nearest branch.." aria-label="Find your nearest branch.." aria-describedby="button-addon2">
                        <input id="gadgetRadius" type="hidden" value="200" />
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="gadgetAddressSubmit" onclick="gotoMapPage()">Search <i class="fa fa-search fa-fw"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-auto d-md-none">
                    <span class="pbs-mobile-menu">

                        <a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount" class="pbs-icon"><i class="fas fa-sign-in-alt fa-3x"></i></a>

                        <button type="button" data-toggle="collapse" data-target="#pbsNav">
                            <span class="pbs-icon"><i class="fas fa-bars fa-3x"></i></span>
                        </button>
                    </span>
                </div>

            </div>

        </div>
    </header>
    <!-- /main header -->

    <!-- main navigation -->
    <nav class="pbs-nav collapse navbar-collapse" id="pbsNav">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <a href="<?php echo site_url(); ?>">
                    <li>
                        <span class="d-none d-md-block"><i class="fas fa-fw fa-home fa-2x"></i></span>
                        <span class="d-md-none">Home</i></span>
                    </li>
                </a>

                <a href="https://secure.parkerbs.com" class="d-md-none">
                    <li>
                        <span>Pay Account</span>
                    </li>
                </a>
                <a href="<?php echo site_url() . '/account-application'; ?>" class="d-md-none">
                    <li>
                        <span>Account Application</span>
                    </li>
                </a>
                <a href="https://account.parkerbs.com" class="d-md-none">
                    <li>
                        <span>My Account</span>
                    </li>
                </a>

                <a href="https://account.parkerbs.com/store-locator">
                    <li>
                        <span>Branches</span>
                    </li>
                </a>
                <a href="<?php echo site_url() . '/products'; ?>">
                    <li>
                        <span>Products</span>
                    </li>
                </a>
                <a href="<?php echo site_url() . '/vacancies'; ?>">
                    <li>
                        <span>Careers</span>
                    </li>
                </a>
                <a href="<?php echo site_url() . '/case-studies'; ?>">
                    <li>
                        <span>Case Studies</span>
                    </li>
                </a>
                <a href="<?php echo site_url() . '/contact-us'; ?>">
                    <li>
                        Contact Us
                    </li>
                </a>
            </ul>
        </div>
    </nav>
    <!-- ./main navigation -->

</div>
<!-- /header section -->