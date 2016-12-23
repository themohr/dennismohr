<?php
    class Calendar{
		public $monthName;
		public $nextMonth;
		public $prevMonth;
		public $firstDay;
		public $daysMo;
		
		function get_cal (){
		
			$calDefs = '';
			
			$calDefs .= $this->monthName;
			$calDefs .= $this->nextMonth;
			$calDefs .= $this->prevMonth;
			$calDefs .= $this->firstday;
			$calDefs .= $this->daysMonth;
		
		}
		
	}
?>