<?php

namespace Modules\Search\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Modules\Category\Models\Category;
use Modules\Product\Models\Product;
use Modules\Blog\Models\BlogArticle;
use Modules\News\Models\News;
use Modules\Search\Components\SearchPage;
use Nwidart\Modules\Facades\Module;

class SearchController
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $categories = Module::find('Category') && Module::find('Category')->isEnabled()
            ? Category::query()->where('name', 'LIKE', '%' . $query . '%')->get()
            : collect();

        $products = Module::find('Product') && Module::find('Product')->isEnabled()
            ? Product::query()->where('name', 'LIKE', '%' . $query . '%')->get()
            : collect();

        $blogArticles = Module::find('Blog') && Module::find('Blog')->isEnabled()
            ? BlogArticle::query()->where('name', 'LIKE', '%' . $query . '%')->get()
            : collect();

        $newsPosts = Module::find('News') && Module::find('News')->isEnabled()
            ? News::query()->where('name', 'LIKE', '%' . $query . '%')->get()
            : collect();

        $results = $categories->merge($products)
            ->merge($blogArticles)
            ->merge($newsPosts);

        if ($results) {
            return Blade::renderComponent(new SearchPage($results));
        }
    }
}
