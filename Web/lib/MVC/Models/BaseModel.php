<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author Eko
 */
namespace lib\MVC\Models;
abstract class BaseModel {
        public static function getDB() {
            return new \PDO("mysqli:host=localhost;dbname=test",
                        "", "");
 }
 
        }
