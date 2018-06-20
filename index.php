<html>

<head>

	<title> Convertor </title>
	
	<style type="text/css">
	
	body
	{
		background-color: #333366;
	}
	div.bg0
	{
		background-color: #CCFFFF;
		padding: 50px;
		border-radius: 20px;
	}
	div.bg
	{
		background-color: #333366;
		padding: 50px;
		border-radius: 30px;
		color: #CCFFFF;
	}

	</style>
</head>



<body>

<div class="col-sm-12 bg0">
<div class="col-sm-12 bg">
	<center>		
		<script type="text/javascript">
			function convertor()
			{
				af.innerHTML = "";	
				intro=eval('form_n.luare_n.value');
				if ((intro > 3999) & (intro < 0) & (intro!=""))
					var n=0;
				else
				{
					var n=parseInt(intro);
					var cifre=0;
					var r,i,j;
					var inversa=parseInt(0);
					while(n!=0)
					{
						r=parseInt(n%10);
						n=n/10;
						n=parseInt(n);
						cifre++;
						inversa=parseInt(inversa)*10+r;
					}
					
					af.innerHTML = af.innerHTML+"Reprezentarea in cifre romane : <br><br>";
					
					var n=parseInt(inversa); // inversa numarului urmeaza sa fie impartita pe rand, ca resturile impartirii sa fie convertite in cifre romane
					
					if(cifre==4) // contine si mia
					{
						// partea mia
						r=parseInt(n%10);
						
						for(i=0;i<r;i++)
							af.innerHTML = af.innerHTML+"M";
						
						n=n/10;
						n=parseInt(n);
					}
					if(cifre>=3) // contine si suta
					{
						// partea suta
						r=parseInt(n%10);
						
						if(r>0 && r<4)
							for(i=0;i<r;i++)
								af.innerHTML = af.innerHTML+"C";
						if(r==4)
							af.innerHTML = af.innerHTML+"CD";
						if(r==5)
							af.innerHTML = af.innerHTML+"D";
						if(r>5 && r<9)
						{
							af.innerHTML = af.innerHTML+"D";
							for(i=0;i<r-5;i++)
								af.innerHTML = af.innerHTML+"C";
						}
						if(r==9)
							af.innerHTML = af.innerHTML+"CM";
						
						n=n/10;
						n=parseInt(n);
					}
					if(cifre>=2) // contine partea zecea
					{
						// partea zecea
						r=parseInt(n%10);
						if(r>0 && r<4)
							for(i=0;i<r;i++)
								af.innerHTML = af.innerHTML+"X";
						if(r==4)
							af.innerHTML = af.innerHTML+"XL";
						if(r==5)
							af.innerHTML = af.innerHTML+"L";
						if(r>5 && r<9)
						{
							af.innerHTML = af.innerHTML+"L";
							for(i=0;i<r-5;i++)
								af.innerHTML = af.innerHTML+"X";
						}
						if(r==9)
							af.innerHTML = af.innerHTML+"XC";
						n=n/10;
						n=parseInt(n);
					}
					if(cifre>=1) // contine doar unitate
					{
						// partea unitate
						r=parseInt(n%10);
						if(r>0 && r<4)
							for(i=0;i<r;i++)
								af.innerHTML = af.innerHTML+"I";
						if(r==4)
							af.innerHTML = af.innerHTML+"IV";
						if(r==5)
							af.innerHTML = af.innerHTML+"V";
						if(r>5 && r<9)
						{
							af.innerHTML = af.innerHTML+"V";
							for(i=0;i<r-5;i++)
								af.innerHTML = af.innerHTML+"I";
						}
						if(r==9)
							af.innerHTML = af.innerHTML+"IX";
						n=n/10;
						n=parseInt(n);
					}
				}
			}
		</script>
		<FORM name="form_n">
			<script>
				document.write("<p> <b> <?php echo "Dati numarul :"; ?><INPUT type=\"number\" name=\"luare_n\" size=30 value=\"0\"> </b> </p> <BR>")
				document.write("<INPUT type=\"button\" value=\"Afisare cu cifre romane\" onClick=\"convertor()\"> <br>")
			</script>
		</FORM>
		<div id="af">
			<script>
				convertor()
			</script>
		</div>		
	</center>  
</div> </div>
	
</body>
</html>