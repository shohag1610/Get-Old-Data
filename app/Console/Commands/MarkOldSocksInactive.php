<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Carbon\Carbon;

class MarkOldSocksInactive extends Command
{
    protected $signature = 'products:deactivate-old-socks';
    protected $description = 'Mark products as inactive if they are in the Socks category and are older than 2 years';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $cutoffDate = Carbon::now()->subYears(2);
        $oldProducts = Product::whereHas('category', function ($query) {
            $query->where('name', 'Socks');
        })->where('created_at', '<', $cutoffDate)
            ->where('active', '=', true)
            ->update(['active' => false]);

        $this->info("$oldProducts products were marked as inactive.");
    }
}

