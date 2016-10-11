<?php
namespace msfidelis\cryptoUtils\classes;

/**
 * CrytoClass
 * @email msfidelis01@gmail.com
 * @author Matheus Fidelis
 */
class Crypto {

    protected $digest_alg = 'sha256';
    protected $private_key_bits = '4096';
    protected $private_key_type = OPENSSL_KEYTYPE_RSA;

    public function getDigest_alg() {
        return $this->digest_alg;
    }
    public function getPrivate_key_bits() {
        return $this->private_key_bits;
    }
    public function getPrivate_key_type() {
        return $this->private_key_type;
    }
    public function setDigest_alg($digest_alg) {
        $this->digest_alg = $digest_alg;
        return $this;
    }
    public function setPrivate_key_bits($private_key_bits) {
        $this->private_key_bits = $private_key_bits;
        return $this;
    }
    public function setPrivate_key_type($private_key_type) {
        $this->private_key_type = $private_key_type;
        return $this;
    }
    /**
     * Gera uma chave aleatória
     * @param type $length tamanho da chave
     * @return type chave gerada
     */
    public static function randomKey($length = 12) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%&';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
