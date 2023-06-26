<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\ConnectionInterface as DB;

class ReportController extends Controller
{
    /**
     * @var $db
    */
    public $db;

    /**
     * Inject Model(s) onto the constructor
     * @param DB $db
     */
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function index(Request $request)
    {
        switch($request->report)
        {
            case "big_spender":
                    $report_heading = "Report For Customers By Purchase (cost) - BIG SPENDERS";
                    $order_details = $this->db->select("uspGetBigSpenders");
                break;
            case "quantity_over_quality":
                    $report_heading = "Report For Customers By Purchase (count) - QUANTITY OVER QUALITY";
                    $order_details = $this->db->select("uspGeTQuantityOverQuality");
                break;
        }

        return view('report', compact('order_details', 'report_heading'));
    }
}
