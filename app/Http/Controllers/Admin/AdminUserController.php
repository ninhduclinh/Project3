<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $data = [
            'users' => $user
        ];
        return view('admin.user.index', $data);
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3|max:255',
                'email' => 'required|email|unique:users,email|min:3|max:255',
                'phone' => 'required|numeric'
            ],
            [
                'name.required' => 'Tên người dùng không được trống',
                'name.min' => 'Tên người dùng ít nhất 3 kí tự',
                'name.max' => 'Tên người dùng nhiều nhất nhất 255 kí tự',
                'email.required' => 'Email không được trống',
                'email.email' => 'Địa chỉ Email k đúng',
                'email.unique' => 'Đã có người đăng kí email này',
                'email.min' => 'Email ít nhất 3 kí tự',
                'email.max' => 'Email nhiều nhất nhất 255 kí tự',
                'phone.required' => 'Số điện thoại để trống !',
                'phone.numeric' => 'Định dạng số điện thoại không đúng !',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'userErrors');
        }
        $this->insertOrUpdate($request);
        $request->session()->flash('create_user_success', 'Đã thêm 1 tài khoản người dùng với mật khẩu mặc định là "1" !');
        return redirect()->route('admin.user.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('admin.user.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3|max:255',
                'email' => 'required|email|min:3|max:255',
                'phone' => 'required|numeric'
            ],
            [
                'name.required' => 'Tên người dùng không được trống',
                'name.min' => 'Tên người dùng ít nhất 3 kí tự',
                'name.max' => 'Tên người dùng nhiều nhất nhất 255 kí tự',
                'email.required' => 'Email không được trống',
                'email.email' => 'Địa chỉ Email k đúng',
                'email.min' => 'Email ít nhất 3 kí tự',
                'email.max' => 'Email nhiều nhất nhất 255 kí tự',
                'phone.required' => 'Số điện thoại để trống !',
                'phone.numeric' => 'Định dạng số điện thoại không đúng !',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'userErrors');
        }
        $request->session()->flash('edit_user_success', 'Đã sửa thành công tài khoản mang ID số' . $id . '!');
        $this->insertOrUpdate($request, $id);
        return redirect()->route('admin.user.index');
    }
    public function insertOrUpdate(Request $request, $id = '')
    {
        $user = new User();
        if ($id) {
            $user = User::find($id);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(1);
        $user->phone = $request->phone;
        $user->save();
    }
    public function changePassword(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);
            if ($request->new_password != $request->confirm_password) {
                return response()->json([
                    'status' => 2
                ]);
            }
            $user->password = bcrypt($request->new_password);
            $user->save();
            return response()->json([
                'status' => 1
            ]);
        }
        dd("Looix");
    }
    public function action(Request $request, $action, $id)
    {
        $user = User::find($id);
        switch ($action) {
            case 'delete':
                if ($id == 1) {
                    return redirect()->back();
                }
                $user->delete();
                $request->session()->flash('delete_user_success', 'Đã xóa thành công tài khoản mang ID số' . $id . '!');
                return redirect()->route('admin.user.index');
                break;
            case "role":
                $user->role = $user->role == 1 ? 0 : 1;
                $user->save();
                return redirect()->route('admin.user.index');
                break;

            default:
                dd("Lỗi r");
                break;
        }
    }

    public function ajaxDatatable(Request $request)
    {
        $users = User::select('id', 'name', 'email', 'phone', 'role')->get();
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                $deletebtn = "<a href='{{ route('admin.user.edit', $user->id) }}'
                class='btn btn-success btn-circle'><i class='fas fa-edit'></i></a> &nbsp;
            <a href='{{ route('admin.user.action', ['delete', $user->id]) }}'
                class='btn_delete_sweet btn btn-danger btn-circle' data-id='{{ $user->id }}'><i
                    class='fas fa-trash-alt'></i></a> &nbsp;
            <a href='{{ route('admin.change.password', $user->id) }}'
                class='button_change_password btn btn-warning btn-circle'
                data-email='{{ $user->email }}' data-toggle='modal'
                data-target='#exampleModalCenter'><i class='fas fa-key'></i></a>";
                return $deletebtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
