<?php


// helper untuk sistem 
function coreapps($name_val = 'SITE_NAME')
{
    $id = strtoupper($name_val);
    # code...
    $CI = &get_instance();
    $data_aplikasi = $CI->db->query("SELECT val FROM sys_config WHERE name_val ='$id'")->row();
    if ($data_aplikasi != []) {
        return $data_aplikasi->val;
    } else {
        return "";
    }
}
// MULAI DUMP 
function dump($var, $return = FALSE)
{
    $output = "<pre class=\"dump\">" . _dump($var, 0) . "</pre>\n";

    if (!$return) {
        $trace = debug_backtrace();
        $i = isset($trace[1]['class']) && $trace[1]['class'] === __CLASS__ ? 1 : 0;
        if (isset($trace[$i]['file'], $trace[$i]['line'])) {
            $output = substr_replace($output, ' <small>' . htmlspecialchars("in file {$trace[$i]['file']} on line {$trace[$i]['line']}", ENT_NOQUOTES) . '</small>', -8, 0);
        }
    }

    if ($return) {
        return $output;
    } else {
        echo $output;
        return $var;
    }
}


function _dump(&$var, $level)
{
    $maxDepth = 6;
    $maxLen = 250;

    $tableUtf = $tableBin = array();
    $reBinary = '#[^\x09\x0A\x0D\x20-\x7E\xA0-\x{10FFFF}]#u';
    if ($tableUtf === NULL) {
        foreach (range("\x00", "\xFF") as $ch) {
            if (ord($ch) < 32 && strpos("\r\n\t", $ch) === FALSE)
                $tableUtf[$ch] = $tableBin[$ch] = '\\x' . str_pad(dechex(ord($ch)), 2, '0', STR_PAD_LEFT);
            elseif (ord($ch) < 127)
                $tableUtf[$ch] = $tableBin[$ch] = $ch;
            else {
                $tableUtf[$ch] = $ch;
                $tableBin[$ch] = '\\x' . dechex(ord($ch));
            }
        }
        $tableBin["\\"] = '\\\\';
        $tableBin["\r"] = '\\r';
        $tableBin["\n"] = '\\n';
        $tableBin["\t"] = '\\t';
        $tableUtf['\\x'] = $tableBin['\\x'] = '\\\\x';
    }

    if (is_bool($var)) {
        return ($var ? 'TRUE' : 'FALSE') . "\n";
    } elseif ($var === NULL) {
        return "NULL\n";
    } elseif (is_int($var)) {
        return "$var\n";
    } elseif (is_float($var)) {
        $var = (string) $var;
        if (strpos($var, '.') === FALSE)
            $var .= '.0';
        return "$var\n";
    } elseif (is_string($var)) {
        if ($maxLen && strlen($var) > $maxLen) {
            $s = htmlSpecialChars(substr($var, 0, $maxLen), ENT_NOQUOTES) . ' ... ';
        } else {
            $s = htmlSpecialChars($var, ENT_NOQUOTES);
        }
        $s = strtr($s, preg_match($reBinary, $s) || preg_last_error() ? $tableBin : $tableUtf);
        $len = strlen($var);
        return "\"$s\"" . ($len > 1 ? " ($len)" : "") . "\n";
    } elseif (is_array($var)) {
        $s = "<span>array</span>(" . count($var) . ") ";
        $space = str_repeat($space1 = '   ', $level);
        $brackets = range(0, count($var) - 1) === array_keys($var) ? "[]" : "{}";

        static $marker;
        if ($marker === NULL)
            $marker = uniqid("\x00", TRUE);
        if (empty($var)) {
        } elseif (isset($var[$marker])) {
            $brackets = $var[$marker];
            $s .= "$brackets[0] *RECURSION* $brackets[1]";
        } elseif ($level < $maxDepth || !$maxDepth) {
            $s .= "<code>$brackets[0]\n";
            $var[$marker] = $brackets;
            foreach ($var as $k => &$v) {
                if ($k === $marker)
                    continue;
                $k = is_int($k) ? $k : '"' . strtr($k, preg_match($reBinary, $k) || preg_last_error() ? $tableBin : $tableUtf) . '"';
                $s .= "$space$space1$k => " . _dump($v, $level + 1);
            }
            unset($var[$marker]);
            $s .= "$space$brackets[1]</code>";
        } else {
            $s .= "$brackets[0] ... $brackets[1]";
        }
        return $s . "\n";
    } elseif (is_object($var)) {
        $arr = (array) $var;
        $s = "<span>" . get_class($var) . "</span>(" . count($arr) . ") ";
        $space = str_repeat($space1 = '   ', $level);

        static $list = array();
        if (empty($arr)) {
        } elseif (in_array($var, $list, TRUE)) {
            $s .= "{ *RECURSION* }";
        } elseif ($level < $maxDepth || !$maxDepth) {
            $s .= "<code>{\n";
            $list[] = $var;
            foreach ($arr as $k => &$v) {
                $m = '';
                if ($k[0] === "\x00") {
                    $m = $k[1] === '*' ? ' <span>protected</span>' : ' <span>private</span>';
                    $k = substr($k, strrpos($k, "\x00") + 1);
                }
                $k = strtr($k, preg_match($reBinary, $k) || preg_last_error() ? $tableBin : $tableUtf);
                $s .= "$space$space1\"$k\"$m => " . _dump($v, $level + 1);
            }
            array_pop($list);
            $s .= "$space}</code>";
        } else {
            $s .= "{ ... }";
        }
        return $s . "\n";
    } elseif (is_resource($var)) {
        return "<span>" . get_resource_type($var) . " resource</span>\n";
    } else {
        return "<span>TPYE Tidak di kenali</span>\n";
    }
}
// END DUMP 

