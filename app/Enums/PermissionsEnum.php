<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    //
    case BuyProduct = 'BuyProduct';
    case SellProduct = 'SellProduct';
    case ApproveVendor = 'ApproveVendor';
}
