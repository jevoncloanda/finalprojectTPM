var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
var n = new Date();
var y = n.getFullYear();
var m = n.getMonth();
var d = n.getDate();
var h = n.getDay();
document.getElementById("date").innerHTML = day[h] + ", " + d + " " + months[m] + " " + y;
