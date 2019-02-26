<?php

namespace web2hw;

class Request
{
    /**
     * Get request HTTP headers
     *
     * @param null $key
     * @return array|string
     */
    public function getHeaders($key = null)
    {
        $headers = getallheaders();
        $return = null;

        if ($key != null) {
            if (is_array($key)) {
                foreach ($key as $k) {
                    $value = isset($headers[$k]) ? $headers[$k] : "Key \"{$k}\" Not Found!";

                    $return[$k] = $value;
                }
            } else
                $return = isset($headers[$key]) ? $headers[$key] : "Key \"{$key}\" Not Found!";
        } else
            $return = $headers;

        return $return;
    }
}