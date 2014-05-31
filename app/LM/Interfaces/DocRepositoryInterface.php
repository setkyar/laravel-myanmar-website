<?php

namespace LM\Interfaces;


interface DocRepositoryInterface
{

    /**
     * Getting Table of contents
     *
     * @param  array  $data
     * @return LM\User
     */
    public function getToc($fileName);

    /**
     * Getting specific topic
     *
     * @param  array  $data
     * @return LM\User
     */
    public function getContent($fileName);
}