// helper Penjumlahan Kubikasi
function hitungPenjualan($awal, $akhir)
{
    $kubikasi = $akhir - $awal;

    $penjualan_1 = abs($kubikasi);
    $penjualan_2 = abs(10 - $penjualan_1);
    $penjualan_3 = abs(10 - $penjualan_2);
    $penjualan_4 = abs(10 - $penjualan_3);

    $data = [];

    if ($penjualan_1 <= 10) {

        $data = [
            'Informasi' => 'Penjualan 1 - 10',
            'penjualan1' => $penjualan_1,
            'penjualan2' => 0,
            'penjualan3' => 0,
            'penjualan4' => 0,
        ];
    } elseif ($penjualan_2 <= 10) {
        $data = [
            'Informasi' => 'Penjualan 11 - 20',
            'penjualan1' => $penjualan_1 - $penjualan_2,
            'penjualan2' => $penjualan_2,
            'penjualan3' => 0,
            'penjualan4' => 0,
        ];
    } elseif ($penjualan_3 <= 10) {
        $data = [
            'Informasi' => 'Penjualan 21 - 30',
            'penjualan1' => $penjualan_1 - $penjualan_2,
            'penjualan2' => $penjualan_1 - $penjualan_2,
            'penjualan3' => $penjualan_3,
            'penjualan4' => 0,
        ];
    } else {
        $data = [
            'Informasi' => 'Penjualan di atas 30',
            'penjualan1' => $penjualan_1 - $penjualan_2,
            'penjualan2' => $penjualan_1 - $penjualan_2,
            'penjualan3' => $penjualan_1 - $penjualan_2,
            'penjualan4' => $penjualan_4,
        ];
    }
    return $data;
    # code...
}


// HELPER WAKTU 

if (!function_exists('tglindo')) {
    function tglindo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );
        $pecahkan = explode('-', $tanggal);
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}

if (!function_exists('time2date')) {
    function time2date($time)
    {
        $output = date("Y-m-d", $time);
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $output);
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}



/**
 * Terbilang Helper
 *
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author	Gede Lumbung
 * @link	http://gedelumbung.com
 */

if (!function_exists('baca_anggak')) {
    function baca_anggak($number)
    {
        $before_comma = trim(to_word($number));
        $after_comma = trim(comma($number));
        return ucwords($results = $before_comma  . $after_comma);
    }

    function to_word($number)
    {
        $words = "";
        $arr_number = array(
            "",
            "satu",
            "dua",
            "tiga",
            "empat",
            "lima",
            "enam",
            "tujuh",
            "delapan",
            "sembilan",
            "sepuluh",
            "sebelas"
        );

        if ($number < 12) {
            $words = " " . $arr_number[$number];
        } else if ($number < 20) {
            $words = to_word($number - 10) . " belas";
        } else if ($number < 100) {
            $words = to_word($number / 10) . " puluh " . to_word($number % 10);
        } else if ($number < 200) {
            $words = "seratus " . to_word($number - 100);
        } else if ($number < 1000) {
            $words = to_word($number / 100) . " ratus " . to_word($number % 100);
        } else if ($number < 2000) {
            $words = "seribu " . to_word($number - 1000);
        } else if ($number < 1000000) {
            $words = to_word($number / 1000) . " ribu " . to_word($number % 1000);
        } else if ($number < 1000000000) {
            $words = to_word($number / 1000000) . " juta " . to_word($number % 1000000);
        } else {
            $words = "undefined";
        }
        return $words;
    }

    function comma($number)
    {
        $after_comma = stristr($number, ',');
        $arr_number = array(
            "nol",
            "satu",
            "dua",
            "tiga",
            "empat",
            "lima",
            "enam",
            "tujuh",
            "delapan",
            "sembilan"
        );

        $results = "";
        $length = strlen($after_comma);
        $i = 1;
        while ($i < $length) {
            $get = substr($after_comma, $i, 1);
            $results .= " " . $arr_number[$get];
            $i++;
        }
        return $results;
    }
}
