<?php

namespace App\Http\Controllers\Blog;

use App\Criteria\Blog\PostByAuthorCriteria;
use App\Criteria\Blog\PostByCategoryCriteria;
use App\Criteria\Blog\SearchPostCriteria;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\UrlController;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $postRepository;
    private $categoryRepository;
    private $userRepository;

    public function __construct(
                                    PostRepository $postRepository, 
                                    PostCategoryRepository $categoryRepository,
                                    UserRepository $userRepository
                                )
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->orderBy('created_at', 'DESC')->paginate(10);
        
        return view('blog.pages.index', compact('posts'));
    }

    public function post($category, $title)
    {
        $categoryName = UrlController::translateFriendlyUrl($category);
        $title = UrlController::translateFriendlyUrl($title);

        $category = $this->categoryRepository->findWhere(['title' => $categoryName])->first();

        $post = $this->postRepository->findWhere([
            'post_category_id' => $category->id,
            'title' => $title
        ])->first(); 

        return view('blog.pages.post', compact('post'));
    }

    public function author($author)
    {
        $authorName = UrlController::translateFriendlyUrl($author);

        $author = $this->userRepository->findWhere(['name' => $authorName])->first();

        $this->postRepository->pushCriteria(new PostByAuthorCriteria($author->id));

        $posts = $this->postRepository->paginate(10); 
        
        return view('blog.pages.index', compact('posts'));
    }

    public function category($category)
    {
        $categoryName = UrlController::translateFriendlyUrl($category);

        $category = $this->categoryRepository->findWhere(['title' => $categoryName])->first();

        $this->postRepository->pushCriteria(new PostByCategoryCriteria($category->id));

        $posts = $this->postRepository->paginate(10); 
        
        return view('blog.pages.index', compact('posts'));
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $search = $data['busca'];

        $this->postRepository->pushCriteria(new SearchPostCriteria($search));

        $posts = $this->postRepository->paginate(10); 
        
        return view('blog.pages.index', compact('posts', 'search'));
    }
}
