<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class AdminArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $data = [
            'articles' => $articles
        ];
        return view('admin.article.index',$data);
    }
    public function create()
    {
        return view('admin.article.create');
    }
    public function store(Request $request)
    {
         // Check data input
         $validator = Validator::make($request->all(),
         [
            'a_name' => 'required|unique:articles,a_name|min:3|max:255',
            'a_description' => 'required|min:3',
            'a_content' => 'required|min:3'
         ],
         [
             'a_name.required' => 'Bạn cần nhập trường tên bài viết',
             'a_name.unique' => 'Tên bài viết đã tồn tại',
             'a_description.required' => 'Mô tả bài viết còn trống',
             'a_description.min' => 'Mô tả bài viết cần ít nhất 3 kí tự',
             'a_content.required' => 'Nội dung bài viết còn trống',
             'a_content.min' => 'Nội dung bài viết cần ít nhất 3 kí tự',
         ]
         );
         if($validator->fails())
         {
             return redirect()->back()->withErrors($validator,'articleErrors');
         }
        $this->insertOrUpdate($request);
        $request->session()->flash('create_article_success', 'Đã thêm 1 bài viết!');
        return redirect()->route('admin.article.index');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        $data= [
            'article' => $article
        ];
        return view('admin.article.edit',$data);
    }
    public function update(Request $request, $id)
    {
        // Check data input
        $validator = Validator::make($request->all(),
        [
           'a_name' => 'required|min:3|max:255',
           'a_description' => 'required|min:3',
           'a_content' => 'required|min:3'
        ],
        [
            'a_name.required' => 'Bạn cần nhập trường tên bài viết',
            'a_description.required' => 'Mô tả bài viết còn trống',
            'a_description.min' => 'Mô tả bài viết cần ít nhất 3 kí tự',
            'a_content.required' => 'Nội dung bài viết còn trống',
            'a_content.min' => 'Nội dung bài viết cần ít nhất 3 kí tự',
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'articleErrors');
        }
        $this->insertOrUpdate($request, $id);
        $request->session()->flash('edit_article_success', 'Đã sửa thành công bài viết mang ID số'.$id.'!');
        return redirect()->route('admin.article.index');
    }
    public function handle(Request $request,$action,$id)
    {
        $article = Article::find($id);
        switch ($action) {
            case 'delete':
                $article->delete();
                $request->session()->flash('delete_article_success', 'Đã xóa thành công bài viết mang ID số'.$id.'!');
                break;
            case 'status':
                $article->a_status = ($article->a_status==1)?0:1;
                $article->save();
                break;
            default:
                dd("Lỗi r");
                break;
        }
        return redirect()->route('admin.article.index');
    }
    public function insertOrUpdate($request, $id='')
    {
        $article = new Article();
        if($id)
        {
            $article = Article::find($id);
        }
        $article->a_name = $request->a_name;
        $article->a_name_slug = str_slug($request->a_name);
        $article->a_description = $request->a_description;
        $article->a_content = $request->a_content;
        // check img exist for insert img in database
        if($request->hasFile('a_image')){
            // get file
            $file=$request->file('a_image');
            //get name file
            $name=$file->getClientOriginalName();
            //random name file for save database
            $Hinh = str_random('3')."_".$name;
            //check file exist
            while(file_exists("public/upload/a_image/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            // save file
            $file->move("public/upload/a_image",$Hinh);
            $article->a_image = $Hinh;
        }
        $article->save();
    }
}
