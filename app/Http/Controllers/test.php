<?php
class DatatableController extends Controller{
    public function datatableServer(Request $request)
    {
        return view('your-template');
    }
     public function ajaxDatatable(Request $request)
    {
        /* Đầu vào xem $request->all();
         * Response cần phải trả về giống như tab ajax tại đường link gốc
         * { "draw": 1, "recordsTotal": 57,"recordsFiltered": 57,
         *   "data": [ ["id","name","mobile","email"],["21","Alex","0984325561","alex@gmail.com"]]
         * }
         * Việc cần làm là tạo ra 1 response giống như trên rồi trả về .
         *  draw : số thứ tự mà request mà datatable gửi đi .
         *  recordsTotal : số bản ghi khi không có lọc điều kiện
         *  recordsFiltered : số bản ghi thỏa mãn điều kiện 
         * data : là mảng 2 chiều trong đó mỗi mảng 1 chiều con tương ứng với 1 hàng (row) trên bảng hiển thị phía người dùng .
         * */
        $fieldsSelected = ['id', 'name', 'mobile', 'email'];
        $draw = $request->draw; // draw là số thứ tự của request datatable . Nó dùng để khớp kết quả khi hàm onchange 10 lần có 10 request nhưng response gõ cuối cùng đến sớm hơn cái gõ trước đó
        $key = $request->search['value'];
        $recordsTotal = YourModel::count(); // recordsTotal
        $records = YourModel::select($fieldsSelected); // thay bang list row
        if ($key != null) {
            // ô search của datatable
            for ($i = 0; $i < count($fieldsSelected); $i++) {
                $records = $records->orWhere($fieldsSelected[$i], 'like', '%' . $key . '%');
            }
//         dòng code tương đương với vòng lặp for ở trên
//            $records = $records->where('id', 'like', '%' . $key . '%')
//                ->orWhere('name', 'like', '%' . $key . '%')
//                ->orWhere('mobile', 'like', '%' . $key . '%')
//                ->orWhere('email', 'like', '%' . $key . '%');
        }
        $recordsFiltered = $records->count(); // recordsFiltered - tổng số record có trong tình huống đó
        $records = $records->skip($request->start)->take($request->length); // danh sách các record hiển thị trên màn hình
        // Order - sắp xếp ngược xuôi
        $records = $records->orderBy($fieldsSelected[$request['order'][0]['column']], $request['order'][0]['dir']);
        // Chuyển records nhận được về dạng mảng mà datatable đọc được
        $collections = $records->get()->map(function ($record) use($fieldsSelected) {
//            return [$record->id, $record->name, $record->mobile, $record->email]; dòng code tường minh
            // dòng code tổng quát cho bất kỳ mảng $fieldsSelected nào
            $arr = [];
            for ($i = 0; $i < count($fieldsSelected); $i++) {
                array_push($arr,$record[$fieldsSelected[$i]]);
            }
            return $arr;
        });
        return response()->json([
            "draw" => intval($draw),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "data" => $collections,
        ]);
}
