<?php
    namespace App\Http\Controllers;

    class MathController extends Controller {
        public function multiplication($number,$multiplier) {
            return $number*$multiplier;
        }

        public function multiplicationTable($number) {
            return view('multiplication_table',['number'=>$number]);
        }

        public function addition($number,$number2) {
            return $number+$number2;
        }
    }
