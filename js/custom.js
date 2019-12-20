var k = document.getElementById('predi');
var k1 = document.getElementById('priere');
var k2 = document.getElementById('conseil');
k.addEventListener('click', huit);
function huit() {
    document.location.href = "predications.php";
}
k1.addEventListener('click', huit1);
function huit1() {
    document.location.href = "priere.php";
}
k2.addEventListener('click', huit2);
function huit2() {
    document.location.href = "conseils.php";
}
$(document).ready(function () {
    $('.bga').click(function (event) {
       alert('Contactez nous pour en savoir plus');
    });
});
