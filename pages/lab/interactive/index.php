<div id="content" class="content section section-top">
    	<div class="container">
			<div class="row">
                <div class="col-md-12">
                     <h1>Labs</h1>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                	<h2>Interactive M.O.M. Board</h2>
                    <p>The interactive Mathematical Object Manipulation board allows for young learners to visualize multiplication facts in rows and columns.
                    In order to use the board, simply drag an object over the grid and then put multiplication facts into the row and column fields.</p>
                    <div class="drop">
                    	 <div id="displayValues">
                            <h3>Factorials</h3>
                            <form name="factorials" id="dropValues" action="" method="get" class="form-items">
                                <div class="form-item">
                                    <label for="rows">Number of Rows</label> <input id="rows" type="text" value="" />
                                </div>
                                <div class="form-item">
                                    <label for="columns">Number of Columns</label> <input id="columns" type="text" value="" />
                                </div>
                            </form>
                            <div id="computation"></div>
                        </div>
                        <div id="dropItems">
                        	<h3>Drag one of the objects over the grid</h3>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-red.png" width="50" height="50" /></div>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-green.png" width="50" height="50" /></div>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-blue.png" width="50" height="50" /></div>
                        </div>
                    </div>
                    <div id="dropZone" class="drop drop-area">
                        <table id="momApp" class="mb_table">
                        	<tbody>
                        <?php
                            
                            for($i = 1; $i <= 11; $i++) {
                                echo "<tr>";
                                for($j = 1; $j <= 11; $j++) {
									echo '<td class="mb_table-item">';
									if ($j % 11 == 1) {
										echo $i - 1;
									}
									if ($i % 11 == 1) {
										if($j - 1 != 0){
											echo $j - 1;
										}
									}
									echo '</td>';
                                    if($j % 11 == 0) {
                                        echo "</tr>";	
                                    }
                                }
                                echo "</tr>";
                            }
                            
                        ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="application/javascript" src="../../_js/site/dragdrop-html5.js"></script>
