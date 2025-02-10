@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<section class="category-section pt-100 pb-100">
    <div class="container">
        <div class="account-header rounded-3 p-4 mb-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0">Welcome back, {{ auth()->user()->name }}</h4>
                            <p class="mb-0">Member since September
                                <b>{{ auth()->user()->created_at->format('M Y') }}</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-light"><i class="bi bi-gear-fill me-2"></i>Settings</button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Total Orders</h6>
                        <h3 class="mb-0">{{ auth()->user()->orders()->count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Total Spent</h6>
                        <h3 class="mb-0">{{ Number::currency(auth()->user()->orders()->sum('total')) }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Reward Points</h6>
                        <h3 class="mb-0">{{ Number::currency(0) }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h6 class="text-muted">Wishlist Items</h6>
                        <h3 class="mb-0">{{ auth()->user()->wishlist()->count() }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left Sidebar Navigation -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="nav flex-column nav-pills">
                            <a class="nav-link active mb-2" href="#dashboard" data-bs-toggle="pill">
                                <i class="bi bi-speedometer2 me-2"></i>Dashboard
                            </a>
                            <a class="nav-link mb-2" href="#orders" data-bs-toggle="pill">
                                <i class="bi bi-bag me-2"></i>Orders
                            </a>
                            <a class="nav-link mb-2" href="#addresses" data-bs-toggle="pill">
                                <i class="bi bi-geo-alt me-2"></i>Addresses
                            </a>
                            <a class="nav-link mb-2" href="#profile" data-bs-toggle="pill">
                                <i class="bi bi-person me-2"></i>Profile Details
                            </a>
                            <a class="nav-link mb-2" href="#wishlist" data-bs-toggle="pill">
                                <i class="bi bi-heart me-2"></i>Wishlist
                            </a>
                            <a class="nav-link text-danger" href="javascript:void(0)" onclick="document.getElementById('logoutForm').submit();">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Dashboard Tab -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <h5 class="mb-4">Recent Orders</h5>
                        @forelse (auth()->user()->orders()->latest()->take(5)->get() as $order)
                            <div class="card order-card mb-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <span class="badge bg-success mb-2 text-uppercase">{{ $order->status }}</span>
                                            <p class="small mb-0">
                                                #UMM-{{ $order->created_at->format('Y') }}-{{ $order->id }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0">{{ $order->items()->count() }} Items</p>
                                            <p class="small text-muted mb-0">Placed on
                                                {{ $order->created_at->format('M d, Y') }}
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="fw-bold mb-0">{{ Number::currency($order->total) }}</p>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ route('user.order.show', $order->id) }}" class="btn btn-sm btn-outline-dark">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card order-card mb-3">
                                <div class="card-body">
                                    <p class="mb-0">No recent orders.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Orders Tab -->
                    <div class="tab-pane fade" id="orders">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Order History</h5>
                            <div class="d-flex gap-2">
                                <select class="form-select form-select-sm">
                                    <option>All Orders</option>
                                    <option>Delivered</option>
                                    <option>Processing</option>
                                    <option>Cancelled</option>
                                </select>
                                <input type="text" class="form-control form-control-sm" placeholder="Search orders...">
                            </div>
                        </div>
                        <!-- Order List -->
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse (auth()->user()->orders()->latest()->take(5)->get() as $order)
                                                <tr>
                                                    <td>#UMM-{{ $order->created_at->format('Y') }}-{{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                                                    <td><span class="badge bg-success uppercase">{{ $order->status }}</span>
                                                    </td>
                                                    <td>{{ Number::currency($order->total) }}</td>
                                                    <td>
                                                        <a href="{{ route('user.order.show', $order->id) }}" class="btn btn-sm btn-outline-dark">Details</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center py-4">No orders found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Addresses Tab -->
                    <div class="tab-pane fade" id="addresses">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">My Addresses</h5>
                            <button class="btn btn-dark btn-sm"><i class="bi bi-plus-lg me-2"></i>Add New
                                Address</button>
                        </div>
                        <div class="row">
                            @forelse (auth()->user()->addresses as $address)
                                <div class="col-md-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h6 class="mb-0">Shipping Address</h6>
                                            </div>
                                            <p class="mb-1">{{ $address->first_name }} {{ $address->last_name }}
                                            </p>
                                            <p class="mb-1">{{ $address->address_line1 }} |
                                                {{ $address->address_line2 }}
                                            </p>
                                            <p class="mb-1">{{ $address->city }}, {{ $address->state }} -
                                                {{ $address->postal_code }}
                                            </p>
                                            <p class="mb-3">{{ $address->country }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <p class="mb-0">No addresses found.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Profile Tab -->
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="tab-pane fade" id="profile">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-4">Profile Details</h5>
                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="first_name"
                                                value="{{ auth()->user()->first_name ?? '' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ auth()->user()->last_name ?? '' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label"> Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ auth()->user()->name ?? '' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ auth()->user()->email ?? '' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="tel" class="form-control" name="phone"
                                                value="{{ auth()->user()->phone ?? '' }}" required>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-dark">Update Profile Detail</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div>
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <h6 class="mb-3">Change Password</h6>
                                <form action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control" name="current_password"
                                                placeholder="Enter current password" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password"
                                                placeholder="Enter new password" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" name="new_password_confirmation"
                                                placeholder="Confirm new password" required>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-dark">Update Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist Tab -->
                    <div class="tab-pane fade" id="wishlist">
                        <div class="container">
                            <h2 class="section-title text-center mb-5"> Wishlist</h2>

                            <!-- Grid Layout for Wishlist Items -->
                            <div class="row gy-4">
                                @forelse (auth()->user()->wishlist as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card product-card">
                                            <div class="product-thumbnail">
                                                <a href="shop-details.html">
                                                    <img src="{{ Storage::url($product->images->first()->image) }}"
                                                        alt="img" class="card-img-top">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <div class="d-flex flex-wrap">
                                                    @forelse ($product->categories as $category)
                                                        <a href="{{ route('category.show', $category->slug) }}">
                                                            <span
                                                                class="category badge badge-secondary">{{ $category->name }}</span>
                                                        </a>
                                                    @empty
                                                        <span class="category">Uncategorized</span>
                                                    @endforelse
                                                </div>

                                                <div class="product-price">
                                                    @if ($product->sale_price)
                                                        <span class="offer">{{ Number::currency($product->price) }}</span>
                                                        {{ Number::currency($product->sale_price) }}
                                                    @else
                                                        {{ Number::currency($product->price) }}
                                                    @endif
                                                </div>

                                                <div class="stock-status">
                                                    <span>{{ $product->stock ? 'In stock' : 'Out of stock' }}</span>
                                                </div>

                                                <!-- Wishlist Remove and Add to Cart Form -->
                                                <div class="actions d-flex justify-content-between align-items-center mt-3">
                                                    <form action="{{ route('user.wishlist.destroy', $product->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa-sharp fa-regular fa-xmark"></i></button>
                                                    </form>
                                                    <form action="{{ route('cart.add', ['product' => $product->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="qty" value="1">
                                                        <button class="btn btn-primary btn-sm">Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center py-4">
                                        <p>Your wishlist is empty.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>

@endsection