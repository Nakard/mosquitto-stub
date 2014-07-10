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
     * @param $capath
     * @param $certfile
     * @param $keyfile
     * @param $password
     */
    public function setTlsCertificates($capath, $certfile, $keyfile, $password) {}
}