<?php

namespace Corals\Modules\Utility\Providers;

use Corals\Modules\Utility\Models\Category\Attribute;
use Corals\Modules\Utility\Models\Category\Category;
use Corals\Modules\Utility\Models\Rating\Rating;
use Corals\Modules\Utility\Models\Tag\Tag;
use Corals\Modules\Utility\Models\Wishlist\Wishlist;
use Corals\Modules\Utility\Policies\Category\AttributePolicy;
use Corals\Modules\Utility\Policies\Category\CategoryPolicy;
use Corals\Modules\Utility\Policies\Rating\RatingPolicy;
use Corals\Modules\Utility\Policies\Tag\TagPolicy;
use Corals\Modules\Utility\Policies\Wishlist\WishlistPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class UtilityAuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Rating::class => RatingPolicy::class,
        Wishlist::class => WishlistPolicy::class,
        Tag::class => TagPolicy::class,
        Attribute::class => AttributePolicy::class,
        Category::class => CategoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}