<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReportController extends Controller
{
    public function index()
    {
        $rp = Report::all();
        return view('admin.report.index', compact('rp'));
    }

    public function delete($id)
    {
        $rp = Report::find($id);
        $rp->delete();
        $rp = Report::all();

        return view('admin.report.index', compact('rp'))->with('success', "Bạn đã xóa thành công");;
    }
    public function sendindex($id)
    {
        $rp = Report::find($id);
        return view('admin.report.report', compact('rp'));
    }
    public function sendEmail(Request $request)
    {

        $rp = Report::find($request->input('id'));
        $rp->state = true;
        $rp->save();

        $content = $request->input('content');
        $ten = $request->input('name');
        $name = $request->input('email');


        Mail::send('admin.email.report', compact('name', 'ten', 'content'), function ($email) use ($name) {
            $email->subject('Mona Shop phản hồi khách hàng');
            $email->to($name, $name);
        });
        return redirect()->route('ReportIndex')->with('success', "Bạn đã phản hồi thành công");
    }
}
