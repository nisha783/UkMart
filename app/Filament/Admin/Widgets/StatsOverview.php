<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Transaction;
use App\Models\User; // Import the User model
use App\Models\Store; // Import the Store model
use App\Models\Product; // Import the Product model
use App\Models\Sale; // Import Sale model for total sales data
use App\Models\WithdrawPaymentMethod; // Import WithdrawPaymentMethod for total withdraw data
use App\Models\Review; // Import the Review model
use App\Models\Wishlist; // Import the Wishlist model
use App\Models\Order; // Import the Order model
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Total Users
            Stat::make('Total Users', User::count())
                ->description('All Registered Users')
                ->color('primary') // Color of the box
                ->icon('heroicon-o-users'),

            // Total Sellers
            Stat::make('Total Sellers', User::where('role', 'seller')->count())
                ->description('Sellers Registered')
                ->color('success')
                ->icon('heroicon-o-shopping-bag'),

            // Total Admins
            Stat::make('Total Admins', User::where('role', 'admin')->count())
                ->description('Admin Accounts')
                ->color('warning')
                ->icon('heroicon-o-user-circle'),

            // Total Products Listed
            Stat::make('Total Products Listed', Product::count())
                ->description('All Products Listed')
                ->color('danger')
                ->icon('heroicon-o-briefcase'),

            // Total Approved Products
            Stat::make('Total Approved Products', Product::where('status', 'approved')->count())
                ->description('Approved Products')
                ->color('success')
                ->icon('heroicon-o-check-circle'),

            // Total Reviews
            Stat::make('Total Reviews', Review::count())
                ->description('Total Reviews Given')
                ->color('primary') // You can customize the color
                ->icon(''),

            // Total Wishlist Items
            Stat::make('Total Wishlist Items', Wishlist::count())
                ->description('Items in All Wishlists')
                ->color('info') // You can customize the color
                ->icon('heroicon-o-heart'),

            // Total Orders
            Stat::make('Total Orders', Order::count())
                ->description('Total Number of Orders')
                ->color('success')
                ->icon('heroicon-o-shopping-cart'),
        ];
    }
}
