<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request){
    $query = $request->query('query');

    if (!empty($query)) {
        // 検索クエリに基づいてレポートを検索
        $items = DB::table('report')
                    ->where('title', 'like', '%' . $query . '%')
                    ->orWhere('place', 'like', '%' . $query . '%')
                    ->get();
    } else {
        // 初期表示用のレポートを取得
        $items = DB::table('report')->get();
    }

    // 同じビューをレンダリングし、検索結果または全レポートを表示
    return view('report.report', compact('items'));
}
    
    public function remove(Request $request){
        $param = ['id'=> $request->id];
        DB::delete('delete from report where id = :id', $param);
        return redirect('/');
    }

    public function duplicate(Request $request)
    {
        $originalReport = DB::table('report')->where('id', $request->id)->first();

        if ($originalReport) {
            DB::table('report')->insert([
                'title' => $originalReport->title,
                'user' => $originalReport->user,
                'place' => $originalReport->place,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect('/');
    }
}
