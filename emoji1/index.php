<html>
    <head>
    </head>
    <body>
        <canvas id="cvs">
        </canvas>
        <script>
            
window.onload = function() {
   var cc = document.getElementById("cvs");
   var c = cc.getContext('2d');
   cc.width = window.innerWidth;
   cc.height = window.innerHeight;
   
   
   function Emoji() {
       this.drawCircle = function() {
           c.beginPath();
           c.arc(cc.width/2, cc.height/2, 250, 0, Math.PI*2, false);
           c.strokeStyle = 'black';
           c.fillStyle = 'yellow';
           c.stroke();
           c.fill();
           c.closePath();
       };
       this.drawEyes = function() {
           c.beginPath();
           c.arc((cc.width/2)-100, (cc.height/2)-100, 35, 0, Math.PI*2, false);
           c.arc((cc.width/2)+100, (cc.height/2)-100, 35, 0, Math.PI*2, false);
           c.fillStyle = 'black';
           c.fill();
           c.closePath();
       };
       this.drawMouth = function() {
           c.beginPath();
           c.arc(cc.width/2, cc.height/2-50, 200, 0.8*(Math.PI), 0.2*(Math.PI), true);
           c.strokeStyle = 'black';
           c.stroke();
           c.closePath();
       };
       this.drawTongue = function() {
           c.beginPath();
           c.fillStyle = 'red';
           c.fillRect(cc.width/2-35, cc.height/2+150, 75, 50);
           c.arc(cc.width/2+2, cc.height/2+199, 37.5, Math.PI, 0, true);
           c.fillStyle = 'red';
           c.fill();
           c.closePath();
           c.beginPath();
           c.moveTo(cc.width/2, cc.height/2+150);
           c.lineTo(cc.width/2, cc.height/2+200);
           c.strokeStyle = 'black';
           c.stroke();
           c.closePath();
       };
       this.draw = function() {
           this.drawCircle();
           this.drawEyes();
           this.drawMouth();
           this.drawTongue();
       };
   }
    
    var happy = new Emoji();
    happy.draw();
};
        </script>
    </body>
</html>
