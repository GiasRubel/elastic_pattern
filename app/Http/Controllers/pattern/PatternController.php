<?php

namespace App\Http\Controllers\pattern;

use App\Http\Controllers\Controller;
use App\Pattern\Adapter\Customer;
use App\Pattern\Decorator\Bmw;
use App\Pattern\Decorator\CarInterface;
use App\Pattern\Decorator\highWells;
use App\Pattern\Decorator\Sedan;
use App\Pattern\Decorator\SunRoof;
use App\Pattern\Facade\CodeTwit;
use App\Pattern\Facade\Googlize;
use App\Pattern\Facade\Reddiator;
use App\Pattern\Facade\shareFacade;
use App\Pattern\Singleton\GetTime;
use App\Pattern\Strategy\couponGenerator;
use App\Pattern\Strategy\couponObjectGenerator;
use Illuminate\Http\Request;

class PatternController extends Controller
{
    public function adapter(Customer $customer)
    {
        //For definition find in app service provider
        $customer->pay('Sweet', 120);
    }

    public function singlePattern()
    {
        // Without singleton class
        $getTime = new GetTime();
        dump($getTime->getTime());

        // With singleton class
        $getTime = GetTime::getInstance();
        dump($getTime->getTime());
        $getTime1 = GetTime::getInstance();
        dump($getTime1->getTime());
        $getTime2 = GetTime::getInstance();
        dump($getTime2->getTime());
    }

    public function decorator(Sedan $car)
    {
        //  $basicCar = new Bmw();
        $basicCar = new Sedan();
        $carWithSunRoof = new SunRoof($basicCar);
        $carWithWheel = new highWells($carWithSunRoof);

        echo $carWithWheel->description();
        echo " costs ";
        echo $carWithWheel->cost();
    }

    public function facadePattern()
    {
        $twitterObj = new CodeTwit();
        $gooleObj = new Googlize();
        $redditObj = new Reddiator();

        $shareObj = new shareFacade($twitterObj, $gooleObj, $redditObj);

// Call only 1 method to share your post with all the social networks.
        $shareObj->share('https://myBlog.com/post-awsome', 'My greatest post', 'Read my greatest post ever.');

    }

    public function strategyPattern()
    {
        $car = "bmw";

        $obj = new couponObjectGenerator();

        $carObj = $obj->couponObjectGenerator($car);

        $carCoupon = new couponGenerator($carObj);

        dd($carCoupon->getCoupon());
    }


}
