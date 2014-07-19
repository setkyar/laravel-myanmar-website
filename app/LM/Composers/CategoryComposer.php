<?php namespace LM\Composers;

class CategoryComposer {
    public function compose($view)
    {
        $view->with('categories', \LM\Models\Category::all());
    }

}