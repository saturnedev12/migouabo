<?php

namespace App\Providers;

use App\Models\Produit;
use App\Models\Categorie;
use Laravel\Fortify\Fortify;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
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
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::registerView(function() {
            return view('users.auth.login-register');
        });
        Fortify::loginView(function() {
            return view('users.auth.login-register');
        });
        Fortify::requestPasswordResetLinkView(function($request) {
            $user = Auth::user();
            $categories = Categorie::all();;
            $products_all= Produit::all();
            $sub_categorys = SousCategorie::all();
            // $token = $request->token;
            return view('users.auth.reset', compact(
                'user',
                'categories',
                'products_all',
                'sub_categorys',
                'request'
            ));
        });
        // Fortify::resetPasswordView(function() {
        //     return view('users.auth.reset-passord', ['token' => $request->token]);
        // });
    }
}
