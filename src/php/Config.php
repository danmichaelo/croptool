<?php

namespace CropTool;

class Config
{
    protected $requiredKeys = ['hostname', 'basepath', 'consumerKey', 'consumerSecret', 'jpegtranPath', 'ddjvuPath', 'magickPath', 'gsPath', 'userAgent'];
    protected $data;

    public function __construct($config_file)
    {
        $this->data = parse_ini_file($config_file);
        if ($this->data === false) {
            throw new \RuntimeException('The config.ini file could not be read.');
        }
        foreach ($this->requiredKeys as $key) {
            if (!isset($this->data[$key])) {
                throw new \RuntimeException('Required key not found in config file: ' . $key);
            }
        }
    }

    public function get($key, $default=null)
    {
        return $this->has($key) ? $this->data[$key] : $default;
    }

    public function has($key)
    {
        return isset($this->data[$key]) && !empty($this->data[$key]);
    }

    /**
     * Get hostname without port
     */
    public function getCookieDomain()
    {
        return explode(':', $this->get('hostname'))[0];
    }
}
