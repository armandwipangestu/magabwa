<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\BannerAdvertisment;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = ArticleNews::with(['category'])
            ->where('is_featured', 'not_featured')
            ->latest()
            ->take(3)
            ->get();
        $featured_articles = ArticleNews::with(['category'])
            ->where('is_featured', 'featured')
            ->inRandomOrder()
            ->take(3)
            ->get();
        $authors = Author::all();
        $banner_ads = BannerAdvertisment::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            // ->take(1)
            ->first();
        return view('front.index', compact('categories', 'articles', 'authors', 'featured_articles', 'banner_ads'));
    }
}
