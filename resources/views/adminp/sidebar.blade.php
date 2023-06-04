        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('admin_index')}}">
                    <img src="{{asset('assets/admin')}}/images/icon/logo.png" alt="Açık Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Property Controller</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_property_index')}}">Property</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_property_create')}}">Property Add</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>News Controller</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_news_index')}}">News</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_news_create')}}">News Add</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Product Controller</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_news_index')}}">Products</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_news_create')}}">Product Add</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>User Controller</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_news_index')}}">Users</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_news_create')}}">Users Add</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Contact us</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_message_index')}}">Message</a>
                                </li>
                                <li>
                                    <a href="index2.html">Request</a>
                                </li>
                            </ul>
                        </li>


                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Settings</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('admin_setting_companyinfo_index')}}">Company Settings</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('admin_profile_index')}}">
                                <i class="fas fa-map-marker-alt"></i>Profile</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
