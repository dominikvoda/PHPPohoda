<?php
/**
 * Copyright (C) Dominik Voda - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Dominik Voda <d.voda94@gmail.com>
 *
 * Created by PhpStorm.
 * Date: 08.07.2016
 * Time: 0:19
 */

namespace PHPPohoda\AccountantUnit;


interface IAccountantUnit
{
    public function setCompany($company);
    
    public function setType($type);
    
    public function setIdentificationNumber($number);
    
    public function setYear($year);
    
    public function setDataFile($dataFile);
}