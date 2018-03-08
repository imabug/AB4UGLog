<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CallsignsTableSeeder extends Seeder
{
    /**
     * Seed the callsign table with random call signs.
     *
     * @return void
     */
    public function run()
    {
        // Insert 50 random calls into the callsigns table
        for ($i=0; $i < 500; $i++)
        {
            DB::table('callsigns')->insert([
                'callsign' => $this->randCall(),
            ]);
        }
    }

    /**
     * Generate random call signs
     *
     * @return string
     */
    public function randCall()
    {
        // Generate a random call sign based on US call sign rules
        // https://www.fcc.gov/wireless/bureau-divisions/mobility-division/amateur-radio-service/amateur-call-sign-systems#block-menu-block-4

        $prefix = ['A','K','N','W'];
        $suffix = ['A','B','C','D','E','F','G','H','I','J','K','L',
                   'M','N','O','P','Q','R','S','T','U','V','W','X',
                   'Y','Z'];
        $prefixLen = count($prefix)-1;
        $suffixLen = count($suffix)-1;

        $call = '';
        switch (random_int(0,5))
        {
            case 0: // 1x1 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
            case 1: // 1x2 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
            case 2: // 1x3 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
            case 3: // 2x1 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $suffix[random_int(0, 12)];
                }
                else {
                    $call .= $suffix[random_int(0, $suffixLen)];
                }
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
            case 4: // 2x2 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $suffix[random_int(0, 11)];
                }
                else {
                    $call .= $suffix[random_int(0, $suffixLen)];
                }
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
            case 5: // 2x3 call sign
            default:
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $suffix[random_int(0, 12)];
                }
                else {
                    $call .= $suffix[random_int(0, $suffixLen)];
                }
                $call .= random_int(0,9);
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                $call .= $suffix[random_int(0, $suffixLen)];
                break;
        }

        return $call;
    }
}
