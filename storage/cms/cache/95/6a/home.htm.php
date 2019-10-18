<?php 
class Cms5da94a9eacec7914950617_0855fae988118eed1a71e0a502d64a2fClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
