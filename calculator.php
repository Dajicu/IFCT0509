<?php include "_header.php" ?>






<form name="calculator" >
	<div class="col-xs-1 col-md-2 col-md-offset-5 text-center">
		<div class>
			<input type="textfield" name="ans" value=""><br /><br />
		</div>	
			<div class="row">
				<div class="row">
					<input type="button" class="btn btn-danger col-xs-2" value="sen">
					<input type="button" class="btn btn-danger col-xs-2" value="cos" onClick="document.calculator.ans.value+='<?php cos() ?>'">
					<input type="button" class="btn btn-danger col-xs-2" value="tan">
					<input type="button" class="btn btn-danger col-xs-2" value=" π " onClick="document.calculator.ans.value+='3.14159265358979'">
					<input type="button" class="btn btn-danger col-xs-2" value=" ! ">
				</div>
				<div class="row">
					<input type="button" class="btn btn-danger col-xs-2" value="ln ">
					<input type="button" class="btn btn-danger col-xs-2" value="log">
					<input type="button" class="btn btn-danger col-xs-2" value=" e ">
					<input type="button" class="btn btn-danger col-xs-2" value=" ^ ">
					<input type="button" class="btn btn-danger col-xs-2" value=" √ ">
				</div>
				<div class="row">
					<input type="button" class="btn btn-danger col-xs-2" value=" X ">
					<input type="button" class="btn btn-danger col-xs-2" value=" Y ">
					<input type="button" class="btn btn-danger col-xs-2" value=" % ">
					<input type="button" class="btn btn-danger col-xs-2" value=" ¡ ">
					<input type="button" class="btn btn-danger col-xs-2" value="() ">
				</div>
			</div>
			<br />

			<div class="row">
				<div class="row">
					<input type="button" class="btn btn-warning col-xs-2" value=" 7 " onClick="document.calculator.ans.value+='7'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 8 " onClick="document.calculator.ans.value+='8'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 9 " onClick="document.calculator.ans.value+='9'">
					<input type="button" class="btn btn-warning col-xs-2" value=" / " onClick="document.calculator.ans.value+='/'">
					<input type="button" class="btn btn-warning col-xs-2" value=" ( " onClick="document.calculator.ans.value+='('">
				</div>
				<div class="row">
					<input type="button" class="btn btn-warning col-xs-2" value=" 4 " onClick="document.calculator.ans.value+='4'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 5 " onClick="document.calculator.ans.value+='5'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 6 " onClick="document.calculator.ans.value+='6'">
					<input type="button" class="btn btn-warning col-xs-2" value=" * " onClick="document.calculator.ans.value+='*'">
					<input type="button" class="btn btn-warning col-xs-2" value=" ) " onClick="document.calculator.ans.value+=')'">
				</div>
				<div class="row">
					<input type="button" class="btn btn-warning col-xs-2" value=" 1 " onClick="document.calculator.ans.value+='1'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 2 " onClick="document.calculator.ans.value+='2'">
					<input type="button" class="btn btn-warning col-xs-2" value=" 3 " onClick="document.calculator.ans.value+='3'">
					<input type="button" class="btn btn-warning col-xs-2" value=" - " onClick="document.calculator.ans.value+='-'">
					<input type="reset" class="btn btn-warning col-xs-2" value=" C " onClick="document.calculator.ans.value+='reset'">
				</div>
				<div class="row">
					<input type="button" class="btn btn-warning col-xs-4" value=" 0 " onClick="document.calculator.ans.value+='0'">
					<input type="button" class="btn btn-warning col-xs-2" value=" . " onClick="document.calculator.ans.value+='.'">
					<input type="button" class="btn btn-warning col-xs-2" value=" + " onClick="document.calculator.ans.value+='+'">
					<input type="button" class="btn btn-warning col-xs-2" value=" = " onClick="document.calculator.ans.value=eval(document.calculator.ans.value)">
				</div>
			</div>	




		</div>
	</div>
</form>
<?php include "_footer.php" ?>	