<?php

namespace WPSentry\ScopedVendor\Http\Message\Encoding;

use WPSentry\ScopedVendor\Clue\StreamFilter as Filter;
use WPSentry\ScopedVendor\Psr\Http\Message\StreamInterface;
/**
 * Stream for decoding from gzip format (RFC 1952).
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
class GzipDecodeStream extends \WPSentry\ScopedVendor\Http\Message\Encoding\FilteredStream
{
    /**
     * @param int $level
     */
    public function __construct(\WPSentry\ScopedVendor\Psr\Http\Message\StreamInterface $stream, $level = -1)
    {
        if (!\extension_loaded('zlib')) {
            throw new \RuntimeException('The zlib extension must be enabled to use this stream');
        }
        parent::__construct($stream, ['window' => 31]);
        // @deprecated will be removed in 2.0
        $this->writeFilterCallback = \WPSentry\ScopedVendor\Clue\StreamFilter\fun($this->writeFilter(), ['window' => 31, 'level' => $level]);
    }
    /**
     * {@inheritdoc}
     */
    protected function readFilter()
    {
        return 'zlib.inflate';
    }
    /**
     * {@inheritdoc}
     */
    protected function writeFilter()
    {
        return 'zlib.deflate';
    }
}
