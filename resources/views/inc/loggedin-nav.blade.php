<nav class='white header-nav nav-extended z-depth-0 site-header-nav' role="navigation" id="site-header-nav">
    <div class='nav-wrapper container'>
        <ul class="icon-links-ul right">
            <li>
                <a class="social-icons-link facebook-icon-link" title="Facebook page" href = "https://facebook.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-facebook-f fa-lg social-icons'></i>
                </a>
            </li>
            <li>
                <a class="social-icons-link twitter-icon-link" title="Twitter handle" href = "https://twitter.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-twitter fa-lg social-icons'></i>
                </a>
            </li>
            <li>
                <a class="social-icons-link instagram-icon-link" title="Instagram handle" href = "https://instagram.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-instagram fa-lg social-icons'></i>
                </a>
            </li>

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
                    <span title="account">Account</span>
                    <i class="material-icons left blue-grey-text">person</i>
                </a>
            </li>

            <ul id="desktop-account-dropdown" class="desktop-drop-down dropdown-content">

                <li>
                    <a class="header-subcategory-link text-color-444" title="Edit details" href="#">
                        <span title="profile">Profile</span>
                        <span class="material-icons right small">
                            edit
                        </span>
                         </a>
                </li>
                <li>
                    <a class="header-subcategory-link text-color-444" title="Payment Details" href="#">
                        <span title="payment">Payment</span>
                        <span class="material-icons right small">account_balance</span>
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
                    <span title="products">Products</span>
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
                        <span class="material-icons small right">get_app</span>
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



