<?php

use Illuminate\Database\Seeder;

class CallsignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 20 random calls into the callsigns table
        for ($i=0; $i < 20; $i++)
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

        $prefix = ['a','k','n','w'];
        $letter = ['a','b','c','d','e','f','g','h','i','j','k','l',
                   'm','n','o','p','q','r','s','t','u','v','w','x',
                   'y','z'];
        $prefixLen = count($prefix)-1;
        $letterLen = count($letter)-1;

        $call = '';
        switch (random_int(0,5))
        {
            case 0: // 1x1 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                break;
            case 1: // 1x2 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                break;
            case 2: // 1x3 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                break;
            case 3: // 2x1 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $letter[random_int(0, 12)];
                }
                else {
                    $call .= $letter[random_int(0, $letterLen)];
                }
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                break;
            case 4: // 2x2 call sign
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $letter[random_int(0, 12)];
                }
                else {
                    $call .= $letter[random_int(0, $letterLen)];
                }
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                break;
            case 5: // 2x3 call sign
            default:
                $call .= $prefix[random_int(0, $prefixLen)];
                if ($call == 'A') {
                    // Only A[A-L] are valid 2xn calls
                    $call .= $letter[random_int(0, 12)];
                }
                else {
                    $call .= $letter[random_int(0, $letterLen)];
                }
                $call .= random_int(0,9);
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                $call .= $letter[random_int(0, $letterLen)];
                break;
        }

        return $call;
    }
}
