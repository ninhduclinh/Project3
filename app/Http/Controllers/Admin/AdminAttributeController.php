<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute as AppAttribute;
use App\Models\Attribute_AttributeValue;
use Illuminate\Support\Facades\Validator;

class AdminAttributeController extends Controller
{
    public function index()
    {
        // get all Attribute
        $attributes = AppAttribute::all();
        //create variable transfer
        $data = [
            'attributes' => $attributes
        ];
        return view('admin.attribute.index',$data);
    }
    public function create(){
        return view('admin.attribute.create');
    }
    public function store(Request $request){
        //check Input
        $validator  = Validator::make($request->all(),
        [
            'at_name' => 'required|unique:attributes,at_name',
            'at_type' => 'required'
        ],
        [
            'at_name.required' => 'Tên thuộc tính bắt buộc',
            'at_name.unique' => 'Thuộc tính đã tồn tại',
            'at_type' => 'Kiểu dữ liệu là bắt buộc'
        ]
    );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'attributeErrors');
        }
        //Check same value
        if($request->at_value)
        {
            $arrayAttributeValue = explode(';',$request->at_value);
            for($i=0; $i< count($arrayAttributeValue);$i++)
            {
                for($j=$i+1;$j<count($arrayAttributeValue);$j++)
                {
                    if($arrayAttributeValue[$i]==$arrayAttributeValue[$j])
                    {
                        return redirect()->back()->with('sameValue','Giá trị giống nhau');
                    }
                }
            }
        }
        $this->insertOrUpdate($request);
        $request->session()->flash('create_attribute_success', 'Đã thêm 1 thuộc tính mới !');
        return redirect()->route('admin.attribute.index');
    }
    public function edit($id)
    {
        //find attribute
        $attribute = AppAttribute::find($id);
        return view('admin.attribute.edit',compact('attribute'));
    }
    public function update(Request $request,$id)
    {
        //check Input
        $validator  = Validator::make($request->all(),
        [
            'at_name' => 'required',
            'at_type' => 'required'
        ],
        [
            'at_name.required' => 'Tên thuộc tính bắt buộc',
            'at_type' => 'Kiểu dữ liệu là bắt buộc'
        ]
    );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'attributeErrors');
        }
        //Check same value
        if($request->at_value)
        {
            $arrayAttributeValue = explode(';',$request->at_value);
            for($i=0; $i< count($arrayAttributeValue);$i++)
            {
                for($j=$i+1;$j<count($arrayAttributeValue);$j++)
                {
                    if($arrayAttributeValue[$i]==$arrayAttributeValue[$j])
                    {
                        return redirect()->back()->with('sameValue','Giá trị giống nhau');
                    }
                }
            }
        }
        $this->insertOrUpdate($request,$id);
        $request->session()->flash('edit_attribute_success', 'Đã sửa thuộc tính ID='.$id.' !');
        return redirect()->route('admin.attribute.index');
    }
    public function insertOrUpdate($request,$id='')
    {
        //create attribute
        $attributes = new AppAttribute();
        // check id
        if($id)
        {
            $attributes = AppAttribute::find($id);
        }
        //save data
        $attributes->at_name = $request->at_name;
        $attributes->at_name_slug = str_slug($request->at_name);
        $attributes->at_type = $request->at_type;
        $attributes->at_value = $request->at_value;
        $attributes->save();
    }
    public function handle(Request $request,$action,$id){
        //get Attribute
        $attribute = AppAttribute::find($id);
        switch ($action) {
            case 'delete':
                $attribute->delete();
                $request->session()->flash('delete_attribute_success', 'Đã xóa thuộc tính ID='.$id.' !');
                break;
            
            default:
                dd("Lỗi rồi");
                break;
        }
        return redirect()->route('admin.attribute.index');
    }
}
