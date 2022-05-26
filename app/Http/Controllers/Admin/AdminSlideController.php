<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Support\Facades\Validator;

class AdminSlideController extends Controller
{
    //
    public function index()
    {
        $slides = Slide::all();
        $data =  [
            'slides' => $slides
        ];
        return view('admin.slide.index',$data);
    }
    public function create()
    {
        return view('admin.slide.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            's_name' => 'required',
            's_avatar' => 'required'
        ],
        [
            's_name.required' => 'Bạn cần nhập trường tên slide',
            's_avatar.required' => 'Chưa chọn ảnh slide'
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'slideErrors');
        }
        $this->insertOrUpdate($request);
        $request->session()->flash('create_slide_success', 'Đã thêm 1 Slide!');
        return redirect()->route('admin.slide.index');
    }
    public function edit($id)
    {
        $slide = Slide::find($id);
        $data = [
            'slide' => $slide
        ];
        return view('admin.slide.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            's_name' => 'required',
        ],
        [
            's_name.required' => 'Bạn cần nhập trường tên slide',
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'slideErrors');
        }
        $this->insertOrUpdate($request,$id);
        $request->session()->flash('edit_slide_success', 'Đã sửa thành công slide id số '.$id.'!');
        return redirect()->route('admin.slide.index');
    }
    public function insertOrUpdate(Request $request,$id='')
    {
        $slide = new Slide();
        if($id)
        {
            $slide = Slide::find($id);
        }
        $slide->s_name = $request->s_name;
        // check img exist for insert img in database
        if($request->hasFile('s_avatar')){
            // get file
            $file=$request->file('s_avatar');
            //get name file
            $name=$file->getClientOriginalName();
            //random name file for save database
            $Hinh = str_random('3')."_".$name;
            //check file exist
            while(file_exists("public/upload/s_image/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            // save file
            $file->move("public/upload/s_image",$Hinh);
            $slide->s_avatar = $Hinh;
        }
        $slide->save();
    }
    public function handle(Request $request, $action, $id)
    {
        $slide = Slide::find($id);
        switch ($action) {
            case 'delete':
                $slide->delete();
                $request->session()->flash('delete_slide_success', 'Đã xóa thành công slide mang ID số'.$id.'!');
                break;
            
            default:
                dd("Lỗi r");
                break;
        }
        return redirect()->route('admin.slide.index');
    }
}
