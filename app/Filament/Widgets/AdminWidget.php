<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Member;
use App\Models\Tender;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AdminWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->description('System Users')
            ->descriptionIcon('heroicon-m-user-group')
            ->color('success'),
        Stat::make('Board Members', Member::count())
            ->description('Board of Directors')
            ->descriptionIcon('heroicon-m-user-group')
            ->color('danger'),
        Stat::make('Tenders', Tender::count())
            ->description('List of published Tenders')
            ->descriptionIcon('heroicon-m-currency-dollar')
            ->color('success'),
        ];
    }
}
