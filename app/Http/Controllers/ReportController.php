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

/**stored procedures created 
 * 
 * USE laraMssqlApp

GO
SET ANSI_NULLS ON
GO


SET QUOTED_IDENTIFIER ON
GO


CREATE PROCEDURE uspGetBigSpenders
AS BEGIN
  SELECT TOP 10 SUM(o.total_amount) AS total,c.name AS full_name FROM orders o
	LEFT JOIN customers c ON o.customer_id = c.id
	GROUP BY o.total_amount, c.name
	ORDER BY total_amount DESC
END
 * 
USE laraMssqlApp

GO
SET ANSI_NULLS ON
GO


SET QUOTED_IDENTIFIER ON
GO


ALTER PROCEDURE uspGeTQuantityOverQuality
AS BEGIN
  SELECT TOP 10 COUNT(*) AS total, c.name as full_name FROM orders o
	LEFT JOIN customers c ON o.customer_id = c.id
	GROUP BY c.name
	ORDER BY total DESC
END

EXEC uspGeTQuantityOverQuality
*/