<?php

namespace App\Providers;

// use App\Repository\ElasticsearchMembersRepository; //for Elasticsearch
// use Elasticsearch\Client; //for Elasticsearch
// use Elasticsearch\ClientBuilder; //for Elasticsearch
use App\Repository\EloquentMembersRepository;
use App\Repository\SearchRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ////////////////////////////////
        // Initiate Search for Member //
        ////////////////////////////////

        $this->app->bind(SearchRepository::class, function(){
            return new EloquentMembersRepository();
        });

        ///////////////////////////////////////////////////
        // Uncomment this to turn back on ElasticSearch  //
        ///////////////////////////////////////////////////

        // $this->app->singleton(MemberRepository::class, function($app){
        //     if(!config('services.search.enabled')){
        //         return new EloquentMemberRepository();
        //     }
        //     return new ElasticsearchMembersRepository($app->make(Client::class));
        // });

        // $this->bindSearchClient();
    }


    ////////////////////////////////////////
    // bindSearchClient for ElasticSearch //
    ////////////////////////////////////////

    // private function bindSearchClient(){
    //     $this->app->bind(Client::class, function ($app){
    //         return ClientBuilder::create()->setHosts(config('services.search.hosts'))->build();
    //     });
    // }
}
