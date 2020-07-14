<?php
namespace App\Providers;
use App\Cart;
use App\Type_product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master',function($view){
            $user = Auth::user();

            $type = Type_product::all();
            $res = [
                'type' => $type,
                'user' => $user,
            ];

            if(Session('Cart')){
                $oldCart = Session::get('Cart');
                $cart = new Cart($oldCart);
                $res['Cart']= Session::get('Cart');
                $res['product_cart'] = $cart->items;
                $res['totalPrice'] = $cart->totalPrice;
                $res['totalQty'] = $cart->totalQty;
            };
            $view->with($res);

        });

        view()->composer('client.check_out', function ($view) {
            $type = Type_product::all();
            if (Session('Cart')) {
                $oldCart = Session::get('Cart');
                $cart = new Cart($oldCart);
                $view->with([
                    'type' => $type,
                    'Cart' => Session::get('Cart'),
                    'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice,
                    'totalQty' => $cart->totalQty
                ]);
            };

        });

        view()->composer('admin.master', function ($view) {
            $type = Type_product::all();
            $user = Auth::user();
            $res = [
                'user' => $user,
                'type' => $type
            ];


            $view->with($res);
        });


    }
}
