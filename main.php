<html>
<head>
    <title></title>
    <link rel="stylesheet" href="MainStyling.css">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
    <script>
var k=['cybercrime','murder','rape','robbery','eveteasing','assualt','harrasment','other'];
        var i=1;
function f1(){
    i=0;
    getLocation()
    
}
function f2(){
    i=1;
    getLocation()
}
function f3(){
    i=2;
    getLocation()
}function f4(){
    i=3;
    getLocation()
}function f5(){
    i=4;
    getLocation()
}function f6(){
    i=5;
    getLocation()
}function f7(){
    i=6;
    getLocation()
}function f8(){
    i=7;
    getLocation()
}
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latitude= position.coords.latitude; 
    var longitude=position.coords.longitude;
    var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.open("GET", "ajax.php?q=" + latitude +"&p=" +longitude +"&r=" +k[i], true);
        xmlhttp.send();
   alert("location sent to police4");
}
        
</script>
</head>
<body>
    <div class="site">
        <header>
            <div class="log">
            <div class="logo-container">
                <div class="logo"><img src="1.png">
                </div>
                <h1>DIGITIAL POLICE</h1>
            </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="contactus.html">contact us</a>
                    </li>
                    <li>
                        <a href="Logout.php">logout</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div >
        <ul class="box-grid">
            <li><button onclick="f1()">cybercrime</button></li>
            <li><button onclick="f2()">murder</button></li>
            <li><button onclick="f3()">rape</button></li>
            <li><button onclick="f4()">robbery</button></li>
            <li><button onclick="f5()">eveteasing</button></li>
            <li><button onclick="f6()">assualt</button></li>
            <li><button onclick="f7()">harrasment</button></li>
            <li><button onclick="f8()">other</button></li>    
        </ul>
        </div>
        <footer>
        <p>karma is a bomerang what you give you get</p>
        </footer>
    </div>
</body>
</html>