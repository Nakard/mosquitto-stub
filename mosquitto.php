<?php
/**
 * mosquitto.php
 *
 * Creation date: 2014-07-10
 * Creation time: 17:00
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Mosquitto;

class Client
{
    /**
     * Creates a new Client instance.
     *
     * @param int|null  $id
     * @param bool      $clean_session
     */
    public function __construct($id = null, $clean_session = false) {}

    /**
     * Set the username and password to use on connecting to the broker. Must be called before connect().
     *
     * @param string    $username
     * @param string    $password
     */
    public function setCredentials($username, $password) {}

    /**
     * Configure the client for certificate based SSL/TLS support. Must be called before connect(). Cannot be used in
     * conjunction with setTlsPSK().
     * <br/><br/>
     * Define the Certificate Authority certificates to be trusted (ie. the server certificate must be signed with
     * one of these certificates) using cafile. If the server you are connecting to requires clients to provide a
     * certificate, define certfile and keyfile with your client certificate and private key. If your private key is
     * encrypted, provide the password as the fourth parameter, or you will have to enter the password at the command
     * line.
     *
     * @param string $capath Path to the PEM encoded trusted CA certificate files, or to a directory containing them
     * @param string $certfile Path to the PEM encoded certificate file for this client. Optional.
     * @param string $keyfile Path to a file containing the PEM encoded private key for this client. Required if certfile is set.
     * @param string $password The password for the keyfile, if it is encrypted. If null, the password will be asked for on the command line.
     */
    public function setTlsCertificates($capath, $certfile, $keyfile, $password) {}

    /**
     * @param boolean $value If set to false, the default, certificate hostname checking is performed. If set to true,
     * no hostname checking is performed and the connection is insecure.
     */
    public function setTlsInsecure($value) {}

    /**
     * Set advanced SSL/TLS options. Must be called before connect().
     *
     * @param int    $certReqs   Whether or not to verify the server. Can be Mosquitto\Client::SSL_VERIFY_NONE,
     *                           to disable certificate verification, or Mosquitto\Client::SSL_VERIFY_PEER (the
     *                           default), to verify the server certificate.
     * @param string $tlsVersion The TLS version to use. If NULL, a default is used. The default value depends on the
     *                           version of OpenSSL the library was compiled against. Available options on OpenSSL >=
     *                           1.0.1 are 'tlsv1.2', 'tlsv1.1' and 'tlsv1'.
     * @param string $cipers
     */
    public function setTlsOptions($certReqs, $tlsVersion, $cipers) {}
}