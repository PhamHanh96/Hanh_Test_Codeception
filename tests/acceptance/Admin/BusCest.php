<?php
use Step\Acceptance\Admin\BusStep as BusStep;
use Step\Acceptance\Admin\AdminLoginStep as AdminLoginStep;


class BusCest
{
    public function __construct()
    {
        $this->fake                 = Faker\Factory::create();
        $this->username             = \Page\Admin\AdminLoginPage::$usernameValue;
        $this->password             = \Page\Admin\AdminLoginPage::$passwordValue;
        $this->randomLicensePlates  = '51A-' .random_int(1111,99999);
        $this->randomSeats          = rand(16,60);

    }
    public function _before(AdminLoginStep $I)
    {
        $I->loginAccount($this->username, $this->password);
    }

    public function createBus(BusStep $I)
    {
        $I->addBus($this->randomLicensePlates, $this->randomSeats);
    }
}
