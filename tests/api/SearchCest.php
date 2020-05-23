<?php declare(strict_types=1);

namespace App\Tests;

use Codeception\Util\HttpCode;

class SearchCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function search(ApiTester $I)
    {
        $I->sendGET('/search', ['q' => '105']);
        $I->seeResponseCodeIs(HttpCode::OK); // 200
        $I->seeResponseIsJson();
    }
}
