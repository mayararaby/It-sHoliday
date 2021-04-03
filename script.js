function displayStatment() {
    document.getElementById("writeDate").style.display = "block";
    document.getElementById("msgWeekend").style.display = "block";
}
function celebration()
{
    document.getElementById("before").style.display = "initial";
    document.getElementById("after").style.display = "initial";
}
function weekend() {
    var day;
    switch (new Date().getDay()) {
    case 0:
        day = "No it's Sunday, You have to wait for 5 days";
        displayStatment();
        break;
    case 1:
        day = "No it's Monday, You have to wait for 4 days";
        displayStatment();
        break;
    case 2:
        day = "No it's Tuesday, You have to wait for 3 days";
        displayStatment();
        break;
    case 3:
        day = "No it's Wednesday, You have to wait for 2 days";
        displayStatment();
        break;
    case 4:
        day = "No it's Thursday, Tomorrow is your weekend";
        displayStatment();
        break;
    case 5:
        day = "Yahhh  It's Friday, Happy Weekend";
        displayStatment();
        celebration();
        break;
    case  6:
        day = "No it's Saturday, You have to wait for 6 days";
        displayStatment();
        break;
    }
    document.getElementById("writeDate").innerHTML = day;
}
