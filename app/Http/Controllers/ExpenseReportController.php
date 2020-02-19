<?php

namespace App\Http\Controllers;
use App\ExpenseReport;

use App\Mail\OrderShipped;

use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',
        [
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'title'=>'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense_reports')->with('success','Added Delete');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.details',[
            'report' => $report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.edit', [
             'report'=> $report
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validaDate = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = ExpenseReport::find($id);
        $report->title = $request->get('title');
        $report->save();

        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();

        return redirect('/expense_reports')->with('delete','Deleted Report');
    }

    public function confirmDelete($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete',[
            'report' => $report
        ]);
    }

    public function confirmEmail($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmEmail',[
            'report' => $report
        ]);
    }

    public function sendEmail($id)
    {
        $report = ExpenseReport::find($id);
        //Mail::to($request->User())->send(new OrderShipped($id));
        return $report;
    }
}
