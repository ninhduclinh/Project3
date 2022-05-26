<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute_AttributeValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Attribute;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    // return index product
    public function index()
    {
        $products = Product::all();
        $data = [
            'products' => $products
        ];
        return view('admin.product.index',$data);
    }
    // return form create product
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('admin.product.create',$data);
    }
    // save product and return index product
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'pro_name' => 'required|unique:products,pro_name|min:3|max:255',
            'pro_description' => 'required|min:3|max:1000',
            'pro_content' => 'required|min:3',
            'pro_category_id' => 'required',
            'pro_price' => 'required|integer|gte:0',
            'pro_sale' => 'required|integer|gte:0|lte:100',
        ],
        [
            'pro_name.required' => 'Bạn cần nhập trường tên sản phẩm',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại',
            'pro_name.min' => 'Tên sản phẩm ít nhất 3 kí tự',
            'pro_name.max' => 'Tên sản phẩm nhiều nhất nhất 255 kí tự',
            'pro_description.required' => 'Bạn cần nhập trường mô tả sản phẩm',
            'pro_description.min' => 'Mô tả sản phẩm ít nhất 3 kí tự',
            'pro_description.max' => 'Mô tả sản phẩm nhiều nhất 1000 kí tự',
            'pro_content.required' => 'Bạn cần nhập trường nội dung sản phẩm',
            'pro_content.min' => 'Nội dung sản phẩm ít nhất 3 kí tự',
            'pro_category_id.required' => 'Bạn cần chọn loại sản phẩm', 
            'pro_price.required' => 'Bạn cần nhập trường giá sản phẩm',
            'pro_price.integer' => 'Giá sản phẩm là kiểu số',
            'pro_price.gte' => 'Giá sản phẩm phải là 1 số nguyên dương !',
            'pro_sale.integer' => 'Giảm giá sản phẩm là kiểu số nguyên dương',
            'pro_sale.required' => 'Bạn cần nhập trường giảm giá sản phẩm, Nếu k muốn giảm giá hãy nhập giá trị bằng 0 xin cảm ơn !!',
            'pro_sale.gte' => 'Giảm giá sản phẩm phải lớn hơn hoặc bằng 0 !',
            'pro_sale.lte' => 'Giảm giá sản phẩm phải nhỏ hơn hoặc bằng 100 !',
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'productErrors');
        }
        $this->insertOrUpdate($request);
        $request->session()->flash('create_product_success', 'Đã thêm 1 sản phẩm mới!');
        return redirect()->route('admin.product.index');
    }
    //get form edit product
    public function edit(Request $request,$id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $attribute_product = Product_Attribute::where('pa_product_id',$id)->get();
        $data = [
            'product' => $product,
            'categories' => $categories,
            'attribute_product' => $attribute_product
        ];
        return view('admin.product.edit',$data);
    }
    // update product 
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'pro_name' => 'required|min:3|max:255',
            'pro_description' => 'required|min:3|max:1000',
            'pro_content' => 'required|min:3',
            'pro_category_id' => 'required',
            'pro_price' => 'required|integer|gte:0',
            'pro_sale' => 'required|integer|gte:0|lte:100',
        ],
        [
            'pro_name.required' => 'Bạn cần nhập trường tên sản phẩm',
            'pro_name.min' => 'Tên sản phẩm ít nhất 3 kí tự',
            'pro_name.max' => 'Tên sản phẩm nhiều nhất nhất 255 kí tự',
            'pro_description.required' => 'Bạn cần nhập trường mô tả sản phẩm',
            'pro_description.min' => 'Mô tả sản phẩm ít nhất 3 kí tự',
            'pro_description.max' => 'Mô tả sản phẩm nhiều nhất 1000 kí tự',
            'pro_content.required' => 'Bạn cần nhập trường nội dung sản phẩm',
            'pro_content.min' => 'Nội dung sản phẩm ít nhất 3 kí tự',
            'pro_category_id.required' => 'Bạn cần chọn loại sản phẩm', 
            'pro_price.required' => 'Bạn cần nhập trường giá sản phẩm',
            'pro_price.integer' => 'Giá sản phẩm là kiểu số',
            'pro_price.gte' => 'Giá sản phẩm phải là 1 số nguyên dương !',
            'pro_sale.integer' => 'Giảm giá sản phẩm là kiểu số nguyên dương',
            'pro_sale.required' => 'Bạn cần nhập trường giảm giá sản phẩm, Nếu k muốn giảm giá hãy nhập giá trị bằng 0 xin cảm ơn !!',
            'pro_sale.gte' => 'Giảm giá sản phẩm phải lớn hơn hoặc bằng 0 !',
            'pro_sale.lte' => 'Giảm giá sản phẩm phải nhỏ hơn hoặc bằng 100 !',
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'productErrors');
        }
        $this->insertOrUpdate($request,$id);
        $request->session()->flash('edit_product_success', 'Đã sửa thành công sản phẩm mang ID số'.$id.'!');
        return redirect()->route('admin.product.index');
    }
    //insert or update
    public function insertOrUpdate($request,$id='')
    {
        // create variable product
        $product = new Product();
        // check id ! if id exist => this is update product and opposite
        if($id)
        {
            $product = Product::find($id);
        }
        $product->pro_name = $request->pro_name;
        $product->pro_name_slug = str_slug($request->pro_name);
        $product->pro_description = $request->pro_description;
        $product->pro_content = $request->pro_content;
        $product->pro_category_id = $request->pro_category_id;
        $product->pro_price = $request->pro_price;
        $product->pro_sale = $request->pro_sale;
        // check img exist for insert img in database
        if($request->hasFile('pro_image')){
            // get file
            $file=$request->file('pro_image');
            //get name file
            $name=$file->getClientOriginalName();
            //random name file for save database
            $Hinh = str_random('3')."_".$name;
            //check file exist
            while(file_exists("public/upload/pro_image/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            // save file
            $file->move("public/upload/pro_image",$Hinh);
            $product->pro_image = $Hinh;
        }
        // check id ! if id exist => this is update product and opposite
        if($id)
        {
            // delete product_attribute exist
            Product_Attribute::where('pa_product_id',$id)->delete();
            // get attribute if Request->variable is int !! That is attribute
            foreach($request->all() as $key => $value){
                if(is_int($key))
                {
                    // variable for check exist attribute value
                    $check_attribute_value = Attribute_AttributeValue::where(
                        [
                            ['atv_attribute_id','=',$key],
                            ['atv_value','=',$value]
                        ]
                        )->first();
                    if($check_attribute_value)
                    {
                    // save product_id and atribute_value_id in product_atribute
                      $product_attribute = new Product_Attribute();
                      $product_attribute->pa_product_id = $product->id;
                      $product_attribute->pa_attribute_value_id = $check_attribute_value->id ;
                      $product_attribute->save();
                    }
                    else
                    {
                        // create attribute value id
                        $attribute_value = new Attribute_AttributeValue();
                        $attribute_value->atv_attribute_id = $key;
                        $attribute_value->atv_value = $value;
                        $attribute_value->save();
                        // save product_id and atribute_value_id in product_atribute
                        $product_attribute = new Product_Attribute();
                        $product_attribute->pa_product_id = $product->id;
                        $product_attribute->pa_attribute_value_id = $attribute_value->id ;
                        $product_attribute->save();
                    }
                }
            }
        }
        $product->save();
        if(!$id)
        {
            foreach($request->all() as $key => $value){
                if(is_int($key)){
                    // check exist attribute value
                    $check_attribute_value = Attribute_AttributeValue::where(
                        [
                            ['atv_attribute_id','=',$key],
                            ['atv_value','=',$value]
                        ]
                        )->first();
                    if($check_attribute_value)
                    {
                      // save product_id and atribute_value_id in product_atribute
                      $product_attribute = new Product_Attribute();
                      $product_attribute->pa_product_id = $product->id;
                      $product_attribute->pa_attribute_value_id = $check_attribute_value->id ;
                      $product_attribute->save();
                    }
                    else
                    {
                        // create attribute value id
                        $attribute_value = new Attribute_AttributeValue();
                        $attribute_value->atv_attribute_id = $key;
                        $attribute_value->atv_value = $value;
                        $attribute_value->save();
                        // save product_id and atribute_value_id in product_atribute
                        $product_attribute = new Product_Attribute();
                        $product_attribute->pa_product_id = $product->id;
                        $product_attribute->pa_attribute_value_id = $attribute_value->id ;
                        $product_attribute->save();
                    }
                }
            }
        }
    }
    // handle product
    public function handle(Request $request,$action,$id)
    {
        $product = Product::find($id);
        switch ($action) {
            case 'delete':
                Product_Attribute::where('pa_product_id',$id)->delete();
                $request->session()->flash('delete_product_success', 'Đã sửa thành công sản phẩm mang ID số'.$id.'!');
                $product->delete();
                break;
             case 'status':
                $product->pro_status= $product->pro_status==1?0:1;
                $product->save();
                break;
             case 'hot':
                $product->pro_hot= $product->pro_hot==1?0:1;
                $product->save();
                break;   
            
            default:
                dd("Lỗi r");
                break;
        }
        return redirect()->route('admin.product.index');
    }
    // ajax get attribute product follow category
    public function getAttribute(Request $request)
    {
        $category = Category::find($request->pro_category_id);
        // check if this is update or add !! if id ==0 this is add form and opposite
        if($request->id==0)
        {
            //render html
            $html = view('admin.product.getattribute',compact('category'))->render();
        }
        else
        {
            // get product
            $product = Product::find($request->id);
            $data = [
                'product' => $product,
                'category' => $category
            ];
            //render html
            $html = view('admin.product.getattribute',$data)->render();
        }
        return \response()->json($html);
        // return view('admin.product.getattribute',compact('category'));
    }
    

}
