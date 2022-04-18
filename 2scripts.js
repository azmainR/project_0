//chart 1
var ctx = document.getElementById("myChart").getContext("2d");
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "line", // also try bar or other graph types

    // The data for our dataset
    data: {
        labels: [
            "Jun-16",
            "Jul-16",
            "Aug-16",
            "Sep-16",
            "Oct-16",
            "Nov-16",
            "Dec-16",
            "Jan-17",
            "Feb-17",
            "Mar-17",
            "Apr-17",
            "May-17",
        ],
        // Information about the dataset
        datasets: [
            {
                label: "Rainfall",
                backgroundColor: "lightblue",
                borderColor: "royalblue",
                data: [
                    26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 110.8,
                    142.6,
                ],
            },
        ],
    },

    // Chart Configuration options
    options: {
        layout: {
            padding: 15,
        },
        legend: {
            position: "bottom",
        },
        title: {
            display: true,
            text: "Precipitation in Toronto",
        },
        scales: {
            yAxes: [
                {
                    scaleLabel: {
                        display: true,
                        labelString: "Precipitation in mm",
                    },
                },
            ],
            xAxes: [
                {
                    scaleLabel: {
                        display: true,
                        labelString: "Month of the Year",
                    },
                },
            ],
        },
    },
});

//scroll up fixes the menu and header to the top
/* window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } 
  else {
    header.classList.remove("sticky");
  }
} */

//Fixed Log in

/* function validate() {
    var t1=document.getElementById("User1");
    var t2=document.getElementById("pwd");
    if (t1.value=="User1" && t2.value=="pwd") {
        location.href="2.php";
    }
    else if (t1.value=="User1" && t2.value!="pwd") {
             alert("Incorrect password. Try again..");
    }
    else if (t1.value!="User1" && t2.value=="pwd") {
             alert("Incorrect username. Try again..");
    }
    else {
          alert("Incorrect Username/Password. Try again..");
    }
} */

/* Page image slider */


//news-ticker

//scroll to top
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//datetime

var t = "jello";
var date = new Date();
//Day represents [0-6]-index of the week where 0->Sunday.
//Date represents the numeric day of the week or month (1-31).
var year = date.getFullYear();
var dt = date.getDate() + "/" + (date.getMonth() + 1) + "/" + year;
document.getElementById("datetime").innerHTML = dt;
document.getElementById("cur_year").innerHTML = year;
