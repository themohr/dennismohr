<div id="content" class="content section section-top">
    	<div class="container">
			<div class="row section-light">
                <div class="col-md-12">
                     <h1>Lab</h1>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                	<h2>MOM Board</h2>
                    <div class="drop drop-inline drop-30">
                    	<div id="dropItems">
                        	<h3>Drag an item onto the board!</h3>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-red.png" width="50" height="50" /></div>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-green.png" width="50" height="50" /></div>
                            <div draggable="true" class="drop-item"><img src="../../_images/lab/momboard/check-blue.png" width="50" height="50" /></div>
                        </div>
                    	 <div id="displayValues">
                            <h3>Factors</h3>
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
                    </div>
                    <div id="dropZone" class="drop drop-inline drop-area drop-70">
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
