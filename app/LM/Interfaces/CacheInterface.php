<?php 

namespace LM\Interfaces;

interface CacheInterface {

  /**
   * Get cache
   */
  public function get($key);

  /**
   * Set cache
   */
  public function put($key, $value, $minutes = null);

  /**
   * Check cache
   */
  public function has($key);

}