<?php

namespace WPSentry\ScopedVendor\Http\Message\Authentication;

use WPSentry\ScopedVendor\Http\Message\Authentication;
use WPSentry\ScopedVendor\Psr\Http\Message\RequestInterface;
/**
 * Authenticate a PSR-7 Request using Basic Auth.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class BasicAuth implements \WPSentry\ScopedVendor\Http\Message\Authentication
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;
    /**
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    /**
     * {@inheritdoc}
     */
    public function authenticate(\WPSentry\ScopedVendor\Psr\Http\Message\RequestInterface $request)
    {
        $header = \sprintf('Basic %s', \base64_encode(\sprintf('%s:%s', $this->username, $this->password)));
        return $request->withHeader('Authorization', $header);
    }
}
