<?php
/**
 * Created by PhpStorm.
 * User: wilde
 * Date: 20/4/2017
 * Time: 12:56 AM
 */

namespace database\seeds;


use App\billIssue;

class BillissuesSeeders
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        DB::table('bill_issues')->delete();

        for ($i=0; $i<10; $i++) {
            billIssue::create([
                'fecha' => \Carbon\Carbon::now()
            ]);
        }
    }
}