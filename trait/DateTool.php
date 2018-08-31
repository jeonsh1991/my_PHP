<?php
trait DateTool {
    public function ymdString($date) {
        $dateString = $date -> format('Y년 m월 d일');
        return $dateString;
    }
    
    public function addYmdString($date, $days) {
        $date ->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

