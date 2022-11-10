<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ActivityAnalytics extends Controller
{
    public function SelectActivities(Type $var = null)
    {

        // return redirect()->back()->with('error_a', 'Project management analytics database is not accurate, Please complete data entry');

        $Activities = DB::table('activities AS A')
            ->join('grants AS G', 'G.GID', '=', 'A.GID')
            ->join('donors AS D', 'D.DID', '=', 'A.DID')
            ->select('G.GrantName', 'A.*')
            ->get();

        $data = [
            'Title'      => 'Select Activity to attach a grant impact report to',
            'Desc'       => 'Activity BVA | Grant impact report',
            'Page'       => 'stat.SelectActivity',
            'Activities' => $Activities,
        ];

        return view('scrn', $data);
    }

    public function GrantActivityAccepted(Request $request)
    {
        $validated = $this->validate($request, [

            "*" => "required", // "EmpID" => "required",
        ]);

        $id = $request->id;

        return redirect()->route('ActivityGrantImpactReport', ['id' => $id]);
    }

    public function ActivityGrantImpactReport($id)
    {

        $Report = DB::table('activities AS A')
            ->where('A.id', $id)
            ->join('grants AS G', 'G.GID', 'A.GID')
            ->join('donors AS D', 'D.DID', 'G.DID')
            ->join('activity_costs AS C', 'C.AID', 'A.AID')
            ->groupBy('C.Month', 'C.Year')
            ->selectRaw('sum(C.SubTotal) AS TotalActivityCost , A.Budget, G.AvailableGrantAmountInUgx, A.*, G.GrantName, D.Name, C.Year, C.Month'
            )->get();

        $data = [
            'Title'  => 'Activity Grant Impact Report',
            'Desc'   => 'Activity-Grant BVA  Report',
            'Page'   => 'stat.ActivityGrantImpactReport',
            'Report' => $Report,
        ];

        return view('scrn', $data);
    }
}
