<html>
<body>
<canvas> </canvas>
<script type="application/processing">
size(200, 200);

//green
fill(0, 255, 0);

//draw the head
ellipse(100, 100, 150, 150);

//white
fill(255);

//draw the eyes
ellipse(75, 85, 30, 20);
ellipse(125, 85, 30, 20);

//black
fill(0);

//draw the pupils
ellipse(75, 85, 10, 10);
ellipse(125, 85, 10, 10);

//red
fill(255, 0, 0);

//draw the mouth
arc(100, 125, 80, 50, 0, 3.14);
line(60, 125, 140, 125);
</script>
</body>
</html>
