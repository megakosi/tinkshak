<nav class='white header-nav nav-extended z-depth-0 site-header-nav' role="navigation" id="site-header-nav">
    <div class='nav-wrapper container'>
        <ul class="icon-links-ul right">
            <li>
                <a id="navbar-disk-usage" data-target = 'desktop-disk-space-dropdown' class="social-icons-link blue-grey-text  facebook-icon-link dropdown-trigger" title="Your disk space">
                    <span id="dashboard-user-remaining-space" class="space-field" data-space = "{{Auth::user()->remaining_space}}"></span>
                    <span id="dashboard-user-space-of">of</span>
                    <span id="dashboard-user-maximum-space" class="space-field" data-space = "{{Auth::user()->max_space}}"></span>
                    <i class = 'material-icons left'>folder_shared</i>
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>

            <ul id="desktop-disk-space-dropdown" class="desktop-drop-down dropdown-content">

                <li>
                    <a class="header-subcategory-link text-color-444" title="Expand disk space" href="#">
                        <span title="Expand disk space">Expand disk space</span>
                        <span class="material-icons right small">
                            swap_horiz
                        </span>
                    </a>
                </li>

                <li class="divider"></li>
                <li>


                    <a href="#" class="header-drop-down-product-type-close grey-text">
                        Close
                        <span class="material-icons small right">close</span>

                    </a>

                </li>
            </ul>
        </ul>

    </div>
    <div class="nav-wrapper container">
        <ul class="left hide-on-med-and-down">
            <li>
                <a id='logo-container' href='/'>
                    <img class="header-logo-image brand-logo" title="{{config('constants.site_name_uppercase')}} logo" src="{{asset('/img/tinkshak.png')}}" height="45" />
                </a>
            </li>
        </ul>


        <ul class='hide-on-med-and-down desktop-nav-links-container right'>



            <li>
                <a class="dropdown-trigger" href = '#' data-target = 'desktop-account-dropdown'  title="Edit Account">
                    <div class="circle-image navbar-user-profile-icon" style="background-image:url({{asset('profile/'.Auth::user()->profile)}});width:30px;height:30px;"></div>
                    <span>Account</span>

                </a>
            </li>
            <ul id="desktop-account-dropdown" class="desktop-drop-down dropdown-content">

                <li>
                    <a class="header-subcategory-link text-color-444" title="Edit details" href="#">
                        <span>Profile</span>
                        <span class="material-icons right small">
                            edit
                        </span>
                         </a>
                </li>
                <li>
                    <a class="header-subcategory-link text-color-444" title="Payment Details" href="#">
                        <span>Payment</span>
                        <span class="material-icons right small">account_balance</span>
                    </a>
                </li>

                <li>
                        <a id="logout-action"  class="header-subcategory-link text-color-444" title="Logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()">

                            <span>Logout</span>
                        <span class="fa fa-sign-out right small signout-icon"></span>
                                            </a>

                </li>


                <li class="divider">
                </li>

                <li>

                    <a href="#" class="header-drop-down-product-type-close grey-text">
                        Close
                        <span class="material-icons small right">close</span>

                    </a>

                </li>
            </ul>


            <li>
                <a class="dropdown-trigger" href = '#' data-target = 'desktop-products-dropdown'  title="Products">
                    <span>Products</span>
                    <i class="material-icons left blue-grey-text">toc</i>
                </a>
            </li>

            <ul id="desktop-products-dropdown" class="desktop-drop-down dropdown-content">

                <li>
                    <a class="header-subcategory-link text-color-444" title="Your uploads" href="#">
                        Uploads
                        <span class="material-icons small right">cloud_upload</span>
                    </a>
                </li>
                <li>
                    <a class="header-subcategory-link text-color-444" title="Your downloads" href="#">
                        Downloads
                        <span class="material-icons small right">archive</span>
                    </a>
                </li>

                <li>
                    <a class="header-subcategory-link text-color-444" title="Your Stats" href="#">
                        Stats
                        <span class="material-icons small right">equalizer</span>
                    </a>
                </li>




                <li class="divider">
                </li>

                <li>

                    <a href="#" class="header-drop-down-product-type-close grey-text">
                        Close
                        <span class="material-icons small right">close</span>

                    </a>

                </li>
            </ul>


            <li>
                <a class="dropdown-trigger" href = '#' data-target = 'desktop-account-balance-dropdown'  title="Account balance">
                    <span id="navbar-account-balance" class="blue-grey-text">
                        <span id="user-account-balance">{{Auth::user()->account_balance}}</span>
                        {{ config('constants.base_currency_name' )}}
                    </span>
                    <i class="material-icons left blue-grey-text">attach_money</i>
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>

            <ul id="desktop-account-balance-dropdown" class="desktop-drop-down dropdown-content">

                <li>
                    <a class="header-subcategory-link text-color-444" title="Summary" href="#">

                        Summary
                        <span class="material-icons small right">timeline</span>
                    </a>
                </li>

                <li>
                    <a class="header-subcategory-link text-color-444" title="Withdraw" href="#">
                        <span class="material-icons small right">forward</span>
                        Withdraw
                    </a>
                </li>
                <li class="divider">
                </li>

                <li>

                    <a href="#" class="header-drop-down-product-type-close grey-text">
                        Close
                        <span class="material-icons small right">close</span>

                    </a>

                </li>
            </ul>
        </ul>

              </div>
</nav>



<form id="logout-form" class="hide" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>