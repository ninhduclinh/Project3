<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Attribute_AttributeValue;
use App\Models\Category;
use App\Models\Category_Attribute;
use Illuminate\Support\Facades\Validator;

class AdminCategoryController extends Controller
{
    //Return index view category
    public function index()
    {
        //get list Category
        $categories = Category::all();
        //create variable transfer
        $data = [
            'categories' => $categories
        ];
        return view('admin.category.index',$data);
    }
    public function create()
    {
        //get all attribute
        $attributes = Attribute::all();
        //variable transfer
        $data = [
            'attributes' =>$attributes
        ];
        return view('admin.category.create',$data);
    }
    public function store(Request $request)
    {  
        // Check data input
        $validator = Validator::make($request->all(),
        [
            'c_name' => 'required|unique:categories,c_name',
        ],
        [
            'c_name.required' => 'Bạn cần nhập trường tên loại sản phẩm',
            'c_name.unique' => 'Loại sản phẩm đã tồn tại'
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'categoryErrors');
        }
       $this->insertOrUpdate($request);
        //return view index
        $request->session()->flash('create_category_success', 'Đã thêm 1 loại sản phẩm!');
        return redirect()->route('admin.category.index');
    }
    public function edit($id)
    {
         //get all attribute
         $attributes = Attribute::all();
        //get category
        $category = Category::find($id);
        //get attribute in category
        $categoryAttribute = Category_Attribute::where('c_a_category_id',$id)->get();
        $arrayCategoryAttribute = array();
        // push attribute of category in array for compare attribute in form
        foreach($categoryAttribute as $ca)
        {
            $arrayCategoryAttribute[]= $ca->c_a_attribute_id;
        }
        //variable transfer

        $data = [
            'attributes' =>$attributes,
            'category' => $category,
            'arrayCategoryAttribute' => $arrayCategoryAttribute
        
        ];
        
        return view('admin.category.edit',$data);
    }
    public function update(Request $request,$id)
    {
        // Check data input
        $validator = Validator::make($request->all(),
        [
            'c_name' => 'required',
        ],
        [
            'c_name.required' => 'Bạn cần nhập trường tên loại sản phẩm'
        ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator,'categoryErrors');
        }
        $this->insertOrUpdate($request,$id);
        $request->session()->flash('edit_category_success', 'Đã sửa thành công loại sản phẩm mang ID số'.$id.'!');
        return redirect()->route('admin.category.index');
    }
    public function insertOrUpdate($request,$id='')
    {
        $category = new Category();
        // check $id exist
        if($id)
        {
            $category = Category::find($id);
        }
        //save data
        $category->c_name = $request->c_name;
        $category->c_name_slug = str_slug($request->c_name);
        $category->c_status = $request->c_status;
        //get attribute with request( integer parametter when it is attribute)
        if($id)
        {
            Category_Attribute::where('c_a_category_id',$id)->delete();
            
            foreach ($request->all() as $key => $value) 
            {
                if(is_int($key)){
                $attribute = Attribute::find($key);
                // if($attribute->at_type != "text" &&  $attribute->at_type != "number")
                // {
                //     Attribute_AttributeValue::where('atv_attribute_id',$key)->delete();
                //     $arrayAtributeValue = explode(';',$attribute->at_value);
                //     foreach ($arrayAtributeValue as $avt) {
                //         Attribute_AttributeValue::insert(
                //                 [
                //                     'atv_attribute_id' => $key,
                //                     'atv_value' => $avt
                //                 ]
                //             );
                //     }
                // }
                $variable  = new Category_Attribute();
                $variable->c_a_category_id = $category->id;
                $variable->c_a_attribute_id = $key;
                $variable->save();
                }
            }
        }
        $category->save();
        if(!$id)
        {
            foreach ($request->all() as $key => $value) 
            {
                if(is_int($key)){
                $variable  = new Category_Attribute();
                $variable->c_a_category_id = $category->id;
                $variable->c_a_attribute_id = $key;
                $variable->save();
                }
            }
        }
    }
    public function handle(Request $request,$action,$id)
    {
        $category = Category::find($id);
        switch ($action) {
            case 'delete':
                $category->delete();
                $request->session()->flash('delete_category_success', 'Đã xóa thành công loại sản phẩm mang ID số'.$id.'!');
                break;
            case 'status':
                $category->c_status= $category->c_status==1?0:1;
                $category->save();
                break;
            default:
                dd('Lỗi !!');
                break;
        }
        return redirect()->route('admin.category.index');
    }
}
