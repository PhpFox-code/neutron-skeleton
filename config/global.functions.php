<?php

namespace {

    /**
     * Format a string using $number token
     *
     * <code>
     *  _sprintf('$1 post a $3 on $2\'s profile', ['Nam', 'Ngon', 'photo']);
     *  // return Nam post a photo on Ngon's profile.</i>
     * </code>
     *
     * @param string $message
     * @param array  $data
     *
     * @return string
     */
    function _sprintf($message, $data)
    {
        $replacements = [];
        foreach ($data as $index => $var) {
            $replacements['$' . ($index + 1)] = (string)$var;
        }
        return strtr($message, $replacements);
    }

    /**
     * Covert to ascii
     *
     * @param string $string
     *
     * @return string
     */
    function _asciify($string)
    {
        return $string;
    }

    /**
     * Convert string to lower case and split by dasherize
     *
     * @param string $string
     *
     * @return string
     */
    function _dasherize($string)
    {
        return $string;
    }

    /**
     * Convert a string to camel and down the first string.
     *
     * @param string $string
     *
     * @return string
     */
    function _camelize($string)
    {
        return $string;
    }

    /**
     * Convert a string to title case.
     *
     * @param string $string
     *
     * @return string
     */
    function _titleize($string)
    {
        return $string;
    }

    /**
     * Convert to path string
     *
     * @param $array
     *
     * @return string
     */
    function _pathize($array)
    {
        return preg_replace('//', PATH_SEPARATOR, implode('/', $array));
    }

    /**
     * @param $data
     *
     * @return string
     */
    function _keyize($data)
    {
        if (is_array($data)) {
            $data = implode('_', $data);
        }
        return preg_replace('/(\W)+/', '_', $data);
    }

    /**
     * @param array $data
     *
     * @return string
     */
    function _attrize($data)
    {
        if (!is_array($data)) {
            return (string)$data;
        }
        $result = [];
        foreach ($data as $name => $value) {
            $result[] = sprintf('%s="%s"', $name, $value);
        }
        return implode(' ', $result);
    }
}