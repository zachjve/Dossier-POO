<?php

namespace Interfaces;

interface PageInterface {
    public function list();
    public function detail($id);
}