<?php

use AB4UGLog\Mode;
use Illuminate\Database\Seeder;

class ModesTableSeeder extends Seeder
{
    /**
     * Seed the modes table with modes defined in the ADIF 3.0.8c spec.
     * http://www.adif.org.uk/308/ADIF_308.htm#Mode_Enumeration
     *
     * @return void
     */
    public function run()
    {
        $modes = [
            'AM', 'ARDOP', 'ATV', 'C4FM', 'CHIP', 'CLO', 'CONTESTI', 'CW', 'DIGITALVOICE',
            'DOMINO', 'DSTAR', 'FAX', 'FM', 'FSK441', 'FT8', 'HELL', 'ISCAT', 'JT4',
            'JT6M', 'JT9', 'JT44', 'JT65', 'MFSK', 'MSK144', 'MT63', 'OLIVIA',
            'OPERA', 'PAC', 'PAX', 'PKT', 'PSK', 'PSK2K', 'Q15', 'QRA64', 'ROS',
            'RTTY', 'RTTYM', 'SSB', 'SSTV', 'T10', 'THOR', 'THRB', 'TOR', 'V4', 'VOI',
            'WINMOR', 'WSPR', 'AMTORFEC', 'ASCI', 'CHIP64', 'CHIP128', 'DOMINOF',
            'FMHELL', 'FSK31', 'GTOR', 'HELL80', 'HFSK', 'JT4A', 'JT4B', 'JT4C',
            'JT4D', 'JT4E', 'JT4F', 'JT4G', 'JT65A', 'JT65B', 'JT65C', 'MFSK8',
            'MFSK16', 'PAC2', 'PAC3', 'PAX2', 'PCW', 'PSK10', 'PSK31', 'PSK63',
            'PSK63F', 'PSK125', 'PSKAM10', 'PSKAM31', 'PSKAM50', 'PSKFEC31',
            'PSKHELL', 'QPSK31', 'QPSK63', 'QPSK125', 'THRBX',
        ];

        foreach ($modes as $m) {
            $mode = Mode::firstOrNew(['mode' => $m]);
            if (! $mode->exists) {
                $mode->fill(['mode' => $m])->save();
            }
        }
    }
}
