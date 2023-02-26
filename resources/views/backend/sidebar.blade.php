<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route("dashboard") }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Blogs</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        {{-- Category --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-purchase-tag'></i>
                <div data-i18n="Misc">Category</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route("category.index") }}" class="menu-link">
                        <div data-i18n="Error">All Category</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route("category.create") }}" class="menu-link">
                        <div data-i18n="Under Maintenance">New Category</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Posts --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxl-blogger'></i>
                <div data-i18n="Misc">Posts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route("post.index") }}" class="menu-link">
                        <div data-i18n="Error">All Posts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route("post.create") }}" class="menu-link">
                        <div data-i18n="Under Maintenance">New Posts</div>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
</aside>
