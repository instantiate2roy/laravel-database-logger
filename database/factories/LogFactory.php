<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            //
            'log_date' => Carbon::now()->toDateTimeString(),
            'log_type' => '',
            'log_url' => '',
            'log_message' => '',
            'log_cat1' => '',
            'log_cat2' => '',
            'log_cat3' => '',
            'log_cat4' => '',
            'log_cat5' => '',
            'log_cat6' => '',
            'log_cat7' => '',
            'log_cat8' => '',
            'log_cat9' => '',
            'log_cat10' => ''
        ];
    }

    public function error()
    {
        return $this->state(function () {
            return  [
                //
                'log_date' => Carbon::now()->toDateTimeString(),
                'log_type' => 'ERROR',
                'log_url' => '',
                'log_message' => '',
                'log_cat1' => '',
                'log_cat2' => '',
                'log_cat3' => '',
                'log_cat4' => '',
                'log_cat5' => '',
                'log_cat6' => '',
                'log_cat7' => '',
                'log_cat8' => '',
                'log_cat9' => '',
                'log_cat10' => ''
            ];
        });
    }

    public function warning()
    {
        return $this->state(function () {
            return  [
                //
                'log_date' => Carbon::now()->toDateTimeString(),
                'log_type' => 'WARNING',
                'log_url' => '',
                'log_message' => '',
                'log_cat1' => '',
                'log_cat2' => '',
                'log_cat3' => '',
                'log_cat4' => '',
                'log_cat5' => '',
                'log_cat6' => '',
                'log_cat7' => '',
                'log_cat8' => '',
                'log_cat9' => '',
                'log_cat10' => ''
            ];
        });
    }

    public function login()
    {
        return $this->state(function () {
            return  [
                //
                'log_date' => Carbon::now()->toDateTimeString(),
                'log_type' => 'LOGIN',
                'log_url' => '',
                'log_message' => '',
                'log_cat1' => '',
                'log_cat2' => '',
                'log_cat3' => '',
                'log_cat4' => '',
                'log_cat5' => '',
                'log_cat6' => '',
                'log_cat7' => '',
                'log_cat8' => '',
                'log_cat9' => '',
                'log_cat10' => '',
            ];
        });
    }
}
