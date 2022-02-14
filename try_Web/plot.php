<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои файлы</title>
</head>
<body>
<canvas width="1000" height="1000" id='canvas'></canvas>
<button onclick="makePlot(x,y)">Построить</button>
<script type="text/javascript">
var canvas=document.getElementById('canvas')
var ctx=canvas.getContext('2d')
ctx.fillStyle='green'
ctx.lineWidth=4.0
ctx.beginPath()
ctx.moveTo(50, 50)
ctx.lineTo(50, canvas.height-50)
ctx.lineTo(canvas.width-50, canvas.height-50)
ctx.stroke()
var x=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38]
var y=[1,4,4,4,5,32,42,1,3,4,5,7,7,4,2,42,55,1,23,73,4,24,4,21,4,54,5,6,6,7,47,25,5,36,7,87,59,22]
var scale=18
y=y.map(el=>Math.floor(Math.random()*50))
y=y.map(el=>((el>25) ? el-10 : el+10))
//alert(134)

function makePlot(arg,val)
{
    ctx.clearRect(0,0,canvas.width, canvas.height)
    ctx.beginPath()
    ctx.moveTo(50, 50)
    ctx.lineTo(50, canvas.height-50)
    ctx.lineTo(canvas.width-50, canvas.height-50)
    ctx.stroke()
    val=val.map(el=>Math.floor(Math.random()*50))
	if(arg.length!=val.length)
	{
	document.write(1)
		return ;
		}
	ctx.moveTo(50+arg[0]*scale,-50+canvas.height-val[0]*scale)
	for(let i=1;i<arg.length;++i)
	{
		ctx.lineTo(50+arg[i]*scale,-50+canvas.height-val[i]*scale)
	}
	ctx.stroke()
}
ctx.lineWidth=2.0
//makePlot(x,y)
//makePlot(x1,y1)

</script>
</body>
</html>
