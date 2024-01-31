<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Sip extends TwiML {
    /**
     * Sip constructor.
     * 
     * @param url $sipUrl SIP URL
     * @param array $attributes Optional attributes
     */
    public function __construct($sipUrl, $attributes = array()) {
        parent::__construct('Sip', $sipUrl, $attributes);
    }

    /**
     * Add Username attribute.
     * 
     * @param string $username SIP Username
     * @return TwiML $this.
     */
    public function setUsername($username) {
        return $this->setAttribute('username', $username);
    }

    /**
     * Add Password attribute.
     * 
     * @param string $password SIP Password
     * @return TwiML $this.
     */
    public function setPassword($password) {
        return $this->setAttribute('password', $password);
    }

    /**
     * Add Url attribute.
     * 
     * @param url $url Action URL
     * @return TwiML $this.
     */
    public function setUrl($url) {
        return $this->setAttribute('url', $url);
    }

    /**
     * Add Method attribute.
     * 
     * @param httpMethod $method Action URL method
     * @return TwiML $this.
     */
    public function setMethod($method) {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add StatusCallbackEvent attribute.
     * 
     * @param sip:Enum:Event $statusCallbackEvent Status callback events
     * @return TwiML $this.
     */
    public function setStatusCallbackEvent($statusCallbackEvent) {
        return $this->setAttribute('statusCallbackEvent', $statusCallbackEvent);
    }

    /**
     * Add StatusCallback attribute.
     * 
     * @param url $statusCallback Status callback URL
     * @return TwiML $this.
     */
    public function setStatusCallback($statusCallback) {
        return $this->setAttribute('statusCallback', $statusCallback);
    }

    /**
     * Add StatusCallbackMethod attribute.
     * 
     * @param httpMethod $statusCallbackMethod Status callback URL method
     * @return TwiML $this.
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        return $this->setAttribute('statusCallbackMethod', $statusCallbackMethod);
    }
}