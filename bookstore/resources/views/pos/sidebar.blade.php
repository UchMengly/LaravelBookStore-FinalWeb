<!-- ======= Sidebar ======= -->
<aside class="sidebar" id="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Store</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-database-add"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul class="nav-content collapse" id="product-nav" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/products">
                        <i class="bi bi-circle"></i><span>Your Product</span>
                    </a>
                </li>
                <li>
                    <a href="/add-product">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
                {{-- @foreach ($products as $item)
                    <li>
                        <a href="{{ 'edit-product/' . $item->id }}">
                            <i class="bi bi-circle"></i><span>Edit Product</span>
                        </a>
                    </li>
                @endforeach
            </ul> --}}
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-title="Feature Locked" href="/feature-locked">
                <i class="bi bi-calculator"></i>
                <span>Transaction</span>
                <i class="bi bi-lock"></i>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-title="Feature Locked" href="/feature-locked">
                <i class="bi bi-shop"></i>
                <span>Profile</span>
                <i class="bi bi-lock"></i>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-heading">Help & Services</li>

        <li class="nav-item">
            <a class="nav-link" href="/feature-locked">
                <i class="bi bi-question-circle"></i>
                <span>FAQ</span>
                <i class="bi bi-lock"></i>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="/feature-locked">
                <i class="bi bi-send-plus"></i>
                <span>Contact Us</span>
                <i class="bi bi-lock"></i>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="/home"><i class="bi bi-house"></i><span>Home</span></a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
