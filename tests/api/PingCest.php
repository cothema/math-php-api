<?php declare(strict_types=1);

namespace App\Tests;

use Codeception\Util\HttpCode;

class PingCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function ping(ApiTester $I)
    {
        $I->sendGET('/ping');
        $I->seeResponseCodeIs(HttpCode::OK); // 200
        $I->seeResponseIsJson();
    }
}
