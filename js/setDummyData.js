/*This is a js file for input dummy data to fill out the page
Actual purpose here is to fetch the data from database and fill the page since the database is not*/



//These conditions checks about page that user is currently in and sets the relevent data to the page

if(window.location.pathname=="html/signedInUser.html"){
    document.getElementById("username").innerHTML="Geethmaka";
}

if(window.location.pathname=="/html/complaints.html"){
    document.getElementById("username").innerHTML="Geethmaka";
    var noOfComplaints=3;
    for(i=1;i<=noOfComplaints;i++){
        document.getElementById("main").innerHTML+=
                                        `<h1>Complaint ${i}</h1>
                                        <h3>User ID:</h3>
                                        <h3>Item No:</h3>
                                        <h3>Complaint:</h3>
                                        <p>______________________________________________________________________________________________________</p>`;
    }
}

if(window.location.pathname=="/html/cart.html"){
    document.getElementById("username").innerHTML="Geethmaka"
    var noOfItems=3;
    for(i=1;i<=noOfItems;i++){
        document.getElementById("items").innerHTML+=`<div id="item">
                                                        <div>
                                                            <img src="../img/cart.png" width="100px" height="100px"> 
                                                        </div>
                                                        <div>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Name</span><br><br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Price</span><br><br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Quantity</span><br><br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>Remove</button>
                                                        </div>
                                                    </div>
                                                    <br>`;
    }
}

if(window.location.pathname=="/html/adminPanel.html"){
    var noOfRows=3;
    for(i=1;i<=noOfRows;i++){
        document.getElementById("table").innerHTML+=`<tr>
                                                        <td>
                                                            User ${i}<br>
                                                            Name:<br>
                                                            ID:<br>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <a href="banUser.html"><button>Ban User</button></a>
                                                        </td>
                                                    </tr>`
    }
}