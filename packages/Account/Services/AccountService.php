<?php
namespace Account\Services;

use Account\Models\Account;

class AccountService
{
    public function accountEcho()
    {
        echo "acc echo";
    }

    public function accountModel()
    {
        echo Account::acc();
    }
}

