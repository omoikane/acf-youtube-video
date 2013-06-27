<?php

/**
 * CodeExtractor class.
 *
 * @author Daniele De Nobili
 */
class CodeExtractor
{
    /**
     * @access public
     * @param $str
     * @throws \InvalidArgumentException
     * @return string
     */
    public static function extract($str)
    {
        if (strpos($str, 'http://') === 0) {
            $info_url = parse_url($str);

            switch ($info_url['host']) {
                case 'www.youtube.com':
                case 'youtube.com':
                    if (isset($info_url['query'])) {
                        $query = array();
                        parse_str($info_url['query'], $query);

                        if (isset($query['v'])) {
                            return $query['v'];
                        }
                    }

                    throw new \InvalidArgumentException(sprintf('Url "%s" is not valid!', $str));

                case 'youtu.be':
                    return trim($info_url['path'], '/');
            }
        }

        return $str;
    }
}
